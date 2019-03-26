
								  

	
	<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1>Practical Test Marks</h1>
							</div>
	<form method="post" action="<?php echo site_url('practicaltestcontroller/savingdata2');?>" class="form-horizontal row-fluid">
	<table class="table"  border="1">
		
			<!--<table class="table" >-->
				<thead>
									<tr >
									  <th align="center">Student Roll</th>
									  <th align="center">Student Name</th>
									  <th align="center">Practical_Marks</th>
									 
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
					<?= $user['Practical_Marks']?>
				</td>
				
				
			</tr>
			
				<?php endforeach;?>

			

	
	</tbody>
</table>
</div>
