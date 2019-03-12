<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edmin</title>
	<link type="text/css" href="<?php echo base_url(),"assets/";?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url(),"assets/";?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url(),"assets/";?>css/theme.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url(),"assets/";?>images/icons/css/font-awesome.css" rel="stylesheet">
<!--	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>		-->
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="sidebar">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<center>	<h2>Your Planbook</h2>		</center>
							</div>
						
							<table class="table">
								  <thead>
									<tr>
									<td>
										<div class="dropdown ">
											<a class="btn-primary dropdown-toggle btn" data-toggle="dropdown" 
											href="#">Lecture Plan<i class="icon-caret-down"></i></a>
											<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
													<li><a href="#">New</a></li>
													<li><a href="#">Edit</a></li>
													<li><a href="#">View</a></li>								
											</ul>
										</div>
									</td>

									<td>
										<a class=" btn-primary dropdown-toggle btn" href="#">Lesson Plan</a>
									</td>

									<td>
										<a class=" btn-primary dropdown-toggle btn" href="#">Weekly Plan</a>
									</td>
								</tr>
							</thead>
						</table>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


									

												
	


	<script src="<?php echo base_url(),"dump/";?>scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(),"dump/";?>scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript">
		
	</script>
	<script src="<?php echo base_url(),"dump/";?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(),"dump/";?>scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>
</html>