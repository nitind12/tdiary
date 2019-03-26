


<div class="span9.5">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1 > Update Assignment Record</h1>
							</div>
	<form method="post" action="<?php echo site_url('check_assignment_controller/savingdata4');?>" class="form-horizontal row-fluid">
	<table class="table"  border="1">
		
			<!--<table class="table" >-->
				<thead>
				<tbody>
								  
									<tr>
									  <td >Course Name:<br>
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Course_name" required="">
									  		<option value ="">Select here..</option>
									  	 <option value ="BCA">BCA</option>
									  	 <option value ="BBA">BBA</option>
									  	 <option value ="B.COM">B.COM</option>
									  	 <option value ="POLY TECHNIQUE">POLY TECHNIQUE</option>
									  	 <option value ="B.SC">B.SC</option>
									  	 <option value ="HM">HM</option>
									  </select></td>
									  <td>Semester:<br>
									  	<!--<input type="text" id="txtSemester" name="txtSemester" class="span8">-->
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Semester" required="">
									  		<option value ="">Select here..</option>
									  	 <option value =" 1">1</option>
									  	 <option value =" 2">2</option>
									  	 <option value =" 3">3</option>
									  	 <option value =" 4">4</option>
									  	 <option value =" 5">5</option>
									  	 <option value =" 6">6</option>
									  	 <option value =" 7">7</option>
									  	 <option value =" 8">8</option>
									  </select>
									  </td>
									  <td>Section:<br>
									  	<!--<input type="text" id="txtSection" name="txtSection" class="span8">-->
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Section" required="">
									  		<option value ="">Select here..</option>
									  	 <option value ="A">A</option>
									  	 <option value ="B">B</option>
									  	 <option value ="C">C</option>
									  	 <option value ="D">D</option>
									  	 
									  </select>
									  </td>
									  <td>Subject:<br>
									  	<input type="text"  name="Subject" class="span8" required="">
									  </td>


									  
									</tr>
									
								  </thead>
								</tbody>
								   
								
									
									<tr>
										<td>Student_roll<br>
									  	<input type="text" name="Student_Roll" class="span8" required="" /></td>
									  <td>Assignment_id<br>
									  	<input type="number" name="Assignment_id" class="span8" required="" /></td>
									  
									  <td>Submission_date<br>
									  	<input type="date" name="Submission_date"class="span9" required="" /></td>
									  <td>Late_submission<br>
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Late_submission" required="">
									  		<option value ="">Select here..</option>
									  	 <option value ="Yes">Yes</option>
									  	 <option value ="No">No</option>
									  	
									  	 
									  </select></td>
									</tr>
									
								  </thead>
								   <tbody>
								   	<tr>
									  
									  
									  <td colspan="4">Grade<br>
									  	<select tabindex="1"data-placeholder="Select here.." class="span2" name="Grade" required="">
									  		<option value ="">Select here..</option>
									  	 <option value ="A">A</option>
									  	 <option value ="B">B</option>
									  	 <option value ="C">C</option>
									  	 <option value ="D">D</option>
									  	 
									  </select>
									  
									</tr>
									
									
								
								  </tbody>
								</table><br><br>
								<center>
								<div class="control-group">
											<div class="controls">
												
												<button type="submit" class="btn" name="save">INSERT RECORD</button>
											</div>
										</div></center><br><br>
									</form>
									<center><a href="<?php echo site_url('check_assignment_controller/del/' )?>" class="btn " onclick="return confirm('Are you sure to delete whole data from the table??')">Delete Whole Data From the Table!</a></center>
									<br>
										<table border="1" cellpadding="5" cellspacing="5" width="40%" align="center">

		<tr style="text-align: left">
			<th align="center">Course</th>
			<th align="center">Semester</th>
			<th align="center">Section</th>
			<th align="center">Subject</th>
			<th align="center">Student_Roll</th>
			<th align="center">Assignment_id</th>
			
			<th align="center">Submission_date</th>
			<th align="center">Late_submission</th>
			
			<th align="center">Grade</th>
			<th align="center">Delete</th>

			<!--<th align="center">Update</th>-->
		</tr>

		<?php foreach ($users as $item) { ?>
			<tr >
				<td align="center"><?php echo $item->Course_name;?></td>
				<td align="center"><?php echo $item->Semester;?></td>
				<td align="center"><?php echo $item->Section;?></td>
				<td align="center"><?php echo $item->Subject;?></td>
				<td align="center"><?php echo $item->Student_Roll;?></td>
				<td align="center"><?php echo $item->Assignment_id;?></td>
				
				<td align="center"><?php echo $item->Submission_date;?></td>
				<td align="center"><?php echo $item->Late_submission;?></td>
				
				<td align="center"><?php echo $item->Grade;?></td>
				<td><a href="<?php echo site_url('check_assignment_controller/del1/' . $item->Assignment_id)?>" class="btn " onclick="return confirm('Are you sure')">Delete</a></td>
				<!--<td><a href="<?php echo site_url('test/pilih/' . $item->Student_Roll)?>" class="btn " onclick="return confirm('Are you sure')">Update</a></td>-->
			</tr>

		<?php } ?>
		
	</table>
</div></div></div></div></div></div>




     