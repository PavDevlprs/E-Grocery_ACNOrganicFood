<?php
namespace GamaAcademy\Limitation\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class LimitationViewModel implements ArgumentInterface
{

    public function __construct(\Magento\Framework\Registry $registry)
    {
        $this->registry = $registry;
    }

    public function getProduct()
    {
    
        $product = $this->registry->registry('current_product');
        
        return $product;
    }
}