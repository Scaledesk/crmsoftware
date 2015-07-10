<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-6 center">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                                              
                                <center><label><h2>Reminder</h2></label></center>  
                                <div class="row">
                                    <form id="wizardForm" action="" method="post">
                           
                                <div class="col-md-6 center">
                                    
                                        <div class="form-group col-md-12">
                                            <label>Reminder Title</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="" placeholder="Reminder Title" required="" value="<?php echo $h[0]->order_title; ?>">
                                        </div>
										<div class="form-group col-md-12">
                                            <label>Reminder Description</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="" placeholder="Reminder Description" required="" value="<?php echo $h[0]->order_title; ?>">
                                        </div>
																			
                                        <div class="form-group col-md-12">
                                            <label>Due Date</label>
                                            <input type="text" class="form-control" id="exampleInputPassword2" name="date1" value="" placeholder="Due date" required="">
                                        </div>
										<center> <button type="submit" class="btn btn-info">Submit</button><center> 
									</div> 
                                        
									<script type="text/javascript">
                                 $('input[name~=date1]').each(function(){
                                        $(this).datepicker({dateFormat:'yy-mm-dd'});
                                    });</script>

								
                                </form>

                             </div>
                        </div>
                            </div>
                        </div>
                    </div><!-- Row -->
        </div><!-- Main Wrapper -->