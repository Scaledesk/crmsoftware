<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12 center">
                         <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">View Milestone</h4>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Expected Date</th>
                                                <th>End Date</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Expected Date</th>
                                                <th>End Date</th>
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
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row->milesstone_name; ?></td>
                                                <td><?php echo $row->milesstone_description; ?></td>
                                                <td><?php echo $row->milesstone_expected_date; ?></td>
                                                <td><?php echo $row->milesstone_end_date; ?></td>
                                                <td>
                                                  <a href="<?php echo base_url().'Product_control/editmilesstone/'.$row->milesstone_id; ?> ">Edit</a>|
                                                      <a href="<?php echo base_url().'Product_control/deletemilesstone/'.$row->milesstone_id; ?>" OnClick="return confirm('Are you sure you want to delete this record?');">Delete</a>
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
