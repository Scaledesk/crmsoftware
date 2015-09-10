<div id="main-wrapper" class="container">
			                    <div class="row">
			                        <div class="col-md-10 center">
			                            <div class="panel panel-white">
			                                <div class="panel-body">
			                                     <div id="rootwizard">
			<?php // Change the css classes to suit your needs

$attributes = array('class' => '', 'id' => '');
echo form_open('jj\index', $attributes); ?>

<p>

        <?php echo form_error('qualification'); ?>
        <?php // Change the values/css classes to suit your needs ?>
	        <label for="qualification">Qualification</label>
        <br />
				<input type="checkbox" name="qualification[]" value="Graduation" class="form-control">Graduation<br/>
				<input type="checkbox" name="qualification[]" value="10" class="form-control">10<br/>
				<input type="checkbox" name="qualification[]" value="" class="form-control">10

	<label for="qualification">qualification</label>
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