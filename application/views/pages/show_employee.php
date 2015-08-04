




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
                                                <th>Emp. Name</th>
                                                <th>Emp. Mobile No.</th>
                                                <th>Emp. Email</th>
                                                <th>Emp. Address</th>
                                                <th>Emp. Joining Date</th>
                                                <th>Emp. Gender</th>
                                                
                                                <th>Emp.Sallary</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Emp. Name</th>
                                                <th>Emp. Mobile No.</th>
                                                <th>Emp. Email</th>
                                                <th>Emp. Address</th>
                                                <th>Emp. Joining Date</th>
                                                <th>Emp. Gender</th>
                                                
                                                <th>Emp.Sallary</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            
                                            <?php 

                                           foreach($show_emp as $row)
                                            {
                                               
                                               //$sdate=date('d-m-Y',strtotime($row->date)); 
                                             ?>
                                                      

                                                    <tr class="active">
                                                    
                                                    <td><?php echo $row->emp_name; ?></td>
                                                    <td><?php echo $row->emp_mobile_no; ?></td>
                                                    <td><?php echo $row->emp_email; ?></td>
                                                    <td><?php echo $row->emp_address; ?></td>
                                                    <td><?php echo $row->emp_joining_date; ?></td>
                                                    <td><?php echo $row->emp_gender; ?></td>
                                                    <td><?php echo $row->emp_sallery; ?></td>
                                                    <td><a href="<?=(base_url().'Employee/update_employee_select/')?><?php echo $row->emp_id; ?>">Update</a>/<a href="<?=(base_url().'Employee/employee_delete/')?><?php echo $row->emp_id; ?>">Delete</a></td>
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

