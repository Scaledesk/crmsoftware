
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                              <div class="panel panel-white">
																<div class="panel-heading clearfix">
														<!--		<h4 class="panel-title">Contextual table</h4>-->
																</div>
																<div class="panel-body">
																<table class="table">
																<thead>
																<tr>
																<th>Sr. No.</th>
																<th>invoice id</th>
																<th>Title</th>
																<th>Description</th>
																<th>Reminder Date</th>
																<th>Action</th>
															</tr>
														</thead>
													    <tbody>
													    	<?php 
													    	$i=0;
													    	 foreach ($k->result() as $row)  
                                                 			{  
                                                 				$i++;
                                                 			?>
																<tr class="active">
																<th scope="row"><?php echo $i++; ?></th>
																<td><?php echo $row->invoice_id; ?></td>
																<td><?php echo $row->reminder_title; ?></td>
																<td><?php echo $row->reminder_description; ?></td>
																<td><?php echo $row->reminder_date; ?></td>
																<td>
																	<a href="<?php echo base_url().'sales_management/editreminder/'.$row->reminder_id; ?>">Edit</a>|
                                                    			</td>	
														       </tr>
														       <?php } ?>
														                                   
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>  