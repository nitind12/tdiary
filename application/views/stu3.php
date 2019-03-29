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
	<script>
		function validation(){
			if(document.getElementById("course").value=="")
			{
				alert("please fill your complete info. ");
				return false;
			}
		return false;
		}
	</script>
</head>
<body><body>
	<center>
<div class="container">
<body><body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="loginpage.php">TEACHER DIARY </a>
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
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Item No. 1</a></li>
                                    <li><a href="#">Don't Click</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Example Header</li>
                                    <li><a href="#">A Separated link</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Support </a></li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
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
    <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">HTML</a></li>
    <li><a href="#">CSS</a></li>
    <li><a href="#">JavaScript</a></li>
  </ul>
</div> 
 <script  type="text/javascript" src="<?php echo base_url('assets/scripts/jquery-1.9.1.min.js'); ?>" ></script>       <script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery-ui-1.10.1.custom.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>" ></script>
        <script type="text/javascript" src="<?php echo base_url('assets/scripts/flot/jquery.flot.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/scripts/flot/jquery.flot.resize.js'); ?>"></script>

        <script type="text/javascript" src="<?php echo base_url('assets/scripts/datatables/jquery.dataTables.js'); ?>"></script>
    </body>
</head>
<h3> Academics Detail</h3>
<form class="form-horizontal row-fluid">
	<div class="control-group">
		<label class="btn btn-primary control-label" for="basicinput">Basic Input</label>
			<div class="controls">
				<input type="text" id="basicinput" placeholder="Type something here..." class="span8">
		
			</div>
	</div>

		<div class="control-group">
			<label class="btn btn-primary control-label" for="basicinput">10th board</label>
				<div class="controls">
					<input type="text" id="basicinput" placeholder="Enter your 10th board..." class="span8" required/>
				</div>
		</div>
       
        <div class="control-group">
		    <label class="btn btn-primary control-label" for="basicinput">10th percent</label>
				<div class="controls">
					<input type="text" id="basicinput" placeholder="enter your 10th percent..." class="span8" required/>
				</div>
		</div>

		<div class="control-group">
		    <label class="btn btn-primary control-label" for="basicinput">10th passing year</label>
				<div class="controls">
					<input type="year" placeholder="Enter 10th passing year..."  class="span8" required/>
				</div>
		</div>		<br>
		
		<div class="control-group">
		    <label class="btn btn-primary control-label" for="basicinput">12th board</label>
				<div class="controls">
					<input type="text" placeholder="Enter 12th board..."  class="span8" required/>
				</div>
		</div><br>
		
		<div class="control-group">
		    <label class="btn btn-primary control-label" for="basicinput">12th percent</label>
		        <div class="controls">
					<input type="text" type="text" placeholder="Enter your 12th percent..."  class="span8" required/>
				</div>
		</div>		<br>

		<div class="control-group">
		    <label class="btn btn-primary control-label" for="basicinput">12th passing year</label>
				<div class="controls">
					<input type="year" placeholder="Enter 12th passing year"  class="span8" required/>
				</div>
		</div><br>

		<!--<div class="control-group">
		    <label class="btn btn-primary control-label" for="basicinput">city</label>
				<div class="controls">
					<input type="text" placeholder="Enter you city name..."  class="span8" required/>
		        </div>
		</div><br>
		
		<div class="control-group">
		    <label class="btn btn-primary control-label" for="basicinput">State</label>
				<div class="controls">
					<input type="text"  placeholder="Enter your State…"  class="span8 tip">
		        </div>
		</div><br>

		<div class="control-group">
		    <label class="btn btn-primary control-label" for="basicinput">Pincode</label>
				<div class="controls">
					<input type="number" maxlength="6" minlength="6" placeholder="Enter your pincode…"  class="span8 tip">
			    </div>	
		</div><br>
				
		<div class="control-group">
		    <label class="btn btn-primary control-label" for="basicinput">10th passing year</label>
		        <div class="controls">
					<input type="numeric" type="text" placeholder="pincode…"  class="span8 tip">
		        </div>
		 </div><br>-->
		    
		<div class="control-group">
			<label class="btn btn-primary control-label" for="basicinput">Other Diploma or certificate</label>
				<div class="controls">
					<textarea class="span8" rows="8"></textarea>
				</div>
		</div>

		<div class="control-group" required/>
						<div class="controls">
							<center>	
                                <button><input type="submit" id="course" class="btn" onclick="return validation();">
                                	submit it
                                </button> </a>
							</center>
						</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
		</div>
	</div>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>
	</body>