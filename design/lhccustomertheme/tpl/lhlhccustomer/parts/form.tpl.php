<div class="form-group">
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer','Name');?>*</label>
    <input type="text" class="form-control" name="name" value="<?php echo htmlspecialchars($item->name)?>" />
</div>

<div class="form-group">
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer','Address');?></label>
    <input type="text" class="form-control" name="address" value="<?php echo htmlspecialchars($item->address)?>" />
</div>

<div class="form-group">
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer','E-mail');?></label>
    <input type="text" class="form-control" name="email" value="<?php echo htmlspecialchars($item->email)?>" />
</div>

<div class="form-group">
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer','Phone');?></label>
    <input type="text" class="form-control" name="phone" value="<?php echo htmlspecialchars($item->phone)?>" />
</div>

<div class="form-group">
    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/lhccustomer','Description');?></label>
    <textarea rows="5" class="form-control" name="description"><?php echo htmlspecialchars($item->description)?></textarea>
</div>

