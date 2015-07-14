
<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                     <div id="rootwizard">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user m-r-xs"></i>Update Document</a></li>
                                            
                                        </ul>
                          
                                    
                                        
                                        <form id="wizardForm"action="<?=(base_url().'document_control/do_edit_document')?>" method="post" enctype="multipart/form-data">
                                            <div class="tab-content">
                                                <div class="tab-pane active fade in" id="tab1">
                                                    <div class="row m-b-lg">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputName">Dacument Name</label>
                                                                    <input type="text" class="form-control" value="<?php echo $h[0]->document_name; ?>" name="document_name" id="exampleInputName" placeholder="Dacument Name">
                                                                </div>
                                                                
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputEmail">Type of Dacument</label>
                                                                    <input type="text" class="form-control" name="document_type" value="<?php echo $h[0]->document_type; ?>" id="exampleInputEmail" placeholder="Type of Dacument">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword1">Description of Dacument</label>
                                                                    <input type="text" class="form-control" value="<?php echo $h[0]->document_description; ?>" name="document_description" id="exampleInputPassword1" placeholder="Description of Dacument">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword2">Categary </label>
                                                                  <select  class="form-control" required id="categary_id" name="categary_id"  required="">
                                                                <option value="">Select</option>
                                                                <?php 
                                                                foreach($k->result() as $row)
                                                                { ?>
                                                                    <option value="<?php echo $row->document_category_id; ?>" <?php if($row->document_category_id==$h[0]->document_category_id) echo 'selected'; ?> ><?php echo $row->document_category_name; ?></option>
                                                                
                                                               <?php } ?>
                                                                </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            
                                                            <div class="form-group col-md-12">
                                                                    <label for="exampleInputName"><b>Upload Document </b></label>
                                                                    <input type="file" class="form-control" name="document_file" id="exampleInputName">
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                <ul class="pager wizard">
                                                    <input type="submit" name="" class="btn btn-default">
                                                </ul>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->