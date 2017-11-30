<?php if (!empty($items)) : ?>
<table class="table">
    <tr>
        <th><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer', 'Name')?></th>
        <th><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer', 'E-mail')?></th>
        <th><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer', 'Phone')?></th>
        <th width="1%"></th>
    </tr>
    <?php foreach ($items as $item) : ?>
        <tr>
            <td><?php echo htmlspecialchars($item->name)?></td>
            <td><?php echo htmlspecialchars($item->email)?></td>
            <td><?php echo htmlspecialchars($item->phone)?></td>
            <td><a onclick="return lhcCustomer.assignCustomer(<?php echo $item->id?>,<?php echo $chat->id?>)" class="btn btn-block btn-xs btn-success"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer', 'Assign')?></a></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php else : ?>
    <?php $errors = array(erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer', 'No records were found!')) ?>
    <?php if (isset($errors)) : ?>
        <?php include(erLhcoreClassDesign::designtpl('lhkernel/validation_error.tpl.php'));?>
    <?php endif; ?>
<?php endif; ?>
