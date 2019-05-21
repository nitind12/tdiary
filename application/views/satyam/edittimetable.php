
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
									  <td >Day:<br>
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Day" id="Day" required="required">
									  		<option value ="">Select here..</option>
									  	 <option value ="Monday">Monday</option>
									  	 <option value ="Tuesday">Tuesday</option>
									  	 <option value ="Wednesday">Wednesday</option>
									  	 <option value ="Thursday">Thursday</option>
									  	 <option value ="Friday">Friday</option>
									  	 <option value ="Saturday">Saturday</option>
									  </select></td>
									  <td>Semester:<br>
									  	 <select tabindex="1" data-placeholder="Select here.."class="span8"  name="Semester" id="Semester" required="required">
                                        <option value="">Select Semester</option>
                                                <?php foreach ($Semester1 as  $item) { ?>
                                                 <option value="<?php echo $item->semester_id;?>">
                                                  <?php echo $item->no_of_semester?></option>
                                                    <?php }?>
                                                 </select></td>
                                             </div></div>
									  <td>Section:<br>
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Section" id="Section" required="required">
									  		<option value ="">Select here..</option>
									  	 <option value ="A">A</option>
									  	 <option value ="B">B</option>
									  	 <option value ="C">C</option>
									  	 <option value ="D">D</option>
									  	 <option value ="E">E</option>
									  	 
									  </select>
									  </td>

									  <td>Course Name:<br>
									  	 <select tabindex="1" data-placeholder="Select here.."class="span8"  name="Course_Name" id="Course_Name" required="required">
                                             <option value="">Select Course</option>
                                                <?php foreach ($course1 as  $item) { ?>
                                                 <option value="<?php echo $item->course_id;?>">
                                                  <?php echo $item->name_of_courses?></option>
                                                    <?php }?>
                                                 </select></td>
                                                </div>
                                             </div>
									  


									  
									</tr>
									
								  </thead>
								</tbody>
								   
									
									<tr>
								
									  <td >Subject:<br>
									  	<!--<input type="text" id="Subject" name="Subject" class="span8"><-->
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Subject" id="Subject" >
									  	 </select>
									  </td>
									  <td>Session:<br>
									  	<select tabindex="1" data-placeholder="Select here.."class="span8"  name="Session" id="Session" required="required">
                                             <option value="">Select Session</option>
                                                <?php foreach ($Session1 as  $item) { ?>
                                                 <option value="<?php echo $item->s_id;?>">
                                                  <?php echo $item->session?></option>
                                                    <?php }?>
                                                 </select></td>
                                         </div>
                                     </div>     
									  	
									  <td>Time:<br>
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Time" id="Time" required="required">
									  		<option value ="">Select here..</option>
									  		<option value="09_00_09_50">09:00-09:50 AM</option>
									  		<option value="09_50_10_40">09:50-10_40 AM</option>
									  		<option Value="10_40_11_30">10:40-11:30 AM</option>
									  		<option value="11_50_12_40">11:50-12:30 PM</option>
									  		<option value="12_40_01_30">12:40-01:30 PM</option>
									  		<option value="02_10_03_00">02:10-03:00 PM</option>
									  		<option value="03_00_03_50">03:00-03:50 PM</option>
									  	</select>
									  	
									  	<td>Room:<br>
									   	<input type="text" name="Room" id="Room" class="span8" required="required"></td>
									   
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
												
											<button type="submit" class="btn btn-primary" name="btnsave" id="btnsave">INSERT RECORD</button>
											<!--/div-->
										</div></center><br><br>
									<br>
										<table class="table table-striped table-bordered table-condensed"  border="1">

											
									
		                          <table class="table table-striped table-bordered table-condensed"  border="1">
									  <thead>
										<tr bgcolor="lightblue">
										  <th>DAY</th>
										  <th>09:00-09:50</th>
										  <th>09:50-10:40</th>
										  <th>10:40-11:30</th>
					                      <th>11:50-12:40</th>
										  <th>12:40-01:30</th>
										  <th>02:10-03:00</th>
										  <th>03:00-03:50</th>
										</tr>
									  </thead>
									  <tbody>
										<tr>
										  <td>MON</td>
										  <td id="Monday09_00_09_50"></td>
										  <td id="Monday09_50_10_40"></td>
										  <td id="Monday10_40_11_30"></td>
										  <td id="Monday11_50_12_40"></td>
										  <td id="Monday12_40_01_30"></td>
										  <td id="Monday02_10_03_00"></td>
										  <td id="Monday03_00_03_50"></td>
										  
										  
										</tr>
										<tr>
										  <td>TUE</td>
										  <td id="Tuesday09_00_09_50"></td>
										  <td id="Tuesday09_50_10_40"></td>
										  <td id="Tuesday10_40_11_30"></td>
										  <td id="Tuesday11_50_12_40"></td>
										  <td id="Tuesday12_40_01_30"></td>
										  <td id="Tuesday02_10_03_00"></td>
										  <td id="Tuesday03_00_03_50"></td>
										  
										  
										</tr>
										<tr>
										  <td>WED</td>
										  <td id="Wednesday09_00_09_50"></td>
										  <td id="Wednesday09_50_10_40"></td>
										  <td id="Wednesday10_40_11_30"></td>
										  <td id="Wednesday11_50_12_40"></td>
										  <td id="Wednesday12_40_01_30"></td>
										  <td id="Wednesday02_10_03_00"></td>
										  <td id="Wednesday03_00_03_50"></td>
										  
										  
										</tr>
										<tr>
											<td>THU</td>
											<td id="Thursday09_00_09_50"></td>
											<td id="Thursday09_50_10_40"></td>
											<td id="Thursday10_40_11_30"></td>
											<td id="Thursday11_50_12_40"></td>
											<td id="Thursday12_40_01_30"></td>
											<td id="Thursday02_10_03_00"></td>
											<td id="Thursday03_00_03_50"></td>
											
											
										</tr>
										<tr>
											<td>FRI</td>
											<td id="Friday09_00_09_50"></td>
											<td id="Friday09_50_10_40"></td>
											<td id="Friday10_40_11_30"></td>
											<td id="Friday11_50_12_40"></td>
											<td id="Friday12_40_01_30"></td>
											<td id="Friday02_10_03_00"></td>
											<td id="Friday03_00_03_50"></td>
																						
										</tr>
										<tr>
											<td>SAT</td>
											<td id="Saturday09_00_09_50"></td>
											<td id="Saturday09_50_10_40"></td>
											<td id="Saturday10_40_11_30"></td>
											<td id="Saturday11_50_12_40"></td>
											<td id="Saturday12_40_01_30"></td>
											<td id="Saturday02_10_03_00"></td>
											<td id="Saturday03_00_03_50"></td>

											
										</tr>	
									  </tbody>
									</table>
									</table>
										</div>

					<div>
						<table class="table" border="1" id="timetablehere2"name="timetablehere2">
						</table>
					</div>
					</div>
				</div>
			</div>
