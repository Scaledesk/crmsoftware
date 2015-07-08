<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                         <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">List of Lead Detail</h4>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Lead Name</th>
                                                <th>Lead Generate Date</th>
                                                <th>Lead Source</th>
                                                <th>Lead Service</th>
                                                <th>Action</th>
                                                <th>Comment</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Lead Name</th>
                                                <th>Lead Generate Date</th>
                                                <th>Lead Source</th>
                                                <th>Lead Service</th>
                                                <th>Action</th>
                                                <th>Comment</th>
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
                                                <td><?php echo $row->lead_name; ?></td>
                                                <td><?php echo $row->lead_generate_date; ?></td>
                                                <td><?php echo $row->lead_source; ?></td>
                                                <td><?php echo $row->lead_service; ?></td>
                                                <td><a href="<?php echo base_url().'sales_management/editlead/'.$row->lead_id; ?> ">Edit</a>|
                                                    <a href="<?php echo base_url().'sales_management/deletelead/'.$row->lead_id; ?>" OnClick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                                                </td>


                                                <td>
                                                
                                                <span  class="fa fa-comment-o" data-toggle="modal" data-target=".bs-example-modal-lg"></span>
                                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myLargeModalLabel">Add Comment</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.<br><br>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-success">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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

