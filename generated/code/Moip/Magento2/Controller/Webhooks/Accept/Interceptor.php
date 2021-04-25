<?php
namespace Moip\Magento2\Controller\Webhooks\Accept;

/**
 * Interceptor class for @see \Moip\Magento2\Controller\Webhooks\Accept
 */
class Interceptor extends \Moip\Magento2\Controller\Webhooks\Accept implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Moip\Magento2\Gateway\Config\Config $config, \Magento\Payment\Model\Method\Logger $logger, \Magento\Sales\Api\Data\OrderInterfaceFactory $orderFactory, \Magento\Sales\Model\Order\CreditmemoFactory $creditmemoFactory, \Magento\Sales\Model\Service\CreditmemoService $creditmemoService, \Magento\Sales\Model\Order\Invoice $invoice, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory)
    {
        $this->___init();
        parent::__construct($context, $config, $logger, $orderFactory, $creditmemoFactory, $creditmemoService, $invoice, $storeManager, $resultJsonFactory);
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
