
<div id="main-wrapper" class="container">
                    <div class="row">
                       <center> <a href="#" class="logo-name text-lg center">Update Contact</a></center>
                        <div class="col-md-6 center">
                            <h4><?php 
                            error_reporting(0);
                            if($msg!=''){
                                echo $msg;
                            }
                             ?></h4>

                                        <div class="col-md-6">
                                            <form class="m-t-md" action="<?=(base_url().'contact_control/do_edit_contact/'.$h[0]->contact_id)?>" method="post">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Name" required="" name="name" value="<?php echo $h[0]->contact_name;?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Designation" required="" name="designation" value="<?php echo $h[0]->contact_designation;?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Company Name" required="" name="c_name" value="<?php echo $h[0]->contact_company;?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Phone Number" required="" name="phone" value="<?php echo $h[0]->contact_phone;?>">
                                                </div>
                                                
                                                
                                                
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <div class="m-t-md">
                                                    
                                                
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Email" required="" name="email" value="<?php echo $h[0]->contact_email;?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Fax Number" required="" name="fax" value="<?php echo $h[0]->contact_fax_number;?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Description" required="" name="description" value="<?php echo $h[0]->contact_description;?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Relation With Compnay" required="" name="company_relation" value="<?php echo $h[0]->contact_company_relation;?>">
                                                </div>
                                            </div>
                                            </div>
                                                <div class="col-md-12">
                                                <button type="submit" class="btn btn-success btn-block m-t-xs">Update Contact</button>
                                                </div>
                                                
                                            </form>
                                        
                                    </div>
                                    </div>
                                
                           
                        
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
