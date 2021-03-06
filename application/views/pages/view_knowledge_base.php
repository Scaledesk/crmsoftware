<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                         <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Add Knowledge Base Details</h4>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Category</th>
                                                <th>Tags</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>S. No.</th>
												<th>Name</th>
                                                <th>Description</th>
                                                <th>Category</th>
                                                <th>Tags</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php $i=0;
                                                foreach ($h->result() as $row)  
                                                 {  
                                                    $i++;
                                                 ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row->knowledge_base_name; ?></td>
                                                <td><?php echo $row->knowledge_base_description; ?></td>
                                                <td><?php echo $row->knowledge_base_category_id; ?></td>
                                                <td><?php echo $row->knowledge_base_tags; ?></td>
                                                <td><?php echo date('d/m/Y',strtotime($row->knowledge_base_date)); ?></td>
                                                <td>
                                                    <a href="<?php echo base_url().'Knowledge_base_control/edit_knowledge_base/'.$row->knowledge_base_id; ?> ">Edit</a>|
                                                    <a href="<?php echo base_url().'Knowledge_base_control/delete_knowledge_base/'.$row->knowledge_base_id; ?>" OnClick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                            </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->