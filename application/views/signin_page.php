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
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="<?php echo site_url('homemain/index');?>">
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
				<div class="module span4 offset4">
					<form class="form-vertical" method="POST" name="frmsign"id="frmsign" action="<?php echo site_url('signup_controller/register');?>">
					
						<div class="module-head">
							<h3>Sign Up</h3>
						</div>
					<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid input-prepend">
									<span class="add-on"><i class="icon-user"></i></span><input class="span11" type="text" id="txtUsername" name ="txtUsername"placeholder="Username">
								</div>
							</div>

							
							<div class="control-group">
								<div class="controls row-fluid input-prepend">
									<span class="add-on"><i class="icon-edit"></i></span><input class="span11" type="text" id="txtstudentid" name ="txtstudentid"placeholder="Student Id">
								</div>
							</div>
				
				
					</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid input-prepend">
									<span class="add-on"><i class="icon-lock"></i></span><input class="span11" type="Password" id="Password" name="txtPwd" placeholder="Password">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid input-prepend">
									<span class="add-on"><i class="icon-lock"></i></span><input class="span11" type="password" id="RePassword" name="retxtPwd" placeholder="Re-Password">
								</div>
							</div>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<div class="controls">
												<select tabindex="1" data-placeholder="Select question.." name="txtquestion"class="span12">
													<option value="">Select question ..</option>
													<option value="question 1">First question</option>
													<option value="question 2">Second question</option>
													<option value="question 3">Third question</option>
													<option value="question 4">Fourth question</option>
												</select>
											</div>
									</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="answer" name="txtanswer" placeholder="Answer">
								</div>
							</div>
						</div>
					
							<div class="control-group">
								<div class="controls row-fluid ">
								<center><input type="radio" name="rod" id="Student" value="3" class="radio inline">
													Student
										
													<input type="radio" name="rod" id="Parents" value="4" class="radio inline">
													Parents</center>
												</div>
							</div>
							
							<div>
							<hr>
						</div>
						
					
						
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<input type="submit" class="btn btn-primary pull-right" id="btnsign" name="btnsign"value="Sign Up" disabled > 
								
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">@ravi.com </b> All rights reserved.
		</div>
	</div>
	
	</div>
	