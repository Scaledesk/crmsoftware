<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                         <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Employee Details</h4>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Reasion for Leave</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                               </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
												<th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Reasion for Leave</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php 

                                           foreach($show_leave as $row)
                                            {
                                               
                                               //$sdate=date('d-m-Y',strtotime($row->date)); 
                                             ?>
                                                      
                      
                                                    <tr class="active">
                                                    
                                                    <td><?php echo $row->leave_start_date; ?></td>
                                                    <td><?php echo $row->leave_end_date; ?></td>
                                                    <td><?php echo $row->leave_reason; ?></td>
                                                    <td><?php echo $row->leave_status; ?></td>
                                                    
                                                    <td><a href="<?=(base_url().'Employee/leave_update_employee_select/')?><?php echo $row->leave_id; ?>">Update</a>/<a href="<?=(base_url().'Employee/leave_employee_delete/')?><?php echo $row->leave_id; ?>">Delete</a></td>
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