


<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1>Class Test</h1>
							</div>
	<form method="post" action="<?php echo site_url('classtestcontroller/savingdata1');?>" class="form-horizontal row-fluid">
	<table class="table table-striped table-bordered table-condensed"  border="1">
		
			<!--<table class="table" >-->
				<thead>
				<tbody>
								  
									<tr>
									  <td >Course Name:<br>
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Course_name" required=""/>
									  		<option value ="">Select here..</option>
									  	 <option value ="BCA">BCA</option>
									  	 <option value ="BBA">BBA</option>
									  	 <option value ="B.COM">B.COM</option>
									  	 <option value ="POLY TECHNIQUE">POLY TECHNIQUE</option>
									  	 <option value ="B.SCSC">B.SC</option>
									  	 <option value ="HM">HM</option>
									  </select></td>
									  <td>Semester:<br>
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Semester" required=""/>
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
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Section" required=""/>
									  		<option value ="">Select here..</option>
									  	 <option value ="A">A</option>
									  	 <option value ="B">B</option>
									  	 <option value ="C">C</option>
									  	 <option value ="D">D</option>
									  	 
									  </select>
									  </td>
									  <td>Subject:<br>
									  	<input type="text" id="Subject" name="Subject" class="span8" required="">
									  </td>


									  
									</tr>
									<tr>
										<th colspan="4"><div class=" control-group">
											<label class="spna4 control-label"><h3 align="center">Edit Marks</h3></label>
											</div>
										</th>
									</tr>
								  </thead>
								</tbody>
								   <!--<tbody>
								   	<tr>
								   		<td><input type="text" class="span2"></td>
								   		<td><input type="text" class="span2"></td>
								   		<td><input type="text" class="span2"></td>

								   	</tr>
								   </tbody>
								<!--</table>-->
								
									
								<!--<table class="table" border="1">-->
								
									<tr>
									  <th>Student_Roll</th>
									 <!-- <th>Student_name</th>-->
									  <th colspan="3">Class_Test_Marks</th>
									 
									</tr>
								  </thead>
								   <tbody>
									<tr>
									  <td><input type="text" name="Student_Roll" class="span8" required="" /></td>
									 <!-- <td><input type="text" name="Student_name"class="span8"  required="" /></td>-->
									  <td colspan="3"><input type="text" name="Marks"class="span4" required="" /></td>
									 
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
									<center><a href="<?php echo site_url('classtestcontroller/del/' )?>" class="btn " onclick="return confirm('Are you sure to delete whole data from the table??')">Delete Whole Data From the Table!</a></center>
									<br>
										<table border="1" cellpadding="5" cellspacing="5" width="40%" align="center">

		<tr style="text-align: left">
			<th align="center">Course_name</th>
			<th align="center">Semester</th>
			<th align="center">Section</th>
			<th align="center">Subject</th>
			<th align="center">Student_Roll</th>
			<!--<th align="center">Sudent_name</th>-->
			<th align="center">Marks</th>
			
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
				<td align="center"><?php echo $item->Marks;?></td>
				
				<td><a href="<?php echo site_url('classtestcontroller/del1/' . $item->Student_Roll)?>" class="btn " onclick="return confirm('Are you sure')">Delete</a></td>
				<!--<td><a href="<?php echo site_url('test/pilih/' . $item->Student_Roll)?>" class="btn " onclick="return confirm('Are you sure')">Update</a></td>-->
			</tr>

		<?php } ?>
		
	</table>
</div></div></div></div></div></div>




    