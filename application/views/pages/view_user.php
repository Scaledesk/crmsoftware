<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                         <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Register table</h4>
                                </div>
                                <div class="panel-body">
                               <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Address</th>
                                                <th>Telephone Number</th>
                                                <th>Fax Number</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Address</th>
                                                <th>Telephone Number</th>
                                                <th>Fax Number</th>
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
                                                <td><?php echo $row->user_name; ?></td>
                                                <td><?php echo $row->user_email; ?></td>
                                                <td><?php echo $row->user_password; ?></td>
                                                <td><?php echo $row->user_address; ?></td>
                                                <td><?php echo $row->user_phone_number; ?></td>
                                                <td><?php echo $row->user_fax_number; ?></td>
                                                <td>
                                                  <a href="<?php echo base_url().'User_control/edit_user/'.$row->user_id; ?> ">Edit</a>|
                                                  <a href="<?php echo base_url().'User_control/delete_user/'.$row->user_id; ?>" OnClick="return confirm('Are you sure you want to delete this record?');">Delete</a>
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
