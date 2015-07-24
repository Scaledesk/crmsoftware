<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-10 center">
                         <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">View Progress</h4>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Date</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Title</th>
                                                <th>Description</th>
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
                                                <td><?php echo $row->title; ?></td>
                                                <td><?php echo $row->description; ?></td>
                                                <td><?php echo $row->date; ?></td>
                                                <td> </td>


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
