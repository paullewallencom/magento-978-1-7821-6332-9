<?php
class Packt_Shipme_Model_Carrier_Shipme 
    extends Mage_Shipping_Model_Carrier_Abstract
    implements Mage_Shipping_Model_Carrier_Interface
{
    protected $_code = 'shipme';
    
    public function collectRates (Mage_Shipping_Model_Rate_Request $request)
    {
        $result = Mage::getModel('shipping/rate_result');
        
        //Check if express method is enabled
        if ($this->getConfigData('express_enabled'))
        {
            $method = Mage::getModel('shipping/rate_result_method');
            $method->setCarrier($this->_code);
            $method->setCarrierTitle($this->getConfigData('title'));
            
            $method->setMethod('express');
            $method->setMethodTitle($this->getConfigData('express_title'));
            
            $method->setCost($this->getConfigData('express_price'));
            $method->setPrice($this->getConfigData('express_price'));
            
            $result->append($method);
        }
        
        //Check if business method is enabled
        if ($this->getConfigData('business_enabled'))
        {
            $method = Mage::getModel('shipping/rate_result_method');
            $method->setCarrier($this->_code);
            $method->setCarrierTitle($this->getConfigData('title'));
            
            $method->setMethod('business');
            $method->setMethodTitle($this->getConfigData('business_title'));
            
            $method->setCost($this->getConfigData('business_price'));
            $method->setPrice($this->getConfigData('business_price'));
            
            $result->append($method);
        }
        
        return $result;
    }
    
    public function isActive()
    {
        $active = $this->getConfigData('active');
        return $active==1 || $active=='true';
    }
    
    public function isTrackingAvailable() 
    {
        return true;
    }
    
    public function getAllowedMethods()
    {
        return array('shipme'=>$this->getConfigData('name'));
    }
    
}