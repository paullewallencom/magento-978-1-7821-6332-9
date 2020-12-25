<?php
class Packt_Helloworld_Model_Observer 
{
    public function registerVisit ($observer)
    {
        $product = $observer->getProduct();
        $category = $observer->getCategory();
        
        Mage::log($product->debug());
        Mage::log($category->debug());
    }
    
    public function checkCartQty ($observer)
    {
        if ($observer->getProduct()->getQty() % 2 == 0) {
            //Even
            Mage::getSingleton('checkout/session')->addNotice('Even quantity added');
        } else {
            //Odd
            Mage::throwException('Quantity is odd. It needs to be even');
        }
    }
    
    public function checkSubscriptions() 
    {
        $subscription = Mage::getModel('helloworld/subscription');
        
        $subscription->setFirstname('Cron');
        $subscription->setLastname('Job');
        $subscription->setEmail('cron.job@example.com');
        $subscription->setMessage('Created by cronjob');
        
        $subscription->save();
    }
}