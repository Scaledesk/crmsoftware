
<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                                              
                                 
									
                                <div class="row m-b-lg">
                                

                                <form id="wizardForm" action="<?=(base_url().'sales_management/insert_calendar/')?>" method="post">
                           
										<div class="col-md-6">
										<center><label><h2>Add Event</h2></label></center> 
                                    
                                        <div class="form-group col-md-12">
                                            <label> Date</label>
                                            <input type="text"   class="form-control date-picker" name="date1" placeholder="DD/MM/YYYY" required>
                                        </div>
                                        
                                        
                                        <div class="form-group col-md-12">
                                            <label>Title</label>
                                            <input type="text"  class="form-control" id=""  name="title" placeholder="Title" required>
                                        </div>
										<div class="form-group col-md-12">
                                        <label for="exampleInputEmail">Description</label>
                                        <textarea class="form-control"  placeholder="Description" name="description" required="" ></textarea>
                                        </div>
										<div class="form-group col-md-12">
                                            
                                            <center><input type="submit" class="btn btn-success btn-rounded" value="Add Event">  </center>
                                        </div>

                                      </div>
								</form>
                                  





								<form id="wizardForm" action="<?=(base_url().'sales_management/show_calendar_table/')?>" method="post">


                                        <div class="col-md-6">

                                            <center><label><h2>Search Event</h2></label></center>
                                        

                                        <div class="form-group col-md-12">
                                            <label>Start Date</label>
                                            <input type="text" class="form-control date-picker" name="startdate" placeholder="MM/DD/YYYY" required>
                                          </div>
                                          <div class="form-group col-md-12">
                                            <label>End Date</label>
                                            <input type="text" class="form-control date-picker" name="enddate" placeholder="MM/DD/YYYY" required>
                                          </div>
										  <div class="form-group col-md-12">
                                            
                                          <center><input type="submit" class="btn btn-success btn-rounded" value="Event Search"></center>
                                          </div>

                                        
                                   
                                        </div>
									</form>

                                    </div>
                                    </div>
                                   
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
				
				