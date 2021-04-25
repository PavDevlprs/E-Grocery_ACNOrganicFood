<?php
namespace Dotdigitalgroup\Email\Controller\Adminhtml\Dashboard\MassDelete;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Controller\Adminhtml\Dashboard\MassDelete
 */
class Interceptor extends \Dotdigitalgroup\Email\Controller\Adminhtml\Dashboard\MassDelete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Cron\Model\ResourceModel\Schedule $scheduleResource, \Magento\Backend\App\Action\Context $context, \Magento\Cron\Model\ScheduleFactory $schedule, \Magento\Framework\Escaper $escaper)
    {
        $this->___init();
        parent::__construct($scheduleResource, $context, $schedule, $escaper);
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
