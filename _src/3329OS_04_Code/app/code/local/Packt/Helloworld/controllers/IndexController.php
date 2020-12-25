<?php
class Packt_Helloworld_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction() 
    {
        echo $this->__('Test translation packt');
    }
    
    public function helloAction()
    {
        //echo 'Action hello in Helloworld IndexController';
        $this->loadLayout();
        
        $this->renderLayout();
    }
}