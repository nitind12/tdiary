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
	<div class="container">
<h1 align="center">Student Personal Detail</h1>

<center><form class="navbar-search pull-left input-append" action="#">
	<table class="table">
								  <thead>
									<tr>
									  <th>#</th>
									  <th>First Name</th>
									  <th>Last Name</th>
									  <th>Username</th>
									</tr>
								  </thead>
								  <tbody>
									<tr>
									  <td>1</td>
									  <td>Mark</td>
									  <td>Otto</td>
									  <td>@mdo</td>
									</tr>
									<tr>
									  <td>2</td>
									  <td>Jacob</td>
									  <td>Thornton</td>
									  <td>@fat</td>
									</tr>
									<tr>
									  <td>3</td>
									  <td>Larry</td>
									  <td>the Bird</td>
									  <td>@twitter</td>
									</tr>
								  </tbody>
								</table>

	<table border="1" class="table">
		<tbody>
	<tr>
						<td>FIRST_NAME</td>
						<td><input type="text" class="span3"></td>
						</tr>
						<!--<button class="btn" type="button">
							<i class="icon-search"></i>
						</button>-->
						<tr>
						<td>LAST NAME</td>
						<td><input type="text" class="span3"></td>
						</tr>
						<tr>
						<td>FATHERS_NAME</td>
						<td><input type="text" class="span3"></td>
						</tr>
						<tr>
						<td>MOTHERS_NAME</td>
						<td><input type="text" class="span3"></td>
						</tr>
						
						<tr>
						<td>D.O.B</td>
						<td><input type="text" class="span3"></td>
						</tr>
						<tr>
						<td>BLOOD_GROUP</td>
						<td><input type="text" class="span3"></td>
						</tr>
						<tr>
						<td>GENDER</td>
						<td><input type="text" class="span3"></td>
						</tr>
						<tr>
						<td>NATIONALITY</td>
						<td><input type="text" class="span3"></td>
						</tr>
						<tr>
						<td>CATEGORY</td>
						<td><input type="text" class="span3"></td>
						</tr>
					</tbody>
					</table>



					</form></center>
				
				</div>
				<div class="control-group">
					<div class="controls">
						<center><button type="submit" class="btn">Submit Form</button></center>
					</div>
				</div>
		<script  type="text/javascript" src="<?php echo base_url('assets/js/jquery/jquery-1.9.1.min.js'); ?>" ></script>     
	  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery/jquery-ui-1.10.1.custom.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>" ></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/flot/jquery.flot.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/flot/jquery.flot.resize.js'); ?>"></script>

        <script type="text/javascript" src="<?php echo base_url('assets/js/datatables/jquery.dataTables.js'); ?>"></script>

        <script type="text/javascript" src="<?php echo base_url('assets/js/common.js'); ?>"></script>
      
    </body>

</html>