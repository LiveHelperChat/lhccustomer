<?php if ($customer_chat === false) : ?>
    <h4><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer', 'Find existing customer')?></h4>
    <form action="<?php echo erLhcoreClassDesign::baseurl('lhccustomer/searchcustomer')?>/<?php echo $chat->id?>" method="post" onsubmit="return lhcCustomer.doSearch($(this),<?php echo $chat->id?>)">
        <div class="row">
            <div class="col-xs-6">
                <div class="form-group">
                    <input type="text" placeholder="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer', 'Name')?>" name="name" value="" class="form-control input-sm">
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <input type="text" placeholder="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer', 'E-mail')?>" name="email" value="" class="form-control input-sm">
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <input type="text" placeholder="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer', 'Phone')?>" name="phone" value="" class="form-control input-sm">
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <input type="submit" name="search" value="Search" class="form-control input-sm">
                </div>
            </div>
            <input type="hidden" name="doSearch" value="1" >
        </div>
    </form>
    <div id="chat-search-customer-<?php echo $chat->id?>"></div>
<?php else : ?>
    <?php $customer = $customer_chat->customer ?>
    <?php include(erLhcoreClassDesign::designtpl('lhlhccustomer/assigncustomer.tpl.php'));?>
<?php endif ?>