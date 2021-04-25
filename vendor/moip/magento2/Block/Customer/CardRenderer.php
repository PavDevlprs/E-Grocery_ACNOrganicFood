<?php
/**
 * Copyright © Wirecard Brasil. All rights reserved.
 *
 * @author    Bruno Elisei <brunoelisei@o2ti.com>
 * See COPYING.txt for license details.
 */

namespace Moip\Magento2\Block\Customer;

use Magento\Vault\Api\Data\PaymentTokenInterface;
use Magento\Vault\Block\AbstractCardRenderer;
use Moip\Magento2\Model\Ui\ConfigProviderBase;

class CardRenderer extends AbstractCardRenderer
{
    /**
     * Can render specified token.
     *
     * @param PaymentTokenInterface $token
     *
     * @return bool
     */
    public function canRender(PaymentTokenInterface $token): bool
    {
        return $token->getPaymentMethodCode() === ConfigProviderBase::METHOD_CODE_CC;
    }

    /**
     * @return string
     */
    public function getNumberLast4Digits(): string
    {
        return $this->getTokenDetails()['cc_last4'];
    }

    /**
     * @return string
     */
    public function getExpDate(): string
    {
        return $this->getTokenDetails()['cc_exp_month'].'/'.$this->getTokenDetails()['cc_exp_year'];
    }

    /**
     * @return string
     */
    public function getIconUrl(): string
    {
        return $this->getIconForType($this->getTokenDetails()['cc_type'])['url'];
    }

    /**
     * @return int
     */
    public function getIconHeight(): int
    {
        return $this->getIconForType($this->getTokenDetails()['cc_type'])['height'];
    }

    /**
     * @return int
     */
    public function getIconWidth(): int
    {
        return $this->getIconForType($this->getTokenDetails()['cc_type'])['width'];
    }
}
