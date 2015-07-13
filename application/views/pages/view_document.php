

<div id="main-wrapper" class="container">
                <div class="row">
                        <div class="col-md-12">
                         <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">List of Contact Detail</h4>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Document Name</th>
                                                <th>Document Type</th>
                                                <th>Document Description</th>
                                                <th>Document categary</th>
                                                <th>Document</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Document Name</th>
                                                <th>Document Type</th>
                                                <th>Document Description</th>
                                                <th>Document categary</th>
                                                <th>Document</th>
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
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $row->document_name; ?></td>
                                                <td><?php echo $row->document_type; ?></td>
                                                <td><?php echo $row->document_description; ?></td>
                                                <td><?php echo $row->document_categary_id; ?></td>
                                                <td><a href="<?php echo $row->document_file; ?>">Download</a></td>
                                                <td><a href="<?php echo base_url().'document_control/editdocument/'.$row->document_id; ?> ">Edit</a>|
                                                    <a href="<?php echo base_url().'document_control/deletedocument/'.$row->document_id; ?>" OnClick="return confirm('Are you sure you want to delete this record?');">Delete</a>
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

