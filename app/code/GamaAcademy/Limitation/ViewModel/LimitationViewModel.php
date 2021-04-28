<?php
namespace GamaAcademy\Limitation\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class LimitationViewModel implements ArgumentInterface{
    private $resource;

    public function __construct()
    {
        
    }

    public function getCategory()
    {
    
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $category = $objectManager->get('Magento\Framework\Registry')->registry('current_category');
        
        return $category;
    }
}