<?php
class Packt_Helloworld_Adminhtml_Helloworld_IndexController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction() 
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}