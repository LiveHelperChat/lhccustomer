<?php

$def = new ezcPersistentObjectDefinition();
$def->table = "lhc_lhccustomer_chat";
$def->class = "erLhcoreClassModelLhcCustomerChat";

$def->idProperty = new ezcPersistentObjectIdProperty();
$def->idProperty->columnName = 'id';
$def->idProperty->propertyName = 'id';
$def->idProperty->generator = new ezcPersistentGeneratorDefinition(  'ezcPersistentNativeGenerator' );

$def->properties['chat_id'] = new ezcPersistentObjectProperty();
$def->properties['chat_id']->columnName   = 'chat_id';
$def->properties['chat_id']->propertyName = 'chat_id';
$def->properties['chat_id']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['customer_id'] = new ezcPersistentObjectProperty();
$def->properties['customer_id']->columnName   = 'customer_id';
$def->properties['customer_id']->propertyName = 'customer_id';
$def->properties['customer_id']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

return $def;

?>