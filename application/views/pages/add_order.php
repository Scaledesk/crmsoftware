<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>






<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <center><h3>Add Order</h3></center>
                                    <div class="col-md-6">
                                    <form >
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Title">
                                        </div>
                                        <div class="form-group">
                                            <label>Name of Client</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name of Client">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Order Cast</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Order Cast">
                                        </div>

                                      </div> 
                                      <div class="col-md-6">

                                        <div class="form-group">
                                            <label>Date Of Starting</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="date1" placeholder="Date Of Starting">
                                        </div>
                                        <div class="form-group">
                                            <label>Date Of Praposed Ending</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="date2" placeholder="Date Of Praposed Ending">
                                        </div>
                                        <div class="form-group">
                                            <label>Lead Name</label>
                                            <select  class="form-control" id="exampleInputEmail1">
                                                <option>select Lead Name</option></select>
                                        </div>

                                      </div> 
                                        <center><button type="submit" class="btn btn-primary">Submit</button></center>
                                    
                                            <script type="text/javascript">
                                 $('input[name~=date1],input[name~=date2]').each(function(){
                                        $(this).datepicker({dateFormat:'yy-mm-dd'});
                                    });</script>

                                    </form>
                                
                            </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->