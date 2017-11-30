<?php

$Module = array( "name" => "LHC Customers",
				 'variable_params' => true );

$ViewList = array();

$ViewList['list'] = array(
    'params' => array(),
    'uparams' => array('name','email','phone'),
    'functions' => array('use_admin'),
);

$ViewList['getcustomer'] = array(
    'params' => array('chat_id'),
    'uparams' => array(),
    'functions' => array('use_admin'),
);

$ViewList['searchcustomer'] = array(
    'params' => array('chat_id'),
    'uparams' => array(),
    'functions' => array('use_admin'),
);

$ViewList['assigncustomer'] = array(
    'params' => array('chat_id','customer_id'),
    'uparams' => array(),
    'functions' => array('use_admin'),
);

$ViewList['unassign'] = array(
    'params' => array('chat_id'),
    'uparams' => array(),
    'functions' => array('use_admin'),
);

$ViewList['index'] = array(
    'params' => array(),
    'uparams' => array(),
    'functions' => array('use_admin'),
);

$ViewList['new'] = array(
    'params' => array(),
    'uparams' => array(),
    'functions' => array('use_admin'),
);

$ViewList['edit'] = array(
    'params' => array('id'),
    'uparams' => array(),
    'functions' => array('use_admin'),
);

$ViewList['delete'] = array(
    'params' => array('id'),
    'uparams' => array('csfr'),
    'functions' => array('use_admin'),
);

$FunctionList['use_admin'] = array('explain' => 'Allow operator to configure telegram bot');