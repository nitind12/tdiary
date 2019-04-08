<div class="span12">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1 > faculty personal detail</h1>
							</div>
	<form method="post" action="<?php echo site_url('fac1c/savingdata4');?>" class="form-horizontal row-fluid">
	<table class="table table-striped table-bordered table-condensed" id="s6" name="s6" border="1">
		
			<!--<table class="table" >-->
				<thead>
				<tbody>
								  
									<tr>
										<td>s_no:<br>
									  	<input type="text" name="s_no" class="span8" required/></td>
									  <td>first_name:<br>
									  	<input type="number" name="first_name" class="span8" required/></td>
									  <td>last_name:<br>
									  	<input type="number" name="last_name" class="span8" required/></td>
									  	<td>date_of_birth:<br>
									  	<input type="date" name="date_of_birth"class="span8" required/></td>
									 <!-- <td>gender:<br>
									  	<input type="number" name="gender" class="span8" required/></td>
									  <!--<td>marital_status:<br>
									  	<input type="number" name="marital_status" class="span8" required/></td>-->
				                       <td>gender:<br>
									  	<select tabindex="1" class="span8" name="gender" required/>
									  	<option value ="Yes">Select here..</option>
									  	<option value ="NO">male</option>
									  	<option value ="No">female</option>
									  	<option value ="No">other</option>
									  	</select></td>
									  	<td>marital_status:<br>
									    <select tabindex="1" class="span8" name="marital_status" required/>
									  	<option value ="Yes">Select here..</option>
									  	<option value ="No">married</option>
									  	<option value ="No">unmarried</option>
									    </select></td>
									    <td>father_name:<br>
									  	<input type="text" name="father_name" class="span8" required/></td>
									    <td>husband_name:<br>
									  	<input type="text" name="husband_name" class="span8" required/></td>
									  
									   <td>nationality:<br>
									  	<select tabindex="1" data-placeholder="Select here.." class="span8" name="nationality" required/>
									  	<option value ="Yes">indian</option>
									    <option value ="No">foreigner</option>
									  	</select></td>
									    <td>category:<br>
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="category" required/>
									  	<option value ="Yes">GEN</option>
									  	<option value ="No">SC/ST</option>
									  	<option value ="No">OBC</option>
									  	</select></td>
									  	<td>blood_group:<br>
									    <select tabindex="1"data-placeholder="Select here.." class="span8" name="blood_group" required/>
									  	<option value ="">Select here..</option>
									  	<option value ="Yes">A+</option>
									  	<option value ="No">B+</option>
									  	<option value ="No">AB+</option>
									  	<option value ="No">O+</option>
									  	<option value ="No">O-</option>
									  	</select></td>
									  	<td>status:<br>
									    <select tabindex="1"data-placeholder="Select here.." class="span8" name="status" required/>
									  	<option value ="Yes">Select here..</option>
									  	<option value ="No">0</option>
									  	<option value ="No">1</option>
									    </select></td>
									    <td>user_name:<br>
									  	<input type="text" name="user_name" class="span8" required/></td>
									     <td>session:<br>
									  	<input type="number" name="session" class="span8" required/></td>
									     <td>faculty_id:<br>
									  	<input type="number" name="faculty_id" class="span8" required/></td>
									  
									    </tr>
									</tbody></thead></table>
										<div class="control-group">
											<div class="controls">
												
												<button type="submit" class="btn" name="save">INSERT RECORD</button>
											</div>
										</div></center><br><br>
									</form>
									<center><a href="<?php echo site_url('stu1c/del/' )?>" class="btn " onclick="return confirm('Are you sure to delete whole data from the table??')">Delete Whole Data From the Table!</a></center>
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

			<!--<th align="center">Update</th>-->
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
				<!--<td><a href="<?php echo site_url('test/pilih/' . $item->Student_Roll)?>" class="btn " onclick="return confirm('Are you sure')">Update</a></td>-->
			</tr>

		<?php } ?>
		
	
</div></div></div></div></div></div>




     