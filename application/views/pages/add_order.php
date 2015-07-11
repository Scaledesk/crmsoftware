


<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                 <?php
                                 error_reporting(0);
                                 if($h!='')
                                 {   ?>
                                  <center><label><h2>Update Order</h2></label></center>  
                                <div class="row m-b-lg">
                                    <form id="wizardForm" action="<?=(base_url().'sales_management/do_edit_order'.$h[0]->order_id)?>" method="post">
                            <?php    }

                            else
                            { ?>
                                <center><label><h2>Add Order</h2></label></center>  
                                <div class="row m-b-lg">
                                    <form id="wizardForm" action="<?=(base_url().'sales_management/do_add_order')?>" method="post">
                            <?php 
                            }
                             ?>
                                <div class="col-md-6">
                                    
                                        <div class="form-group col-md-12">
                                            <label>Title</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="order_title" placeholder="Title" required="" value="<?php echo $h[0]->order_title; ?>">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Name of Client</label>
                                            <input type="text" class="form-control" value="<?php echo $h[0]->client_name; ?>" id="exampleInputPassword1" name="client_name" placeholder="Name of Client" required="">
                                        </div>
                                        
                                        <div class="form-group col-md-12">
                                            <label>Order Cast</label>
                                            <input type="text" class="form-control" id="" value="<?php echo $h[0]->order_cost; ?>" name="order_cost" placeholder="Order Cast" required>
                                        </div>

                                      </div> 
                                  









                                        <div class="col-md-6">

                                            
                                        <div class="form-group col-md-12">
                                            <label>Starting date</label>
                                            <input type="text" class="form-control" id="exampleInputEmail2" name="date1" value="<?php echo $h[0]->starting_date; ?>" placeholder="Enter Your Starting" required="">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Ending Date</label>
                                            <input type="text" class="form-control" id="exampleInputPassword2" name="date2" value="<?php echo $h[0]->proposed_ending_date; ?>" placeholder="Enter Your Ending date" required="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Lead Name</label>
                                            <select  class="form-control" id="exampleInputEmail1" name="lead_id" required="">
                                                <option value="0">-select-</option>
                                                <?php
                                                foreach ($k->result() as $row) 
                                                { ?>
                                                    <option value="<?php echo $row->lead_id; if($h[0]->lead_id==$row->lead_id) echo "selected"; ?>"><?php echo $row->lead_name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        
                                   
                                        </div>
                                        <?php if($h!='')
                                        { ?>
                                        <center><button type="submit" class="btn btn-info">Update</button></center>
                                        <?php } 
                                        else
                                        { ?>
                                            <center><button type="submit" class="btn btn-info">Submit</button></center>       
                                      <?php  } ?>

                                        


                                </form>

                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->