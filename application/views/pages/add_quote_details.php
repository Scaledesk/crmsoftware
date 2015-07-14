<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-6 center">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                     <div id="rootwizard">
                                        
                                        <?php 
                                        if($k!='')
                                            { ?>
                                            <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user m-r-xs"></i><b>Update Supplier Quote</b></a></li>
                                            
                                        </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active fade in" id="tab1">
                                                    <div class="row m-b-lg">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                            <form id="wizardForm" method="post" action="<?=(base_url().'sales_management/do_editquote'.$k[0]->quote_id)?>" enctype="multipart/form-data">
                                        <?php }
                                        else
                                        { ?>
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user m-r-xs"></i><b>Add Supplier Quote</b></a></li>
                                            
                                        </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active fade in" id="tab1">
                                                    <div class="row m-b-lg">
                                                        <div class="col-md-12">
                                                            <div class="row">
															<form id="wizardForm" method="post" action="<?=(base_url().'sales_management/do_add_quote_details')?>" enctype="multipart/form-data">
                                                                <?php } ?>
                                                                <div class="form-group col-md-12">
                                                                    <?php 
                                                                    if($msg!='')
                                                                        echo $msg;
                                                                    ?>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label>Supplier</label>
																	<select  class="form-control" id="supplier_name" name="supplier_id" required="">
                                                                <option value="select">Select supplier</option>
                                                                <?php 
                                                                foreach ($h->result() as $row) 
                                                                 { ?>

                                                                <option value="<?php echo $row->supplier_id; ?>" <?php if($row->supplier_id==$k[0]->supplier_id) echo 'selected'; ?>><?php echo $row->supplier_name; ?></option>

                                                               <?php } ?>
                                                                </select>
                                                                </div>
                                                                
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputEmail">Supplier For</label>
                                                                    <input type="text" class="form-control" value="<?php echo $k[0]->quote_supplier_for; ?>" name="supplier_for" id="supplier_for" placeholder="Supplier for" required="">
                                                                
                                                                </div>
																<div class="form-group col-md-12">
                                                                    <label for="exampleInputName"> Quote Description</label>
                                                                    <textarea class="form-control" name="quote_description" id="quote_description" placeholder="Quote Description" required=""><?php echo $k[0]->quote_description; ?></textarea>
                                                                </div>
																<div class="form-group col-md-12">
                                                                    <label for="exampleInputName">Upload Quote </label>
                                                                    <input type="file" class="form-control" name="quote_file" id="quote_file"  required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-4 center">
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