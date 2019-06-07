<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title></title>
			<meta name="keywords" content="" />
			<meta name="description" content="" />
			<link href="http://fonts.googleapis.com/css?family=Varela" rel="stylesheet" />
			<link href="<?php echo base_url('assets/css/default.css');?>" rel="stylesheet" type="text/css" media="all" />
			<link href="<?php echo base_url('assets/css/fonts.css');?>" rel="stylesheet" type="text/css" media="all" />

			<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
			<style type="text/css">
				ul li a:hover{
						background-color:#1E8449;
						color:#000;
					}

				ul li a{
					text-decoration: none;
					color:#fff;
					padding:5px 20px;
					border:1px solid #fff; 
					transition:0.4s ease;		
				}
			</style>

</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">_T-e-a-c-h-e-r_D-i-a-r-y_</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class=""><a href="#" accesskey="1" title="">Homepage</a></li>
				<li><a href="<?php echo site_url('Login_controller/index');?>"
             accesskey="2" title="">Login</a></li>

				<!--<li><a href="<?php //echo site_url('Login_controller/index');?>" 
					accesskey="3" title="">Teacher_log</a></li>
				<li><a href="<?php //echo site_url('Login_controller/index');?>" 
					accesskey="4" title="">Student_log</a></li>		-->
				<li>
					<a href="<?php echo site_url('Homemain/about_us_controller');?>" 
						accesskey="5" title="">About Us</a></li>
				<li>
					<a href="<?php echo site_url('Homemain/about_us_controller1'); ?>" accesskey="6" title="">Contact Us</a></li>
			</ul>
		</div>
	</div>
	</div>
	<div id="banner">
		<div class="container">
			<div class="title">
				<h2>Online Teacher Diary Management System </h2>
				<span class="byline">NO.1 helping tools for teacher's</span> </div>
			<ul class="actions">
				<li><a href="#" class="button">O-T-D-M-S</a></li>
			</ul>
		</div>
	</div>
	<div id="extra" class="container">
		<div class="title">
			<h2>Welcome to ONLINE teacher diary </h2>
			<span class="byline">School communication begins here
			MyEDiary is an alternative to paper school diaries, combining communication, homework and time management for teachers, students and parents.</span> </div>
		<div id="three-column">
			<div class="boxA">
				<div class="box"> <span class="fa fa-cloud-download"></span>
					<p><b>For teachers</b><br>
				Using MyEDiary teachers are able to save time and interact with students and their parents beyond the scope of assessments and reporting.

			</p>
				</div>
			</div>
			<div class="boxB">
				<div class="box"> <span class="fa fa-cogs"></span>
					<p><b>For students</b><br>
						Provide students with a complete task management solution and equip them with the tools to better plan their study.

						</p>
				</div>
			</div>
			<div class="boxC">
				<div class="box"> <span class="fa fa-user"></span>
					<p><b>For parents</b><br/>
					With visibility of their child’s diary schools can provide parents with the transparency they’ve been asking for.</p>
				</div>
			</div>
		</div>
		<ul class="actions">
			<li><a href="#" class="button">Etiam posuere</a></li>
		</ul>
	</div>
	
</div>
<div id="copyright" class="container">
	Contact us:www.AGI.com
	</div>
</body>
</html>