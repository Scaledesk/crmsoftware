
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
																<th>Due Date</th>
																<th>Total Amount</th>
																<th>Amount Paid</th>
																<th>Amount Due</th>
																<th>Status</th>
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
																<td><?php echo $row->due_date; ?></td>
																<td><?php echo $row->total_amount; ?></td>
																<td><?php echo $row->amount_paid; ?></td>
																<td><?php echo $row->amount_due; ?></td>
																<td> <?php echo $row->status; ?> </td>
																<td>
																	<a href="<?php echo base_url().'sales_management/editinvoice/'.$row->invoice_id; ?>">Edit</a>|
                                                    <a href="<?php echo base_url().'sales_management/deleteinvoice/'.$row->invoice_id; ?>"  OnClick="return confirm('Are you sure you want to delete this record?');">Delete</a>|
                                                    <a href="<?php echo base_url().'sales_management/addreminder/'.$row->invoice_id; ?>">Add Reminder</a>
																</td>	
														       </tr>
														       <?php } ?>
														                                   
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>  