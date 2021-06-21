<p>
    <a class="btn btn-xs btn-info" target="_blank" href="<?php echo erLhcoreClassDesign::baseurl('lhccustomer/edit')?>/<?php echo $customer->id?>"><i class="material-icons">&#xE7FB;</i><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer', 'Go to client')?></a>
    <a class="btn btn-xs btn-danger pull-right" target="_blank" onclick="return lhcCustomer.unAssign(<?php echo $chat->id?>)"><i class="material-icons">&#xE872;</i><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer', 'Un-assign chat from client')?></a>
</p>

<div class="form-group" ng-non-bindable>
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer', 'Name')?></label>
    <p><?php echo htmlspecialchars($customer->name) ?></p>
</div>

<?php if ($customer->email != '') : ?>
    <div class="form-group" ng-non-bindable>
        <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer', 'E-mail')?></label>
        <p><?php echo htmlspecialchars($customer->email) ?></p>
    </div>
<?php endif; ?>

<?php if ($customer->phone != '') : ?>
    <div class="form-group" ng-non-bindable>
        <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer', 'Phone')?></label>
        <p><?php echo htmlspecialchars($customer->phone) ?></p>
    </div>
<?php endif; ?>

<?php if ($customer->address != '') : ?>
    <div class="form-group" ng-non-bindable>
        <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer', 'Address')?></label>
        <p><?php echo htmlspecialchars($customer->address) ?></p>
    </div>
<?php endif; ?>
