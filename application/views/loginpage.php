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
			  		TEACHER DIARY
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">

						<li>
							<a href='<?php echo base_url()."index.php/Main/signin"; ?>'>Sign In</a>
						</a></li>

						

						<li><a href=forgot.php>
							Forgot your password?
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
					<form class="form-vertical" method="post"action="<?php echo site_url('Main/login_action'); ?>">
						<div class="module-head">
							<h3>Sign Up</h3>
					</div>
						<?php
						    echo form_open();  
    						echo validation_errors();
						    ?>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" name="username"id="username" placeholder="Username">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password"name="password" id="password" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right">Login</button>
									<label class="checkbox">
										<input type="checkbox"> Remember me
									</label>
								<?php
 								echo form_close();  
								?>
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
			 

			<b class="copyright">&copy; ravi.com </b> All rights reserved.
		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery-1.9.1.min.js'); ?>" ></script>
	<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery-ui-1.10.1.custom.min.js'); ?>" ></script>
	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>" ></script>
</body>