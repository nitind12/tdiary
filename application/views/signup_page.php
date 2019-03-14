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

			  	<a class="brand" href="index.html">
			  		Teacher diary
			  	</a>

			<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">

						<li><a href="login.php">
							Sign In
						</a></li>

						

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
					<form class="form-vertical" method="POST""action="<?php echo site_url('signup_controller/register');?>>
						<div class="module-head">
							<h3>Sign Up</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="Username"name="txtUsername" placeholder="Username">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="email" id="email"name="txtEmail" placeholder="Email">
								</div>
							</div>
					
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="first_name"name="txtfirst_name" placeholder="First-name">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="sir_name" name="txtsir_name" placeholder="Sir-name">
								</div>
							</div>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="Password" id="Pwd" name="txtPwd" placeholder="Password">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" id="RePwd"name="txtRePwd"  placeholder="Re-Password">
								</div>
							</div>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="Phone" name="Phone" placeholder="Phone">
								</div>
							</div>
						</div>
						
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<div class="controls">
												<select tabindex="1" data-placeholder="Select question.." class="span12"name="txtquestion">
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
									<input class="span12" type="text" id="answer" placeholder="Answer"name="txtanswer">
								</div>
							</div>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="date" id="dateofbirth" placeholder="Date-Of-Birth"name="dateofbirth">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									
									<label class="radio inline" "span12" >
													<input type="radio" name="txtrod" id="rod" value="Teacher" checked="" >
													Teacher
												</label>
									<label class="radio inline">
													<input type="radio" name="txtrod" id="rad" value="Student">
													Student
												</label> 
									<label class="radio inline">
													<input type="radio" name="txtrod" id="rod" value="Parents">
													Parents
												</label>
									</div>
								</div>
							<div>
								<hr>
							</div>
						
					
	
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right">Login</button>
								
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
		<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery-1.9.1.min.js'); ?>" ></script>
	<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery-ui-1.10.1.custom.min.js'); ?>" ></script>
	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>" ></script>
</body>