<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1 >Faculty Profile</h1>
							</div>
							
	<form method="post" id="myform2" action="<?php echo site_url('facultyprofile1controller/savingdata3');?>" class="form-horizontal row-fluid">
	<table class="table table-striped table-bordered table-condensed"  border="1">
		
			
				<thead>
				<tbody>
			<tr>		
			<th align="center">First_Name</th>
			<th align="center">Last_name</th>
			<th align="center">Father_name</th>
		</tr>
		<?php foreach($marks as $user):
		?>
			

			<tr>
				<td>
					<center><?= $user['First_Name']?></center>
				</td>
				<td>
					<center><?= $user['Last_Name']?></center>
				</td>
				<td>
					<center><?= $user['Father_Name']?></center>
				</td></tr>
				<?php endforeach;?>
		
		
			<tr>
			<th align="center">D.O.B</th>
			<th align="center">Blood_Group</th>
			<th align="center">Category</th>
			</tr>
			<?php foreach($marks as $user):
		?>
			
			<tr>
				<td>
					<center><?= $user['D_O_B']?></center>
				</td>
		
			
				<td>
					<center><?= $user['Blood_Group']?></center>
				</td>
				<td>
					<center><?= $user['Category']?></center>
				</td></tr>
				<?php endforeach;?>
		<tr>
			<th align="center">Contact_no</th>
			<th align="center">Email</th>
		</tr>
		
			<?php foreach($marks as $user):
		?>
			<tr>
				<td>
					<center><?= $user['Faculty_Contact_No']?></center>
				</td>
				<td>
					<center><?= $user['Faculty_Email']?></center>
				</td>
			</tr>
			<?php endforeach;?>
			
			<tr>
			<th align="center">City</th>
			<th align="center">Pincode</th>

			</tr>

		<?php foreach($marks as $user):
		?>
			

			
			<tr>
				<td>
					<center><?= $user['Current_City']?></center>
				</td>
				<td>
					<center><?= $user['Current_Pincode']?></center>
				</td>
				
			</tr>
			
				<?php endforeach;?>
		
	
</tbody>
</thead>
</table>
</form>
</div>
</div>
</div>
