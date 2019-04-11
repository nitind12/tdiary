<div class="span8">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1 >STUDENT REGISTRATION FORM</h1>
							</div>
	<form method="post"  text_align="center" action="<?php echo site_url('stu1c/savingdata4');?>" class="form-horizontal row-fluid" id="s1" name="s1" >
	<table class="table table-striped table-bordered table-condensed"  border="1">
		
			<!--<table class="table" >-->
				<thead>
				<tbody>
								 <center></center> <div>
									<tr>
									
									  	
									  <td>first_name:<br>
									  	<input type="text" name="first_name" id="first_name" class="span8" required/></td>
									  </tr></div></center>
									  <tr>
									  <td>last_name:<br>
									  	<input type="text" name="last_name" id="last_name" class="span8" required/></td></tr>
									  	<tr>

									  	<td>date_of_birth:<br>
									  	<input type="date" name="date_of_birth"class="span5" id="date_of_birth" required/></td></tr>
									  	<tr>
									  <td>father_name:<br>
									  	<input type="text" name="father_name" id="father_name" class="span8" required/></td></tr>
									  	<tr>
									  <td>mother_name:<br>
									  	<input type="text" name="mother_name" id="mother_name" class="span8" required/></td></tr>
									  	<tr>
				                       <td>gender:<br>
									  	<select tabindex="1" data-placeholder="Select here.." class="span8" name="gender" id="gender" required/>
									  	<option value ="Yes">Select here..</option>
									  	<option value ="male">male</option>
									  	<option value ="female">female</option>
									  	<option value ="Other">other</option>
									  	</select></td></tr>
									  	<tr>
									   <td>nationality:<br>
									  	<select tabindex="1" data-placeholder="Select here.." class="span8" name="nationality"  id="nationality"
									  	required/>
									  	<option value ="Yes">indian</option>
									    <option value ="No">foreigner</option>
									  	</select></td></tr>
									  	<tr>
									    <td>category:<br>
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="category" id="category required/>
									  	<option value ="Yes">GEN</option>
									  	<option value ="No">SC/ST</option>
									  	<option value ="No">OBC</option>
									  	</select></td></tr>
									  	<tr>
									  	<td>blood_group:<br>
									    <select tabindex="1"data-placeholder="Select here.." class="span8" name="blood_group" id="blood_group" required/>
									  	<option value ="">Select here..</option>
									  	<option value ="Yes">A+</option>
									  	<option value ="No">B+</option>
									  	<option value ="No">AB+</option>
									  	<option value ="No">O+</option>
									  	<option value ="No">O-</option>
									  	</select></td></tr>
									  <!--	<td>status:<br>
									    <select tabindex="1"data-placeholder="Select here.." class="span8" name="status" required/>
									  	<option value ="Yes">Select here..</option>
									  	<option value ="No">0</option>
									  	<option value ="No">1</option>
									    </select></td>-->
									    <tr>
									    <td colspan="2">Student_id<br>
									    	<input type="number" name="student_id" id="Student_id" class="span5" required/></td>
									    </tr>
									</tbody></thead></table>
								<div class="control-group">
											<div class="controls">
												
												<button type="submit" class="btn btn-primary" name="save">INSERT RECORD</button>
											</div>
										</div></center><br><br>
									</form>
									<center><a href="<?php echo site_url('stu1c/del/' )?>" class="btn btn-primary " onclick="return confirm('Are you sure to delete whole data from the table??')">Delete Whole Data From the Table!</a></center>
									<br>
										<table border="1" cellpadding="5" cellspacing="5" width="40%" align="center">

		<tr style="text-align: left">
			<th align="center">s-no</th>
			<th align="center">first_name</th>
			<th align="center">last_name</th>
			<th align="center">date_of_birth</th>
			<th align="center">father_name</th>
			<th align="center">mother_name</th>
			
			<th align="center">gender</th>
			<th align="center">nationality</th>
			
			<th align="center">category</th>
			<th align="center">blood_group</th>
			<!--<th align="center">status</th>-->
			<!--<th align="center">username</th>-->
			<th align="center">student_id</th>
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
				<!--<td align="center"><?php echo $item->status;?></td>
				<td align="center"><?php echo $item->username;?></td>-->
				<td align="center"><?php echo $item->student_id;?></td>
				<td><a href="<?php echo site_url('stu1c/del1/' . $item->student_id)?>" class="btn btn-primary " onclick="return confirm('Are you sure')">Delete</a></td>
				<!--<td><a href="<?php echo site_url('test/pilih/' . $item->Student_Roll)?>" class="btn " onclick="return confirm('Are you sure')">Update</a></td>-->
			</tr>

		<?php } ?>
		
	
</div></div></div></div></div></div>




     