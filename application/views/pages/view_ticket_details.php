<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                         <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">View Ticket Details</h4>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Ticket Name</th>
                                                <th>Ticket Raised</th>
                                                <th>Description</th>
                                                <th>Ticket Category</th>
                                                <th>Admin Comments</th>
                                                <th>Ticket Raised date</th>
                                                <th>Ticket closed date</th>
                                                <th>Ticket Resolution</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
												<th>Sr. No.</th>
                                                <th>Ticket Name</th>
                                                <th>Ticket Raised</th>
                                                <th>Description</th>
                                                <th>Ticket Category</th>
                                                <th>Admin Comments</th>
                                                <th>Ticket Raised date</th>
                                                <th>Ticket closed date</th>
                                                <th>Ticket Resolution</th>
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
                                                <td><?php echo $row->ticket_name; ?></td>
                                                <td><?php echo $row->ticket_raiser; ?></td>
                                                <td><?php echo $row->ticket_description; ?></td>
                                                <td><?php echo $row->ticket_category; ?></td>
                                                <td><?php echo $row->ticket_admin_comment; ?></td>
                                                <td><?php echo date('d-m-Y',strtotime($row->ticket_raised_date)); ?></td>
                                                <td><?php echo date('d-m-Y',strtotime($row->ticket_closed_date)); ?></td>
                                                <td><?php echo $row->ticket_resolution; ?></td>
                                                <td>
                                                    <a href="<?php echo base_url().'Ticket_control/edit_ticket/'.$row->ticket_id; ?> ">Edit</a>|
                                                    <a href="<?php echo base_url().'Ticket_control/delete_ticket/'.$row->ticket_id; ?>" OnClick="return confirm('Are you sure you want to delete this record?');">Delete</a>
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
