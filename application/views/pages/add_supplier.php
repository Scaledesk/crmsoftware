<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                     <div id="rootwizard">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user m-r-xs"></i><b>Add Supplier</b></a></li>
                                        </ul>
                          
                                    <?php 
                                        error_reporting(0);
                                        if($k!='')
                                        { ?>
                                        
                                        <form id="wizardForm" method="post" action="<?=(base_url().'sales_management/do_edit_supplier/'.$k[0]->supplier_id)?>">
                                      <?php }
                                       else
                                       { ?>
                                        <form id="wizardForm" method="post" action="<?=(base_url().'sales_management/do_add_supplier')?>">
                                       <?php }
                                       ?>
                                            <div class="tab-content">
                                                <div class="tab-pane active fade in" id="tab1">
                                                    <div class="row m-b-lg">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="form-group col-md-12">
                                                                    <label>Supplier Name</label>
                                                                    <input type="text" class="form-control" name="supplier_name" id="Supplier_name" placeholder="Supplier Name" required="" value="<?php echo $k[0]->supplier_name; ?>">
                                                                </div>
                                                                
                                                                
                                                                <div class="form-group col-md-12">
																	<label> Supplier Address</label>
																	<textarea class="form-control" placeholder="Supplier Address" id="supplier_address" name="supplier_address" required=""value="<?php echo $k[0]->supplier_address; ?>" style="margin: 0px -0.078125px 0px 0px; height: 100px; width: 420px;"></textarea>
																</div>
                                                                <div class="form-group col-md-12">
                                                                    <label>Supplier Phone1</label>
                                                                    <input type="number" class="form-control" name="supplier_phone1" value="<?php echo $k[0]->supplier_phone1; ?>" id="supplier_phone1" placeholder="Supplier Phone1" required="">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label>Supplier Phone2</label>
                                                                    <input type="number" class="form-control" name="supplier_phone2" value="<?php echo $k[0]->supplier_phone2; ?>" id="supplier_phone2" placeholder="Supplier Phone2" required="">
                                                                
																</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            
                                                                <div class="form-group col-md-12">
                                                                    <label>Supplier Email</label>
                                                                    <input type="email" class="form-control" name="supplier_email" value="<?php echo $k[0]->supplier_email; ?>" id="supplier_email" placeholder="Supplier Email" required="">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label>Supplier Fax</label>
                                                                    <input type="text" class="form-control" name="supplier_faxno" value="<?php echo $k[0]->supplier_faxno; ?>" id="supplier_faxno" placeholder="Supplier Fax" required="">
                                                                </div>
                                                                <div class="form-group col-md-12">
																	<label> Supplier Description</label>
																	<textarea class="form-control" placeholder="Supplier Description" id="supplier_description" name="supplier_description" required="" style="margin: 0px -0.078125px 0px 0px; height: 100px; width: 392px;"><?php echo $k[0]->supplier_description; ?></textarea>
																</div>
																<div class="form-group col-md-12">
                                                                    <label>Category Id</label>
                                                                    <select class="form-control" required="" name="category_id" >
																	<option>Select Category</option>
																	 <?php
                                            foreach ($h->result() as $row) 
                                            { ?>

																	<option value="<?php echo $row->category_id; ?>" <?php if($k[0]->category_id==$row->category_id) echo 'selected'; ?>><?php echo $row->category_name; ?></option>
											<?php } ?>

																	</select>
																	
																	
																	
																	
                                                                </div>
                                                                
                                                                
                                                            
                                                            
                                                        </div>
                                                        


                                                    </div>

                                                </div>
                                                
                                                
                                                
                                                <div class="form-group col-md-4 center">
                                       <?php 
                                        if($k!='')
                                        { ?>
                                                    <button type="submit" class="btn btn-primary btn-block">Update Supplier</button>
                                            <?php }
                                            else
                                                ?>
                                              <button type="submit" class="btn btn-primary btn-block">Add Supplier</button>
                                           <?php }   
                                             ?>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->