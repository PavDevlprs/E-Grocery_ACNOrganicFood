<?php
namespace Dotdigitalgroup\Email\Controller\Product\Upsell;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Controller\Product\Upsell
 */
class Interceptor extends \Dotdigitalgroup\Email\Controller\Product\Upsell implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Dotdigitalgroup\Email\Helper\Data $data, \Magento\Framework\App\Action\Context $context, \Magento\Framework\Escaper $escaper, \Dotdigitalgroup\Email\Helper\Config $configHelper, \Magento\Store\Model\StoreManagerInterface $storeManager, \Dotdigitalgroup\Email\Model\FailedAuthFactory $failedAuthFactory, \Dotdigitalgroup\Email\Model\ResourceModel\FailedAuth $failedAuthResource, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezone)
    {
        $this->___init();
        parent::__construct($data, $context, $escaper, $configHelper, $storeManager, $failedAuthFactory, $failedAuthResource, $timezone);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
