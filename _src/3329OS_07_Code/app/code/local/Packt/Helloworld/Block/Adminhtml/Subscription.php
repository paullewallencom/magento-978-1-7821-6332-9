<?php
class Packt_Helloworld_Block_Adminhtml_Subscription extends Mage_Adminhtml_Block_Widget_Grid_Container 
{
    public function __construct() 
    {
        $this->_headerText = Mage::helper('helloworld')->__('Helloworld subscriptions');
        
        $this->_blockGroup = 'helloworld';
        $this->_controller = 'adminhtml_subscription';
        
        parent::__construct();
    }
    
    protected function _prepareLayout() 
    {
        $this->_removeButton('add');
        
        return parent::_prepareLayout();
    }
}