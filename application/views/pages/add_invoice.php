<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>




<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                  <center><label><h2>Add invoice</h2></label></center>  
                                <div class="row m-b-lg">
                                <form action="<?=(base_url().'sales_management/do_add_invoice')?>" method="post">    
                                <div class="col-md-12 center">
                                    
                                        <div class="form-group col-md-4 center">
                                            <label>Select order id</label>
                                            <select  class="form-control" id="exampleInputEmail1" name="order_id" required="">
                                                <option value="0">-select-</option>
                                                <option value="0">Paid</option>
                                                <option value="0">Unpaid</option>
                                            <?php
                                            foreach ($k->result() as $row) 
                                            { ?>
                                                   <option value="<?php echo $row->order_id; ?>"><?php echo $row->order_title; ?></option>
                                        <?php } ?>
                                                
                                            </select>
                                        </div></br>
                                        <form action="" name="" method="">
                                                        <div class="col-md-6">
                                                            
                                                           <div class="form-group col-md-12"></br></br></br></br>
                                                                    <label for="exampleInputName">Due Date </label>
                                                                    <input type="text" class="form-control" name="date1" id="exampleInputName" placeholder="Due Date" required="">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                <label>Status</label>
                                                                <select  class="form-control" id="exampleInputEmail1" name="" required="">
                                                                <option value="0">-select Status-</option>
                                                
                                                                </select>
                                                            </div>
                                                        
                                                        </div>
                                                        <div class="col-md-6">
                                                            
                                                           <div class="form-group col-md-12"></br></br></br></br>
                                                                    <label for="exampleInputName">Total Amount </label>
                                                                    <input type="text" class="form-control" name="relation" id="exampleInputName" placeholder="Total Amount" required="">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputName">Amount Paid </label>
                                                                    <input type="text" class="form-control" name="" id="exampleInputName" placeholder="Amount paid" required="">
                                                                </div>
                                                                
                                                        
                                                        </div>
                                                        <div class="col-md-12">
                                                            
                                                           <div class="form-group col-md-12">
                                                                    <label for="exampleInputName">Amount Due </label>
                                                                    <input type="text" class="form-control" name="" id="exampleInputName" placeholder="Amount Due" required="">
                                                                </div>
                                                                
                                                        
                                                        </div>
                                                        

                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                  <div class="col-md-6 center">
                                                <button type="submit" class="btn btn-success btn-block m-t-xs">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                         
                                            
                                        
                                                        
                                                
                                                
                                                
                                                  
                                            


                                        
                                    <script type="text/javascript">
                                 $('input[name~=date1]').each(function(){
                                        $(this).datepicker({dateFormat:'dd-mm-yy'});
                                    });</script>
                

                                        </div>
                                
                                </div>

                                    </form>
                                        </div>


                                        
                                                           

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
