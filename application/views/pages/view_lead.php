<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                         <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">List of Lead Detail</h4>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Lead Name</th>
                                                <th>Lead Generate Date</th>
                                                <th>Lead Source</th>
                                                <th>Lead Service</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Lead Name</th>
                                                <th>Lead Generate Date</th>
                                                <th>Lead Source</th>
                                                <th>Lead Service</th>
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
                                                <td><?php echo $row->lead_name; ?></td>
                                                <td><?php echo $row->lead_generate_date; ?></td>
                                                <td><?php echo $row->lead_source; ?></td>
                                                <td><?php echo $row->lead_service; ?></td>
                                                <td><a href="<?php echo base_url().'sales_management/editlead/'.$row->lead_id; ?> ">Edit</a>|
                                                    <a href="<?php echo base_url().'sales_management/deletelead/'.$row->lead_id; ?>" OnClick="return confirm('Are you sure you want to delete this record?');">Delete</a>
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

