<h1><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer','Customers');?></h1>
<form action="<?php echo erLhcoreClassDesign::baseurl('lhccustomer/list')?>" method="get">
    <div class="row">
        <div class="col-xs-3">
            <div class="form-group">
                <input type="text" placeholder="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer', 'Name')?>" name="name" value="<?php echo htmlspecialchars($input->name)?>" class="form-control input-sm">
            </div>
        </div>
        <div class="col-xs-3">
            <div class="form-group">
                <input type="text" placeholder="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer', 'E-mail')?>" name="email" value="<?php echo htmlspecialchars($input->email)?>" class="form-control input-sm">
            </div>
        </div>
        <div class="col-xs-3">
            <div class="form-group">
                <input type="text" placeholder="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer', 'Phone')?>" name="phone" value="<?php echo htmlspecialchars($input->phone)?>" class="form-control input-sm">
            </div>
        </div>
        <div class="col-xs-3">
            <div class="form-group">
                <input type="submit" name="search" value="Search" class="form-control input-sm">
            </div>
        </div>
        <input type="hidden" name="doSearch" value="1" >
    </div>
</form>

<?php if (isset($items)) : ?>
    <table cellpadding="0" cellspacing="0" class="table" width="100%">
        <thead>
        <tr>
            <th width="1%">ID</th>
            <th><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer','Name');?></th>
            <th width="1%"></th>
        </tr>
        </thead>
        <?php foreach ($items as $item) : ?>
            <tr>
                <td><?php echo $item->id?></td>
                <td><?php echo $item->name?></td>
                <td nowrap>
                    <div class="btn-group" role="group" aria-label="..." style="width:60px;">
                        <a class="btn btn-default btn-xs" href="<?php echo erLhcoreClassDesign::baseurl('lhccustomer/edit')?>/<?php echo $item->id?>" ><i class="material-icons mr-0">&#xE254;</i></a>
                        <a class="btn btn-danger btn-xs csfr-required" onclick="return confirm('<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('kernel/messages','Are you sure?');?>')" href="<?php echo erLhcoreClassDesign::baseurl('lhccustomer/delete')?>/<?php echo $item->id?>" ><i class="material-icons mr-0">&#xE872;</i></a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?php include(erLhcoreClassDesign::designtpl('lhkernel/secure_links.tpl.php')); ?>

    <?php if (isset($pages)) : ?>
        <?php include(erLhcoreClassDesign::designtpl('lhkernel/paginator.tpl.php')); ?>
    <?php endif;?>

<?php endif;?>

<a href="<?php echo erLhcoreClassDesign::baseurl('lhccustomer/new')?>" class="btn btn-default"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer','New');?></a>