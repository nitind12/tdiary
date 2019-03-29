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
	<div class="container">
	
	<h3> Contact Detail</h3>

<form method="post" action="<?php echo site_url('stu3c/index');?>"  class="form-horizontal row-fluid">
		<div class="control-group">
			<label class="btn btn-primary control-label" for="basicinput">student Email</label>
				<div class="controls">
					<input type="Email" id="email" name="email" placeholder="Enter your Email..." class="span8"  required/>
				</div>
		</div>
        <div class="control-group">
		    <label class="btn btn-primary control-label" for="basicinput">Parents Email</label>
				<div class="controls">
					<input type="Email" id="pemail" name="pemail" placeholder=" Enter your Parents Email..." class="span8" required/>
				</div>
		</div>

		<div class="control-group">
		    <label class="btn btn-primary control-label" for="basicinput">Student contact</label>
				<div class="controls">
					<input type="number"   id="scon" name="scon"pattern=" /^\d{10}$/" placeholder="Enter your Contact no.…"  class="span8" pattern="/^[0-9-+]+$/" required/>
				</div><br>
						<div class="control-group">
		    <label class="btn btn-primary control-label" for="basicinput">Parents contact</label>
				<div class="controls">
					<input type="number" type="text"  id="pcon" name="pcon" placeholder="Parents Contact no.…"  class="span8" required/>
				</div>
		</div><br>
				<div class="control-group">
		    <label class="btn btn-primary control-label" for="basicinput">Current Address…</label>
		<div class="controls">
					<input type="text" type="text" id="cadd" name="cadd" placeholder="Enter your Current Address…"  class="span8" required/>
				</div><br>
						<div class="control-group">
		    <label class="btn btn-primary control-label" for="basicinput">permanent Address…</label>
				<div class="controls">
					<input type="text" type="text" id="padd" name="padd" placeholder="Enter your permanent Address…"  class="span8" required/>
				</div><br>
						<div class="control-group">
		    <label class="btn btn-primary control-label" for="basicinput">City</label>
				<div class="controls">
					<input type="text" id="city" name="city" placeholder="Enter your City name…"  class="span8" required/>
				</div><br>
						<div class="control-group">
		    <label class="btn btn-primary control-label" for="basicinput">State</label>
				<div class="controls">
					<input type="text" id="state" name="state" placeholder="Enter your State…"  class="span8" required/>
				</div><br>
						<div class="control-group">
		    <label class="btn btn-primary control-label" for="basicinput">Pincode</label>
				<div class="controls">
					<input type="numeric" id="pincode" name="Pincode" placeholder="Enter your pincode…"  class="span8" required/>
				</div><br>

							<div class="control-group" required/>
						<div class="controls">
							<center><a href="<?php echo site_url('stu3c/index');?>">	
                                <button><input type="submit" id="course" class="btn" onclick="return validation();">
                                	Save & Next
                                </button> </a>
							</center>
						</div>
			</div>
							
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->


	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>
	</body>