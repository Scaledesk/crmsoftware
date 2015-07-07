
<div id="main-wrapper" class="container">
                    <div class="row">
                       <center><h2> Add Contact</h2></center>
                        <div class="col-md-6 center">
                            <h4><?php 
                            error_reporting(0);
                            if($msg!=''){
                                echo $msg;
                            }
                             ?></h4>

                                        <div class="col-md-6">
                                            <form class="m-t-md" action="<?=(base_url().'contact_control/do_add_contact')?>" method="post">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Name" required="" name="name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Designation" required="" name="designation">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Company Name" required="" name="c_name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Phone Number" required="" name="phone">
                                                </div>
                                                
                                                
                                                
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <div class="m-t-md">
                                                    
                                                
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Email" required="" name="email">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Fax Number" required="" name="fax">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Description" required="" name="description">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Relation With Compnay" required="" name="company_relation">
                                                </div>
                                            </div>
                                            </div>
                                                <div class="col-md-12">
                                                <button type="submit" class="btn btn-success btn-block m-t-xs">Add Contact</button>
                                                </div>
                                                
                                            </form>
                                        
                                    </div>
                                    </div>
                                
                           
                        
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
