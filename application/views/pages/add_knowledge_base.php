<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-6 center">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Add Knowledge Base Details </h4>
                                </div>
                                <div class="panel-body">
                <form action="<?=(base_url().'Knowledge_base_control/do_add_knowledge_base')?>" method="post">
									<div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control"name="knowledge_base_name"  id="" placeholder="Name" required="">
                                        </div>
										<div class="form-group">
										<label>Description</label>
                                                <textarea class="form-control" name="knowledge_base_description" id="" placeholder="Description" maxlength="500"  style="margin: 0px -0.171875px 0px 0px; height: 109px; width: 511px;" required=""></textarea>
										</div>
									<label>Category</label>
									<div class="form-group">
                                            					<select  class="form-control" id="" name="knowledge_base_category_id" required="">
                                                                <option value="0">Select</option>
                                                                 <?php foreach ($h->result() as $row) { ?>
                                                                <option value="<?php echo $row->knowledge_base_category_id; ?>" ><?php echo $row->knowledge_base_category_name; ?></option>
                                                                <?php } ?>
                                                                </select>
									</div>
										<div class="form-group">
                                            <label>Tags</label>
                                            <input type="text" class="form-control"name="knowledge_base_tags"  id="" placeholder="Tags" required="">
                                        </div>
										
                                        <input type="submit" class="btn btn-primary" value="Submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div>