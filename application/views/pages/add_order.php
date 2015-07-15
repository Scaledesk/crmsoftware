


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
                                    <form id="wizardForm" action="<?=(base_url().'sales_management/do_edit_order'.$h[0]->order_id)?>" method="post" onsubmit="return checkvalid(this)">
                            <?php    }

                            else
                            { ?>
                                <center><label><h2>Add Order</h2></label></center>  
                                <div class="row m-b-lg">
                                    <form id="wizardForm" action="<?=(base_url().'sales_management/do_add_order')?>" method="post" onsubmit="return checkvalid(this)">
                            <?php 
                            }
                             ?>
                                <div class="col-md-6">
                                    
                                        <div class="form-group col-md-12">
                                            <label>Title</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="order_title" placeholder="Title" required="" value="<?php echo $h[0]->order_title; ?>">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Client Name</label>
                                            <input type="text" class="form-control" value="<?php echo $h[0]->order_client_name; ?>" id="exampleInputPassword1" name="client_name" placeholder="Name of Client" required="">
                                        </div>
                                        
                                        <div class="form-group col-md-12">
                                            <label>Order Cost</label>
                                            <input type="text" class="form-control" id="" value="<?php echo $h[0]->order_cost; ?>" name="order_cost" placeholder="Order Cost" required>
                                        </div>

                                      </div> 
                                  









                                        <div class="col-md-6">

                                            
                                        <div class="form-group col-md-12">
                                            <label>Start date</label>
                                            <input type="text" class="form-control date-picker" id="date1" name="date1" value="<?php echo $h[0]->order_start_date; ?>" placeholder="Start date" required="">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>End Date</label>
                                            <input type="text" class="form-control date-picker" id="date2" name="date2" value="<?php echo $h[0]->order_proposed_end_date; ?>" placeholder="End date" required="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Lead Name</label>
                                            <select  class="form-control" id="exampleInputEmail1" name="lead_id" required="">
                                                <option value="">Select</option>
                                                <?php
                                                foreach ($k->result() as $row) 
                                                { ?>
                                                    <option value="<?php echo $row->lead_id; ?>" <?php if($h[0]->lead_id==$row->lead_id) echo "selected"; ?> ><?php echo $row->lead_name; ?></option>
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

                                                        <script type="text/javascript">

                                           function checkvalid(obj)
                                           {
    var sD = new Date(obj.date1.value);
    var eD = new Date(obj.date2.value);
    //alert(eD);
    var sd1=new Date(sD.getFullYear(),sD.getMonth(),sD.getDate());
    var ed1=new Date(eD.getFullYear(),eD.getMonth(),eD.getDate());
    //alert(ed1)
    
    if(sd1>ed1)
    {
      alert('End date should be greater than startDate');
      obj.date2.focus();
      return false;

    }
 
 return true;
    
}
 </script>
