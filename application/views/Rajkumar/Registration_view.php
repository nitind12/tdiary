


<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1 > Registration Form</h1>
							</div>
							<div class="module-body">
								
						<form method="post" action="<?php echo site_url('registrationform_controller/savingdata3');?>" class="form-horizontal row-fluid" id="form102" name="form102">
		
							<table class="table table-striped table-bordered table-condensed "  border="1">
									<tr><div style="float:right">
                    <input type="hidden" value="<?php echo date("Ym")?>" name="date" id="date"> <?php echo date("Y-m-d")?>
                </div>
      
											<td>Batch<br>
									  	<select tabindex="1" data-placeholder="Select here.."class="span12"  name="batch" id="batch">
                                             <option value="">Select Batch</option>
                                                <?php foreach ($Ses as  $item1) { ?>
                                                 <option value="<?php echo $item1->s_id;?>">
                                                 	<?php echo $item1->session?></option>
                                                    <?php }?>
                                                 </select>
                                             	</td>
									 									  	
									 <td>Session:<br>
									  	<select tabindex="1" data-placeholder="Select here.."class="span12"  name="regsession" id="regsession">
                                             <option value="">Select Session</option>
                                                <?php foreach ($Ses as  $item1) { ?>
                                                 <option value="<?php echo $item1->s_id;?>">
                                                 	<?php echo $item1->session?></option>
                                                    <?php }?>
                                                 </select>
                                             	</td>
									 <td ><b>Course:</b>
										<br>
									  	<select tabindex="1" data-placeholder="Select here.."class="span8"  name="regCourse" id="regCourse">
                                           <option value="">Select Course</option>
                                            <?php foreach ($course1 as  $item) { ?>
                                               <option value="<?php echo $item->course_id;?>">
                                                 	<?php echo $item->name_of_courses ?> 
                                               </option>
                                                    <?php }?>
                                        </select></td>
                                        								</tr>
								</div>
		</table>
									
