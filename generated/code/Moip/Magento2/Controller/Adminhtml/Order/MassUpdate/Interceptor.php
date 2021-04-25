<?php
namespace Moip\Magento2\Controller\Adminhtml\Order\MassUpdate;

/**
 * Interceptor class for @see \Moip\Magento2\Controller\Adminhtml\Order\MassUpdate
 */
class Interceptor extends \Moip\Magento2\Controller\Adminhtml\Order\MassUpdate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $collectionFactory, \Magento\Sales\Api\OrderManagementInterface $orderManagement, \Magento\Sales\Model\Order $order)
    {
        $this->___init();
        parent::__construct($context, $filter, $collectionFactory, $orderManagement, $order);
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
