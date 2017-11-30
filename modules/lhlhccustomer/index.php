<?php
$tpl = erLhcoreClassTemplate::getInstance('lhlhccustomer/index.tpl.php');

$Result['content'] = $tpl->fetch();

$Result['path'] = array(
    array(
        'url' => erLhcoreClassDesign::baseurl('lhccustomer/index'),
        'title' => erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer', 'Customers')
    )
);

?>