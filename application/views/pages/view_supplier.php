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
                                                <th>Sr. No.</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Fax Number</th>
                                                <th>Supplier Description</th>
                                                <th>Category Id</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Fax Number</th>
                                                <th>Supplier Description</th>
                                                <th>Category Id</th>
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
                                                <td><?php echo $row->supplier_name; ?></td>
                                                <td><?php echo $row->supplier_address; ?></td>
                                                <td><?php echo $row->supplier_phone1.', '.$row->supplier_phone2; ?></td>
                                                <td><?php echo $row->supplier_email; ?></td>
                                                <td><?php echo $row->supplier_faxno; ?></td>
                                                <td><?php echo $row->supplier_description; ?></td>
                                                <td><?php echo $row->category_id; ?></td>
                                                <td><a href="<?php echo base_url().'sales_management/editsupplier/'.$row->supplier_id; ?> ">Edit</a>|
                                                    <a href="<?php echo base_url().'sales_management/deletesupplier/'.$row->supplier_id; ?>" OnClick="return confirm('Are you sure you want to delete this record?');">Delete</a>
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
