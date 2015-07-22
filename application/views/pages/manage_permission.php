<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-8 center">
                            				<div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Manage Permission</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>S No.</th>
                                                <th>Permission Name</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          foreach ($h->result() as $row)
                                           {
                                              $i++;
                                           ?>
                                            <tr class="success">
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row->permName; ?></td>
                                                <td>
                                                <a href="">Delete</a>
                                                </td>

                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
								<div class="col-md-6 center">

                                        <div class="form-group col-md-12">
									<form action="<?=(base_url().'User_control/do_add_permission')?>" method="post">

                                            <label>Add Permission</label>
                                            <input type="text" class="form-control" id="add_permission" name="permission" placeholder="Add Permission" required="" value="">

										</div>
									<center> <input type="submit" class="btn btn-info" value="Add"><center>
									</form>
								</div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
