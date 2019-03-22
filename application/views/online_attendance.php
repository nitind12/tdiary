<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
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

						<li><a href='<?php echo base_url()."index.php/Main/login"; ?>'>Sign In</a>
							</li>

						

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
                         <li><a class="collapsed" data-toggle="collapse" href="#togglePages1"><i class="menu-icon icon-book">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Online Attendance</a>
                                    <ul id="togglePages1" class="collapse unstyled">
                                        <li><a href="<?php echo site_url('Edit_controller/index'); ?>"><i class="icon-edit"></i>Take Attendance</a></li>
                                        
                                        <li><a href="<?php echo site_url('Lview_controller/index'); ?>"><i class="icon-eye-open"></i>Update Attendance</a></li>
                                    </ul>
                                </li>




                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages1"><i class="menu-icon icon-book">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Lecture Plan </a>
                                    <ul id="togglePages1" class="collapse unstyled">
                                        <li><a href="<?php echo site_url('Edit_controller/index'); ?>"><i class="icon-edit"></i>Edit</a></li>
                                        
                                        <li><a href="<?php echo site_url('Lview_controller/index'); ?>"><i class="icon-eye-open"></i>View</a></li>
                                    </ul>
                                </li>
                            </ul>

   
                             <ul class="widget widget-menu unstyled">
                                    <li><a class="collapsed" data-toggle="collapse" href="#togglePages2"><i class="menu-icon icon-book">
                                    </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                    </i>Lesson Plan </a>
                                        <ul id="togglePages2" class="collapse unstyled">
                                            <li><a href="<?php echo site_url('Lessonedit_controller/index'); ?>"><i class="icon-edit"></i>Edit</a></li>
                                                       
                                             <li><a href="<?php echo site_url('Lessonview_controller/index');?>"><i class="icon-eye-open"></i>View </a></li>
                                        </ul>
                                    </li>
                             </ul>
                                  


                                         <li><a href="#togglePage"><i class="icon-book"></i>Weekly Lesson Plan </a> </li>    
                                    <!--  <li><a href="#"><i class="menu-icon icon-paste"></i>Lesson Plan </a></li>

                                      <li><a href="#"><i class="menu-icon icon-paste"></i>Weekly Plan </a></li>     -->

                                     <ul class="widget widget-menu unstyled">
                                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages3"><i class="icon-paste">
                                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                                </i>Internal Marks </a>
                                                  <ul id="togglePages3" class="collapse unstyled">
                                        <li><a href="<?php echo site_url('test/index');?>"><i class="icon-edit"></i>Edit</a></li>
                                        <li><a href="<?php echo site_url('marks/index');?>"><i class="icon-eye-open"></i>View </a></li>
                                        
                                    </ul>
                                </li>
                            </ul>
                               

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
                    </div><!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>ONLINE_ATTENDANCE</h3>
							</div>
							<div class="module-body">

									
										
										<!--/<div class="control-group">
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

										<div class="control-group">
											<label class="control-label" for="basicinput">Course</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." class="span8">
													<option value="">Select here..</option>
													<option value="Category 1">BCA</option>
													<option value="Category 2">MCA</option>
													<option value="Category 3">BBA</option>
													<option value="Category 4">MBA</option>
												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Session</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." class="span8">
													<option value="">Select here..</option>
													<option value="Category 1">2016-19</option>
													<option value="Category 2">2017-20</option>
													<option value="Category 3">2018-21</option>
													<option value="Category 4">2019-22</option>
												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Dropdown</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." class="span8">
													<option value="">Select here..</option>
													<option value="Category 1">First Row</option>
													<option value="Category 2">Second Row</option>
													<option value="Category 3">Third Row</option>
													<option value="Category 4">Fourth Row</option>
												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Dropdown</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." class="span8">
													<option value="">Select here..</option>
													<option value="Category 1">First Row</option>
													<option value="Category 2">Second Row</option>
													<option value="Category 3">Third Row</option>
													<option value="Category 4">Fourth Row</option>
												</select>
											</div>
										</div>-->
		
 















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


















<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/highcharts.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/highcharts-exporting.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.knob.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/student.js'); ?>"></script>
  




	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.9.1.min.js'); ?>" ></script>  
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui-1.10.1.custom.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>" ></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/flot/jquery.flot.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/flot/jquery.flot.resize.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/datatables/jquery.dataTables.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/common.js'); ?>"></script>

</body>
</html>
