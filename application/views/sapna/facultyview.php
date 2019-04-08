<div class="span12">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1 > faculty personal detail</h1>
							</div>
	<form method="post" action="<?php echo site_url('facultycontroller/savingfaculty');?>" class="form-horizontal row-fluid">
	<table class="table table-striped table-bordered table-condensed" id="fv" name="fv" border="1">
		
			<!--<table class="table" >-->
				<thead>
				<tbody>
								  
									<tr>
										<td>Date of Commencement:<br>
									  	<input type="text" name="Date of Commencement" id="Date of Commencement" class="span8" required/></td>
									  <td>First Name:<br>
									  	<input type="number" name="First Name" id="First Name" class="span8" required/></td>
									  <td>Last Name:<br>
									  	<input type="number" name="Last Name" id="Last Name" class="span8" required/></td>
									  	 <td colspan="2">Father Name:<br>
									  	<input type="number" name="Father Name" id="Father Name" class="span5" required/></td>
									  </tr>
									  <tr>
									  	 <td>Mother Name:<br>
									  	<input type="number" name="Mother Name" id="Mother Name" class="span8" required/></td>
									  	 <td>Husband/Wife Name:<br>
									  	<input type="number" name="Husband/Wife Name" id="Husband/Wife Name"  class="span8" required/></td>
									  	<td>D.O.B:<br>
									  	<input type="date" name="D.O.B" id="D.O.B" class="span8" required/></td>
									  	<td colspan="2">Blood Group:<br>
									    <select tabindex="1"data-placeholder="Select here.." class="span5" id="Blood Group" name="Blood Group" required/>
									  	<option value ="">Select here..</option>
									  	<option value ="Yes">A+</option>
									  	<option value ="No">B+</option>
									  	<option value ="No">AB+</option>
									  	<option value ="No">O+</option>
									  	</select></td>
									  </tr>
									  <tr>
									   <td>Gender:<br>
									  	<select tabindex="1" class="span8" id="Gender" name="Gender" required/>
									  	<option value ="Yes">Select here..</option>
									  	<option value ="NO">male</option>
									  	<option value ="No">female</option>
									  	<option value ="No">other</option>
									  	</select></td>
									  	<td>Nationality:<br>
									  	<select tabindex="1" data-placeholder="Select here.." id="Nationality" class="span8" name="Nationality" required/>
									  	<option value ="Yes">indian</option>
									    <option value ="No">foreigner</option>
									  	</select></td>
									    <td>Category:<br>
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" id="Category" name="Category" required/>
									  	<option value ="Yes">GEN</option>
									  	<option value ="No">SC/ST</option>
									  	<option value ="No">OBC</option>
									  	</select></td>
									   	<td colspan="2">Faculty Contact No.:<br>
									  	<input type="number" name="Faculty Contact No." id="Faculty Contact No." class="span8" required/></td>
									  </tr>
									  <tr>
									  	<td>Faculty Email:<br>
									  	<input type="email" name="Faculty Email" id="Faculty Email" class="span8" required/></td>
									  <td>Alternate Contact:<br>
									  	<input type="number" name="Alternate Contact" id="Alternate Contact" class="span8" required/></td>
									  <td>Alternate Email:<br>
									  	<input type="email" name="Alternate Email" id="Alternate Email" class="span8" required/></td>
									  	<td>C_state:<br>
									  	<input type="text" name="State" class="span8" id="State" required/></td>
									  <td>C_city:<br>
									  	<input type="number" name="City" class="span8" id="City" required/></td>
									  </tr>
									  <tr>
									  	<td>C_pincode:<br>
									  	<input type="number" name="Pincode" id="Pincode" class="span8" required/></td>
									  	<td>P_state:<br>
									  	<input type="text" name="State" id="State" class="span8" required/></td>
									  <td>P_city:<br>
									  	<input type="number" name="City" id="City" class="span8" required/></td>
									  	<td colspan="2">P_pincode:<br>
									  	<input type="number" name="Pincode" id="Pincode" class="span8" required/></td>
									  </tr>
									  <tr>

									  	<td>H_Passing Year:<br>
									  	<input type="text" name="Passing Year" id="Passing Year" class="span8" required/></td>
									     <td>H_Board:<br>
									  	<input type="number" name="Board" id="Board" class="span8" required/></td>
									     <td colspan="3">H_Percentage:<br>
									  	<input type="number" name="Percentage" id="Percentage" class="span8" required/></td>
									  </tr>
									  <tr>
									  <td>I_Passing Year:<br>
									  	<input type="text" name="Passing Year" id="Passing Year" class="span8" required/></td>
									  

									     <td>I_Board:<br>
									  	<input type="number" name="Board" class="span8" id="Board" required/></td>
									     <td colspan="3">I_Percentage:<br>
									  	<input type="number" name="Percentage" id="Percentage" class="span8" required/></td>
									  </tr>
									  <tr>
									  	<td>Graduation:<br>
									  	<input type="text" name="state" id="Graduation" class="span8" required/></td>

									  <td>G_Passing Year:<br>
									  	<input type="text" name="Passing Year" id="Passing Year" class="span8" required/></td>
									     <td>G_Board:<br>
									  	<input type="number" name="Board" id="Board" class="span8" required/></td>
									     <td colspan="2">G_Percentage:<br>
									  	<input type="number" name="Percentage" id="Percentage" class="span8" required/></td>
									  </tr>
									  <tr>
									  	<td>Post Graduation:<br>
									  	<input type="text" name="State" class="span8" id="Post Graduation" required/></td>

									  <td>P_Passing Year:<br>
									  	<input type="text" name="Passing Year" class="span8" id="Passing Year" required/></td>
									     <td>P_Board:<br>
									  	<input type="number" name="Board" id="Board" class="span8" required/></td>
									     <td colspan="2">P_Percentage:<br>
									  	<input type="number" name="Percentage" id="Percentage" class="span8" required/></td>
									  </tr>
									  <tr>
									  	<td>Other Description:<br>
									  	<input type="text" name="Other Description" id="Other Description" class="span8" required/></td>
									  
									    </tr>
									</tbody></thead></table>
										<div class="control-group">
											<div class="controls">
												
												<button type="submit" class="btn" name="save">SUBMIT</button>
											</div>
										</div></center><br><br>
									</form>
									<!--<center><a href="<?php echo site_url('studentcontroller' )?>" class="btn " onclick="return confirm('Are you sure to delete whole data from the table??')">Delete Whole Data From the Table!</a></center>
									<br>
										<table border="1" cellpadding="5" cellspacing="5" width="40%" align="center">

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
			<th align="center">faculty_id</th>
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




     