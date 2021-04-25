<?php
namespace Dotdigitalgroup\Email\Controller\Adminhtml\Importer\MassResend;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Controller\Adminhtml\Importer\MassResend
 */
class Interceptor extends \Dotdigitalgroup\Email\Controller\Adminhtml\Importer\MassResend implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Dotdigitalgroup\Email\Model\ResourceModel\Importer $importer, \Magento\Framework\Escaper $escaper)
    {
        $this->___init();
        parent::__construct($context, $importer, $escaper);
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
