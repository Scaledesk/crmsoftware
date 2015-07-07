

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
                                                <th>Name</th>
                                                <th>Designation</th>
                                                <th>Company</th>
                                                <th>Phone Number</th>
                                                <th>Email</th>
                                                <th>Fax Number</th>
                                                <th>Contact Description</th>
                                                <th>Our Relation</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Name</th>
                                                <th>Designation</th>
                                                <th>Company</th>
                                                <th>Phone Number</th>
                                                <th>Email</th>
                                                <th>Fax Number</th>
                                                <th>Contact Description</th>
                                                <th>Our Relation</th>
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
                                                <td><?php echo $row->name; ?></td>
                                                <td><?php echo $row->Designation; ?></td>
                                                <td><?php echo $row->company; ?></td>
                                                <td><?php echo $row->phone; ?></td>
                                                <td><?php echo $row->email; ?></td>
                                                <td><?php echo $row->fax_number; ?></td>
                                                <td><?php echo $row->contact_description; ?></td>
                                                <td><?php echo $row->company_relation; ?></td>
                                                <td><a href="<?php echo base_url().'contact_control/editcontact/'.$row->contact_id; ?> ">Edit</a>|
                                                    <a href="<?php echo base_url().'contact_control/deletecontact/'.$row->contact_id; ?>" OnClick="return confirm('Are you sure you want to delete this record?');">Delete</a>
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

