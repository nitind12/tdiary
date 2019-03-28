
								  

	
	<div class="span9.5">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1>Given Assignment</h1>
							</div>
	<form method="post" action="<?php echo site_url('assignmentcontroller/savingdata3');?>" class="form-horizontal row-fluid">
	<table class="table table-striped table-bordered table-condensed"  border="1">
		
			<!--<table class="table" >-->
				<thead>
									<tr >
									 <th align="center">Course</th>
			<th align="center">Semester</th>
			<th align="center">Section</th>
			<th align="center">Subject</th>
			<th align="center">Assignment_id</th>
			<th align="center">Given_date</th>
			<th align="center">Submission_date</th>
			<th align="center">Last_submission_date</th>
			<th align="center">Unit</th>
			<th align="center">Topic</th>
									</tr>
								  </thead>
								  <tbody>
								  	<?php foreach($marks as $user):
		?>
			

			<tr>
		
			
				<td >
				<center><?= $user['Course_name']?></center>
				</td>
				<td>
					<center><?= $user['Semester']?></center>
				</td>
				<td>
					<center><?= $user['Section']?></center>
				</td>
				<td>
					<center><?= $user['Subject']?></center>
				</td>
				<td>
					<center><?= $user['Assignment_id']?></center>
				</td>
				<td>
					<center><?= $user['Given_date']?></center>
				</td>
				<td>
					<center><?= $user['Submission_date']?></center>
				</td>
				<td>
					<center><?= $user['Last_submission_date']?></center>
				</td>
				<td>
					<center><?= $user['Unit']?></center>
				</td>
				<td>
					<center><?= $user['Topic']?></center>
				</td>
				
				
			</tr>
			
				<?php endforeach;?>

			

	
	</tbody>
</table>
</div>
