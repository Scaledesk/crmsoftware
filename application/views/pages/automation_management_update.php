

<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-10 center">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                                              
                                <center><label><h2>Automation Management</h2></label></center> 
                                <div class="row m-b-lg">
                             <form id="wizardForm" action="<?=(base_url().'sales_management/automation_mgt_update/'.$h[0]->application_id)?>" method="post">
                           
                                    <div class="col-md-6">
                                    
                                        <div class="form-group col-md-12">
                                            <label>Name of Application</label>
                                            <input type="text" class="form-control" id="" value="<?php echo $h[0]->name_application;?>" name="application_name" >
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Company of Application</label>
                                            <input type="text" class="form-control" name="application_company" value="<?php echo $h[0]->company_of_application;?>">
                                        </div>
                                        
                                        <div class="form-group col-md-12">
                                            <label>If paid</label></br>
                                           
												<select  class="form-control" id="_name" name="">
                                                                <option value="select">Select</option>
                                                                <option>Paid</option>
                                                                <option>Unpaid</option>
                                                
                                                                </select>
                                        </div>
										<div class="form-group col-md-12" >
                                            <label>Paid Cost</label>
											<input type="text" class="form-control" id="" value="<?php echo $h[0]->application_cost;?>" name="paid_cost" ></br>
                                            <label>Next Due Date Of Payment</label>
                                            <input type="text" class="form-control date-picker"   value="<?php echo $h[0]->next_due_date;?>" name="due_date" >
                                        </div>

                                    </div> 
                                    <div class="col-md-6">

                                            <div class="form-group col-md-12">
                                                     <label for="exampleInputName">Subscribed by</label>
                                                   <input type="text" class="form-control"  name="subscribed"  value="<?php echo $h[0]->subscribed;?>" >  
                                            </div>
                                    <div class="form-group col-md-12">
                                            <label>Description</label>
                                            
                                            <textarea class="form-control" name="description"  style="margin: 0px -0.828125px 0px 0px; height: 170px; width: 407px;"><?php echo $h[0]->description;?></textarea>
                                    </div>
                                    </div>
                                    <center><input type="submit" name="submit"class="btn btn-info" value="Update"></center>       
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Row -->
    </div><!-- Main Wrapper -->
				
				
