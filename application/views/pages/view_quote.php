<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                         <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">List of Supplier</h4>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>S No.</th>
                                                <th>Supplier Name</th>
                                                <th>Supplier For</th>
                                                <th>Quote Description</th>
                                                <th>Download Quote</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>S No.</th>
                                                <th>Supplier Name</th>
                                                <th>Supplier For</th>
                                                <th>Quote Description</th>
                                                <th>Download Quote</th>
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
                                                <td><?php echo $row->supplier_id; ?></td>
                                                <td><?php echo $row->quote_supplier_for; ?></td>
                                                <td><?php echo $row->quote_description; ?></td>
                                                <td><a href="<?php echo $row->quote_upload; ?>">Download</a></td>
                                                <td><a href="<?php echo base_url().'sales_management/editquote/'.$row->quote_id; ?> ">Edit</a>|
                                                    <a href="<?php echo base_url().'sales_management/deletequote/'.$row->quote_id; ?>" OnClick="return confirm('Are you sure you want to delete this record?');">Delete</a>
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
