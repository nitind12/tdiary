


<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1 > Registration Form</h1>
							</div>
							<div class="control-group"><br>
											<label class="control-label" for="basicinput"><b>Course</b></label>
										<div class="controls">
									    <select tabindex="1" data-placeholder="Select here.."class="span8"  name="Course" id="Course">
                                           <option value="">Select Course</option>
                                            <?php foreach ($course1 as  $item) { ?>
                                               <option value="<?php echo $item->course_id;?>">
                                                 	<?php echo $item->name_of_courses ?> </option>
                                                    <?php }?>
                                                 </select>
                                                
											</div>
							</div>
		
									

	<form method="post" action="<?php echo site_url('registrationform_controller/savingdata3');?>" class="form-horizontal row-fluid" id="form102" name="form102">
	<table class="table table-striped table-bordered table-condensed"  border="1">
			<!--<table class="table" >-->
				<thead>
				<tbody>
					<h2>Personal Detail</h2>
								  
									<tr>
									  <td >First Name:<br>
									  	<input type="text" name="first_name" class="span8" id="first_name" /></td>
									  <td>Last Name:<br>
									  	<input type="text" id="last_name" name="last_name" class="span8"></td>
									  	
									  <td>Date of birth:<br>
									  	<input type="date" id="date_of_birth" name="date_of_birth" class="span8"></td>
									  </tr>
									  <tr>
									  	<td>Father Name:<br>
									  <input type="text"  name="father_name" class="span8" required="">
									</td>
									<td>Mother Name:<br>
									  <input type="text"  name="mother_name" class="span8" required="">
									</td>
									<td>Gender:<br>
									  <select tabindex="1"data-placeholder="Select here.." class="span8" name="gender" id="gender">
									  		<option value ="">Select here..</option>
									  	 <option value ="Male">Male</option>
									  	 <option value ="Female">Female</option>
									  	 <option value ="Other">Other</option>
									  	
									  	  
									  </select>
									</td>
								</tr>
								<tr>
									<td>Nationality:<br>
									  <select tabindex="1"data-placeholder="Select here.." class="span8" name="nationality" id="nationality">
									  		<option value ="">Select here..</option>
									  	 <option value ="Indian">Indian</option>
									  	 <option value ="Forainer">Forainer</option>
									  	 <option value ="Other">Other</option>
									  	
									  	  
									  </select>
									</td>
									<td>Category:<br>
									  <select tabindex="1"data-placeholder="Select here.." class="span8" name="category" id="category">
									  		<option value ="">Select here..</option>
									  	 <option value ="SC/ST">SC/ST</option>
									  	 <option value ="GEN">GEN</option>
									  	<option value ="OBC">OBC</option>
									  	 
									  	 <option value ="Other">Other</option>
									  	
									  	  
									  </select>
									</td>
									<td>Blood Group:<br>
									  <select tabindex="1"data-placeholder="Select here.." class="span8" name="blood_group" id="blood_group">
									  		<option value ="">Select here..</option>
									  	 <option value ="A+">A+</option>
									  	 <option value ="B+">B+</option>
									  	 <option value ="O+">O+</option>
									  	 <option value ="O-">O-</option>
									  	 <option value ="AB+">AB+</option>
									  	 <option value ="AB-">AB-</option>

									  	
									  	  
									  </select>
									</td>
								</tr>
								<tr>
									

									  

									  
									</tr>
									
								  </thead>
								</tbody>
								   
								
									
									
								</table><br><br>
								<center>
								<div class="control-group">
											<!--<div class="controls">-->
												
												<button type="submit" class="btn btn-primary" name="save">Save&Next</button>
											<!--</div>-->
										</div></center><br><br>
									</form>
									
</div></div></div></div></div></div>




     