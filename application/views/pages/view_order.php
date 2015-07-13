<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                         <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">List of Order Detail</h4>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>S No.</th>
                                                <th>Order Title</th>
                                                <th>Client Name</th>
                                                <th>Cost</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Lead</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>S No.</th>
                                                <th>Order Title</th>
                                                <th>Client Name</th>
                                                <th>Cost</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Lead</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php $i=0;
                                                foreach ($h->result() as $row)  
                                                 {  
                                                    $i++;
                                                 ?>

                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $row->order_title; ?></td>
                                                <td><?php echo $row->order_client_name; ?></td>
                                                <td><?php echo $row->order_cost; ?></td>
                                                <td><?php echo $row->order_start_date; ?></td>
                                                <td><?php echo $row->order_proposed_end_date; ?></td>
                                                <td><?php echo $row->lead_id; ?></td>
                                                <td><a href="<?php echo base_url().'sales_management/editorder/'.$row->order_id; ?> ">Edit</a>|
                                                    <a href="<?php echo base_url().'sales_management/deleteorder/'.$row->order_id; ?>" OnClick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                                                </td>


                                                
                                            </tr>

                                            <?php } ?>

                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->

