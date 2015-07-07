
<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-9 center">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Add Company</h4>

                                    <?php 
                            error_reporting(0);
                            if($msg!='')
                            {
                               echo $msg;
                            }?>

                                </div>
                                <div class="panel-body">
                                    

                                    <form class="form-horizontal" action="<?=(base_url().'company_control/do_add_company')?>" method="post">
                                        
                                        
                                        <div class="form-group has-success">
                                            <label for="input-success" class="col-sm-4 control-label">Name</label>
                                            <div class="col-sm-4 center">
                                                <input type="text" class="form-control" id="input-success" name="name">
                                            </div>
                                        </div>
                                        <div class="form-group has-success">
                                            <label for="input-success" class="col-sm-4 control-label">Address</label>
                                            <div class="col-sm-4 center">
                                                <textarea class="form-control" name="address"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group has-success">
                                            <label for="input-success" class="col-sm-4 control-label">Phone Number1</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input-success" name="phone1">
                                            </div>
                                        </div>
                                        <div class="form-group has-success">
                                            <label for="input-success" class="col-sm-4 control-label">Phon Number2</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input-success" name="phone2">
                                            </div>
                                        </div>
                                        <div class="form-group has-success">
                                            <label for="input-success" class="col-sm-4 control-label">Email Id</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input-success" name="email">
                                            </div>
                                        </div>
                                        <div class="form-group has-success">
                                            <label for="input-success" class="col-sm-4 control-label">Fax Number</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input-success" name="faxno">
                                            </div>
                                        </div>

                                        <div class="form-group has-success">
                                            <label for="input-success" class="col-sm-4 control-label">Domain Name</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input-success" name="domain">
                                            </div>
                                        </div>
                                        <div class="form-group has-success">
                                            <label for="input-success" class="col-sm-4 control-label">Desciption of Company</label>
                                            <div class="col-sm-4">
                                                <textarea class="form-control" name="description"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group has-success">
                                            <label for="input-success" class="col-sm-4 control-label">Relation With our Company</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="input-success" name="relation">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group has-success">
                                            
                                            <div class="col-sm-4 center">
                                                <button type="submit" class="btn btn-success btn-block m-t-xs">Add Company</button>
                                            </div>
                                        </div>

                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->