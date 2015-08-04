<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-6 center">
                            <div class="panel panel-white">
                                <?php
                                if($k!='')
                                { ?>
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Update Knowledge Base Details </h4>
                                </div>
                                <div class="panel-body">
                <form action="<?=(base_url().'Knowledge_base_control/do_edit_knowledge_base/'.$k[0]->knowledge_base_id)?>" method="post">
                                <?php }
                                else
                                { ?>
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Add Knowledge Base Details </h4>
                                </div>
                                <div class="panel-body">
                <form action="<?=(base_url().'Knowledge_base_control/do_add_knowledge_base')?>" method="post">
                              <?php } ?>
									<div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control"name="knowledge_base_name" value="<?php echo $k[0]->knowledge_base_name; ?>" id="" placeholder="Name" required="">
                                        </div>
										<div class="form-group">
										<label>Description</label>
                                                <textarea class="form-control" name="knowledge_base_description" id="" placeholder="Description" maxlength="1000"  style="margin: 0px -0.171875px 0px 0px; height: 109px; width: 511px;" required=""><?php echo $k[0]->knowledge_base_description; ?></textarea>
										</div>
									<label>Category</label>
									<div class="form-group">
                                            					<select  class="form-control" id="" name="knowledge_base_category_id" required="">
                                                                <option value="0">Select</option>
                                                                 <?php foreach ($h->result() as $row) { ?>
                                                                <option value="<?php echo $row->knowledge_base_category_id; ?>" <?php if($k[0]->knowledge_base_category_id==$row->knowledge_base_category_id) echo 'selected'; ?> ><?php echo $row->knowledge_base_category_name; ?></option>
                                                                <?php } ?>
                                                                </select>
									</div>
										<div class="form-group">
                                            <label>Tags</label>
                                            <input type="text" class="form-control"name="knowledge_base_tags"  id="" placeholder="Tags" required="" value="<?php echo $k[0]->knowledge_base_tags; ?>">
                                        </div>
										<?php if($k!='')
                                        { ?>
                                        <input type="submit" class="btn btn-primary" value="Update">
                                        <?php }
                                        else
                                        { ?>
                                            <input type="submit" class="btn btn-primary" value="Submit">
                                        <?php } ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div>
