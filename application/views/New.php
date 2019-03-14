<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lecture Plan</title>
	<link type="text/css" href="<?php echo base_url(),"assets/";?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url(),"assets/";?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url(),"assets/";?>css/theme.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url(),"assets/";?>images/icons/css/font-awesome.css" rel="stylesheet">
<!--	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>		-->
</head>
<body>
<div style="padding-top:5%" class="container">

<body>
	
	
		<div class="container">
			<div class="row">
				<div class="span3">
					<div class="sidebar">

				<div class="span12">
					<div class="content">

						<div class="module">
							<div class=" btn-info module-head">
							<center>	<h2>Lecture Plan</h2>	
										<div class="control-group">
											
													<div class="controls">
														<input type="text" id="session"  placeholder="Session" class="span2">
													</div>
										</div>
							</div>
						</center>
							<div class="module-body">
							

									<form  method="post" action="<?php echo site_url('New_controller/savingdata');?>" class="form-horizontal row-fluid">
										<table class="table" border="1">
										<tbody>
											<tr>
												 <td>
													  <div class="control-group">
														<label class="control-label" for="Course">Course Name</label>
														<div class="controls">
															<select tabindex="1" data-placeholder="Select here.." class="span8" name="Course_Name">
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
													<div class=" col control-group">
														<label class="control-label" for="Semester">Semester:	</label>
														<div class="controls">
															<input type="text" id="txtSemester" name="txtSemester" class="span8">
														</div>
													</div>
												</td>

												<td>
													<div class="control-group">
														<label class="control-label" for="Section">Section:	</label>
														<div class="controls">
															<input type="text" id="txtSection" name="txtSection" class="span8">
														</div>
													</div>
												</td>
											</tr>


											<tr>
												<td>
													<div class="control-group">
														<label class="control-label" for="Section">Faculty Name:	</label>
														<div class="controls">
															<input type="text" id="txtPrepared" name="txtPrepared" class="span8">
														</div>
													</div>
												</td>
							
												<td>
													<div class="control-group">
														<label class="control-label" for="Section">Date Of Commencement:	</label>
														<div class="controls">
															<input type="text" id="txtDOC" name="txtDOC" class="span8">
														</div>
													</div>
												</td>

												<td>
													<div class="control-group">
														<label class="control-label" for="Section">Actual Date Of Completion:	</label>
														<div class="controls">
															<input type="text" id="txtADOC" name="txtADOC" class="span8">
														</div>
													</div>
												</td>
											</tr>

										<tr>

											<td>
												<div class="control-group">
													<label class="control-label" for="Section">Expected Date Of Completion:	</label>
													<div class="controls">
														<input type="text" id="txtEDOC" name="txtEDOC" class="span8">
													</div>
												</div>
											</td>

											<td>
												<div class="control-group">
													<label class="control-label" for="Section">Subject Name:	</label>
													<div class="controls">
														<input type="text" id="txtsubject" name="txtsubject" class="span8">
													</div>
												</div>
											</td>

											<td>
												<div class="control-group">
													<label class="control-label" for="Section">Syllabus Pdf:</label>
													<div class="controls">
														<a class=" span8 dropdown-toggle btn" href="#">Upload</a>
													</div>
												</div>
											</td>						
										</tr>

										<tr>
											 <th colspan="3"><div class="control-group">
											 	<label class=" span3 control-label" for="Unit"><h3>Lecture Structure</h3></label>	
												 </div>
											</th>

												
										</tr>

										<tr>
											 
											<th><div class="btn-info control-group">
													<label class="control-label" for="Unit"><h5>Unit</h5></label>
												</div>
											
												<br>
												<center>	<input type="text" id="txtsubject" name="txtunit" cltxtass="span8">
												</center>
											</th>
											
											<th><div class="btn-info control-group">
													<label class="control-label" for="Topic"><h5>Topic</h5></label>
												</div>
												<br>
												<center> <textarea class="span8" rows="3" name="txtarea"></textarea>
												</center>
											</th>

											<th><div class="btn-info control-group">
													<label class="control-label" for="Lecture"><h5>No. Of Lecture</h5>
													</label>
												</div>
													<br>
												<center> <input type="text" id="txtNoofLecture" name="txtNoofLecture" class="span8">
												</center>
											</th>
										</tr>
										
										<tr>
												<td colspan="3">									
													<div class=" control-group">
														<label class="control-label" for="Semester">Total No. of Lecture:	</label>
														<div class="controls" >
															<input type="text" id="txtSemester" name="txtSemester" class="span2">
															<button style="float:right" type="submit" name="save" 
															 class="btn btn-primary">Submit Form</button>
														</div>
													</div>
												</td>
										</tr>
									</tbody>
							</table>
		

							
										
									


								


						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->


													
			
			
	
<!-- view database in page -->

<!--<table border="1" cellpadding="5" cellspacing="5" width="40%">
		<tr style="text-align: left">
			<th>Course_Name</th>
			<th>Semester</th>
			<th>Section</th>
			<th>Faculty_Name</th>
			<th>Date_Of_Commencement</th>
			<th>Actual_Date_Of_Completion</th>
			<th>Expected_Date_Of_Completion</th>
			<th>Subject_Name</th>
			<th>Unit</th>
			<th>Topic</th>
			<th>No_Of_Lecture</th>
			<th>Total_No_Of_lecture</th>
		</tr>
	<?php foreach ($lecture_database as $item) { ?>
		<tr>
			<td><?php echo $item->Course_Name ;?></td>
			<td><?php echo $item->Semester;?></td>
			<td><?php echo $item->Section ;?></td>
			<td><?php echo $item->Faculty_Name ;?></td>
			<td><?php echo $item->Date_Of_Commencement ;?></td>
			<td><?php echo $item->Actual_Date_Of_Completion ;?></td>
			<td><?php echo $item->Expected_Date_Of_Completion;?></td>
			<td><?php echo $item->Subject_Name;?></td>
			<td><?php echo $item->Unit;?></td>
			<td><?php echo $item->Topic ;?></td>
			<td><?php echo $item->No_Of_Lecture ;?></td>
			<td><?php echo $item->Total_No_Of_Lecture ;?></td>
					</tr>
	<?php } ?>
	</table> -->	







												
	


	<script src="<?php echo base_url(),"assets/";?>scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(),"assets/";?>scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript">
		
	</script>
	<script src="<?php echo base_url(),"assets/";?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(),"assets/";?>scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>
</html>