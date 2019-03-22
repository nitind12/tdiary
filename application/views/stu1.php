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
<body>
	<div class="container">
	<h1 align="center">Registration Form </h1>
	<h3> Personal Detail</h3>
<form method="post" action="<?php echo site_url('stu2c/index');?>" class="form-horizontal row-fluid">
		<div class="control-group">
			<label class="control-label" for="basicinput"></label>
				<div class="controls">
					<input type="text" id="basicinput" placeholder="student name..." id="course" class="span8"  >
				</div>
		</div>
        <div class="control-group">
		    <label class="control-label" for="basicinput"></label>
				<div class="controls">
					<input type="text" id="basicinput" placeholder="father's name..." id="course" class="span8">
				</div>
		</div>

		<div class="control-group">
		    <label class="control-label" for="basicinput"></label>
				<div class="controls">
					<input type="text" type="text" placeholder="mother's name…" id="course" class="span8 tip">
				</div>
		</div><br>
		<div class="control-group">
					<label class="control-label" for="basicinput">Blood group</label>
						<div class="controls">
							<select tabindex="1" data-placeholder="Select here.." id="course" class="span8">
								<option value="">Select here..</option>
								<option value="Category 1">A+</option>
								<option value="Category 2">B+</option>
								<option value="Category 3">AB+</option>
								<option value="Category 3">O+</option>
								<option value="Category 3">O-</option>
							</select>
						</div>
				
		</div>
			<div class="control-group">
		        <label class="control-label" for="basicinput">D.O.B</label>
		            <div class="controls">
				        <input type="date" id="basicinput"  class="span8" id="course">
				    </div>
	        </div>

			<div class="control-group">
					<label class="control-label" for="basicinput">Gender</label>
						<div class="controls">
							<select tabindex="1" data-placeholder="Select here.." class="span8" id="course">
								<option value="">Select here..</option>
								<option value="Category 1">Male</option>
								<option value="Category 2">Female</option>
								<option value="Category 3">Other</option>
								
							</select>
						</div>
			</div>

			<div class="control-group" id="course">
					<label class="control-label">Category</label>
						<div class="controls">
							<label class="radio inline">
								<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
													GEN
							</label> 
									<label class="radio inline">
										<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													SC/ST
									</label> 
									<label class="radio inline">
										<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
													OBC
									</label>
						</div>
			</div>

			<div class="control-group">
					<label class="control-label">Nationality</label>
						<div class="controls" id="course">
							<label class="checkbox">
								<input type="radio" value="Indian" name="c1">
													Indian
							</label>
							<label class="checkbox">
								<input type="radio" value="Foreigner" name="c1">
													Foreigner
							</label>
												
						</div>
			</div>

			<div class="control-group">
						<div class="controls">
							<center><a href="<?php echo site_url('stu2c/index');?>">	
                                <button><input type="submit" id="course" class="btn" onclick="return validation();"
                                	<a href="<?php echo site_url('stu3c/index');?>">Save & Next</a>
                                </button> 
							</center>
						</div>
			</div>
									</form>
							
						

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	




	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	</div>
</body>
	
	</html>