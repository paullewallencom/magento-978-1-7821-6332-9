<?php
class Packt_Productslider_Block_Adminhtml_Catalog_Category_Widget_Chooser extends Mage_Adminhtml_Block_Catalog_Category_Widget_Chooser
{
        /**
     * Block construction
     * Defines tree template and init tree params
     */
    
    public function prepareElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        $uniqId = Mage::helper('core')->uniqHash($element->getId());
        $sourceUrl = $this->getUrl('adminhtml/productslider_catalog_category_widget/chooser', array('uniq_id' => $uniqId, 'use_massaction' => false));

        $chooser = $this->getLayout()->createBlock('widget/adminhtml_widget_chooser')
            ->setElement($element)
            ->setTranslationHelper($this->getTranslationHelper())
            ->setConfig($this->getConfig())
            ->setFieldsetId($this->getFieldsetId())
            ->setSourceUrl($sourceUrl)
            ->setUniqId($uniqId);

        if ($element->getValue()) {
            $categoryId = $element->getValue();
            
            if ($categoryId) {
                $label = Mage::getSingleton('catalog/category')->load($categoryId)->getName();
                $chooser->setLabel($label);
            }
        }

        $element->setData('after_element_html', $chooser->toHtml());
        return $element;
    }
    
    public function getNodeClickListener()
    {
        if ($this->getData('node_click_listener')) {
            return $this->getData('node_click_listener');
        }
        if ($this->getUseMassaction()) {
            $js = '
                function (node, e) {
                    if (node.ui.toggleCheck) {
                        node.ui.toggleCheck(true);
                    }
                }
            ';
        } else {
            $chooserJsObject = $this->getId();
            $js = '
                function (node, e) {
                    '.$chooserJsObject.'.setElementValue(node.attributes.id);
                    '.$chooserJsObject.'.setElementLabel(node.text);
                    '.$chooserJsObject.'.close();
                }
            ';
        }
        return $js;
    }
}