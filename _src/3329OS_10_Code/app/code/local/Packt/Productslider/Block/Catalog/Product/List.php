<?php
class Packt_Productslider_Block_Catalog_Product_List 
extends Mage_Catalog_Block_Product_List 
implements Mage_Widget_Block_Interface
{
    protected function _prepareLayout() 
    {
        $this->getLayout()->getBlock('head')->addCss('css/productslider.css');
        
        $this->getLayout()->getBlock('head')->addItem('skin_js', 'js/carouFredSel-6.2.1/jquery.carouFredSel-6.2.1-packed.js');
        
        parent::_prepareLayout();
    }
}