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
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">Teacher diary </a>
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

                            <li><a href="#">Support </a></li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url(),"assets/"?>images/user.png" class="nav-avatar" />
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
        <!-- /navbar -->
		 <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.html"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>News Update</a>
                                </li>
                                <li><a href="message.html"><i class="menu-icon icon-inbox"></i>Notification <b class="label green pull-right"> 0</b> </a></li>
                                <li><a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">
                                    19</b> </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
                                <li><a href="#"><i class="menu-icon icon-table"></i> Online Attendance </a></li>
                              <!--  <li><a href="<?php echo site_url('Fpage_controller/index'); ?>"><i class="menu-icon icon-book">
                                                                                                                  
                                </i> Lesson-Plans</a></li>      -->
                                   <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages1"><i class="menu-icon icon-book">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Lecture Plan </a>
                                    <ul id="togglePages1" class="collapse unstyled">
                                        <li><a href="<?php echo site_url('New_controller/index'); ?>"><i class="icon-book"></i>New</a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Edit </a></li>
                                        <li><a href="other-user-listing.html"><i class="icon-inbox"></i>View </a></li>
                                    </ul>
                                <li><a href="#"><i class="menu-icon icon-paste"></i>Internal-Marks </a></li>
                                <li><a href="#"><i class="menu-icon icon-bold"></i> Assignments</a></li>
                                <li><a href="#"><i class="menu-icon icon-bar-chart"></i>Time-Charts </a></li>
                            </ul>


                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>More Pages </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.html"><i class="icon-inbox"></i>Login </a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
                                        <li><a href="other-user-listing.html"><i class="icon-inbox"></i>All Users </a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                   </li>
               </ul>
           </ul>
       </div>
  
         








<div class="span9">
	<div class="content">
		<div class="module">
			<div class=" module-head">
				<center>	<h2>Lecture Plan</h2>	
					<div class="control-group">
											
							<div class="controls">
														<input type="text" id="session"  placeholder="Session" class="span2">
													</div>
										</div>
							</div>
						</center>
							<div class="module-body">
							

									<form  method="post" action="<?php echo site_url('New_controller/savingdata');?>"
									 class="form-horizontal row-fluid">
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
											 
											<th><div class="control-group">
													<label class="control-label" for="Unit"><h5>Unit</h5></label>
												</div>
											
												<br>
												<center>	<input type="text" id="txtsubject" name="txtunit" cltxtass="span8">
												</center>
											</th>
											
											<th><div class=" control-group">
													<label class="control-label" for="Topic"><h5>Topic</h5></label>
												</div>
												<br>
												<center> <textarea class="span8" rows="3" name="txtarea"></textarea>
												</center>
											</th>

											<th><div class="control-group">
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
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</li>
</ul>
</ul>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
		

							
										
									


								


						
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







												
	


        
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.9.1.min.js'); ?>" ></script>  
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui-1.10.1.custom.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>" ></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/flot/jquery.flot.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/flot/jquery.flot.resize.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/datatables/jquery.dataTables.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/common.js'); ?>"></script>
      

</body>
</html>