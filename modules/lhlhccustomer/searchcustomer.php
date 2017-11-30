<?php

$tpl = erLhcoreClassTemplate::getInstance('lhlhccustomer/searchcustomer.tpl.php');

if (isset($_GET['doSearch'])) {
    $filterParams = erLhcoreClassSearchHandler::getParams(array('customfilterfile' => 'extension/lhccustomer/classes/filter.php','format_filter' => true, 'use_override' => true, 'uparams' => $Params['user_parameters_unordered']));
    $filterParams['is_search'] = true;
} else {
    $filterParams = erLhcoreClassSearchHandler::getParams(array('customfilterfile' => 'extension/lhccustomer/classes/filter.php','format_filter' => true, 'uparams' => $Params['user_parameters_unordered']));
    $filterParams['is_search'] = false;
}

$items = erLhcoreClassModelLhcCustomer::getList(array_merge(array('limit' => 10, 'offset' => 0),$filterParams['filter']));

$chat = erLhcoreClassModelChat::fetch($Params['user_parameters']['chat_id']);
$tpl->set('chat', $chat);
$tpl->set('items', $items);

echo json_encode(array('error' => false, 'result' => $tpl->fetch()));

exit;

?>