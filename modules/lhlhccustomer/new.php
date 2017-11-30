<?php
$tpl = erLhcoreClassTemplate::getInstance('lhlhccustomer/new.tpl.php');

$item = new erLhcoreClassModelLhcCustomer();

$tpl->set('item',$item);

if (ezcInputForm::hasPostData()) {

    $Errors = erLhcoreClassLhcCustomerValidator::validateCustomer($item);

    if (count($Errors) == 0) {
        try {
            $item->saveThis();

            erLhcoreClassModule::redirect('lhccustomer/list');
            exit ;

        } catch (Exception $e) {
            $tpl->set('errors',array($e->getMessage()));
        }

    } else {
        $tpl->set('errors',$Errors);
    }
}

$Result['content'] = $tpl->fetch();
$Result['path'] = array(
    array (
        'url' =>erLhcoreClassDesign::baseurl('lhccustomer/list'),
        'title' => erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer','Customers')
    ),
    array(
        'title' => erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer', 'New')
    )
);

?>