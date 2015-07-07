
<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-9 center">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Update Company Details</h4>

                                    <?php 
                            error_reporting(0);
                            if($msg!='')
                            {
                               echo $msg;
                            }?>

                                </div>
                                <div class="panel-body">
                                    

                                    <form class="form-horizontal" action="<?=(base_url().'company_control/do_edit_company/'.$h[0]->company_id)?>" method="post">
                                        
                                        
                                        <div class="form-group has-success">
                                            <label for="input-success" class="col-sm-4 control-label">Name</label>
                                            <div class="col-sm-4 center">
                                                <input type="text" class="form-control" id="input-success" name="name" value="<?php echo $h[0]->company_name;?>">
                                            </div>
                                        </div>
                                        <div class="form-group has-success">
                                            <label for="input-success" class="col-sm-4 control-label">Address</label>
                                            <div class="col-sm-4 center">
                                                <textarea class="form-control" name="address" value="<?php echo $h[0]->company_address;?>"><?php echo $h[0]->company_address;?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group has-success">
                                            <label for="input-success" class="col-sm-4 control-label">Phone Number1</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input-success" name="phone1" value="<?php echo $h[0]->company_phone1;?>">
                                            </div>
                                        </div>
                                        <div class="form-group has-success">
                                            <label for="input-success" class="col-sm-4 control-label">Phon Number2</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input-success" name="phone2" value="<?php echo $h[0]->company_phone2;?>">
                                            </div>
                                        </div>
                                        <div class="form-group has-success">
                                            <label for="input-success" class="col-sm-4 control-label">Email Id</label>
                                            <div class="col-sm-4">
                                                <input type="email" class="form-control" id="input-success" name="email" value="<?php echo $h[0]->company_email;?>">
                                            </div>
                                        </div>
                                        <div class="form-group has-success">
                                            <label for="input-success" class="col-sm-4 control-label">Fax Number</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input-success" name="faxno" value="<?php echo $h[0]->company_fax_number;?>">
                                            </div>
                                        </div>

                                        <div class="form-group has-success">
                                            <label for="input-success" class="col-sm-4 control-label">Domain Name</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input-success" name="domain" value="<?php echo $h[0]->company_domain;?>">
                                            </div>
                                        </div>
                                        <div class="form-group has-success">
                                            <label for="input-success" class="col-sm-4 control-label">Desciption of Company</label>
                                            <div class="col-sm-4">
                                                <textarea class="form-control" name="description" value="<?php echo $h[0]->company_description;?>"><?php echo $h[0]->company_description;?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group has-success">
                                            <label for="input-success" class="col-sm-4 control-label">Relation With our Company</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input-success" name="relation" value="<?php echo $h[0]->company_relation;?>">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group has-success">
                                            
                                            <div class="col-sm-4 center">
                                                <button type="submit" class="btn btn-success btn-block m-t-xs">Update</button>
                                            </div>
                                        </div>

                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->