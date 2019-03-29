
								  

	
	<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1>Practical Test Marks</h1>
							</div>
	<form method="post" action="<?php echo site_url('practicaltestcontroller/savingdata2');?>" class="form-horizontal row-fluid">
	<table class="table table-striped table-bordered table-condensed"  border="1">
		
			<!--<table class="table" >-->
				<thead>
									<tr >
										<th><center>Course_name</center></th>
										<th><center>Semester</center></th>
										<th><center>Section</center></th>
										<th><center>Subject</center></th>
									  <th ><center>Student Roll</center></th>
									  <!--<th ><center>Student Name</center></th>-->
									  <th><center>Practical_Marks</center></th>
									 
									</tr>
								  </thead>
								  <tbody>
								  	<?php foreach($marks as $user):
		?>
			

			<tr>
				<td>
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
					<center><?= $user['Student_Roll']?></center>
				</td>
				<!--<td align="center">
					<?= $user['Student_name']?>
				</td>-->
				<td>
					<center><?= $user['Practical_Marks']?></center>
				</td>
				
				
			</tr>
			
				<?php endforeach;?>

			

	
	</tbody>
</table>
</div>
