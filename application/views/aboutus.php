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
				<li class=""><a  href="<?php echo site_url('homemain/index');?>" accesskey="1" title="">Homepage</a></li>
				<li><a href="<?php echo site_url('Login_controller/index');?>"
            accesskey="2" title="">Login</a></li>
			<!--	<li><a href="<?php //echo site_url('Login_controller/index');?>" 
					accesskey="3" title="">Teacher_log</a></li>
				<li><a href="<?php //echo site_url('Login_controller/index');?>" 
					accesskey="4" title="">Student_log</a></li>		-->
				<li>
					<a href="<?php echo site_url('Homemain/about_us_controller');?>" 
						accesskey="5" title="">About Us</a></li>
				<li>
					<a href="<?php echo site_url('Login_controller/index'); ?>" accesskey="6" title="">Contact Us</a></li>
			</ul>
		</div>
	</div>
	</div>
	<div id="extra" class="container">
		<div class="title">
			<h2>ABOUTS US</h2>
			<span class="byline"></span> </div>
		<div id="three-column">
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
