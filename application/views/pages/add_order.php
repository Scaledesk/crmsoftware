<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                  <center><label><h2>Add Order</h2></label></center>  
                                <div class="row m-b-lg">
                                    <form id="wizardForm" action="<?=(base_url().'sales_management/do_add_order')?>" method="post">
                                <div class="col-md-6">
                                    
                                        <div class="form-group col-md-12">
                                            <label>Title</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="order_title" placeholder="Title" required="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Name of Client</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="client_name" placeholder="Name of Client" required="">
                                        </div>
                                        
                                        <div class="form-group col-md-12">
                                            <label>Order Cast</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="order_cost" placeholder="Order Cast" required>
                                        </div>

                                      </div> 
                                  









                                        <div class="col-md-6">

                                            
                                        <div class="form-group col-md-12">
                                            <label>Starting date</label>
                                            <input type="text" class="form-control" id="exampleInputEmail2" name="date1" placeholder="Enter Your Starting" required="">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Ending Date</label>
                                            <input type="text" class="form-control" id="exampleInputPassword2" name="date2" placeholder="Enter Your Ending date" required="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Lead Name</label>
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
                                        <center><button type="submit" class="btn btn-info">Submit</button></center>

                                        <script type="text/javascript">
                                 $('input[name~=date1],input[name~=date2]').each(function(){
                                        $(this).datepicker({dateFormat:'yy-mm-dd'});
                                    });</script>


                                </form>

                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->