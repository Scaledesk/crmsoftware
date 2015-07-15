
     

					<div class="col-md-10 center">
                            
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Contextual table</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                
                                                <th>Date</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                           foreach($show_date->result() as $row)
                                            {
                                               $sdate=date('d-m-Y',strtotime($row->date)); 
                                             ?>
                                                      

                                                    <tr class="active">
                                                    <td><?php echo $sdate; ?></td>
                                                    <td><?php echo $row->title; ?></td>
                                                    
                                                    <td><?php echo $row->description; ?></td>
                                                    <td><a href="<?=(base_url().'sales_management/automation_mgt_update_select/')?><?php echo $row->application_id; ?>">Update</a>/<a href="<?=(base_url().'sales_management/automation_mgt_delete/')?><?php echo $row->application_id; ?>">Delete</a></td>
                                                </tr>
                                                <?php } ?>
                                            
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
						
						