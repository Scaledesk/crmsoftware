<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                  <center><label><h2>Manage_invoice</h2></label></center>  
                                <div class="row m-b-lg">
                                    <form id="wizardForm" action="<?=(base_url().'sales_management/do_manage_invoice')?>" method="post">
                                <div class="col-md-12">
                                    
                                        <div class="form-group col-md-12">
                                            <label>Select order invoice</label>
                                            <select  class="form-control" id="exampleInputEmail1" name="lead_id" required="">
                                                <option value="0">-select-</option>
                                                <?php
                                                foreach ($h->result() as $row) 
                                                { ?>
                                                    <option value="<?php echo $row->lead_id; ?>"><?php echo $row->lead_name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        </div> 
                                  









                                        <div class="col-md-6">

                                            
                                        <div class="form-group col-md-12">
                                            <label>Starting date</label>
                                            <input type="text" class="form-control" id="exampleInputEmail2" name="date1" placeholder="Enter Your Starting" required="">
                                        </div>

                                        

                                        
                                   
                                        </div>
                                        <center><button type="submit" class="btn btn-info">Submit</button></center>

                                        


                                </form>

                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->