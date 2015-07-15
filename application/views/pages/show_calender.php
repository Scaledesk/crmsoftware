



		<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-8 center">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                                              
                                <center><label><h2>Show Calendar</h2></label></center>   
									<div class="row">
                                <form id="wizardForm" action="<?=(base_url().'sales_management/update_calendar/'.$h[0]->id)?>" method="post">
                           
										<div class="col-md-8 center">
										<div class="form-group col-md-12">
                                            <label>Date</label>
                                            <input type="text" class="form-control date-picker" value="<?php echo date('d-m-Y', strtotime($h[0]->date));  ?>"name="date2" >
                                        </div>
                                    
                                        <div class="form-group col-md-12">
                                            <label>Title</label>
                                            <input type="text" class="form-control" id=""value="<?php echo $h[0]->title; ?>" name="title" >
                                        </div>
										<div class="form-group col-md-12">
                                                <label for="exampleInputName">Description</label>
                                                <textarea class="form-control"  name="description" id="description" maxlength='500' style="margin: 0px -0.5px 0px 0px; height: 150px; width: 431px;"><?php echo $h[0]->description; ?></textarea>
                                         </div>
																			
                                        
										<center> <input type="submit" class="btn btn-info" name="update" value="Update"><center> 
									</div> 
                                        
									

								
                                </form>

                             </div>
                        </div>
                            </div>
                        </div>
                    </div><!-- Row -->
        </div><!-- Main Wrapper -->
						
						
