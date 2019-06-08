<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript">
        site_url_='<?php echo site_url();?>';
        base_url_='<?php echo base_url();?>';
</script>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TEACHER DIARY: <?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>"/>
	<link rel="stylesheet" type="text/css"
	 href="<?php echo base_url('assets/bootstrap/css/bootstrap-responsive.min.css'); ?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/theme.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/images/icons/css/font-awesome.css'); ?>" />
    
  
	<!--link rel="stylesheet" type="text/css" href="http://fonts.googleapis.comcss?family=Open+Sans:400italic,600italic,400,600"/>
	<link type="text/css" rel='stylesheet' href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"/-->
</head>
<body >

	<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container ">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><span class="hideblock"><a class="brand " href="<?php echo site_url('main/index');?>">Teacher diary</span></a>
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
                            <li style="color:red;  font-family:serif; font-weight: bold;  font-size: 20px;   font-variant: small-caps;">
                                <a href="#"></a>
                                <?php echo  $this->session->userdata('user') ?></li>

                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url(),"assets/"?>images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>

                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo site_url('studentprofilecontroller');?>">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href='<?php echo site_url('Account_setting_controller') ?>'>Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo site_url('Login_controller/logout'); ?>">Logout</a></li>
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