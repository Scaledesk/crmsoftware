<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-8 center">
                            <div class="panel panel-white">
                                <div class="panel-body">

									                  <div class="col-md-8 center">


                                <form action="" method="post">
																<label>Select User</label>
                              	<select  class="form-control"  name="" required="">
																<option value="">Select</option>
                                <?php
                                  foreach($h->result() as $row)
                                      {
                                     ?>
                                <option value="<?php echo $row->user_id; ?>"><?php echo $row->user_name; ?></option>
                                <?php } ?>
																</select>




                                            <div class="form-group col-md-6">
                                                                <label>Access permission</label></br>
                                                                <?php
                                                                foreach($k->result() as $row)
                                                                {
                                                                 ?>
                                                             <input type="checkbox" value="<?php echo $row->children_id; ?>"  name=""><?php echo $row->text.'<br/>';
                                                           } ?>
                                            </div>

                                                <div class="form-group col-md-6">
                                                            <label>Remove permission</label></br>
                                                            <input type="checkbox"  id="" name="">
                                                </div>

                                        </div></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>


                                        <center><input type="submit" class="btn btn-info" value="Submit"></center>





								</form>
              </div>
								</div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
