<style type="text/css">
		table {
			  width: 80%;
			   text-align: left;
  			border: 1px black;
  			margin-top: 0px;

		}


		tr:hover {background-color: #f5f5f5;}

		th, td {
			  border-bottom: 1px  #ddd;
			   font-family: "Times New Roman", Times, serif;
			   font-size: 16px;	
			    font-weight: bold;
			     padding: 8px;
			     text-align:left;

  			}
 /* tr:nth-child(even) {background-color: #f2f2f2;}*/

 	img {
  border-radius: 50%;
	}

		.sign{
  border-radius: 0%;
	}
</style>
<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h1 >Faculty Details</h1>
			</div>
		<div class="module-body">

						
	<form method="post" id="profile" name="profile"class="form">
		<?php foreach($m as $user):
		?>
	<table  class=" table-bordered table-striped" align="center">
		<!--tbody>
				<tr>
					<td><img src="<?php //echo base_url('assets/student_photo/'.$user->student_photo);?>" style="width:160px"></td>
					<td colspan="2"><img  class="sign" src="<?php //echo base_url('assets/student_photo/'.$user->student_sig);?>" style="width:120px ">
					</td>
				</tr>
			</tbody-->
		</table>


	
		<table  class=" table-bordered table-striped" align="center">
			<tbody>
				<tr>
					<td colspan="4"><h3>Personal Detail</h3></td>
				</tr>

				<tr>
					<th><b>First Name:</b></th>
						<td><?php echo $user->first_name?></td>

					<th><b>Last Name:</b></th>
						<td><?php echo $user->last_name?></td>
				</tr>

				<tr>
					<th><b>Father Name:</b></th>
						<td><?php echo $user->father_name?></td>
			
					<th><b>Marital Status:</b></th>
						<td><?php echo $user->marital_status?></td>
				</tr>

				<tr>
					<th><b>Date of Birth:</b></th>
						<td><?php echo $user->date_of_birth?></td>
		
					<th><b>Gender:</b></th>
						<td><?php echo $user->gender?></td>
				</tr>

				<tr>
					<th><b>Nationality:</b></th>
						<td><?php echo $user->nationality?></td>
			
					<th><b>Category:</b></th>
						<td><?php echo $user->category?></td>
				</tr>


				<tr>
					<th><b>Blood Group:</b></th>
						<td><?php echo $user->blood_group?></td>
		
					<th><b>Username:</b></th>
						<td><?php echo $user->username?></td>
				</tr>
			</tbody>
		</table>
		<table  class=" table-bordered table-striped" align="center">


				<tr>
					<td colspan="4"><h3>Address Detail</h3></td>
				</tr>

				<tr>
					<td colspan="4"><h4>Current Address</h4></td>
				</tr>

				<tr>
					<th><b>Address:</b></th>
						<td><?php echo $user->address?></td>
		
					<th><b>State:</b></th>
						<td><?php echo $user->state?></td>
				</tr>

				<tr>
					<th><b>City:</b></th>
						<td><?php echo $user->city?></td>
		
					<th><b>Pincode:</b></th>
						<td><?php echo $user->pincode?></td>
				</tr>

				<tr>
					<td colspan="4"><h4>Permanent Address</h4></td>
				</tr>

				<tr>
					<th><b>Address:</b></th>
						<td><?php echo $user->address?></td>
		
					<th><b>State:</b></th>
						<td><?php echo $user->state?></td>
				</tr>

				<tr>
					<th><b>City:</b></th>
						<td><?php echo $user->city?></td>
		
					<th><b>Pincode:</b></th>
						<td><?php echo $user->pincode?></td>
				</tr>
			</table>


		<table  class=" table-bordered table-striped" align="center">

				<tr>
					<td colspan="4"><h3>Contact Detail</h3></td>
				</tr>

				<tr>
					<th><b>Email Id:</b></th>
						<td><?php echo $user->faculty_email?></td>
		
					<th><b>Contact No.:</b></th>
						<td><?php echo $user->faculty_contact?></td>
				</tr>

				<tr>
					<th><b>Alternate Contact No.:</b></th>
						<td><?php echo $user->alternate_contact?></td>
		
					<th><b>Alternate Email id:</b></th>
						<td><?php echo $user->alternate_email?></td>
				</tr>
			</table>


		<!--table  class=" table-bordered table-striped" align="center">

				<tr>
					<td colspan="7"><h3>Academic Detail</h3></td>
				</tr>

				<tr>		
					<th><b>Qualification:</b></th>	
					<th><b>Passing Year:</b></th>
					<th><b>Name Of Board:</b></th>
					<th><b>Name Of School:</b></th>
					<th><b>Total Marks:</b></th>
					<th><b>Obtained Marks:</b></th>
					<th><b>Percentage:</b></th>
				</tr>

				<tr>
						<td><?php //echo $user->qualification_status?></td>
						<td><?php //echo $user->passing_year?></td>
						<td><?php //echo $user->board?></td>
						<td><?php //echo $user->school?></td>
						<td><?php //echo $user->totalmarks?></td>
						<td><?php //echo $user->obtainedmarks?></td>
						<td><?php //echo $user->percentage?></td>
					</tr>
				</table-->

	<?php endforeach;?>

</form>
</div>
	
</div>		
</div>
</div>
