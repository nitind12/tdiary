<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edmin</title>
	<link type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap-responsive.min.css');?>" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url('assets/css/theme.css');?>" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url('assets/images/icons/css/font-awesome.css');?>" rel="stylesheet">
<!--	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>		-->
</head>
<body>

<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="span3">
				<div class="sidebar">
					<div class="span12">
						<div class="content">

							<div class="module">
								<div class="module-head">
									<center>  <h2>Your Planbooks</h2>   </center>
								</div>
								<div class="module-body">
									<form class="form-horizontal row-fluid">
										<table class="table">
										  <thead>
											<tr>
												<td>
													<ul class="widget widget-menu unstyled">
						                                <li><a class="collapsed" data-toggle="collapse" 
						                                	href="#togglePages">
						                                	</i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
						                                	</i>Lecture Plan </a>
						                                    <ul id="togglePages" class="collapse unstyled">
						                                        <li><a href="<?php echo site_url('New_controller/index1'); ?>"><i class="icon-book"></i>New</a></li>
						                                        <li><a href="other-user-profile.html"><i class="icon-edit"></i>Edit</a></li>
						                                        <li><a href="other-user-listing.html">
						                                        	<i class="icon-eye-open"></i>View </a></li>
                                 						   </ul>
                             			 				</li>
                            					
						                                <li><a href="<?php echo site_url('Lecture_controller/index2'); ?>">
						                                Lesson Plan </a>
						                                </li>

						                                 <li><a href="#togglePage">Weekly Plan </a>
						                                </li>
						                              </ul>
						                        
                   							     </div>
						                        <!--/.sidebar-->
						                    </div>
						                </td>
									</tr>
							</thead>
						</table>
					</form>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


			

	<script src="<?php echo base_url('dump/scripts/jquery-1.9.1.min.js');?>"  type="text/javascript"></script>
	<script src="<?php echo base_url('dump/scripts/jquery-ui-1.10.1.custom.min.js');?>" type="text/javascript">
		
	</script>
	<script src="<?php echo base_url('dump/bootstrap/js/bootstrap.min.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('dump/scripts/flot/jquery.flot.js');?>" type="text/javascript"></script>
</body>
</html>