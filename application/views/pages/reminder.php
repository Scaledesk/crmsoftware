<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-6 center">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                                              
                                
                                    <?php 
                                    if($h!='')
                                    { ?>
                                    <center><label><h2>Update Reminder</h2></label></center>  
                                        <div class="row">
                                        <form id="wizardForm" action="<?=(base_url().'sales_management/do_editreminder'.$h[0]->reminder_id)?>" method="post">
                                   <?php  } 
                                   else
                                   { ?>
                                  <center><label><h2>Add Reminder</h2></label></center>  
                                  <div class="row">
                                    <form id="wizardForm" action="<?=(base_url().'sales_management/do_addreminder')?>" method="post">
                                  <?php } ?>
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
                                            <input type="text" class="form-control" id="title" name="title" placeholder="Reminder Title" required="" value="<?php echo $h[0]->reminder_title; ?>">
                                        </div>

										<div class="form-group col-md-12">
                                            <label>Reminder Description</label>
                                            <textarea name="description" class="form-control"><?php echo $h[0]->reminder_description; ?></textarea>
                                        </div>
																			
                                        <div class="form-group col-md-12">
                                            <label>Reminder Date</label>
                                            <input type="text" class="form-control date-picker" id="r_date" name="r_date" value="<?php echo $h[0]->reminder_date; ?>" placeholder="Reminder Date" required="">
                                        </div>
                                        <?php if($h!='')
                                        { ?>
                                           <center> <button type="submit" class="btn btn-info">Update Reminder</button><center>  
                                       <?php }
                                       else
                                       { ?>
                                            <center> <button type="submit" class="btn btn-info">Add Reminder</button><center> 
                                        <?php } ?>
									</div> 
                                        
									

								
                                </form>

                             </div>
                        </div>
                            </div>
                        </div>
                    </div><!-- Row -->
        </div><!-- Main Wrapper -->