<?php 

$tpl = erLhcoreClassTemplate::getInstance('lhlhccustomer/edit.tpl.php');

$item =  erLhcoreClassModelLhcCustomer::fetch($Params['user_parameters']['id']);

if (ezcInputForm::hasPostData()) {
        
    if (isset($_POST['Cancel_action'])) {
        erLhcoreClassModule::redirect('lhccustomer/list');
        exit ;
    }
    
    $Errors = erLhcoreClassLhcCustomerValidator::validateCustomer($item);

    if (count($Errors) == 0) {
        try {
            $item->saveThis();
                       
            erLhcoreClassModule::redirect('lhccustomer/list');
            exit;
            
        } catch (Exception $e) {
            $tpl->set('errors',array($e->getMessage()));
        }

    } else {
        $tpl->set('errors',$Errors);
    }       
}

$tpl->setArray(array(
        'item' => $item,
));

$Result['content'] = $tpl->fetch();

$Result['path'] = array(
    array (
        'url' =>erLhcoreClassDesign::baseurl('lhccustomer/list'), 
        'title' => erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer','Customers')
    ),
    array (       
        'title' => erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer', 'Edit customer')
    )
);

?>