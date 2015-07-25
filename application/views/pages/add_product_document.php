<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-8 center">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                     <div id="rootwizard">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user m-r-xs"></i><b>Product Document</b></a></li>
                                        </ul>




                                            <div class="tab-content">
                                                <div class="tab-pane active fade in" id="tab1">
                                                    <div class="row m-b-lg">
                                                        <div class="col-md-12">
                                                            <div class="row">
                    <?php
                    if($m!=''){ ?>
                      <form id="" name="formselct" action="<?=(base_url().'Product_control/do_edit_document/'.$m[0]->document_id)?>" method="post">
                    <?php }
                    else {
                     ?>
										<form id="" name="formselct" action="<?=(base_url().'Product_control/do_add_document')?>" method="post" enctype="multipart/form-data">
                      <?php } ?>
                                                        <div class="form-group col-md-12">


                                                          <select  class="form-control" id="" name="product_id">
                                                                                            <option value="select">Select Product</option>
                                                                                            <?php
                                                                                            foreach ($h->result() as $row) { ?>
                                                                                            <option value="<?php echo $row->product_id; ?>" <?php if($m[0]->product_id==$row->product_id) echo 'checked'; ?>><?php echo $row->product_name;; ?></option>
                                                                                          <?php   } ?>

                                                          </select>
														</div>


                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword1">Name</label>
                                                                    <input type="text" class="form-control" name="document_name" id="" placeholder=" Document Name" required="" value="<?php echo $m[0]->document_name; ?>">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputName">Description</label>
                                                                    <textarea class="form-control" name="document_description" id="description" maxlength='500' placeholder="Description" required=""><?php echo $m[0]->document_description; ?></textarea>
																</div>
																<div class="form-group col-md-12">
                                  <select  class="form-control" id="" name="document_category_id">
                                                                    <option value="select">Select categary</option>
                                                                    <?php
                                                                    foreach ($k->result() as $row) { ?>
                                                                    <option value="<?php echo $row->document_category_id; ?>" <?php if($m[0]->document_category_id==$row->document_category_id) echo 'checked'; ?>><?php echo $row->document_category_name; ?></option>
                                                                  <?php   } ?>

                                    </select>
														</div>
																<div class="form-group col-md-12">

                                                                    <?php
                                                                    if($m=='')
                                                                    { ?>
                                                                      <label>Upload File</label>
                                                                    <input type="file" class="form-control" id="" name="document_file" required="">
                                                                    <?php } ?>
                                  </div>


                                                    <center><button type="submit" class="btn btn-primary">Submit</button></center>

															</form>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>




                                            </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
