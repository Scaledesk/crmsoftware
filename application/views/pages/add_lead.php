
		




<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12 center">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                     <div id="rootwizard">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user m-r-xs"></i><b>Add Lead</b></a></li>
                                            
                                        </ul>
                                        <?php 
                                        error_reporting(0);
                                        if($h!='')
                                        { ?>
                                        <form id="wizardForm" action="<?=(base_url().'sales_management/do_edit_lead'.$h[0]->lead_id)?>" method="post">    
                                        <?php }
                                        else
                                        {?>
                                        <form id="wizardForm" action="<?=(base_url().'sales_management/do_add_lead')?>" method="post">
                                        <?php } ?>
                                            <div class="tab-content">
                                                <div class="tab-pane active fade in" id="tab1">
                                                    <div class="row m-b-lg">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputName">Lead Name</label>
                                                                    <input type="text" class="form-control" id="exampleInputName" placeholder="Add Lead" required="" value="<?php echo $h[0]->lead_name;?>" name="lead_name">
                                                                </div>
                                                                
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputEmail">Lead Date</label>
                                                                    <input type="text" class="form-control date-picker" id="datepicker1" placeholder="Lead Date" required="" name="lead_generate_date" value="<?php echo $h[0]->lead_generate_date;?>">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword1">Lead Source</label>
                                                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Lead Source" required="" name="lead_source" value="<?php echo $h[0]->lead_source;?>">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword2">Lead Services</label>
                                                                    <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Lead Services" required="" name="lead_service" value="<?php echo $h[0]->lead_service;?>">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword2">Designation</label>
                                                                    <input type="text" class="form-control" name="designation" id="exampleInputPassword2" placeholder="Designation" value="<?php echo $h[0]->lead_designation;?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            
                                                           <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword2">Company Name</label>
                                                                    <input type="text" class="form-control" name="company_name" id="exampleInputPassword2" placeholder="Company Name" value="<?php echo $h[0]->lead_company_name;?>">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword2">Phone Number</label>
                                                                    <input type="text" class="form-control" name="phone" id="exampleInputPassword2" placeholder="Phone Number" value="<?php echo $h[0]->lead_phone;?>">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword2">Email Address</label>
                                                                    <input type="email" class="form-control" name="email" id="exampleInputPassword2" placeholder="Email Address" value="<?php echo $h[0]->lead_email;?>">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword2">Fax</label>
                                                                    <input type="text" class="form-control" name="fax_number" id="exampleInputPassword2" placeholder="Fax" value="<?php echo $h[0]->lead_fax_number;?>">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword2">Description</label>
                                                                    <input type="text" class="form-control" name="description" id="exampleInputPassword2" placeholder="Description" value="<?php echo $h[0]->lead_contact_description;?>">
                                                                </div>
                                                        
                                                        </div>
                                                        <div class="col-md-12" style="padding-left: 0px;padding-right: 15px;">
                                                            <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword2">Relation With Company</label>
                                                                    <input type="text" class="form-control" name="relation" id="exampleInputPassword2" placeholder="Relation With Company" value="<?php echo $h[0]->lead_company_relation;?>">
                                                                </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                <div class="form-group col-md-6 center">
                                                    <?php 
                                                    if($h!='')
                                                    { ?>
                                                        <button type="submit" class="btn btn-primary btn-block">Update Lead</button>
                                                    <?php }
                                                    else
                                                    {?>
                                                        <button type="submit" class="btn btn-primary btn-block">Add Lead</button>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
