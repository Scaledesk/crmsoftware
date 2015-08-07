<!DOCTYPE html>
<html>
    <head>

        <!-- Title -->
        <title><?php error_reporting(0);
                echo $title; ?>
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
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s1">
            <h3><span class="pull-left">Chat</span><a href="javascript:void(0);" class="pull-right" id="closeRight"><i class="fa fa-times"></i></a></h3>
            <div class="slimscroll">
                <a href="javascript:void(0);" class="showRight2"><img src="assets\images\avatar2.png" alt=""><span>Sandra smith<small>Hi! How're you?</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets\images\avatar3.png" alt=""><span>Amily Lee<small>Hi! How're you?</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets\images\avatar4.png" alt=""><span>Christopher Palmer<small>Hi! How're you?</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets\images\avatar5.png" alt=""><span>Nick Doe<small>Hi! How're you?</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets\images\avatar2.png" alt=""><span>Sandra smith<small>Hi! How're you?</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets\images\avatar3.png" alt=""><span>Amily Lee<small>Hi! How're you?</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets\images\avatar4.png" alt=""><span>Christopher Palmer<small>Hi! How're you?</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets\images\avatar5.png" alt=""><span>Nick Doe<small>Hi! How're you?</small></span></a>
            </div>
        </nav>
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
            <h3><span class="pull-left">Sandra Smith</span> <a href="javascript:void(0);" class="pull-right" id="closeRight2"><i class="fa fa-angle-right"></i></a></h3>
            <div class="slimscroll chat">
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="assets\images\avatar2.png" alt="">
                    </div>
                    <div class="chat-message">
                        Hi There!
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                        Hi! How are you?
                    </div>
                </div>
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="assets\images\avatar2.png" alt="">
                    </div>
                    <div class="chat-message">
                        Fine! do you like my project?
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                        Yes, It's clean and creative, good job!
                    </div>
                </div>
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="assets\images\avatar2.png" alt="">
                    </div>
                    <div class="chat-message">
                        Thanks, I tried!
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                        Good luck with your sales!
                    </div>
                </div>
            </div>
            <div class="chat-write">
                <form class="form-horizontal" action="javascript:void(0);">
                    <input type="text" class="form-control" placeholder="Say something">
                </form>
            </div>
        </nav>
        <form class="search-form" action="#" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control search-input" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
            </div><!-- Input Group -->
        </form><!-- Search Form -->
        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner container">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="logo-box">

                        <a href="#" class="logo-text"><span>Modern</span></a>
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
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success pull-right">4</span></a>
                                    <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                        <li><p class="drop-title">You have 4 new  messages !</p></li>
                                        <li class="dropdown-menu-list slimscroll messages">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets\images\avatar2.png" alt=""></div>
                                                        <p class="msg-name">Sandra Smith</p>
                                                        <p class="msg-text">Hey ! I'm working on your project</p>
                                                        <p class="msg-time">3 minutes ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets\images\avatar4.png" alt=""></div>
                                                        <p class="msg-name">Amily Lee</p>
                                                        <p class="msg-text">Hi David !</p>
                                                        <p class="msg-time">8 minutes ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets\images\avatar3.png" alt=""></div>
                                                        <p class="msg-name">Christopher Palmer</p>
                                                        <p class="msg-text">See you soon !</p>
                                                        <p class="msg-time">56 minutes ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets\images\avatar5.png" alt=""></div>
                                                        <p class="msg-name">Nick Doe</p>
                                                        <p class="msg-text">Nice to meet you</p>
                                                        <p class="msg-time">2 hours ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets\images\avatar2.png" alt=""></div>
                                                        <p class="msg-name">Sandra Smith</p>
                                                        <p class="msg-text">Hey ! I'm working on your project</p>
                                                        <p class="msg-time">5 hours ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets\images\avatar4.png" alt=""></div>
                                                        <p class="msg-name">Amily Lee</p>
                                                        <p class="msg-text">Hi David !</p>
                                                        <p class="msg-time">9 hours ago</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-all"><a href="#" class="text-center">All Messages</a></li>
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
                                        <li role="presentation"><a href="<?php echo base_url().'User_control/changePassword'; ?>"><i class="fa fa-user"></i>Setting</a></li>
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
