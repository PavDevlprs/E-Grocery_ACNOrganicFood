<?php
namespace Magento\SalesRule\Model\CouponRepository;

/**
 * Interceptor class for @see \Magento\SalesRule\Model\CouponRepository
 */
class Interceptor extends \Magento\SalesRule\Model\CouponRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\SalesRule\Model\CouponFactory $couponFactory, \Magento\SalesRule\Model\RuleFactory $ruleFactory, \Magento\SalesRule\Api\Data\CouponSearchResultInterfaceFactory $searchResultFactory, \Magento\SalesRule\Model\ResourceModel\Coupon\CollectionFactory $collectionFactory, \Magento\SalesRule\Model\Spi\CouponResourceInterface $resourceModel, \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $extensionAttributesJoinProcessor, ?\Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $collectionProcessor = null)
    {
        $this->___init();
        parent::__construct($couponFactory, $ruleFactory, $searchResultFactory, $collectionFactory, $resourceModel, $extensionAttributesJoinProcessor, $collectionProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\SalesRule\Api\Data\CouponInterface $coupon)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($coupon);
    }

    /**
     * {@inheritdoc}
     */
    public function getById($couponId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getById');
        return $pluginInfo ? $this->___callPlugins('getById', func_get_args(), $pluginInfo) : parent::getById($couponId);
    }

    /**
     * {@inheritdoc}
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getList');
        return $pluginInfo ? $this->___callPlugins('getList', func_get_args(), $pluginInfo) : parent::getList($searchCriteria);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($couponId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteById');
        return $pluginInfo ? $this->___callPlugins('deleteById', func_get_args(), $pluginInfo) : parent::deleteById($couponId);
    }
}
