<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TEACHER DIARY</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>"/>
	<link rel="stylesheet" type="text/css"
	 href="<?php echo base_url('assets/bootstrap/css/bootstrap-responsive.min.css'); ?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/theme.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/images/icons/css/font-awesome.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/http://fonts.googleapis.comcss?family=Open+Sans:400italic,600italic,400,600');?>"/>
	<link type="text/css" rel='stylesheet' href="<?php echo base_url('assets/http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600')?>"/>
</head>
<body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">Teacher diary </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                            <li><a href="#"><i class="icon-eye-open"></i></a></li>
                            <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                        </ul>
                        <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form>
                        <ul class="nav pull-right">

                            <li><a href="#">Support </a></li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url(),"assets/"?>images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
		 <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.html"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>News Update</a>
                                </li>
                                <li><a href="message.html"><i class="menu-icon icon-inbox"></i>Notification <b class="label green pull-right"> 0</b> </a></li>
                                <li><a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">
                                    19</b> </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
                                <li><a href="#"><i class="menu-icon icon-table"></i> Online Attendance </a></li>
                              <!--  <li><a href="<?php echo site_url('Fpage_controller/index'); ?>"><i class="menu-icon icon-book">
                                                                                                                  
                                </i> Lesson-Plans</a></li>      -->
                                   <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages1"><i class="menu-icon icon-book">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Lecture Plan </a>
                                    <ul id="togglePages1" class="collapse unstyled">
                                        <li><a href="<?php echo site_url('New_controller/index'); ?>"><i class="icon-book"></i>New</a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Edit </a></li>
                                        <li><a href="other-user-listing.html"><i class="icon-inbox"></i>View </a></li>
                                    </ul>
                                <li><a href="#"><i class="menu-icon icon-paste"></i>Internal-Marks </a></li>
                                <li><a href="#"><i class="menu-icon icon-bold"></i> Assignments</a></li>
                                <li><a href="#"><i class="menu-icon icon-bar-chart"></i>Time-Charts </a></li>
                            </ul>


                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>More Pages </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.html"><i class="icon-inbox"></i>Login </a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
                                        <li><a href="other-user-listing.html"><i class="icon-inbox"></i>All Users </a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
        
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.9.1.min.js'); ?>" ></script>  
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui-1.10.1.custom.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>" ></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/flot/jquery.flot.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/flot/jquery.flot.resize.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/datatables/jquery.dataTables.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/common.js'); ?>"></script>
      

</body>