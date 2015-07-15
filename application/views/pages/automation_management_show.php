<!--  -->


                        <!-- ............................................................................. -->

                        <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                         <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Automation Management</h4>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>Aplication Name</th>
                                                <th>Aplication Of Comp.</th>
                                                <th>Paid Cost</th>
                                                <th>Due date for Payment</th>
                                                <th>Subscription</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Aplication Name</th>
                                                <th>Aplication Of Comp.</th>
                                                <th>Paid Cost</th>
                                                <th>Due date for Payment</th>
                                                <th>Subscription</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <!-- <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr> -->
                                             <?php 
                                           foreach($h->result() as $row)
                                            {
                                               
                                             ?>
                                                        
                                                        <tr>
                                                    <td><?php echo $row->name_application; ?></td>
                                                    <td><?php echo $row->company_of_application; ?></td>
                                                    
                                                    <td><?php echo $row->application_cost; ?></td>
                                                    <td><?php echo $row->next_due_date; ?></td>
                                                    <td><?php echo $row->subscribed;?></td>
                                                    <td><?php echo $row->description; ?></td>
                                                    <td><a href="<?=(base_url().'sales_management/automation_mgt_update_select/')?><?php echo $row->application_id; ?>">Update</a>/<a href="<?=(base_url().'sales_management/automation_mgt_delete/')?><?php echo $row->application_id; ?>">Delete</a></td>
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


                        
						
