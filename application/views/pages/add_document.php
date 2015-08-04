
<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                     <div id="rootwizard">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user m-r-xs"></i>Add Document</a></li>

                                        </ul>



                                        <form id="wizardForm"action="<?=(base_url().'document_control/do_add_document')?>" method="post" enctype="multipart/form-data">
                                            <div class="tab-content">
                                                <div class="tab-pane active fade in" id="tab1">
                                                    <div class="row m-b-lg">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputName">Document Name</label>
                                                                    <input type="text" class="form-control" name="document_name" id="exampleInputName" placeholder="Document Name">
                                                                </div>

                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputEmail">Type of Document</label>
                                                                    <input type="text" class="form-control" name="document_type" id="" placeholder="Type of Document">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword1">Description of Document</label>
                                                                    <input type="text" class="form-control" name="document_description" id="" placeholder="Description of Document">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword2">Category</label>
                                                                    <input type="text" class="form-control" name="categary_id" id="" placeholder="Categary Name">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label>Category</label>
                                                                    <select  class="form-control" required id="categary_id" name="categary_id"  required="">
                                                                <option value="">Select</option>
                                                                <?php
                                                                foreach($k->result() as $row)
                                                                { ?>
                                                                    <option value="<?php echo $row->document_category_id; ?>" ><?php echo $row->document_category_name; ?></option>

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
                                                    <input type="submit" name="" class="btn btn-primary">
                                                </ul>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
