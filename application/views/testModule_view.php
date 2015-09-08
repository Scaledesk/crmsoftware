<div id="main-wrapper" class="container">
			                    <div class="row">
			                        <div class="col-md-10 center">
			                            <div class="panel panel-white">
			                                <div class="panel-body">
			                                     <div id="rootwizard">
			<?php // Change the css classes to suit your needs

$attributes = array('class' => '', 'id' => '');
echo form_open('TestController\index', $attributes); ?>

<p>
        <label for="name">Name <span class="required">*</span></label>
        <?php echo form_error('name'); ?>
        <br /><input id="name" type="text" name="name" maxlength="100" value="<?php echo set_value('name'); ?>" class="form-control"  />
</p>

<p>
        <label for="email">Email</label>
        <?php echo form_error('email'); ?>
        <br /><input id="email" type="text" name="email" maxlength="150" value="<?php echo set_value('email'); ?>" class="form-control"  />
</p>

<p>
        <label for="address">Address</label>
	<?php echo form_error('address'); ?>
	<br />

	<?php echo form_textarea( array( 'name' => 'address', 'class' => 'form-control', 'rows' => '5', 'cols' => '80', 'value' => set_value('address') ) );?>
</p>
<p>

        <?php echo form_error('Allahabad'); ?>
        <?php // Change the values/css classes to suit your needs ?>
	        <label for="Allahabad">City</label>
        <br /><input type="checkbox" id="Allahabad" name="Allahabad" value="Allahabad" class="form-control" <?php echo set_checkbox('Allahabad', 'Allahabad'); ?>>

	<label for="Allahabad">Allahabad</label>
</p>
<p>
        <label for="gender">Gender</label>
        <?php echo form_error('gender'); ?>
        <br />
                <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
                <input id="gender" name="gender" type="radio" class="form-control" value="Option1" <?php echo $this->form_validation->set_radio('gender', 'option1'); ?> />
        		<label for="gender" class="">Option 1</label>

        		<input id="gender" name="gender" type="radio" class="form-control" value="Option2" <?php echo $this->form_validation->set_radio('gender', 'option2'); ?> />
        		<label for="gender" class="">Option 2</label>
</p>



<p>
        <?php echo form_submit( 'submit', 'Submit', "class='btn btn-success'" ); ?>
</p>

<?php echo form_close(); ?>
  </div></div>
</div>
</div>
</div><!-- Row -->
</div><!-- Main Wrapper -->