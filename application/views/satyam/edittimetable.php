<?php
	$days_ = array ('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
	$time_ = array ('09_00_09_50', '09_50_10_40', '10_40_11_30', '11_50_12_40', '12_40_01_30', '02_10_03_00', '03_00_03_50', '03_50_04_40');
?>
<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1 >Edit Time Table</h1>
							</div>
	<form method="post" id="myform100t" name="myform100t" action="<?php echo site_url('edittimetablecontroller/savingdata3');?>" class="form-horizontal row-fluid" >
	<table class="table table-striped table-bordered table-condensed"  border="1">
		
			<!--<table class="table" >-->
				<thead>
				<tbody>
								  
									<tr>
									  <td >Day: <br>
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Day" id="Day" required="required" onchange="update()">
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
									  <td>Subject_id:<br>
									  	<input type="text" name="Subject_id" id="Subject_id" class="span8" required="required"></td>
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
									
									
								  </tbody>
								</table><br><br>
								<center>
								<div class="control-group">
											<!--div class="controls" style="float:left;"-->
												
											<button type="submit" class="btn btn-primary" id="newbtn"name="save">INSERT RECORD</button>
											<!--/div-->
										</div></center><br><br>
									</form>
									<center>
<form method="post" id="myform100tn" name="myform100tn"  class="form-horizontal row-fluid">
	
			<table class="table table-striped table-bordered table-condensed" border="1" id="timetablehere">
                                         
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
                      <th>03:50-04:40</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($days_ as $item) { ?>
                    <tr>
                      <td><?php echo $item;?></td>
                      <?php  foreach ($time_ as $timeitem) { ?>
                      <td id="<?php  echo $item.$timeitem;?>"></td>
                      <?php } ?>
                    </tr>
                <?php } ?>
                      
                    </tr> 
                    </tbody>
                  
                  </table>
              </form>
                    </div>

  


								</div></div></div></div>




     