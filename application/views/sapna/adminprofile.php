<style type="text/css">
		table {
			  width: 70%;
			   text-align: left;
  			border: 1px black;
		}

		tr:hover {background-color: #f5f5f5;}

		th, td {
			  border-bottom: 1px  #ddd;
			   font-family: "Times New Roman", Times, serif;
			   font-size: 16px;	
			    font-weight: bold;
			     padding: 8px;
			     text-align: center;

  			}
 /* tr:nth-child(even) {background-color: #f2f2f2;}*/

 	img {
  border-radius: 50%;
}
</style>

<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h1 >Admin Profile</h1>
				</div>
		<div class="module-body">

						
	<form method="post" id="profile" name="profile" action="<?php echo site_url('studentprofile1controller/savingdata3');?>" class="form-horizontal row-fluid">
	<center><table  class=" table-bordered table-striped">
		<tbody>
		<?php foreach($m as $user):
		?>
		<div>	


		<tr>
			<td colspan="2"><img src="<?php echo base_url('assets/student_photo/'.$user->admin_photo);?>" style="width:160px"></td>
		</tr>						
	
		<tr><br>		
			<th><b>Username:</b></th>
			<td><?php echo $user->username?></td>
		</tr>

		<tr>
			<th><b>Name:</b></th>
			<td><?php echo $user->admin_name?></td>
		</tr>

		<tr>
			<th><b>Email Id:</b></th>
			<td><?php echo $user->email_id?></td>
		</tr>

		<tr>
			<th><b>Phone-No:</b></th>
			<td><?php echo $user->contact_no?></td>
		</tr>

		<tr>
			<th><b>Date-of-Birthday:</b></th>
			<td><?php echo $user->date_of_births?></td>
		</tr>

		<tr>
			<th><b>Father's Name:</b></th>
			<td><?php echo $user->admin_father_name?></td>
		</tr>
		<tr>
			<th><b>Mother's Name:</b></th>
			<td><?php echo $user->admin_mother_name?></td>
		</tr>

				</div>
		<?php endforeach;?>
		
	
</tbody>
</table></center>
</form>
</div>
</div>
</div>
