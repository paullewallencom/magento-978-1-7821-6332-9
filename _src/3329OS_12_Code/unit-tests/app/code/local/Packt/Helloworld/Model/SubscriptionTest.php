<?php
class SubscriptionTest extends PHPUnit_Framework_TestCase {

    protected $_subscriptionInstance;

    public function setUp() {
        echo 'Start unit test for method: ' . $this->getName();
        
        Mage::app('default');
        
        $this->_subscriptionInstance = Mage::getModel('helloworld/subscription');
    }

    protected function tearDown() {
        
    }

    public function testGetAllSubscriptions() {
        $subscriptions = $this->_subscriptionInstance->getCollection();
        
        //Check if $subscriptions is instance of the collection class
        $this->assertInstanceOf('Packt_Helloworld_Model_Resource_Subscription_Collection', $subscriptions);
    }

}
