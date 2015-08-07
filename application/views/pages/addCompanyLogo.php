
<div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <a href="index.html" class="logo-name text-lg text-center">Update Company Logo</a>
                                 <form class="m-t-md" action="<?=(base_url().'User_control/do_upload_company_logo')?>" enctype="multipart/form-data" method="post">

                                   <div class="form-group">
                                     <input type="text" class="form-control" name="company_name" value="<?php echo $c[0]->name; ?>" placeholder="Company Name" required="">
                                   </div>

                                    <div class="form-group">
                                        <input type="file" class="form-control" name="logo" id="image" onchange="readUrl()" placeholder="profile picture" required="">
                                    </div>
                                    <div class="form-group">
                                      <img src="" id="img_id" height="100px" width="100px"/>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Upload</button>

                                </form>

                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
