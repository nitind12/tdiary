


<div class="span9.5">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1 > Update Assignment Record</h1>
							</div>
							<div class="module-body">
	<form method="post" action="<?php echo site_url('check_assignment_controller/savingdata4');?>" class="form-horizontal row-fluid" id="form102" name="form102">
	<table class="table table-striped table-bordered table-condensed"  border="1">
		
			<!--<table class="table" >-->
				<thead>
				<tbody>
								  
									<tr>
									  <td >Course Name:<br>
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Course_name" id="Course_name">
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
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Semester" id="Semester">
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
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Section" id="Section">
									  		<option value ="">Select here..</option>
									  	 <option value ="A">A</option>
									  	 <option value ="B">B</option>
									  	 <option value ="C">C</option>
									  	 <option value ="D">D</option>
									  	 
									  </select>
									  </td>
									  <td>Subject:<br>
									  <!--	<input type="text"  name="Subject" class="span8" required="">-->

									  <select tabindex="1"data-placeholder="Select here.." class="span8" name="Subject" id="Subject" >
									  		<option value ="">Select here..</option>
									  	 <option value ="Cummunicative English">Cummunicative English</option>
									  	 <option value ="Basic Mathematics">Basic Mathematics</option>
									  	 <option value ="Introduction To Computer">Introduction To Computer</option>
									  	 <option value ="POP">POP</option>
									  	 <option value ="Financial Account">Financial Account</option>
									  	 <option value ="Descrete Mathematics">Descrete Mathematics</option>
									  	 <option value ="DBMS">DBMS</option>
									  	 <option value ="DS">DS</option>
									  	 <option value ="DE">DE</option>
									  	 <option value ="OS">OS</option>
									  	 <option value ="OB">OB</option>
									  	 <option value ="OT">OT</option>
									  	 <option value ="CG">CG</option>
									  	 <option value ="CSA">CSA</option>
									  	 <option value ="OOP WITH C++">OOP WITH C++</option>
									  	 <option value ="DCN">DCN</option>
									  	 <option value ="NAST">NAST</option>
									  	 <option value ="Unix And Shell Programming">Unix And Shell Programming</option>
									  	 <option value ="ES">ES</option>
									  	 <option value ="Java">Java</option>
									  	 <option value ="SE">SE</option>
									  	 <option value ="AI">AI</option>
									  	 <option value ="Python">Python</option>
									  	 <option value ="C#">C#</option>
									  	 <option value ="DBMS">Web Tech</option>

									  </select>
									  </td>


									  
									</tr>
									
								  </thead>
								</tbody>
								   
								
									
									<tr>
										<td>Student_roll<br>
									  	<input type="text" name="Student_Roll" class="span8" id="Student_Roll" /></td>
									  <td>Assignment_id<br>
									  	<input type="number" name="Assignment_id" class="span8" id="Assignment_id"></td>
									  
									  <td>Submission_date<br>
									  	<input type="date" name="Submission_date"class="span9" id="Submission_date"></td>
									  <td>Late_submission<br>
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Late_submission" id="Late_submission">
									  		<option value ="">Select here..</option>
									  	 <option value ="Yes">Yes</option>
									  	 <option value ="No">No</option>
									  	
									  	  
									  </select></td>
									</tr>
									
								  </thead>
								   <tbody>
								   	<tr>
									  
									  
									  <td>Grade<br>
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Grade" id="Grade">
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
											<!--<div class="controls">-->
												
												<button type="submit" class="btn btn-primary" name="save">INSERT RECORD</button>
											<!--</div>-->
										</div></center><br><br>
									</form>
									<center><a href="<?php echo site_url('check_assignment_controller/del/' )?>" class="btn btn-primary" onclick="return confirm('Are you sure to delete whole data from the table??')">Delete Whole Data From the Table!</a></center>
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
				<td><a href="<?php echo site_url('check_assignment_controller/del1/' . $item->Assignment_id)?>" class="btn btn-primary" onclick="return confirm('Are you sure')">Delete</a></td>
				<!--<td><a href="<?php echo site_url('test/pilih/' . $item->Student_Roll)?>" class="btn " onclick="return confirm('Are you sure')">Update</a></td>-->
			</tr>

		<?php } ?>
		
	</table>
</div></div></div></div></div></div>




     