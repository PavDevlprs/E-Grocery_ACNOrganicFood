<?php
namespace Klarna\Core\Model\Checkout\Orderline\Collector;

/**
 * Interceptor class for @see \Klarna\Core\Model\Checkout\Orderline\Collector
 */
class Interceptor extends \Klarna\Core\Model\Checkout\Orderline\Collector implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $config, \Klarna\Core\Helper\KlarnaConfig $klarnaConfig, \Klarna\Core\Model\Checkout\Orderline\OrderLineFactory $orderLineFactory, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($config, $klarnaConfig, $orderLineFactory, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function getCollectors(\Magento\Store\Api\Data\StoreInterface $store)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCollectors');
        return $pluginInfo ? $this->___callPlugins('getCollectors', func_get_args(), $pluginInfo) : parent::getCollectors($store);
    }

    /**
     * {@inheritdoc}
     */
    public function isKlarnaActive($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isKlarnaActive');
        return $pluginInfo ? $this->___callPlugins('isKlarnaActive', func_get_args(), $pluginInfo) : parent::isKlarnaActive($store);
    }
}
