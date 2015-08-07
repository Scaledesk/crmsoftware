
<div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <a href="index.html" class="logo-name text-lg text-center">Upload Profile Picture</a>
                                 <form class="m-t-md" action="<?=(base_url().'User_control/do_upload_image')?>" enctype="multipart/form-data" method="post">

                                    <div class="form-group">
                                        <input type="file" class="form-control" name="profile_pic" placeholder="profile picture" required="">
                                    </div>
                                    <div class="form-group">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Upload</button>

                                </form>

                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
