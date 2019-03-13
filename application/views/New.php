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
<div style="padding-top:5%" class="container">
<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="span3">
				<div class="sidebar">
					<div class="span11">
						<div class="content">

							<div class="module">
								<div class="module-head">
									<center>  <h2>Lecture Plan</h2>   </center>
								</div>
								<div class="module-body">
									<form class="form-horizontal">
										<table class="table">
											<thead>
												<tr>
													<td>
														<div class="control-group">
															<label class="control-label" for="basicinput">Dropdown Button</label>
															<div class="controls">
																<div class="dropdown">
																	<a class="dropdown-toggle btn" data-toggle="dropdown" href="#">Dropdown Button <i class="icon-caret-down"></i></a>
																	<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
																		<li><a href="#">First Row</a></li>
																		<li><a href="#">Second Row</a></li>
																		<li><a href="#">Third Row</a></li>
																		<li><a href="#">Fourth Row</a></li>
																	</ul>
																</div>
															</div>
														</div>
												
												</tr>
											</thead>
													
							
<!--
	<div class="row">
		<div class="span12">

			<div class="content">
				<div class="module">
					<div class="module-head">
						<center>	<h2>Lecture Plan</h2>					
							<input type="text" id="basicinput" placeholder="Session " class="span2">					
						</center>
					</div>

				<div class="span9">
					<div class="content">
							<table class="table">
								<thead>
									<tr>
									   <td>
										  <div class="control-group">
											<label class="control-label" for="Course">Course Name</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." class="span2">
													<option value="">Select here..</option>
													<option value="Category 1">BCA</option>
													<option value="Category 2">BBA</option>
													<option value="Category 3">B.COM</option>
													<option value="Category 4">POLY TECHNIQUE</option>
													<option value="Category 4">BSC</option>
													<option value="Category 4">HM</option>
												</select>
											</div>
										  </div>
									   </td>

									<td>									
										<div class="control-group">
											<label class="control-label" for="Semester">Semester:	</label>
											<div class="controls">
												<input type="text" id="Semester" name="Semester" class="span2">
											</div>
										</div>
									</td>

									<td>
										<div class="control-group">
											<label class="control-label" for="Section">Section:	</label>
											<div class="controls">
												<input type="text" id="Section" name="Section" class="span2">
											</div>
										</div>
									</td>

									<td>
										<div class="control-group">
											<label class="control-label" for="Section">Prepared By:	</label>
											<div class="controls">
												<input type="text" id="Prepared" name="Prepared" placeholder="Faculty name" class="span2">
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td>
										<div class="control-group">
											<label class="control-label" for="Section">Date Of Commnecement:	</label>
											<div class="controls">
												<input type="text" id="DOC" name="DOC" class="span2">
											</div>
										</div>
									</td>

									<td>
										<div class="control-group">
											<label class="control-label" for="Section">Actual Date Of Completion:	</label>
											<div class="controls">
												<input type="text" id="ADOC" name="ADOC" class="span2">
											</div>
										</div>
									</td>

									<td>
										<div class="control-group">
											<label class="control-label" for="Section">Expected Date Of Completion:	</label>
											<div class="controls">
												<input type="text" id="EDOC" name="EDOC" class="span2">
											</div>
										</div>
									</td>

									<td>
										<div class="control-group">
											<label class="control-label" for="Section">Subject Name:	</label>
											<div class="controls">
												<input type="text" id="subject" name="subject" class="span2">
											</div>
										</div>
									</td>
								</tr>
							</thead>
						</table>

				
					<div class="module">
							<div class="module-head">
								<h3>Lecture Structure</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead> 
										<tr>
											<th>Unit</th>
											<th colspan="2">Topic</th>
											<th>Expected No. Of Lecture</th>
											<th>Actual No. Of Lecture</th>
											
										</tr>
									</thead>
									<tbody>
										<tr class="odd gradeX">
											<td>1</td>
											<td colspan="2"><textarea rows="2" cols="50"></textarea></td>
											<td></td>
											<td class="center"></td>
										
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
	
	-->	

		<!--	<form class="navbar-search pull-left input-append" action="#">
						<input type="text" class="span3">
						
						</button>
					</form>
								-->					
	


									

												
	


	<script src="<?php echo base_url(),"dump/";?>scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(),"dump/";?>scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript">
		
	</script>
	<script src="<?php echo base_url(),"dump/";?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(),"dump/";?>scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>
</html>