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



		<style type="text/css">

				.field-icon {
					  float: right;
					  margin-left: -20px;
					  margin-top: 5px;
					  position: relative;
					  z-index: 2;
					}
		</style>

</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
			  		Teacher diary
			  	</a>

			<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">

						<li><a href='<?php echo base_url()."index.php/Login_controller"; ?>'>Sign In</a>
							</li>

						

						<li><a href="#">
							Help us...
						</a></li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->





	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
						<div class="module-head">
							<h3>Forgot Password</h3>
						</div>
					
						<div class="module-body">
								<div ><?php echo $this->session->flashdata('c');?> </div>	
				
						

							<form method="post" action="">

							<div class="control-group">
								<div class="controls row-fluid  ">
								<input type="text" name="email" id="email"  class="span12" placeholder="Email Id"  required="required">
								</div>
							</div>

							<div class="control-group">
								<div class="controls row-fluid">
								<input type="password" name="newPassword" id="newPassword"  class="span12 " placeholder="New Password"  required="required"><span  toggle="#newPassword"  class="icon-eye-open field-icon  toggle-password"></span>
								</div>
							</div>

							<div class="control-group">
								<div class="controls row-fluid">
								<input type="password" name="confirmPassword"  id="confirmPassword"  class="span12 " placeholder="Confirm Password" required="required"><span  toggle="#confirmPassword"  class="icon-eye-open field-icon  toggle-password"></span>
								</div>
							</div>
						</div>

						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix "align="center">
									<input type="submit" name="submit" id="submit" class="btn btn-primary   " value="Reset Password ">
									

								</div>
							</div>
						</div>
				
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->	

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; ravi.com </b> All rights reserved.
		</div>
	</div>






