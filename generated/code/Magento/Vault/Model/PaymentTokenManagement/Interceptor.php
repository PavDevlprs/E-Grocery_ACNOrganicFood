<?php
namespace Magento\Vault\Model\PaymentTokenManagement;

/**
 * Interceptor class for @see \Magento\Vault\Model\PaymentTokenManagement
 */
class Interceptor extends \Magento\Vault\Model\PaymentTokenManagement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Vault\Api\PaymentTokenRepositoryInterface $repository, \Magento\Vault\Model\ResourceModel\PaymentToken $paymentTokenResourceModel, \Magento\Vault\Model\PaymentTokenFactory $paymentTokenFactory, \Magento\Framework\Api\FilterBuilder $filterBuilder, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Vault\Api\Data\PaymentTokenSearchResultsInterfaceFactory $searchResultsFactory, \Magento\Framework\Encryption\EncryptorInterface $encryptor, \Magento\Framework\Intl\DateTimeFactory $dateTimeFactory)
    {
        $this->___init();
        parent::__construct($repository, $paymentTokenResourceModel, $paymentTokenFactory, $filterBuilder, $searchCriteriaBuilder, $searchResultsFactory, $encryptor, $dateTimeFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function saveTokenWithPaymentLink(\Magento\Vault\Api\Data\PaymentTokenInterface $token, \Magento\Sales\Api\Data\OrderPaymentInterface $payment)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveTokenWithPaymentLink');
        return $pluginInfo ? $this->___callPlugins('saveTokenWithPaymentLink', func_get_args(), $pluginInfo) : parent::saveTokenWithPaymentLink($token, $payment);
    }
}
