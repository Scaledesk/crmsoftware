<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-8 center">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                <form action="" method="" name="">
									<div class="col-md-6 center">


															<div class="form-group col-md-12">
																<label>Permission</label>
																<select  class="form-control"  name="" required="">
																<option value="">Select</option>
                                <?php foreach ($h->result() as $row) {
                                <option value="<?php echo $row->ID; ?>"><?php echo $row->permName; ?></option>
                                <?php } ?> 
																<option value="0">2</option>

																</select>
															</div>

                                     </div>


                                    <table class="table">

                                        <tbody>

                                            <tr class="success">

                                                <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												<input type="checkbox" name="" id="">Acess permission</th>
                                                <th><input type="checkbox" name="" id="">Remove Permission</th>

                                            </tr>

                                        </tbody>
                                    </table>


									<center> <input type="submit" class="btn btn-info" value="Submit"><center>

								</form>

								</div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
