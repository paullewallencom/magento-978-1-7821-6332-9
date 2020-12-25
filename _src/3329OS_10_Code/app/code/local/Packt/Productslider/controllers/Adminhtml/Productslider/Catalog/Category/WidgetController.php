<?php
require_once('Mage/Adminhtml/controllers/Catalog/Category/WidgetController.php');

class Packt_Productslider_Adminhtml_Productslider_Catalog_Category_WidgetController extends Mage_Adminhtml_Catalog_Category_WidgetController
{
    protected function _getCategoryTreeBlock()
    {
        return $this->getLayout()->createBlock('productslider/adminhtml_catalog_category_widget_chooser', '', array(
            'id' => $this->getRequest()->getParam('uniq_id'),
            'use_massaction' => $this->getRequest()->getParam('use_massaction', false)
        ));
    }
}