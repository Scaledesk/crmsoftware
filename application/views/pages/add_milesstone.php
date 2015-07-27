<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-8 center">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                     <div id="rootwizard">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user m-r-xs"></i><b>Product Milestone</b></a></li>
                                        </ul>




                                            <div class="tab-content">
                                                <div class="tab-pane active fade in" id="tab1">
                                                    <div class="row m-b-lg">
                                                        <div class="col-md-12">
                                                            <div class="row">
                      <?php if($h!='')
                      { ?>
                        <form id="" name="formselct" action="<?=(base_url().'Product_control/do_edit_milesstone/'.$h[0]->milesstone_id)?>" method="Post">
                <?php }
                else{ ?>
                    <form id="" name="formselct" action="<?=(base_url().'Product_control/do_add_milesstone')?>" method="Post">
                  <?php } ?>

                                                        <div class="form-group col-md-12">

                                           <label for="exampleInputPassword1">Select Product</label>
                              <select  class="form-control" id="name" name="product_id">
                                <option value="select">Select Product</option>
                                  <?php
                                  foreach ($k->result() as $row) { ?>
                                  <option value="<?php echo $row->product_id; ?>" <?php if($row->product_id==$h[0]->product_id) echo 'selected'; ?>><?php echo $row->product_name; ?></option>
                                <?php  }
                                  ?>



                                                                </select>
                            </div>


                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword1">Name</label>
                                                                    <input type="text" class="form-control" name="milesstone_name" value="<?php echo $h[0]->milesstone_name; ?>" id="" placeholder="Name" required="">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputName">Description</label>
                                                                    <textarea class="form-control" name="milesstone_description" id="description" maxlength='500' placeholder="Description" required=""><?php echo $h[0]->milesstone_description; ?></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                                                    <label>Expected Date</label>
                                                                    <input type="text" class="form-control date-picker" id="date" name="milesstone_expected_date" value="<?php echo strtotime(date('d/m/Y',$h[0]->milesstone_expected_date)); ?>" placeholder="Expected Date" required="">
                                                                </div>
                                <div class="form-group col-md-12">
                                                                    <label>End Date</label>
                                                                    <input type="text" class="form-control date-picker" id="date" name="milesstone_end_date" value="<?php echo strtotime(date('d/m/Y',$h[0]->milesstone_end_date)); ?>" placeholder="End Date" required="">
                                                                </div>


                                                    <center><input type="submit" class="btn btn-primary" value="submit"></center>

                              </form>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>




                                            </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
