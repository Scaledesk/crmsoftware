<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-8 center">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <?php if($h!='')
                                    { ?>
                                      <center><label><h2>Update Product Details</h2></label></center>
                    <div class="row m-b-lg">
      	                <form id="wizardForm" action="<?=(base_url().'Product_control/do_edit_product/'.$h[0]->product_id)?>" method="post">
                                  <?php }
                                    else{ ?>

                                <center><label><h2>Product Details</h2></label></center>
              <div class="row m-b-lg">
	                <form id="wizardForm" action="<?=(base_url().'Product_control/do_add_product')?>" method="post">
                   <?php } ?>
                                <div class="col-md-6">


                                        <div class="form-group col-md-12">
                                            <label>Name</label>
                                            <input type="text" class="form-control" id="" name="product_name" value="<?php echo $h[0]->product_name; ?>" placeholder="Product Name" required="">
                                        </div>
									            	        <div class="form-group col-md-12">
                                                                    <label for="exampleInputName">Description</label>
                                                                    <textarea class="form-control" name="product_description" id="description" maxlength='500' placeholder="Description" required="" style="margin: 0px -0.5px 0px 0px; height: 100px; width: 308px;"><?php echo $h[0]->product_description; ?></textarea>
                                        </div>

                                </div>
                            <div class="col-md-6">
								                        <div class="form-group col-md-12">
                                            <label>Start Date</label>
                                            <input type="text" class="form-control date-picker" name="product_start_date" value="<?php echo date('d/m/Y',strtotime($h[0]->product_start_date)); ?>" placeholder="Start date" required="">
                                        </div>
										                    <div class="form-group col-md-12">
                                            <label>End Date</label>
                                            <input type="text" class="form-control date-picker" name="product_end_date" value="<?php echo date('d/m/Y',strtotime($h[0]->product_end_date)); ?>" placeholder="End date" required="">
                                        </div>
									                      <div class="form-group col-md-12">
                                                                    <label>Status Level</label>
																	                          <select  class="form-control" id="" name="product_status" required="">
                                                                <option value="select">Select</option>
                                                                <?php for ($i=1; $i <= 10; $i++) { ?>
                                                                <option value="<?php echo $i; ?>" <?php if($i==$h[0]->product_status) echo 'checked'; ?>><?php echo $i; ?></option>
                                                                <?php } ?>


                                                                </select>
                                        </div>

						              	</div>



                              <center><input type="submit" class="btn btn-info" value="Submit"></center>

						        	</form>

                        </div>
                                    </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
