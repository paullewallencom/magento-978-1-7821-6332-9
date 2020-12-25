<?php
class Packt_Helloworld_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction() 
    {
        $resource = Mage::getSingleton('core/resource');
        $connection = $resource->getConnection('core_read');
        
        $results = $connection->query('SELECT * FROM core_store')->fetchAll();
        
        Zend_Debug::dump($results);
//$dbConfig = array(
//    'host' => 'localhost',
//    'dbname' => 'drupal',
//    'username' => 'drupal_web',
//    'password' => 'drupal_pwd',
//);
//$_resource = Mage::getSingleton('core/resource');
//
////Create the connection
//$connection = $_resource->createConnection('drupalConnection', 'pdo_mysql', $dbConfig);
//$results = $connection->query('SELECT * FROM node')->fetchAll();
//
//Zend_Debug::dump($results);
    }
    
    public function helloAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
    
    public function flatAction() {
//        $resource = Mage::getSingleton('core/resource');
//        $connection = $resource->getConnection('core_read');
//        
//        $results = $connection->query('SELECT * FROM review_detail')->fetchAll();
//        
//        Zend_Debug::dump($results);
        $reviews = Mage::getModel('review/review')->getCollection();
        
        foreach ($reviews as $_review) {
            echo $_review->getReviewUrl().'<br/>';
        }
//        Zend_Debug::dump($reviews);
    }
}