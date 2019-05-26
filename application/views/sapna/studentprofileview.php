<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h1 >Student Profile</h1>
				</div>
		<div class="module-body">

									<div class="alert">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Note!</strong> For Edit Double Click!
									</div>
						
	<form method="post" id="" action="<?php echo site_url('studentprofile1controller/savingdata3');?>" class="form-horizontal row-fluid">
	<table class="table table-bordered table-striped  display"width="10" height="30"border="1">
		<tbody>
		<?php foreach($m as $user):
		?>
		<div>							
	
		<tr>		
			<th><b>Username:</b></th>
				<td>
					<?php echo $user->username?></td></tr>
		<tr>
			<th><b>Name:</b></th>
			<td><?php echo $user->first_name.''.$user->last_name?></td>
		</tr>
		<tr>
			<th><b>Email Id:</b></th>
			<td><?php echo $user->std_email?></td>
		</tr>
		<tr>
			<th><b>Phone-No:</b></th>
			<td><?php echo $user->std_contact?></td>
		</tr>
		<tr>
			<th><b>Date-of-Birthday:</b></th>
			<td><?php echo $user->date_of_birth?></th>
		</tr>
		<tr>
		<th><b>Father's Name:</b></th>
			<td><?php echo $user->father_name?></td>
		</tr>
		<tr>
			<th><b>Mother's Name:</b></th>
			<td><?php echo $user->mother_name?></th>
		</tr>
		<div><img src="<?php base_url("assert/ttdocs"). $user->student_sig?>);">
			<img src="<?php base_url("assert/ttdocs"). $user->student_photo?>);">
					</div>
		</div>
		<?php endforeach;?>
		
	
</tbody>
</table>
</form>
</div>
</div>
</div>
