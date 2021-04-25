<?php
/**
 * Copyright © Wirecard Brasil. All rights reserved.
 *
 * @author    Bruno Elisei <brunoelisei@o2ti.com>
 * See COPYING.txt for license details.
 */

namespace Moip\Magento2\Gateway\Response;

use Magento\Framework\ObjectManagerInterface;
use Magento\Payment\Gateway\Data\PaymentDataObjectInterface;
use Magento\Payment\Gateway\Response\HandlerInterface;
use Magento\Payment\Model\InfoInterface;
use Magento\Sales\Api\Data\OrderPaymentExtensionInterface;
use Magento\Sales\Api\Data\OrderPaymentExtensionInterfaceFactory;
use Magento\Vault\Api\Data\PaymentTokenFactoryInterface;
use Magento\Vault\Api\Data\PaymentTokenInterface;
use Magento\Vault\Api\Data\PaymentTokenInterfaceFactory;

/**
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class VaultDetailsHandler implements HandlerInterface
{
    /**
     * @var PaymentTokenInterfaceFactory
     */
    protected $paymentTokenFactory;

    /**
     * @var OrderPaymentExtensionInterfaceFactory
     */
    protected $paymentExtensionFactory;

    /**
     * @var SubjectReader
     */
    protected $subjectReader;

    /**
     * @var ObjectManagerInterface
     */
    private $objectManager;

    /**
     * @var Json
     */
    private $serializer;

    /**
     * AccountPaymentTokenFactory constructor.
     *
     * @param ObjectManagerInterface       $objectManager
     * @param PaymentTokenFactoryInterface $paymentTokenFactory
     */
    public function __construct(
        ObjectManagerInterface $objectManager,
        OrderPaymentExtensionInterfaceFactory $paymentExtensionFactory,
        PaymentTokenFactoryInterface $paymentTokenFactory = null
    ) {
        if ($paymentTokenFactory === null) {
            $paymentTokenFactory = $objectManager->get(PaymentTokenFactoryInterface::class);
        }

        $this->objectManager = $objectManager;
        $this->paymentExtensionFactory = $paymentExtensionFactory;
        $this->paymentTokenFactory = $paymentTokenFactory;
    }

    /**
     * @inheritdoc
     */
    public function handle(array $handlingSubject, array $response)
    {
        if (!isset($handlingSubject['payment'])
            || !$handlingSubject['payment'] instanceof PaymentDataObjectInterface
        ) {
            throw new \InvalidArgumentException('Payment data object should be provided');
        }

        $paymentDO = $handlingSubject['payment'];

        $payment = $paymentDO->getPayment();

        if ($payment->getMethod() === 'moip_magento2_cc') {
            $paymentToken = $this->getVaultPaymentToken($response, $payment);
            if (null !== $paymentToken) {
                $extensionAttributes = $this->getExtensionAttributes($payment);
                $extensionAttributes->setVaultPaymentToken($paymentToken);
            }
            $payment->unsAdditionalInformation('cc_hash');
            $payment->unsAdditionalInformation('cc_exp_month');
            $payment->unsAdditionalInformation('cc_exp_year');
        }
    }

    /**
     * Get vault payment token entity.
     *
     * @param $response
     *
     * @return PaymentTokenInterface|null
     */
    protected function getVaultPaymentToken($response, $payment)
    {
        $paymentAddtional = $response['fundingInstrument'];
        $ccExpYear = $payment->getAdditionalInformation('cc_exp_year');
        $ccExpMonth = $payment->getAdditionalInformation('cc_exp_month');
        $payment->unsAdditionalInformation('cc_exp_year');
        $payment->unsAdditionalInformation('cc_exp_month');

        if (isset($paymentAddtional['creditCard'])) {
            if (isset($paymentAddtional['creditCard']['id'])) {
                $ccId = $paymentAddtional['creditCard']['id'];
                $ccType = $this->mapperCcType($paymentAddtional['creditCard']['brand']);
                $ccLast4 = $paymentAddtional['creditCard']['last4'];
            }
        } else {
            throw new \InvalidArgumentException('Payment data object should be provided');
        }

        if (empty($ccId)) {
            return null;
        }

        $paymentToken = $this->paymentTokenFactory->create();
        $paymentToken->setGatewayToken($ccId);
        $paymentToken->setExpiresAt(strtotime('+1 year'));
        $paymentToken->setType(PaymentTokenFactoryInterface::TOKEN_TYPE_CREDIT_CARD);
        // phpcs:ignore Generic.Files.LineLength
        $details = ['cc_last4' => $ccLast4, 'cc_exp_year' => $ccExpYear, 'cc_exp_month' => $ccExpMonth, 'cc_type' => $ccType];
        $paymentToken->setTokenDetails(json_encode($details));

        return $paymentToken;
    }

    /**
     * Get payment extension attributes.
     *
     * @param InfoInterface $payment
     *
     * @return OrderPaymentExtensionInterface
     */
    private function getExtensionAttributes(InfoInterface $payment): OrderPaymentExtensionInterface
    {
        $extensionAttributes = $payment->getExtensionAttributes();
        if (null === $extensionAttributes) {
            $extensionAttributes = $this->paymentExtensionFactory->create();
            $payment->setExtensionAttributes($extensionAttributes);
        }

        return $extensionAttributes;
    }

    /**
     * Get Type Cc by response payment.
     *
     * @param string $type
     */
    public function mapperCcType($type)
    {
        if ($type === 'MASTERCARD') {
            return 'MC';
        } elseif ($type === 'VISA') {
            return 'VI';
        } elseif ($type === 'AMEX') {
            return 'AE';
        } elseif ($type === 'DINERS') {
            return 'DN';
        } elseif ($type === 'HIPERCARD') {
            return 'HC';
        } elseif ($type === 'HIPER') {
            return 'HI';
        } elseif ($type === 'ELO') {
            return 'ELO';
        }
    }
}
