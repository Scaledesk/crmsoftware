<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                         <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Lists</h4>
                                </div>
                                <div class="panel-body">
                               <div class="table-responsive">
                                    <table id="example" class="display table">
                                        <thead>
                                            <tr><th>Sr. No.</th><th>gendar</th><th>category</th><th>qualification</th><th>Action</th>
                                          </tr>
                                        </thead>
                                        <tbody> <?php
                                            $i=0;
                                            foreach ($h->result() as $row)
                                                 {
																									   $i++;


                                          ?> <tr>
                                                <td> <?php echo $i; ?></td><td> <?php echo $row->gendar ?></td><td> <?php echo $row->category ?></td><td> <?php echo $row->qualification ?></td><td> <a href="<?php echo base_url().'index.php/MyformController/deleteRecord/'.$row->id;  ?>">Delete </a></td></tr><?php } ?>	</tbody>
                                       </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->