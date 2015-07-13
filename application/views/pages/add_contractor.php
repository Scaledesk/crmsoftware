<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-6 center">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                                              
                                <center><label><h2>Add Contractor</h2></label></center>  
                                <div class="row">
                                    <form id="wizardForm" action="<?=(base_url().'sales_management/do_add_contractor')?>" method="post">
                           
														<div class="col-md-10 center">
                                    
															<div class="form-group col-md-12">
                                                                    <label>Supplier Name</label>
																	<select  class="form-control" id="supplier_name" name="supplier_id" required="">
                                                                <option value="select">Select Name</option>
                                                                 <?php 
                                                                 foreach ($h->result() as $row) {
                                                                 ?>   
                                                                <option value="<?php echo $row->supplier_id;?>"><?php echo $row->supplier_name; ?></option>
                                                                <?php } ?>
                                                
                                                                </select>
                                                                </div>
																	<div class="form-group col-md-12">
                                                                    <label for="exampleInputName">Contractor Description</label>
                                                                    <textarea class="form-control" name="description" id="description" placeholder="Contractor Description" required="" style="margin: 0px -0.5px 0px 0px; height: 150px; width: 393px;"></textarea>
                                                                </div>
																			
                                        
																<center> <input type="submit" class="btn btn-success btn-rounded" value="Add"><center> 
															</div> 
                                        
									

								
															</form>

												</div>
									</div>
                            </div>
                        </div>
                    </div><!-- Row -->
        </div><!-- Main Wrapper -->