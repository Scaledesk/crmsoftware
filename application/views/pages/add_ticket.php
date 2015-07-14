<div id="main-wrapper" class="container">
                    <div class="row">
                       <center> <h2>Add Ticket</h2></center>
                        <div class="col-md-6 center">

                                        <div class="col-md-6">
                                            <form class="m-t-md" action="<?=(base_url().'Ticket_control/do_add_ticket')?>" method="post">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="ticket_name" id="" placeholder="Ticket Name" required="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="ticket_raiser" id="" placeholder="Ticket Raised" required="">
                                                </div>
                                                <div class="form-group">
                                                <textarea class="form-control" name="ticket_description" id="" placeholder="Description" maxlength='500' required=""></textarea>
                                         
												</div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="ticket_category" id="" placeholder="Ticket Category" required="">
                                                </div>
                                                
                                                
                                                
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <div class="m-t-md">
                                                    
                                                
                                                <div class="form-group">
                                                <textarea class="form-control" name="ticket_admin_comment" id="" placeholder="Admin Comments" maxlength='500' required=""></textarea>
                                         		</div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control date-picker" name="ticket_raised_date" id="1" placeholder="Ticket Raised date" required="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control date-picker" name="ticket_closed_date" id="2" placeholder="Ticket Raised date" required="">
                                                </div>
                                                <div class="form-group">
                                            
                                           
															<select  class="form-control" id="" name=" ticket_resolution">
                                                                <option value="">Select</option>
                                                                <option value="Yes">Yes</option>
                                                                <option Calue="No">No</option>
                                                
                                                            </select>
												</div>
                                            </div>
                                            </div>
                                                <div class="col-md-12">
                                                <input type="submit" class="btn btn-success btn-block m-t-xs" value="Add Ticket">
                                                </div>
                                                
                                            </form>
                                        
                                    </div>
                                    </div>
                                
                           
                        
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->