



<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1>Internal Test</h1>
							</div>
	<form method="post" id="myform1" action="<?php echo site_url('test/savingdata');?>" class="form-horizontal row-fluid">
	<table class="table table-striped table-bordered table-condensed"  border="1">
		
			<!--<table class="table" >-->
				<thead>
				<tbody>
								  
									<tr>
									  <td><input type="text" name="Student_name" id="Student_name"class="span8"  /></td>
									  

									  	<select tabindex="1"data-placeholder="enter your s_no.." class="span8" name="Course_name" id="Course_name" >
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
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Semester" id="Semester" >
									  		<option value ="">Select here..</option>
									  	 <option value ="1">1</option>
									  	 <option value ="2">2</option>
									  	 <option value ="3">3</option>
									  	 <option value ="4">4</option>
									  	 <option value ="5">5</option>
									  	 <option value ="6">6</option>
									  	 <option value ="7">7</option>
									  	 <option value ="8">8</option>
									  </select>
									  </td>
									  <td>Section:<br>
									  	<!--<input type="text" id="txtSection" name="txtSection" class="span8">-->
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Section" id="Section"  >
									  		<option value ="">Select here..</option>
									  	 <option value ="A">A</option>
									  	 <option value ="B">B</option>
									  	 <option value ="C">C</option>
									  	 <option value ="D">D</option>
									  	 
									  </select>
									  </td>
									  <td>Subject:<br>
									  	<input type="text" id="Subject" name="Subject" class="span8"  >
									  </td>


									  
									</tr>
									<tr>
										<th colspan="4"><div class=" control-group">
											<label class="spna4 control-label"><h3 align="left">Edit Marks</h3></label>
											</div>
										</th>
									</tr>
								  </thead>
								</tbody>
								   
									<tr>
									  <th>Student_Roll</th>
									 <!-- <th>Student_name</th>-->
									  <th>marks1</th>
									  <th colspan="2">marks2</th>
									</tr>
								  </thead>
								   <tbody>
									<tr>
									  <td><input type="text" name="Student_Roll" id="Student_Roll" class="span8"  /></td>
									  <!--<td><input type="text" name="Student_name" id="Student_name"class="span8"  /></td>-->
									  <td><input type="text" name="marks1" id="marks1"class="span8"  /></td>
									  <td colspan="2"><input type="text" name="marks2" id="marks2"class="span5"  /></td>
									</tr>
								 <!-- <thead>
									<tr bgcolor="lightblue">
									  <th>Student Roll</th>
									  <th>Student Name</th>
									  <th>Marks1</th>
									  <th>Marks1</th>
									</tr>
								  </thead>
								  <tbody>
									<tr >

		
			
				<td><input type="text" name="Student_Roll"  /></td>
				<td><input type="text" name="Student_name"  /></td>
				<td><input type="text" name="marks1" /></td>
				<td><input type="text" name="marks2" /></td>
					
			</tr>-->

								  </tbody>
								</table><br><br>
								<center>
								<div class="control-group">
											<div class="controls">
												
												<button type="submit" class="btn" name="save">INSERT RECORD</button>
											</div>
										</div></center><br><br>
									</form>
									<center><a href="<?php echo site_url('test/del/' )?>" class="btn " onclick="return confirm('Are you sure to delete whole data from the table??')">Delete Whole Data From the Table!</a></center>
									<br>
										<table border="1" cellpadding="5" cellspacing="5" width="40%" align="center">

		<tr style="text-align: left">
			<th align="center">Course_name</th>
			<th align="center">Semester</th>
			<th align="center">Section</th>
			<th align="center">Subject</th>
			<th align="center">Student_Roll</th>
			<!--<th align="center">Sudent_name</th>-->
			<th align="center">marks1</th>
			<th align="center">marks2</th>
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
				<!--<td align="center"><?php echo $item->Student_name;?></td>-->
				<td align="center"><?php echo $item->marks1;?></td>
				<td align="center"><?php echo $item->marks2;?></td>
				<td><a href="<?php echo site_url('test/del1/' . $item->Student_Roll)?>" class="btn " onclick="return confirm('Are you sure')">Delete</a></td>
				<!--<td><a href="<?php echo site_url('test/pilih/' . $item->Student_Roll)?>" class="btn " onclick="return confirm('Are you sure')">Update</a></td>-->
			</tr>

		<?php } ?>
		
	</table>
</div></div></div></div></div></div>



