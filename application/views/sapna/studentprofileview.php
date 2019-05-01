<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h1 >Student Profile</h1>
				</div>
		<div class="module-body">
						
	<form method="post" id="myform2" action="<?php echo site_url('studentprofile1controller/savingdata3');?>" class="form-horizontal row-fluid">
								
	<table class="table "  border="1">
		<tbody>
		<?php foreach($m as $user):
		?>
		
		<tr>		
			<th>User_Name:<?php echo $user->username?></th></tr>
			<tr>
			<th>Name:<?php echo $user->first_name.''.$user->last_name?></th>
			</tr>
		<tr>
			<th >Email:<?php echo $user->email?></th>
		</tr>
		<tr>
			<th>Phone-No:<?php echo $user->phone_no?></th>
		</tr>
		
		
		<?php endforeach;?>
		
	
</tbody>
</table>
</form>
</div>
</div>
</div>
