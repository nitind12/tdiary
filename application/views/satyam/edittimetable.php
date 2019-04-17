
<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1 >Edit Time Table</h1>
							</div>
	<form method="post" id="myform100" name="myform100" action="<?php echo site_url('edittimetablecontroller/savingdata3');?>" class="form-horizontal row-fluid">
	<table class="table table-striped table-bordered table-condensed"  border="1">
		
			<!--<table class="table" >-->
				<thead>
				<tbody>
								  
									<tr>
									  <td >Day<br>
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Day" id="Day">
									  		<option value ="">Select here..</option>
									  	 <option value ="Monday">Monday</option>
									  	 <option value ="Tuesday">Tuesday</option>
									  	 <option value ="Wednesday">Wednesday</option>
									  	 <option value ="Thursday">Thursday</option>
									  	 <option value ="Friday">Friday</option>
									  	 <option value ="Saturday">Saturday</option>
									  </select></td>
									  <td>Semester<br>
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
									  <td>Section<br>
									  	<!--<input type="text" id="txtSection" name="txtSection" class="span8">-->
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Section" id="Section">
									  		<option value ="">Select here..</option>
									  	 <option value ="A">A</option>
									  	 <option value ="B">B</option>
									  	 <option value ="C">C</option>
									  	 <option value ="D">D</option>
									  	 <option value ="E">E</option>
									  	 
									  </select>
									  </td>

									  <td>Course_id:<br>
									  	<!--<input type="text" id="txtSection" name="txtSection" class="span8">-->
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Course_id" id="Course_id">
									  		<option value ="">Select here..</option>
									  	 <option value ="BCA">BCA</option>
									  	 <option value ="BBA">BBA</option>
									  	 <option value ="B.sc">BSC</option>
									  	 <option value ="POLY TECHNIQUE">POLY TECHNIQUE</option>
									  	 <option value ="B.com">B.com</option>
									  	 <option value ="B.tech">B.tech</option>
									  	 <option value ="BHM">BHM</option>
									  	 
									  </select>
									  </td>
									  


									  
									</tr>
									
								  </thead>
								</tbody>
								   
								
									
									<tr>
									  <td>Subject_id<br>
									  	<input type="text" name="Subject_id" id="Subject_id" class="span8"/></td>
									  <td>Session<br>
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Session" id="Session">
									  		<option value ="">Select here..</option>
									  	 <option value =" 2010-2011">2010-2011</option>
									  	 <option value =" 2011-2012">2011-2012</option>
									  	 <option value =" 2012-2013">2012-2013</option>
									  	 <option value =" 2013-2014">2013-2014</option>
									  	 <option value =" 2014-2015">2014-2015</option>
									  	 <option value =" 2015-2016">2015-2016</option>
									  </select>
									  	
									  <td>Time<br>
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Time" id="Time">
									  		<option value ="">Select here..</option>
									  		<option value="09_00_09_50">09:00-09:50 AM</option>
									  		<option value="09_50_10_40">09:50-10_40 AM</option>
									  		<option Value="10_40_11_30">10:40-11:30 AM</option>
									  		<option value="11_50_12_40">11:50-12:30 PM</option>
									  		<option value="12_40_01_30">12:40-01:30 PM</option>
									  		<option value="02_10_03_00">02:10-03:00 PM</option>
									  		<option value="03_00_03_50">03:00-03:50 PM</option>
									  	</select>
									  	
									  	<td>Room<br>
									   	<input type="text" name="Room" id="Room" class="span8"/></td>
									   
									</tr>
									
								  </thead>
								   <tbody>
									
									<!--tr>
									   <td>Room<br>
									   	<input type="text" name="Room" id="Room" class="span8"/></td>
									   
									</tr-->
								
								  </tbody>
								</table><br><br>
								<center>
								<div class="control-group">
											<!--div class="controls" style="float:left;"-->
												
											<button type="submit" class="btn btn-primary" name="save">INSERT RECORD</button>
											<!--/div-->
										</div></center><br><br>
									</form>
									<center><a href="<?php echo site_url('edittimetablecontroller/del/' )?>" class="btn btn-primary " onclick="return confirm('Are you sure to delete whole data from the table??')">Delete Whole Data From the Table!</a></center>
									<br>
										<table class="table table-striped table-bordered table-condensed"  border="1">

		<tr style="text-align: left">
			<th align="center">Day</th>
			<th align="center">Semester</th>
			<th align="center">Section</th>
			<th align="center">Course_id</th>
			<th align="center">Subject_id</th>
			<th align="center">Session</th>
			<!--th align="center">Time_table_id</th-->
			<th align="center">Time</th>
			<th align="center">Room</th>
			<th align="center">Delete</th>

			<!--<th align="center">Update</th>-->
		</tr>

		<?php foreach ($users as $item) { ?>
			<tr >
				<td align="center"><?php echo $item->Day;?></td>
				<td align="center"><?php echo $item->Semester;?></td>
				<td align="center"><?php echo $item->Section;?></td>
				<td align="center"><?php echo $item->Course_id;?></td>
				<td align="center"><?php echo $item->Subject_id;?></td>
				<td align="center"><?php echo $item->Session;?></td>
				<!--td align="center"><?php echo $item->Time_table_id;?></td-->
				<td align="center"><?php echo $item->Time;?></td>
				<td align="center"><?php echo $item->Room;?></td>
				<td><a href="<?php echo site_url('edittimetablecontroller/del1/' . $item->Subject_id)?>" class="btn btn-primary " onclick="return confirm('Are you sure')">Delete</a></td>
				<!--<td><a href="<?php echo site_url('test/pilih/' . $item->Student_Roll)?>" class="btn " onclick="return confirm('Are you sure')">Update</a></td>-->
			</tr>

		<?php } ?>
		
	</table>
</div></div></div></div></div></div>




     