<?php
class Packt_Helloworld_Model_Catalog_Product extends Mage_Catalog_Model_Product {
    
    public function getName()
    {
        return 'Packt ' . $this->_getData('name');
    }
    
}