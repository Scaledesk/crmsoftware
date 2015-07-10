<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-6 center">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                                              
                                <center><label><h2>Reminder</h2></label></center>  
                                <div class="row">
                                    <form id="wizardForm" action="<?=(base_url().'sales_management/do_addreminder')?>" method="post">
                           
                                <div class="col-md-6 center">
                                    
                                        <div class="form-group col-md-12">
                                            <label>Invoice Id</label>
                                            <input type="text" class="form-control" id="" name="invoice_id" placeholder="Reminder Title" required="" value="<?php echo $k[0]->invoice_id; ?>" readonly>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Due Date</label>
                                            <input type="text" class="form-control" id="title" name="title" placeholder="Reminder Title" required="" value="<?php echo $k[0]->due_date; ?>" readonly>
                                        </div>    

                                        <div class="form-group col-md-12">
                                            <label>Reminder Title</label>
                                            <input type="text" class="form-control" id="title" name="title" placeholder="Reminder Title" required="" value="">
                                        </div>

										<div class="form-group col-md-12">
                                            <label>Reminder Description</label>
                                            <textarea name="description" class="form-control"></textarea>
                                        </div>
																			
                                        <div class="form-group col-md-12">
                                            <label>Reminder Date</label>
                                            <input type="text" class="form-control" id="r_date" name="r_date" value="" placeholder="Reminder Date" required="">
                                        </div>
										<center> <button type="submit" class="btn btn-info">Add Reminder</button><center> 
									</div> 
                                        
									<script type="text/javascript">
                                 $('input[name~=r_date]').each(function(){
                                        $(this).datepicker({dateFormat:'yy-mm-dd'});
                                    });</script>

								
                                </form>

                             </div>
                        </div>
                            </div>
                        </div>
                    </div><!-- Row -->
        </div><!-- Main Wrapper -->