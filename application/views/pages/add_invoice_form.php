<?php
include_once("header.php")
?>


<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>




<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-10 center">
                            <div class="panel panel-white">
                                <div class="panel-body">
                    
                                     <div id="rootwizard">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user m-r-xs"></i><b>Add Invoices Form</b></a></li>
                                            
                                        </ul>
                                                                                                    
                                                                         

                                            <div class="tab-content">
                                                <div class="tab-pane active fade in" id="tab1">
                                                    <div class="row m-b-lg">
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
																<th>#</th>
																<th>Column heading</th>
																<th>Column heading</th>
																<th>Column heading</th>
																<th>Column heading</th>
																<th>Column heading</th>
															</tr>
														</thead>
													<tbody>
																<tr class="active">
																<th scope="row">1</th>
																<td>Column content</td>
																<td>Column content</td>
																<td>Column content</td>
																<td>Column content</td>
																<td>Column content</td>
														</tr>
																<tr class="success">
																	<th scope="row">3</th>
																	<td>Column content</td>
																	<td>Column content</td>
																	<td>Column content</td>
																	<td>Column content</td>
																	<td>Column content</td>
																</tr>
														<tr class="info">
															<th scope="row">5</th>
															<td>Column content</td>
															<td>Column content</td>
															<td>Column content</td>
															<td>Column content</td>
															<td>Column content</td>
														</tr>                                     
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>  
                                                     </div>
                                                        </div>
														<form action="" name="" method="">
                                                        <div class="col-md-6">
                                                            
                                                           <div class="form-group col-md-12"></br></br></br></br>
                                                                    <label for="exampleInputName">Due Date </label>
                                                                    <input type="text" class="form-control" name="date1" id="exampleInputName" placeholder="Due Date" required="">
                                                                </div>
																<div class="form-group col-md-12">
																<label>Status</label>
																<select  class="form-control" id="exampleInputEmail1" name="" required="">
																<option value="0">-select Status-</option>
                                                
																</select>
															</div>
                                                        
                                                        </div>
														<div class="col-md-6">
                                                            
                                                           <div class="form-group col-md-12"></br></br></br></br>
                                                                    <label for="exampleInputName">Total Amount </label>
                                                                    <input type="text" class="form-control" name="relation" id="exampleInputName" placeholder="Total Amount" required="">
                                                                </div>
																<div class="form-group col-md-12">
                                                                    <label for="exampleInputName">Amount Paid </label>
                                                                    <input type="text" class="form-control" name="" id="exampleInputName" placeholder="Amount paid" required="">
                                                                </div>
																
                                                        
                                                        </div>
														<div class="col-md-12">
                                                            
                                                           <div class="form-group col-md-12">
                                                                    <label for="exampleInputName">Amount Due </label>
                                                                    <input type="text" class="form-control" name="" id="exampleInputName" placeholder="Amount Due" required="">
                                                                </div>
																
                                                        
                                                        </div>
                                                        

                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                  <div class="col-md-6 center">
                                                <button type="submit" class="btn btn-success btn-block m-t-xs">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
				<script type="text/javascript">
                                 $('input[name~=date1],input[name~=date2]').each(function(){
                                        $(this).datepicker({dateFormat:'dd-mm-yy'});
                                    });</script>
				
				
				<?php
include_once("footer.php")
?>