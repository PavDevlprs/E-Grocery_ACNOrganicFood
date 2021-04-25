<?php
namespace Magento\Sales\Model\Order\CreditmemoRepository;

/**
 * Interceptor class for @see \Magento\Sales\Model\Order\CreditmemoRepository
 */
class Interceptor extends \Magento\Sales\Model\Order\CreditmemoRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Sales\Model\ResourceModel\Metadata $metadata, \Magento\Sales\Api\Data\CreditmemoSearchResultInterfaceFactory $searchResultFactory, ?\Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $collectionProcessor = null)
    {
        $this->___init();
        parent::__construct($metadata, $searchResultFactory, $collectionProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function get($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        return $pluginInfo ? $this->___callPlugins('get', func_get_args(), $pluginInfo) : parent::get($id);
    }

    /**
     * {@inheritdoc}
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getList');
        return $pluginInfo ? $this->___callPlugins('getList', func_get_args(), $pluginInfo) : parent::getList($searchCriteria);
    }
}
