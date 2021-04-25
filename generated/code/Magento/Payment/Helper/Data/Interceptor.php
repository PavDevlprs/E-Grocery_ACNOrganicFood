<?php
namespace Magento\Payment\Helper\Data;

/**
 * Interceptor class for @see \Magento\Payment\Helper\Data
 */
class Interceptor extends \Magento\Payment\Helper\Data implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Helper\Context $context, \Magento\Framework\View\LayoutFactory $layoutFactory, \Magento\Payment\Model\Method\Factory $paymentMethodFactory, \Magento\Store\Model\App\Emulation $appEmulation, \Magento\Payment\Model\Config $paymentConfig, \Magento\Framework\App\Config\Initial $initialConfig)
    {
        $this->___init();
        parent::__construct($context, $layoutFactory, $paymentMethodFactory, $appEmulation, $paymentConfig, $initialConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function getMethodInstance($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMethodInstance');
        return $pluginInfo ? $this->___callPlugins('getMethodInstance', func_get_args(), $pluginInfo) : parent::getMethodInstance($code);
    }

    /**
     * {@inheritdoc}
     */
    public function getPaymentMethods()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPaymentMethods');
        return $pluginInfo ? $this->___callPlugins('getPaymentMethods', func_get_args(), $pluginInfo) : parent::getPaymentMethods();
    }
}
