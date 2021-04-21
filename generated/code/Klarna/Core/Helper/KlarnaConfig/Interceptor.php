<?php
namespace Klarna\Core\Helper\KlarnaConfig;

/**
 * Interceptor class for @see \Klarna\Core\Helper\KlarnaConfig
 */
class Interceptor extends \Klarna\Core\Helper\KlarnaConfig implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Helper\Context $context, \Magento\Framework\Config\DataInterface $config, \Klarna\Core\Api\VersionInterfaceFactory $versionFactory, \Magento\Framework\DataObjectFactory $dataObjectFactory, $eventPrefix = 'kp')
    {
        $this->___init();
        parent::__construct($context, $config, $versionFactory, $dataObjectFactory, $eventPrefix);
    }

    /**
     * {@inheritdoc}
     */
    public function getCheckoutType($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCheckoutType');
        return $pluginInfo ? $this->___callPlugins('getCheckoutType', func_get_args(), $pluginInfo) : parent::getCheckoutType($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getVersionConfig($store)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVersionConfig');
        return $pluginInfo ? $this->___callPlugins('getVersionConfig', func_get_args(), $pluginInfo) : parent::getVersionConfig($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getCheckoutVersionDetails($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCheckoutVersionDetails');
        return $pluginInfo ? $this->___callPlugins('getCheckoutVersionDetails', func_get_args(), $pluginInfo) : parent::getCheckoutVersionDetails($code);
    }

    /**
     * {@inheritdoc}
     */
    public function getApiTypeConfig($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getApiTypeConfig');
        return $pluginInfo ? $this->___callPlugins('getApiTypeConfig', func_get_args(), $pluginInfo) : parent::getApiTypeConfig($code);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrderlines($checkoutType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOrderlines');
        return $pluginInfo ? $this->___callPlugins('getOrderlines', func_get_args(), $pluginInfo) : parent::getOrderlines($checkoutType);
    }

    /**
     * {@inheritdoc}
     */
    public function getMerchantCheckboxMethodConfig($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMerchantCheckboxMethodConfig');
        return $pluginInfo ? $this->___callPlugins('getMerchantCheckboxMethodConfig', func_get_args(), $pluginInfo) : parent::getMerchantCheckboxMethodConfig($code);
    }

    /**
     * {@inheritdoc}
     */
    public function isShippingCallbackSupport($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isShippingCallbackSupport');
        return $pluginInfo ? $this->___callPlugins('isShippingCallbackSupport', func_get_args(), $pluginInfo) : parent::isShippingCallbackSupport($store);
    }

    /**
     * {@inheritdoc}
     */
    public function isMerchantCheckboxSupport($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isMerchantCheckboxSupport');
        return $pluginInfo ? $this->___callPlugins('isMerchantCheckboxSupport', func_get_args(), $pluginInfo) : parent::isMerchantCheckboxSupport($store);
    }

    /**
     * {@inheritdoc}
     */
    public function isDateOfBirthMandatorySupport($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDateOfBirthMandatorySupport');
        return $pluginInfo ? $this->___callPlugins('isDateOfBirthMandatorySupport', func_get_args(), $pluginInfo) : parent::isDateOfBirthMandatorySupport($store);
    }

    /**
     * {@inheritdoc}
     */
    public function isPhoneMandatorySupport($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isPhoneMandatorySupport');
        return $pluginInfo ? $this->___callPlugins('isPhoneMandatorySupport', func_get_args(), $pluginInfo) : parent::isPhoneMandatorySupport($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrderMangagementClass($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOrderMangagementClass');
        return $pluginInfo ? $this->___callPlugins('getOrderMangagementClass', func_get_args(), $pluginInfo) : parent::getOrderMangagementClass($store);
    }

    /**
     * {@inheritdoc}
     */
    public function isTitleMandatorySupport($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isTitleMandatorySupport');
        return $pluginInfo ? $this->___callPlugins('isTitleMandatorySupport', func_get_args(), $pluginInfo) : parent::isTitleMandatorySupport($store);
    }

    /**
     * {@inheritdoc}
     */
    public function isDelayedPushNotification($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDelayedPushNotification');
        return $pluginInfo ? $this->___callPlugins('isDelayedPushNotification', func_get_args(), $pluginInfo) : parent::isDelayedPushNotification($store);
    }

    /**
     * {@inheritdoc}
     */
    public function isPartialPaymentSupport($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isPartialPaymentSupport');
        return $pluginInfo ? $this->___callPlugins('isPartialPaymentSupport', func_get_args(), $pluginInfo) : parent::isPartialPaymentSupport($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getOmBuilderType(\Klarna\Core\Api\VersionInterface $versionConfig, $methodCode = 'klarna_kp')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOmBuilderType');
        return $pluginInfo ? $this->___callPlugins('getOmBuilderType', func_get_args(), $pluginInfo) : parent::getOmBuilderType($versionConfig, $methodCode);
    }

    /**
     * {@inheritdoc}
     */
    public function isSeparateTaxLine($store)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSeparateTaxLine');
        return $pluginInfo ? $this->___callPlugins('isSeparateTaxLine', func_get_args(), $pluginInfo) : parent::isSeparateTaxLine($store);
    }

    /**
     * {@inheritdoc}
     */
    public function isShippingInIframe($store)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isShippingInIframe');
        return $pluginInfo ? $this->___callPlugins('isShippingInIframe', func_get_args(), $pluginInfo) : parent::isShippingInIframe($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getExternalPaymentOptions($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExternalPaymentOptions');
        return $pluginInfo ? $this->___callPlugins('getExternalPaymentOptions', func_get_args(), $pluginInfo) : parent::getExternalPaymentOptions($code);
    }

    /**
     * {@inheritdoc}
     */
    public function isModuleOutputEnabled($moduleName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isModuleOutputEnabled');
        return $pluginInfo ? $this->___callPlugins('isModuleOutputEnabled', func_get_args(), $pluginInfo) : parent::isModuleOutputEnabled($moduleName);
    }
}
