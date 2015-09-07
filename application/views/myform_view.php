<?php // Change the css classes to suit your needs

$attributes = array('class' => '', 'id' => '');
echo form_open('MyformController\index', $attributes); ?>

<p>
        <label for="name">Name <span class="required">*</span></label>
        <?php echo form_error('name'); ?>
        <br /><input id="name" type="text" name="name" maxlength="150" value="<?php echo set_value('name'); ?>" class="form-control"  />
</p>

<p>
        <label for="email">Email <span class="required">*</span></label>
        <?php echo form_error('email'); ?>
        <br /><input id="email" type="text" name="email" maxlength="150" value="<?php echo set_value('email'); ?>" class="form-control"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
