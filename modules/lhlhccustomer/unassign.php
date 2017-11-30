<?php

$chat = erLhcoreClassModelChat::fetch($Params['user_parameters']['chat_id']);

$customerChat = erLhcoreClassModelLhcCustomerChat::findOne(array('filter' => array('chat_id' => $chat->id)));

if ($customerChat instanceof erLhcoreClassModelLhcCustomerChat) {
    $customerChat->removeThis();
}

echo json_encode(array('error' => false));

exit;

?>