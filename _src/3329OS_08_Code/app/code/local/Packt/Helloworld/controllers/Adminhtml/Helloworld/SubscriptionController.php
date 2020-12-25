<?php
class Packt_Helloworld_Adminhtml_Helloworld_SubscriptionController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction() 
    {
        $this->loadLayout();
        
        $this->_addContent($this->getLayout()->createBlock('helloworld/adminhtml_subscription'));
        
        $this->renderLayout();
    }
}