<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-10 center">
                            <div class="panel panel-white">
                                <div class="panel-body">

                                <center><label><h2>Add Supplier Category</h2></label></center>
                                <div class="row m-b-lg">
                                    <form id="wizardForm" action="<?=(base_url().'sales_management/do_add_supplier_category')?>" method="post">

                                <div class="col-md-6 center">
                                        <div class="form-group col-md-12">
                                            <p><?php if($supplierCategoryAddmsg!='') echo $supplierCategoryAddmsg; ?>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Category Name</label>
                                            <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Category Name" required="">
                                        </div>
                                        <div class="form-group col-md-12">
                                        <label> Category Description</label>
                                        <textarea class="form-control" placeholder="Category Description" id="category_description" name="category_description" required="" style="margin: 0px -0.078125px 0px 0px; height: 160px; width: 406px;"></textarea>
                                        </div>

                                        <center><input type="submit" class="btn btn-success btn-block m-t-xs" value="Add Categary"></center>
                                        <style>
                                        input[type=submit].btn-block {  width: 35%;}</style>


                                      </div>
                                    </form>

                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
