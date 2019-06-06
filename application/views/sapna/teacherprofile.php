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
				<h1 >Faculty Profile</h1>
				</div>
		<div class="module-body">

						
	<form method="post" id="profile" name="profile" action="<?php echo site_url('studentprofile1controller/savingdata3');?>" class="form-horizontal row-fluid">
	<center><table  class=" table-bordered table-striped">
		<tbody>
		<?php foreach($m as $user):
		?>
		<div>							
	
		<tr>
			<td colspan="2"><img src="<?php echo base_url('assets/student_photo/'.$user->faculty_photo);?>" style="width:160px"></td>
		</tr>

		<tr><br>		
			<th><b>Username:</b></th>
			<td><?php echo $user->username?></td>
		</tr>

		<tr>
			<th><b>Name:</b></th>
			<td><?php echo $user->first_name.'  '.$user->last_name?></td>
		</tr>

		<tr>
			<th><b>Email Id:</b></th>
			<td><?php echo $user->faculty_email?></td>
		</tr>

		<tr>
			<th><b>Phone-No:</b></th>
			<td><?php echo $user->faculty_contact?></td>
		</tr>

		<tr>
			<th><b>Date-of-Birthday:</b></th>
			<td><?php echo $user->date_of_birth?></td>
		</tr>

		<tr>
			<th><b>Father's Name:</b></th>
			<td><?php echo $user->father_name?></td>
		</tr>

				</div>
		<?php endforeach;?>
		
	
</tbody>
</table></center>
</form>
</div>
</div>
</div>
