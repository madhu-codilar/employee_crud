<?php

namespace Codilar\HelloWorld\Block;

use Magento\Framework\View\Element\Template;

class HelloWorld extends Template
{
    public function getTitle()
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();

        $productBlock = $objectManager->create('\Magento\Catalog\Block\Product\View\AbstractView');
        $product = $productBlock->getProduct();
        $value =$product->getResource()->getAttribute('hotdrinks_brands')->getFrontend()->getValue($product);
        return $value;
    }
}
