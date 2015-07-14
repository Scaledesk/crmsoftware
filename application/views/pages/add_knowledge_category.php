<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-6 center">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Add Knowledge Base Category </h4>
                                </div>
                                <div class="panel-body">
                                    <form action="<?=(base_url().'Knowledge_base_control/do_add_category')?>" method="post">
                                        <div class="form-group">
                                            <?php if($msg!='') echo $msg; ?>
                                        </div>
									<label>Select Parent Id</label>
									<div class="form-group">
                                            					<select  class="form-control" id="" name="parent_id">
                                                                <option value="">Select</option>
                                                                <?php foreach ($h->result() as $row) { ?>
                                                                 <option value="<?php echo $row->knowledge_base_category_id; ?>"><?php echo $row->knowledge_base_category_name; ?></option>
                                                              <?php } ?>
                                                				</select>
									</div>
                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input type="text" class="form-control"name="knowledge_base_category_name"  id="" placeholder="Category Name">
                                        </div>
										<div class="form-group">
										<label>Category Description</label>
                                                <textarea class="form-control" name="knowledge_base_category_description" id="" placeholder="Category Description" maxlength="500" required="" style="margin: 0px -0.171875px 0px 0px; height: 150px; width: 513px;"></textarea></div>
                                        <input type="submit" class="btn btn-primary" value="Submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div>