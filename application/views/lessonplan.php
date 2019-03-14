<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lesson Plan</title>
	<link type="text/css" href="<?php echo base_url(),"assets/";?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url(),"assets/";?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url(),"assets/";?>css/theme.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url(),"assets/";?>images/icons/css/font-awesome.css" rel="stylesheet">
<!--	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>		-->
</head>
<body>
<div style="padding-top:5%" class="container">	
	<div class="row">
		<div class="span12">
			<div class="content">
				<div class="module">
					<div class="module-head">
						<center>	<h2>Lesson Plan</h2>					
												
						</center>
					</div>
				</div>
				<div class="module">
						<div class="module-head">
							<table class="table">
								<thead>
									<tr>
									  <td>								
										<div class="control-group">
											<label class="control-label" for="Course">Course:	</label>
											<div class="controls">
												<input type="text" id="Course" name="Course" class="span2">
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
								</tr>
							</thead>
						</table>
					</div>

			</div>
		</div>
	</div>
</div>






	<script src="<?php echo base_url(),"assets/";?>scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(),"assets/";?>scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript">
		
	</script>
	<script src="<?php echo base_url(),"assets/";?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(),"assets/";?>scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>
</html>