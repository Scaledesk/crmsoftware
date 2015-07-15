<script type="text/javascript">
function checkValue(obj)
   {
      var val = 0;
        
       for( i = 0; i < document.formselct.select1.length; i++ )
      {
          
           
              val = document.getElementById("name").value;
              
               

               if(val=='Paid')
              {
                 
                 
                 var theDiv = document.getElementById('ifpaid');
                   theDiv.style.display='';
               }
                else 
               {
                
                    document.getElementById('ifpaid').style.display='none';
              }
        
    }   
}   

</script>
<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-10 center">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                                              
                                <center><label><h2>Automation Management</h2></label></center>  
                                <div class="row m-b-lg">
                             <form id="wizardForm" name="formselct" action="<?=(base_url().'sales_management/automation_mgt_insert/')?>" method="post">
                           
                                    <div class="col-md-6">
                                    
                                        <div class="form-group col-md-12">
                                            <label>Name of Application</label>
                                            <input type="text" class="form-control" id="" name="application_name" placeholder="Name of Application" required="" value="<?php echo $h[0]->order_title; ?>">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Company of Application</label>
                                            <input type="text" class="form-control" name="application_company" placeholder="Company of Application" required="">
                                        </div>
                                        
                                        <div class="form-group col-md-12">
                                            <label>If paid</label></br>
                                           
												<select  class="form-control" id="name" name="select1" onchange="checkValue(this)">
                                                                <option >Select</option>
                                                                <option>Paid</option>
                                                                <option>Unpaid</option>
                                                
                                                                </select>
                                        </div>
										<div class="form-group col-md-12" id="ifpaid" style="display:none;">
                                            <label>Paid Cost</label>
											<input type="text" class="form-control" id="" name="paid_cost" placeholder="Paid Cost" ></br>
                                            <label>Next Due Date Of Payment</label>
                                            <input type="text" class="form-control date-picker" id="" name="due_date" placeholder="Next Due Date Or Payment">
                                        </div>

                                    </div> 
                                    <div class="col-md-6">

                                            <div class="form-group col-md-12">
                                                     <label for="exampleInputName">Subscription</label>
                                                     <textarea class="form-control" name="subscription" id="" placeholder="Subscription" required="" style="margin: 0px -0.828125px 0px 0px; height: 170px; width: 407px;"></textarea>
                                            </div>
                                    <div class="form-group col-md-12">
                                            <label>Description</label>
                                            <input type="text" class="form-control" id="" name="description" placeholder="Description" required="" value="<?php echo $h[0]->order_title; ?>">
                                    </div>
                                    </div>
                                    <center><input type="submit" name="submit"class="btn btn-info"></center>       
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Row -->
    </div><!-- Main Wrapper -->
				
				
