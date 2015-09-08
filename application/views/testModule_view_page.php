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
                                            <tr><th>Sr. No.</th><th>name</th><th>email</th><th>address</th><th>Allahabad</th><th>gender</th><th>Action</th>
                                          </tr>
                                        </thead>
                                        <tbody> <?php
                                            $i=0;
                                            foreach ($h->result() as $row)
                                                 {
																									   $i++;


                                          ?> <tr>
                                                <td> <?php echo $i; ?></td><td> <?php echo $row->name ?></td><td> <?php echo $row->email ?></td><td> <?php echo $row->address ?></td><td> <?php echo $row->Allahabad ?></td><td> <?php echo $row->gender ?></td><td> <a href="<?php echo base_url().'index.php/TestController/deleteRecord/'.$row->id;  ?>">Delete </a></td></tr><?php } ?>	</tbody>
                                       </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->