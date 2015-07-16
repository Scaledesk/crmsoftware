
<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-10 center">
                            <div class="panel panel-white">
                                <div class="panel-body">

                                     <div id="rootwizard">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user m-r-xs"></i><b>Add Company Details</b></a></li>

                                        </ul>



                                        <form id="wizardForm" action="<?=(base_url().'company_control/do_add_company')?>" method="post">

                                    <?php
                            error_reporting(0);
                            if($msg!='')
                            {
                               echo $msg;
                            }?>

                                            <div class="tab-content">
                                                <div class="tab-pane active fade in" id="tab1">
                                                    <div class="row m-b-lg">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                              <?php ?>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputName">Name</label>
                                                                    <input type="text" class="form-control" name="name" id="exampleInputName" placeholder="Enter the Name" required="">
                                                                </div>

                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputEmail">Address</label>
                                                                    <textarea class="form-control" placeholder="Enter the Address" name="address" required="" ></textarea>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword1">Phone Number one</label>
                                                                    <input type="text" class="form-control" name="phone1" id="exampleInputPassword1" placeholder="Phone Number one" required="">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword2">Phone Number two</label>
                                                                    <input type="text" class="form-control" name="phone2" id="exampleInputPassword2" placeholder="Phone Number two" required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">

                                                            <div class="form-group col-md-12">
                                                                    <label for="exampleInputName">Email Address </label>
                                                                    <input type="email" class="form-control" name="email" id="exampleInputName" placeholder="Email Address" required="">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputName">Fax Number </label>
                                                                    <input type="text" class="form-control" name="faxno" id="exampleInputName" placeholder="Fax Number" required="">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputName">Domain Name</label>
                                                                    <input type="text" class="form-control" name="domain" id="exampleInputName" placeholder="Domain Name" required="">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputName">Description of Company </label>
                                                                    <textarea class="form-control" name="description" placeholder="Description of Company" required=""></textarea>
                                                                </div>

                                                        </div>
                                                        <div class="form-group col-md-12">
                                                                    <label for="exampleInputName">Relation With Company </label>
                                                                    <input type="text" class="form-control" name="relation" id="exampleInputName" placeholder="Relation With  Company" required="">
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
