<?php

$tpl = erLhcoreClassTemplate::getInstance('lhlhccustomer/assigncustomer.tpl.php');

$chat = erLhcoreClassModelChat::fetch($Params['user_parameters']['chat_id']);
$tpl->set('chat', $chat);

$customer = erLhcoreClassModelLhcCustomer::fetch($Params['user_parameters']['customer_id']);

$customerChat = erLhcoreClassModelLhcCustomerChat::findOne(array('filter' => array('chat_id' => $chat->id)));
if ($customerChat instanceof erLhcoreClassModelLhcCustomerChat) {
    $customerChat->customer_id = $customer->id;
    $customerChat->saveThis();
} else {
    $customerChat = new erLhcoreClassModelLhcCustomerChat();
    $customerChat->customer_id = $customer->id;
    $customerChat->chat_id = $chat->id;
    $customerChat->saveThis();
}

$tpl->set('customer_chat', $customerChat);
$tpl->set('customer', $customerChat->customer);

echo json_encode(array('error' => false, 'result' => $tpl->fetch()));

exit;

?>