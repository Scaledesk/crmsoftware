<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-6 center">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                                              
                                <center><label><h2>Leave Form</h2></label></center>  
                                <div class="row"> 
                                    <form id="wizardForm" action="<?=(base_url().'Employee/leave_update_employee/'.$show_leave[0]->leave_id)?>" method="post">
                           
                                <div class="col-md-8 center">
								
										 <div class="form-group col-md-12">
                                            <label>Start Date</label>
                                            <input type="text" class="form-control date-picker" name="start_date" value="<?php echo $show_leave[0]->leave_start_date;?>">
                                        </div>
										 <div class="form-group col-md-12"> 
                                            <label>End Date</label>
                                            <input type="text" class="form-control date-picker" name="end_date" value="<?php echo $show_leave[0]->leave_end_date;?>">
                                        </div>
                                    
                                        <div class="form-group col-md-12">
										<label>Reasion For Leave</label>
                                                <textarea class="form-control" name="resion_leave" id=""  maxlength="500" required="" style="margin: 0px -0.140625px 0px 0px; height: 118px; width: 302px;"> <?php echo $show_leave[0]->leave_reason;?></textarea>
										</div>
																			
                                       
										<center> <input type="submit" class="btn btn-info" value="Submit"><center> 
									</div> 
                                        
									

								
                                </form>

                             </div>
                        </div>
                            </div>
                        </div>
                    </div><!-- Row -->
        </div><!-- Main Wrapper -->