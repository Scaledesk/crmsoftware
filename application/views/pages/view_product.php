
<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-10 center">
                         <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">View Product</h4>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                              <th>S. No.</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Status </th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Status </th>
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
                                               <td><?php echo $i; ?> </td>
                                                <td><?php echo $row->product_name; ?></td>
                                                <td><?php echo $row->product_description; ?></td>
                                                <td><?php echo date('d/m/Y',strtotime($row->product_start_date)); ?></td>
                                                <td><?php echo date('d/m/Y',strtotime($row->product_end_date)); ?></td>
                                                <td><?php echo $row->product_status; ?></td>
                                                <td>
                                                  <a href="<?php echo base_url().'Product_control/editproduct/'.$row->product_id; ?> ">Edit</a>|
                                                      <a href="<?php echo base_url().'Product_control/deleteproduct/'.$row->product_id; ?>" OnClick="return confirm('Are you sure you want to delete this record?');">Delete</a>

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