</form>

		<!--<tr style="text-align: left">
			<th align="center">Day</th>
			<th align="center">Semester</th>
			<th align="center">Section</th>
			<th align="center">Course Name</th>
			<th align="center">Subject_id</th>
			<th align="center">Session</th>
			<th align="center">Time</th>
			<th align="center">Room</th>
			<th align="center">Delete</th>

			
		</tr>

		<?php foreach ($users as $item) { ?>
			<tr >
				<td align="center" class="timetable  timetd"   id="<?php echo $item->Subject_id.'-Day';?>"><?php echo $item->Day;?></td>
				<td align="center"  class="timetable  timetd"   id="<?php echo $item->Subject_id.'-Semester';?>"><?php echo $item->Semester;?></td>
				<td align="center"  class="timetable  timetd"   id="<?php echo $item->Subject_id.'-Section';?>"><?php echo $item->Section;?></td>
				<td align="center"  class="timetable  timetd"   id="<?php echo $item->Subject_id.'-Course_id';?>"><?php echo $item->Course_id;?></td>
				<td align="center"  class="timetable  timetd"   id="<?php echo $item->Subject_id.'-Subject_id';?>"><?php echo $item->Subject_id;?></td>
				<td align="center"  class="timetable  timetd"   id="<?php echo $item->Subject_id.'-Session';?>"><?php echo $item->Session;?></td>
				
				<td align="center"  class="timetable  timetd"   id="<?php echo $item->Subject_id.'-Time';?>"><?php echo $item->Time;?></td>
				<td align="center"  class="timetable  timetd"   id="<?php echo $item->Subject_id.'-Room';?>"><?php echo $item->Room;?></td>
				<td><a href="<?php echo site_url('edittimetablecontroller/del1/' . $item->Subject_id)?>" class="btn btn-danger icon-trash " onclick="return confirm('Are you sure')"></a></td>
				<!--<td><a href="<?php echo site_url('test/pilih/' . $item->Student_Roll)?>" class="btn " onclick="return confirm('Are you sure')">Update</a></td>
			</tr>

		<?php } ?>-->
		
	</table>
</div></div></div></div></div></div>




     