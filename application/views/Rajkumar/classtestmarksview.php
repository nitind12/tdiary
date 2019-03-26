
	
	<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1>Class Test Marks</h1>
							</div>
	<form method="post" action="<?php echo site_url('classtestcontroller/savingdata1');?>" class="form-horizontal row-fluid">
	<table class="table"  border="1">
		
			<!--<table class="table" >-->
				<thead>
									<tr>
									  <th><center>Student Roll</center></th>
									  <th><center>Student Name</center></th>
									  <th><center>Marks</center></th>
									 
									</tr>
								  </thead>
								  <tbody>
								  	<?php foreach($marks as $user):
		?>
			

			<tr>
		
			
				<td>
					<center><?= $user['Student_Roll']?></center>
				</td>
				<td>
					<center><?= $user['Student_name']?></center>
				</td>
				<td>
					<center><?= $user['Marks']?></center>
				</td>
				
				
			</tr>
			
				<?php endforeach;?>

			

	
	</tbody>
</table>
</div>
 