<br><br>
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
									  	</tr>
									  	<tr>
								  	<td>Father Name:<br>
									  <input type="text"  name="father_name" class="span8" required="">
									</td>
									<td>Mother Name:<br>
									  <input type="text"  name="mother_name" class="span8" required="">
									</td></tr>
									<tr>
										<td>Date of birth:<br>
									  	<input type="date" id="date_of_birth" name="date_of_birth" class="span8"></td>
									  
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
									</td></tr><tr>
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

									<td >Username:<br>
									  	<input type="text" name="username" class="span8" id="username" /></td>
								</tr>
									<tr><td colspan="2"><h2>Address Detail</h2></td></tr>
								  
																		
									<tr>

									  <td >Address:<br>
									  	<input type="text" name="address" class="span8" id="address" /></td>
									  <td>State:<br>
									  	<input type="text" id="state" name="state" class="span8"></td>
									  	</tr>
									  	<tr>
									  <td>City:<br>
									  	<input type="text" id="city" name="city" class="span8"></td>
									 
									  	<td>pincode:<br>
									  <input type="text"  name="pincode" class="span8" required="">
									</td>
								</tr>
								<tr>
									<td>Date of Commencement:<br>
									  <input type="date"  name="date_of_commencement" class="span8" required="">
									</td>
								</tr>
									
								   
								
									<tr><td colspan="2"><h2>Contact Detail</h2></td></tr>
								  
									<tr>
									  <td >Student Email Id:<br>
									  	<input type="text" name="std_email" class="span8" id="std_email" /></td>
									  <td>Student Contact No:<br>
									  	<input type="text" id="std_contact" name="std_contact" class="span8"></td>
									  	</tr>
									  	<tr>
									  <td>Alternate Contact no:<br>
									  	<input type="text" id="alternate_contact" name="alternate_contact" class="span8"></td>
									 
									  	<td>Alternate Email Id:<br>
									  <input type="text"  name="alternate_email" class="span8" required="">
									</td>
								</tr>
	
								<tr>
									<td colspan="2"><h2>Academic Detail</h2></td></tr>
								  <table class="table table-striped table-bordered table-condensed">
									<tr>
									  <td >Qualification
									  	</td>
									  <td>Passing Year
									  	</td>
									  	
									  <td>Name of School
									  	</td>
									 
									  	<td>Name of Board
									  </td>
								
								 <td>Total Marks
									  </td>
									 
									  	<td>Obtained Marks
									  	</td>
																
									 
									  	<td>Percentage
									  	</td>
								</tr>
								<tr>
									  <td >
									
									<select tabindex="1" data-placeholder="Select here.."  name="qualification_status" id="qualification_status" class="span12">
													<option value="">Select here..</option>
													<option value="Category 1">10th</option>
													<option value="Category 2">12th</option>
													<option value="Category 3">UG</option>
													<option value="Category 4">PG</option>
												</select>
								</td>
									  <td>
									  	<select tabindex="1" data-placeholder="Select here.."  name="qualification_status" id="qualification_status" class="span12">
													<option value="">Select here..</option>
												<?php  for ($i=1975; $i<=2019 ; $i++) 
												{ ?> 
									  			<option value="<?php echo  $i;?>"><?php echo  $i;?></option>
													
									  	<?php } ?>
									  </select>
									</td>
									  	
									  <td>
									  	<input type="text" id="school" name="school" class="span7"></td>
									 
									  		
								 <td>
									  	<select tabindex="1" data-placeholder="Select here.."class="span7"  name="batch" id="batch">
                                             <option value="">Select Board</option>
                                                <?php foreach ($board as  $item1) { ?>
                                                 <option value="<?php echo $item1->board_id;?>">
                                                 	<?php echo $item1->board_name?></option>
                                                    <?php }?>
                                       </select>
                                        </td>
									 <td>
									  	<input type="text" id="school" name="school" class="span12">
									 </td>
									 
									 <td>
									 <input type="text"  name="board" class="span8" required="">
									</td>
									<td>
									 <input type="text"  name="percentage" class="span8" required="">
									</td>
								</tr>
								<tr>
									  <td >
									
									<select tabindex="1" data-placeholder="Select here.."  name="qualification_status" id="qualification_status" class="span12">
													<option value="">Select here..</option>
													<option value="Category 1">10th</option>
													<option value="Category 2">12th</option>
													<option value="Category 3">UG</option>
													<option value="Category 4">PG</option>
												</select>
								</td>
									  <td>
									  	<select tabindex="1" data-placeholder="Select here.."  name="qualification_status" id="qualification_status" class="span12">
													<option value="">Select here..</option>
												<?php  for ($i=1975; $i<=2019 ; $i++) 
												{ ?> 
									  			<option value="<?php echo  $i;?>"><?php echo  $i;?></option>
													
									  	<?php } ?>
									  </select>
									</td>
									  	
									  <td>
									  	<input type="text" id="school" name="school" class="span7"></td>
									 
									  		
								 <td>
									  	<select class="span7"  name="batch" id="batch">
                                             <option value="">Select Board</option>
                                                <?php foreach ($board as  $item1) { ?>
                                                 <option value="<?php echo $item1->board_id;?>">
                                                 	<?php echo $item1->board_name?></option>
                                                    <?php }?>
                                       </select>
                                        </td>
									 <td>
									  	<input type="text" id="school" name="school" class="span12">
									 </td>
									 
									 <td>
									 <input type="text"  name="board" class="span8" required="">
									</td>
									<td>
									 <input type="text"  name="percentage" class="span8" required="">
									</td>
								</tr>
								
								<tr>
									  <td >
									
									<select  name="qualification_status" id="qualification_status" class="span12">
													<option value="">Select here..</option>
													<option value="Category 1">10th</option>
													<option value="Category 2">12th</option>
													<option value="Category 3">UG</option>
													<option value="Category 4">PG</option>
												</select>
								</td>
									  <td>
									  	<select  name="qualification_status" id="qualification_status" class="span12">
													<option value="">Select here..</option>
												<?php  for ($i=1975; $i<=2019 ; $i++) 
												{ ?> 
									  			<option value="<?php echo  $i;?>"><?php echo  $i;?></option>
													
									  	<?php } ?>
									  </select>
									</td>
									  	
									  <td>
									  	<input type="text" id="school" name="school" class="span12"></td>
									 
									  		
								 <td>
									  	<select class="span7"  name="batch" id="batch">
                                             <option value="">Select Board</option>
                                                <?php foreach ($board as  $item1) { ?>
                                                 <option value="<?php echo $item1->board_id;?>">
                                                 	<?php echo $item1->board_name?></option>
                                                    <?php }?>
                                       </select>
                                        </td>
									 <td>
									  	<input type="text" id="school" name="school" class="span12">
									 </td>
									 
									 <td>
									 <input type="text"  name="board" class="span8" required="">
									</td>
									<td>
									 <input type="text"  name="percentage" class="span8" required="">
									</td>
								</tr><tr>
									  <td >
									
									<select tabindex="1" data-placeholder="Select here.."  name="qualification_status" id="qualification_status" class="span12">
													<option value="">Select here..</option>
													<option value="Category 1">10th</option>
													<option value="Category 2">12th</option>
													<option value="Category 3">UG</option>
													<option value="Category 4">PG</option>
												</select>
								</td>
									  <td>
									  	<select tabindex="1" data-placeholder="Select here.."  name="qualification_status" id="qualification_status" class="span12">
													<option value="">Select here..</option>
												<?php  for ($i=1975; $i<=2019 ; $i++) 
												{ ?> 
									  			<option value="<?php echo  $i;?>"><?php echo  $i;?></option>
													
									  	<?php } ?>
									  </select>
									</td>
									  	
									  <td>
									  	<input type="text" id="school" name="school" class="span7"></td>
									 
									  		
								 <td>
									  	<select tabindex="1" data-placeholder="Select here.."class="span7"  name="batch" id="batch">
                                             <option value="">Select Board</option>
                                                <?php foreach ($board as  $item1) { ?>
                                                 <option value="<?php echo $item1->board_id;?>">
                                                 	<?php echo $item1->board_name?></option>
                                                    <?php }?>
                                       </select>
                                        </td>
									 <td>
									  	<input type="text" id="school" name="school" class="span12">
									 </td>
									 
									 <td>
									 <input type="text"  name="board" class="span8" required="">
									</td>
									<td>
									 <input type="text"  name="percentage" class="span8" required="">
									</td>
								</tr>
					</table>
									
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
									
</div>
</div>
</div>
</div>
</div>
</div>




     