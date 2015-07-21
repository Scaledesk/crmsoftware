<!DOCTYPE html>
<html>
    <head>

        <!-- Title -->
        <title>C R M</title>

        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="Steelcoders">

        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url().'assets\plugins\pace-master\themes\blue\pace-theme-flash.css';?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets\plugins\uniform\css\uniform.default.min.css';?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets\plugins\bootstrap\css\bootstrap.min.css';?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url().'assets\plugins\fontawesome\css\font-awesome.css';?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url().'assets\plugins\line-icons\simple-line-icons.css';?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url().'assets\plugins\waves\waves.min.css';?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url().'assets\plugins\switchery\switchery.min.css';?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url().'assets\plugins\3d-bold-navigation\css\style.css';?>" rel="stylesheet" type="text/css">

        <!-- Theme Styles -->
        <link href="<?php echo base_url().'assets\css\modern.min.css';?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url().'assets\css\custom.css';?>" rel="stylesheet" type="text/css">

        <script src="<?php echo base_url().'assets\plugins\3d-bold-navigation\js\modernizr.js';?>"></script>


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="page-login">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <a href="#" class="logo-name text-lg text-center">C R M</a>
                                <p class="text-center m-t-md">Please login into your account.</p>
                                <form class="m-t-md" action="<?=(base_url().'Login_control/do_login')?>" method="post">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required="">
                                    </div>
                                    <input type="submit" class="btn btn-success btn-block" value="Login">
                                      </form>
                                    <a href="forgot.php" class="display-block text-center m-t-md text-sm">Forgot Password?</a>
                                    <p class="text-center m-t-xs text-sm">Do not have an account?</p>
                                    <a href="<?php echo base_url().'Login_control/register'; ?>" class="btn btn-default btn-block m-t-md">Create an account</a>


                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->


        <!-- Javascripts -->
        <script src="<?php echo base_url().'assets\plugins\jquery\jquery-2.1.3.min.js';?>"></script>
        <script src="<?php echo base_url().'assets\plugins\jquery-ui\jquery-ui.min.js';?>"></script>
        <script src="<?php echo base_url().'assets\plugins\pace-master\pace.min.js';?>"></script>
        <script src="<?php echo base_url().'assets\plugins\jquery-blockui\jquery.blockui.js';?>"></script>
        <script src="<?php echo base_url().'assets\plugins\bootstrap\js\bootstrap.min.js';?>"></script>
        <script src="<?php echo base_url().'assets\plugins\jquery-slimscroll\jquery.slimscroll.min.js';?>"></script>
        <script src="<?php echo base_url().'assets\plugins\switchery\switchery.min.js';?>"></script>
        <script src="<?php echo base_url().'assets\plugins\uniform\jquery.uniform.min.js';?>"></script>
        <script src="<?php echo base_url().'assets\plugins\classie\classie.js';?>"></script>
        <script src="<?php echo base_url().'assets\plugins\waves\waves.min.js';?>"></script>
        <script src="<?php echo base_url().'assets\js\modern.min.js';?>"></script>

    </body>
</html>
