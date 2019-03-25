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
	<h1 align="center">Internal Test Marks</h1>

	
								  

	
	<table class="table" align="center" border="1">
								  <thead>
									<tr bgcolor="lightblue">
									  <th >Student Roll</th>
									  <th>Student Name</th>
									  <th>Marks1</th>
									  <th>Marks1</th>
									</tr>
								  </thead>
								  <tbody>
								  	<?php foreach($marks as $user):
		?>
			

			<tr>
		
			
				<td align="center">
					<?= $user['Student_Roll']?>
				</td>
				<td align="center">
					<?= $user['Student_name']?>
				</td>
				<td align="center">
					<?= $user['marks1']?>
				</td>
				<td align="center">
					<?= $user['marks2']?>
				</td>
				
			</tr>
			
				<?php endforeach;?>

			

	
	</tbody>
</table>
</div>


	</body>
	</html>
