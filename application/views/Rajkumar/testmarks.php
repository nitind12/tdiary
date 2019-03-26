								  

	
	<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1>Internal Test Marks</h1>
							</div>
	<form method="post" id="myform" action="<?php echo site_url('test/savingdata');?>" class="form-horizontal row-fluid">
	<table class="table"  border="1">
		
			<!--<table class="table" >-->
				<thead>
									<tr >
									  <th align="center">Student Roll</th>
									  <th align="center">Student Name</th>
									  <th align="center">Marks1</th>
									  <th align="center">Marks1</th>
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

