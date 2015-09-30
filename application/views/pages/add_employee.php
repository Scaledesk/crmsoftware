

<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                     <div id="rootwizard">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user m-r-xs"></i><b>Employee Details</b></a></li>

                                        </ul>



                                        <form id="wizardForm" method="Post" action="<?=(base_url().'Employee/add_employee/')?>">
                                            <div class="tab-content">
                                                <div class="tab-pane active fade in" id="tab1">
                                                    <div class="row m-b-lg">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputName">Name</label>
                                                                    <input type="text" class="form-control" name="e_name" id="" placeholder="Name" required="">
                                                                </div>

                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword2">Mobile</label>
                                                                    <input type="text" class="form-control" name="e_mobile" id="exampleInputPassword2" placeholder="Mobile">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword2">Email</label>
                                                                    <input type="email" class="form-control" name="e_email" id="" placeholder="Email">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="password">Password</label>
                                                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                                                </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                                    <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword2">Address</label>
                                                                    <input type="text" class="form-control" name="e_address" id="" placeholder="Address">
                                                                </div>

                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword2">Join Date</label>
                                                                    <input type="text" class="form-control date-picker" name="e_date" id="" placeholder="Join Date">
                                                                </div>

                                                             <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword2">Gender</label>
                                                                    <input type="text" class="form-control " name="gender" id="" placeholder="Gender">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                       <label for="fax_num">Fax Number</label>
                                                                       <input type="text" class="form-control " name="fax_num" id="fax_num" placeholder="Fax Number">
                                                                   </div>

                                                        </div>
                                                        <div class="col-md-12" style="padding-left: 0px;padding-right: 15px;">
                                                            <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword2">Sallary</label>
                                                                    <input type="text" class="form-control" name="sallary" id="" placeholder="Sallary" value="">
                                                                </div>

                                                        </div>



                                                    </div>

                                                </div>



                                                <div class="form-group col-md-3 center">
                                                    <input type="submit" class="btn btn-primary btn-block" value="Submit">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
