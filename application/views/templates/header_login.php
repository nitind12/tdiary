<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
<body>

	 <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <i class="icon-reorder shaded"></i>
                </a>

                <a class="brand" href="index.html">
                    TEACHER DIARY
                </a>

                <div class="nav-collapse collapse navbar-inverse-collapse">
                
                    <ul class="nav pull-right">

                        <li>
                            <a href='<?php echo base_url()."index.php/signup_controller"; ?>'>Sign Up</a>
                        </a></li>
                        <li><a href='<?php echo base_url()."index.php/Forgotpwd_controller"; ?>'>
                            Forgot your password?
                        </a></li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div>
        </div><!-- /navbar-inner -->
    </div><!-- /navbar -->

