<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-6 center">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                                              
                                <center><label><h2>Leave Form</h2></label></center>  
                                <div class="row">
                                    <form id="wizardForm" action="<?=(base_url().'Employee/leave_employee/'?>" method="post">
                           
                                <div class="col-md-8 center">
								
										 <div class="form-group col-md-12">
                                            <label>Start Date</label>
                                            <input type="text" class="form-control date-picker" name="start_date" placeholder="Start Date" required="">
                                        </div>
										 <div class="form-group col-md-12">
                                            <label>End Date</label>
                                            <input type="text" class="form-control date-picker" name="end_date" placeholder="End Date" required="">
                                        </div>
                                    
                                        <div class="form-group col-md-12">
										<label>Reasion For Leave</label>
                                                <textarea class="form-control" name="resion_leave" id="" placeholder="Reasion For Leave" maxlength="500" required="" style="margin: 0px -0.140625px 0px 0px; height: 118px; width: 302px;"></textarea>
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