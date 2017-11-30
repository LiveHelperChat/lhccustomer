<?php

$tpl = erLhcoreClassTemplate::getInstance('lhlhccustomer/getcustomer.tpl.php');

$chat = erLhcoreClassModelChat::fetch($Params['user_parameters']['chat_id']);
$tpl->set('chat', $chat);

$customerChat = erLhcoreClassModelLhcCustomerChat::findOne(array('filter' => array('chat_id' => $chat->id)));
$tpl->set('customer_chat', $customerChat);

echo json_encode(array('result' => $tpl->fetch()));

exit;

?>