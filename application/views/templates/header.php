<!DOCTYPE html>
<html>
    <head>
        <!-- Title -->
        <title><?php error_reporting(0);
                echo $title;

                 ?>
        </title>

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
        <link href="<?php echo base_url().'assets\plugins\slidepushmenus\css\component.css';?>" rel="stylesheet" type="text/css">
        <!--dashboard-->
        <link href="<?php echo base_url().'assets\plugins\weather-icons-master\css\weather-icons.min.css';?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url().'assets\plugins\metrojs\MetroJs.min.css" rel="stylesheet';?>" type="text/css">
        <link href="<?php echo base_url().'assets\plugins\toastr\toastr.min.css" rel="stylesheet';?>" type="text/css">
        <!--end dashboard-->
        <!--data table css-->
        <link href="<?php echo base_url().'assets\plugins\datatables\css\jquery.datatables.min.css';?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url().'assets\plugins\datatables\css\jquery.datatables_themeroller.css';?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url().'assets\plugins\x-editable\bootstrap3-editable\css\bootstrap-editable.css';?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url().'assets\plugins\bootstrap-datepicker\css\datepicker3.css';?>" rel="stylesheet" type="text/css">
        <!--data table css-End-->


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
    <body class="page-header-fixed compact-menu page-horizontal-bar">
        <div class="overlay"></div>


        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner container">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="logo-box">
                        <a href="#" class="logo-text"><span><img class="img-circle avatar" src="<?php echo base_url().$company[0]->logo; ?>" height="50px" width="80px" /> <?php echo $company[0]->name; ?> </span></a>
                    </div><!-- Logo Box -->

                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-left">

                                <li>
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"></a>
                                </li>
                                <!--
                                <li>
                                    <a href="#cd-nav" class="waves-effect waves-button waves-classic cd-nav-trigger"><i class="fa fa-diamond"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic toggle-fullscreen"><i class="fa fa-expand"></i></a>
                                </li>-->
                                <li class="dropdown">
                                    <!--<a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        <i class="fa fa-cogs"></i>
                                    </a>-->
                                    <ul class="dropdown-menu dropdown-md dropdown-list theme-settings" role="menu">
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Fixed Header
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right fixed-header-check" checked="">
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Fixed Sidebar
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right fixed-sidebar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Toggle Sidebar
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right toggle-sidebar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Compact Menu
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right compact-menu-check" checked="">
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="no-link"><button class="btn btn-default reset-options">Reset Options</button></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success pull-right"><?php echo $countMsg; ?></span></a>
                                    <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                        <li><p class="drop-title">You have <?php echo $countMsg; ?> new  messages !</p></li>
                                        <li class="dropdown-menu-list slimscroll messages">
                                            <ul class="list-unstyled">
                                            <?php foreach($msg->result() as $row){ ?>
                                                <li>
                                                    <a href="<?php echo base_url().'Message_control/inbox'; ?>">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets\images\avatar2.png" alt=""></div>
                                                        <p class="msg-name"><?php echo $row->message_title; ?></p>
                                                        <p class="msg-text"><?php echo $row->message_body; ?></p>
                                                        <p class="msg-time"><?php echo $row->message_time; ?></p>
                                                    </a>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                        <li class="drop-all"><a href="<?php echo base_url().'Message_control/inbox'; ?>" class="text-center">All Messages</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">


                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        <span class="user-name"><?php if($this->session->userdata('user_name')!=""){echo $this->session->userdata('user_name');}else{echo $this->session->userdata('admin_name');} ?><i class="fa fa-angle-down"></i></span>
                                        <img class="img-circle avatar" src="<?php echo base_url().$this->session->userdata('imgName'); ?>" width="40" height="40" alt="">
                                    </a>
                                    <ul class="dropdown-menu dropdown-list" role="menu">
                                      <li role="presentation"><a href="<?php echo base_url().'User_control/settingAccount'; ?>"><i class="fa fa-user"></i>Setting</a></li>
                                      <li role="presentation"><a href="<?php echo base_url().'Message_control/inbox'; ?>"><i class="fa fa-sign-out m-r-xs"></i>Inbox</a></li>
                                        <!--<li role="presentation"><a href="<?php echo base_url().'User_control/changePassword'; ?>"><i class="fa fa-user"></i>Setting</a></li>-->
                                        <li role="presentation"><a href="<?php echo base_url().'sales_management/calendar';?>"><i class="fa fa-calendar"></i>Calendar</a></li>
                                        <!--<li role="presentation" class="divider"></li>-->
                                        <?php
                                        if($this->session->userdata('admin_id')!=""){
                                         ?>
                                        <li role="presentation"><a href="<?php echo base_url().'User_control/view_user'; ?>"><i class="fa fa-lock"></i>View Employee</a></li>
                                        <li role="presentation"><a href="<?php echo base_url().'User_control/access_permission'; ?>"><i class="fa fa-sign-out m-r-xs"></i>Manage Permission</a></li>
                                        <li role="presentation"><a href="<?php echo base_url().'User_control/upload_company_logo'; ?>"><i class="fa fa-lock"></i>Upload Company Logo</a></li>
                                        <?php } ?>
                                        <li role="presentation"><a href="<?=(base_url().'Login_control/logout')?>"><i class="fa fa-sign-out m-r-xs"></i>Log out</a></li>
                                    </ul>
                                </li>
                                <li>

                                </li>
                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->
            <div class="page-sidebar sidebar horizontal-bar">
                <div class="page-sidebar-inner">
                    <ul class="menu accordion-menu">
                        <li class="nav-heading"><span>Navigation</span></li>
                        <li><a href="<?php echo base_url().'Login_control/login';?>"><span class="menu-icon icon-speedometer"></span><p>Dashboard</p></a></li>

            <?php foreach ($menus as $menu) { ?>
            <li class="droplink"><a href="#"><span class="menu-icon icon-briefcase"></span><p><?php echo $menu->text; ?></p><span class="arrow"></span></a>
            <?php
            if (isset($menu->children)) { ?>

              <ul class="sub-menu">
                <?php
                foreach ($menu->children as $child) {
                    ?>


                                <li><a href="<?php echo base_url().$child->link;?>"> <?php echo $child->text; ?> </a></li>


            <?php } ?>
            </ul>
<?php
}
?>
<?php } ?>

                        </li>


                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->
            <div class="page-inner">
