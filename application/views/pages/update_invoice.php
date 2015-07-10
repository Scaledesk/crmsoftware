<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                <center><label><h2>Upadate Invoice</h2></label></center>  
                                <div class="row m-b-lg">
                                <form id="wizardForm" action="" method="post">
                           
                                <div class="col-md-6">
                                    
                                        <div class="form-group col-md-12">
                                            <label>Order Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="" placeholder="Order Name" required="" value="<?php echo $h[0]->order_id; ?>">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Due Date</label>
                                            <input type="text" class="form-control" id="exampleInputPassword2" name="date2" value="<?php echo $h[0]->due_date; ?>" placeholder="Due date" required="">
                                        </div>
                                        
                                        <div class="form-group col-md-12">
                                            <label>Total Amount</label>
                                            <input type="text" class="form-control" id="total_amount" value="<?php echo $h[0]->total_amount; ?>" name="total_amount"  placeholder="Total Amount" required>
                                        </div>

                                      </div> 
                                  
                                        <div class="col-md-6">

                                            
                                        

                                        <div class="form-group col-md-12">
                                            <label>Amount paid</label>
                                            <input type="text" class="form-control" id="amount_paid" name="amount_paid" onchange="changedue(this);" placeholder="Amount paid" required="" value="<?php echo $h[0]->amount_paid; ?>">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Amount Due</label>
                                            <input type="text" class="form-control" id="amount_due" name="amount_due" placeholder="Amount Due" required="" value="<?php echo $h[0]->amount_due; ?>">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Status</label>
                                             <select  class="form-control" id="exampleInputEmail1" name="status" required="">
                                                                <option value="select">-select Status-</option>
                                                                <option value="Paid" <?php if($h[0]->status=='Paid') echo 'selected'; ?> >Paid</option>
                                                                <option value="Unpaid" <?php if($h[0]->status=='Unpaid') echo 'selected'; ?> >Unpaid</option>
                                                
                                                                </select>
                                        </div>

                                        
                                   
                                        </div>
                                        
                                        
                                       
                                        
                                            <center><button type="submit" class="btn btn-info">Upadate</button></center>       
                                      
                                        <script type="text/javascript">
                                 $('input[name~=date1],input[name~=date2]').each(function(){
                                        $(this).datepicker({dateFormat:'yy-mm-dd'});
                                    });</script>


                                </form>

                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->

                <script>

                function changedue()
                {
                    var tAmt=document.getElementById('total_amount').value;
                    var pAmt=document.getElementById('amount_paid').value;
                    var due=tAmt-pAmt;
                    document.getElementById('amount_due').value=due;

                }

                </script>