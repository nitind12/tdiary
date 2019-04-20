<div class="span12">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1 > Student personal detail</h1>
							</div>
	<form method="post" action="<?php echo site_url('studentcontroller/savingstudent');?>" class="form-horizontal row-fluid">
	<table class="table  table-bordered table-condensed" id="fv" name="fv" >
		
			<!--<table class="table" >-->
				<thead>
				<tbody>
								  
									<tr>
										<td>Date of Commencement:
									  	<input type="date" name="Date of Commencement" id="Date of Commencement" class="span4" required/></td>
									  	<td>Course of Addmission:
									  	<input type="text" name="Course of Addmission" id="Course of Addmission" class="span4" required/></td>
									  </tr>
									</tbody>
								</thead>
							</table>
							
                                    
									 <h3>Personal Detail...</h3>
									 <table class="table  table-bordered table-condensed" id="fv" name="fv" >
								<thead>
				<tbody>
									  <tr>
									  <td colspan="3">First Name:
									  	<input type="text" name="First Name" id="First Name" class="span12" required/></td>
									  <td colspan="3">Last Name:
									  	<input type="text" name="Last Name" id="Last Name" class="span12" required/></td>
									  </tr>
									  <br>
									  <tr>
									  	 <td colspan="3">Father Name:
									  	<input type="text" name="Father Name" id="Father Name" class="span12" required/></td>
									  	 <td colspan="3">Mother Name:
									  	<input type="text" name="Mother Name" id="Mother Name" class="span12" required/></td>
									  </tr>
									  <br>
									  <tr>
									  	 <td colspan="3">D.O.B:
									  	<input type="date" name="D.O.B" id="D.O.B" class="span12" required/></td>
									  	<td>Blood Group:
									    <select tabindex="1"data-placeholder="Select here.." class="span12" id="Blood Group" name="Blood Group" required/>
									  	<option value ="">Select here..</option>
									  	<option value ="A+">A+</option>
									  	<option value ="B+">B+</option>
									  	<option value ="AB+">AB+</option>
									  	<option value ="O+">O+</option>
									  	</select></td></tr>
									  	<tr>
									   <td colspan="3">Gender:
									  	<select tabindex="1" class="span12" id="Gender" name="Gender" required/>
									  	<option value ="">Select here..</option>
									  	<option value ="male">male</option>
									  	<option value ="female">female</option>
									  	<option value ="other">other</option>
									  	</select></td>
									  	<td colspan="3">Nationality:
									  	<select tabindex="1" data-placeholder="Select here.." id="Nationality" class="span12" name="Nationality" required/>
									  	<option value ="">Select here..</option>
									  	<option value ="indian">indian</option>
									    <option value ="foreigner">foreigner</option>
									  	</select></td></tr>
									  	<tr>
									    <td colspan="3">Category:
									  	<select tabindex="1"data-placeholder="Select here.." class="span12" id="Category" name="Category" required/>
									  	<option value ="">Select here..</option>
									  	<option value ="GEN">GEN</option>
									  	<option value ="SC/ST">SC/ST</option>
									  	<option value ="OBC">OBC</option>
									  	</select></td></tr>
									  </tbody>
									</thead>
								</table>
									  	<h3>Contact Detail...</h3>
									  	<table class="table  table-bordered table-condensed" id="fv" name="fv" >
								<thead>
				<tbody>
									  	<tr>
									   	<td colspan="3">Student Contact No:
									  	<input type="number" name="Student Contact No" id="Student Contact No" class="span12" required/></td>
									  	<td colspan="3" >Student Email:
									  	<input type="email" name="Student Email" id="Student Email" class="span12" required/></td>
									  </tr>
									  <tr>
									  <td colspan="3">Alternate Contact No:
									  	<input type="number" name="Alternate Contact No" id="Alternate Contact No" class="span12" required/></td>
									  <td colspan="3" >Alternate Email:
									  	<input type="email" name="Alternate Email" id="Alternate Email" class="span12" required/></td>
									  </tr>
									  	<tr>
									  	<td colspan="3">Current state:
									  	<input type="text" name="Current State" class="span12" id="Current State" required/></td>
									  <td colspan="3">Current city:
									  	<input type="text" name="Current City" class="span12" id="Current City" required/></td>
									  	<td colspan="3">Current pincode:
									  	<input type="number" name="Current Pincode" id="Current Pincode" class="span12" required/></td>
									  </tr>
									  <tr>
									  	<td colspan="3">Parmanent state:
									  	<input type="text" name="Parmanent State" id="Parmanent State" class="span12" required/></td>
									  <td colspan="3">Parmanent city:
									  	<input type="text" name="Parmanent City" id="Parmanent City" class="span12" required/></td>
									  	<td colspan="3">Parmanent pincode:
									  	<input type="number" name="Parmanent Pincode" id="Parmanent Pincode" class="span12" required/></td>
									  </tr>
									</tbody>
								</thead>
							</table>
									  	<h3>Academic Detail...</h3>
									  	<table class="table  table-bordered table-condensed" id="fv" name="fv" >
								<thead>
				<tbody>
									  	<tr>

									  	<td colspan="3">Highschool Passing Year:
									  	<input type="year" name="Highschool Passing Year" id="Highschool Passing Year" class="span12" required/></td>
									     <td colspan="3">Highschool Board:
									  	<input type="text" name="Highschool Board" id="Highschool Board" class="span12" required/></td>
									     <td colspan="3">Highschool Percentage:
									  	<input type="number" name="Highschool Percentage" id="Highschool Percentage" class="span12" required/></td>
									  </tr>
									  <tr>
									  <td colspan="3">Intermediate Passing Year:
									  	<input type="year" name="Intermediate Passing Year" id="Intermediate Passing Year" class="span12" required/></td>
									  

									     <td colspan="3">Intermediate Board:
									  	<input type="text" name="Intermediate Board" class="span12" id="Intermediate Board" required/></td>
									     <td colspan="3">Intermediate Percentage:
									  	<input type="number" name="Intermediate Percentage" id="Intermediate Percentage" class="span12" required/></td>
									  </tr>
									  <tr>
									  	<td colspan="2">Graduation:
									  	<input type="text" name="Graduation" id="Graduation" class="span12" required/></td>

									  <td colspan="2">Graduation Passing Year:
									  	<input type="year" name="Graduation Passing Year" id="Graduation Passing Year" class="span12" required/></td>
									     <td colspan="2">Graduation University:
									  	<input type="text" name="Graduation University" id="Graduation University" class="span12" required/></td>
									     <td colspan="3">Graduation Percentage:
									  	<input type="number" name="Graduation Percentage" id="Graduation Percentage" class="span12" required/></td>
									  </tr>
									  <tr>
									  	<td colspan="2">Post Graduation:
									  	<input type="text" name="State" class="span12" id="Post Graduation" required/></td>

									  <td colspan="2">Post Graduation Passing Year:
									  	<input type="year" name="Post Graduation Passing Year" class=" span12" id="Post Graduation Passing Year" required/></td>
									     <td colspan="2">Post Graduation University:
									  	<input type="text" name="Post Graduation University" id="Post Graduation University" class="span12" required/></td>
									     <td colspan="2">Post Graduation Percentage:
									  	<input type="number" name="Post Graduation Percentage" id="Post Graduation Percentage" class="span12" required/></td>
									  </tr>
									  
									</tbody></thead></table>
										<div class="control-group">
											<div class="controls">
												
												<center><button type="submit" class="btn" name="save">SUBMIT</button></center>
											</div>
										</div><br><br>
									</form>
									<!--<center><a href="<?php echo site_url('studentcontroller' )?>" class="btn " onclick="return confirm('Are you sure to delete whole data from the table??')">Delete Whole Data From the Table!</a></center>
									<br>
										<table border="1" cellpadding="5" cellspacing="5" width="120%" align="center">

		<tr style="text-align: left">
			<th align="center">s-no</th>
			<th align="center">first_name</th>
			<th align="center">last_name</th>
			<th align="center">date_of_birth</th>
			<th align="center">gender</th>
			<th align="center">marital_status</th>
			
			<th align="center">father_name</th>
			<th align="center">husband_name</th>
			<th align="center">nationality</th>
			<th align="center">category</th>
			<th align="center">blood_group</th>
			<th align="center">status</th>
			<th align="center">user_name</th>
			<th align="center">session</th>
			<th align="center">



			_id</th>
			<th align="center">Delete</th>

			<!--<th align="center">Update</th>
		</tr>

		<?php foreach ($users as $item) { ?>
			<tr >
				<td align="center"><?php echo $item->s_no;?></td>
				<td align="center"><?php echo $item->first_name;?></td>
				<td align="center"><?php echo $item->last_name;?></td>
				<td align="center"><?php echo $item->date_of_birth;?></td>
				<td align="center"><?php echo $item->father_name;?></td>
				<td align="center"><?php echo $item->mother_name;?></td>
				<td align="center"><?php echo $item->gender;?></td>
  				<td align="center"><?php echo $item->nationality;?></td>
				<td align="center"><?php echo $item->category;?></td>
				<td align="center"><?php echo $item->blood_group;?></td>
				<td align="center"><?php echo $item->status;?></td>
				<td align="center"><?php echo $item->username;?></td>
				<td align="center"><?php echo $item->student_id;?></td>
				<td><a href="<?php echo site_url('stu1c/del1/' . $item->Assignment_id)?>" class="btn " onclick="return confirm('Are you sure')">Delete</a></td>
				<td><a href="<?php echo site_url('test/pilih/' . $item->Student_Roll)?>" class="btn " onclick="return confirm('Are you sure')">Update</a></td>
			</tr>

		<?php } ?>-->
		
	
</div></div></div></div></div></div>




