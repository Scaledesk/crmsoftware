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
        <label for="email">Email <span class="required">*</span></label>
        <?php echo form_error('email'); ?>
        <br /><input id="email" type="text" name="email" maxlength="150" value="<?php echo set_value('email'); ?>" class="form-control"  />
</p>

<p>
        <label for="gendar">Gendar</label>
        <?php echo form_error('gendar'); ?>
        <br />
                <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
                <input id="gendar" name="gendar" type="radio" class="form-control" value="Male" <?php echo $this->form_validation->set_radio('gendar', 'option1'); ?> />
        		<label for="gendar" class="">Male</label>

        		<input id="gendar" name="gendar" type="radio" class="form-control" value="Female" <?php echo $this->form_validation->set_radio('gendar', 'option2'); ?> />
        		<label for="gendar" class="">Female</label>
</p>


<p>
        <label for="category">Category</label>
        <?php echo form_error('category'); ?>
        <br />
                <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
                <input id="category" name="category" type="radio" class="form-control" value="GENERAL" <?php echo $this->form_validation->set_radio('category', 'option1'); ?> />
        		<label for="category" class="">GENERAL</label>

        		<input id="category" name="category" type="radio" class="form-control" value="OBC" <?php echo $this->form_validation->set_radio('category', 'option2'); ?> />
        		<label for="category" class="">OBC</label>
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