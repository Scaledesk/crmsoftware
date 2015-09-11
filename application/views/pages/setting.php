<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">


                                    <div class="panel panel-white">
                                    <div class="panel-heading clearfix">
                                        <h3 class="panel-title">Settings</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="tabs-left" role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#tab9" role="tab" data-toggle="tab">Change Password</a></li>
                                                <li role="presentation"><a href="#tab10" role="tab" data-toggle="tab">Upload Profile Picture</a></li>
                                                <?php
                                              if($this->session->userdata('admin_id')!=""){ ?>
                                                <li role="presentation"><a href="#tab11" role="tab" data-toggle="tab">Upload Company Logo</a></li>
                                            <?php  } ?>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content">


                                                <div role="tabpanel" class="tab-pane active fade in" id="tab9">
                                                  <div class="col-md-3 center">
                                                      <div class="login-box">
                                                          <a href="index.html" class="logo-name text-lg text-center">Change Password</a>
                                                           <form class="m-t-md" action="<?=(base_url().'User_control/do_change_password')?>" method="post">
                                                              <div class="form-group">
                                                                  <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                                              </div>
                                                              <div class="form-group">
                                                                  <input type="password" class="form-control" name="old_password" placeholder="Old Password" required="">
                                                              </div>
                                                              <div class="form-group">
                                                                  <input type="password" class="form-control" name="new_password" placeholder="New Password" required="">
                                                              </div>
                                                              <div class="form-group">

                                                                  <input type="password" class="form-control" name="confirm_new_password" placeholder="Confirm Password" required="">
                                                              </div>
                                                                  <div class="form-group">
                                                              <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                                            </div>
                                                            <div class="form-group">

                                                                <a href="<?php echo base_url().'User_control/ChangeImage'; ?>">Change Profile Picture</a>
                                                            </div>
                                                          </form>

                                                      </div>
                                                  </div>
                                                </div>


                                                <div role="tabpanel" class="tab-pane fade" id="tab10">

                                                  <div class="col-md-3 center">
                                                      <div class="login-box">
                                                          <a href="index.html" class="logo-name text-lg text-center">Upload Profile Picture</a>
                                                           <form class="m-t-md" action="<?=(base_url().'User_control/do_upload_image')?>" enctype="multipart/form-data" method="post">
                                                              <div class="form-group">
                                                                  <input type="file" class="form-control" name="image" id="image" onchange="readUrl()" placeholder="profile picture" required="">
                                                              </div>
                                                              <div class="form-group">
                                                                <img src="" id="img_id" height="100px" width="100px"/>
                                                              </div>
                                                              <button type="submit" class="btn btn-primary btn-block">Upload</button>

                                                          </form>
                                                      </div>
                                                  </div>
                                                </div>

                                                <div role="tabpanel" class="tab-pane fade" id="tab11">
                                                  <div class="col-md-3 center">
                                                      <div class="login-box">
                                                          <a href="index.html" class="logo-name text-lg text-center">Update Company Logo</a>
                                                           <form class="m-t-md" action="<?=(base_url().'User_control/do_upload_company_logo')?>" enctype="multipart/form-data" method="post">

                                                             <div class="form-group">
                                                               <input type="text" class="form-control" name="company_name" value="<?php echo $c[0]->name; ?>" placeholder="Company Name" required="">
                                                             </div>

                                                              <div class="form-group">
                                                                  <input type="file" class="form-control" name="logo" placeholder="profile picture" required="">
                                                              </div>

                                                              <button type="submit" class="btn btn-primary btn-block">Upload</button>

                                                          </form>

                                                      </div>
                                                  </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>



                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->


                <script type="text/javascript">

                function readUrl()
                {
                  if(document.getElementById('image').value!='')
                   {
                     var imgid=document.getElementById('image');
                	 var freader=new FileReader();
                	 freader.readAsDataURL(imgid.files[0]);
                	 freader.onloadend=function(event)
                	 {
                	   var show_id=document.getElementById('img_id');
                	   //alert(event.target.result);
                	   show_id.src=event.target.result;
                	 }
                   }


                }

                </script>
