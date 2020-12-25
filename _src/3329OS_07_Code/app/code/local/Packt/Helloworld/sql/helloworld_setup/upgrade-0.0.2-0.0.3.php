<?php

$installer = $this;

$installer->startSetup();

//Create the attribute "loyaltynumber" for the customer entity
$installer->addAttribute('customer', 'loyaltynumber', array(
    'type' => 'varchar',
    'input' => 'text',
    'required' => false,
    'label' => 'Loyaltynumber',
    'visible' => true,
    'adminhtml_only' => true,
    'user_defined' => true,
));

//Add the attribute to the backend forms
$loyaltyAttribute = Mage::getSingleton('eav/config')->getAttribute('customer', 'loyaltynumber');

$loyaltyAttribute->setData('used_in_forms', array('adminhtml_customer'));

$loyaltyAttribute->save();

$installer->endSetup(); 