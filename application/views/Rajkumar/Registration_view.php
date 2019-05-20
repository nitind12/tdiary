
<script type="text/javascript">function addresssame(f) 
	{
			if(f.check.checked == true) 
  	{

    f.addressname1.value = f.addressname.value;
    f.cityname1.value = f.cityname.value;
	   f.pincodename1.value = f.pincodename.value;
    f.statename1.value = f.statename.value;
	}
	  	else{
	  	 f.addressname1.value='';
    f.cityname1.value ='';
	  	 f.pincodename1.value='';
    f.statename1.value ='';
	}
	}
</script>

<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1 > Registration Form</h1>
							</div>
							<div class="module-body">	<?php
            				$data = array(
              				'name' => 'frmregstudent',
              			'id' => 'frmregstudent'
            			);
           					 echo form_open_multipart('registrationform_controller/savingdata3', $data); 
          				?>
							<span class="form-horizontal row-fluid">	
						<!--form method="post" action="<?php //echo site_url('registrationform_controller/savingdata3');?>" class="form-horizontal row-fluid" id="form102" name="form102"--->
		
							<table class="table table-striped table-bordered table-condensed "  border="1">
									<tr><div style="float:right">
                    <input type="hidden" value="<?php echo date("Ym")?>" name="date" id="date"> <?php echo date("Y-m-d")?>
                </div>
      
											<td>Batch<br>
									  	<select tabindex="1" data-placeholder="Select here.."class="span12"  name="batch" id="batch" required="required">
                                             <option value="">Select Batch</option>
                                                <?php foreach ($Ses as  $item1) { ?>
                                                 <option value="<?php echo $item1->s_id;?>">
                                                 	<?php echo $item1->session?></option>
                                                    <?php }?>
                                                 </select>
                                             	</td>
									 									  	
									 <td>Session:<br>
									  	<select tabindex="1" data-placeholder="Select here.."class="span12"  name="regsession" id="regsession" required="required">
                                             <option value="">Select Session</option>
                                                <?php foreach ($Ses as  $item1) { ?>
                                                 <option value="<?php echo $item1->s_id;?>">
                                                 	<?php echo $item1->session?></option>
                                                    <?php }?>
                                                 </select>
                                             	</td>
									 <td >Course:
										<br>
									  	<select tabindex="1" data-placeholder="Select here.."class="span8"  name="regCourse" id="regCourse" required="required">
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
									  	<input type="text" name="first_name" class="span8" id="first_name" required="required" /></td>
									  <td>Last Name:<br>
									  	<input type="text" id="last_name" name="last_name" class="span8" required="required"></td>
									  	</tr>
									  	<tr>
								  	<td>Father Name:<br>
									  <input type="text"  name="father_name" class="span8" required="required">
									</td>
									<td>Mother Name:<br>
									  <input type="text"  name="mother_name" class="span8" required="required">
									</td></tr>
									<tr>
										<td>Date of birth:<br>
									  	<input type="date" id="date_of_birth" name="date_of_birth" class="span8" required="required"></td>
									  
									<td>Gender:<br>
									  <select tabindex="1"data-placeholder="Select here.." class="span8" name="gender" id="gender" required="required">
									  		<option value ="">Select here..</option>
									  	 <option value ="Male">Male</option>
									  	 <option value ="Female">Female</option>
									  	 <option value ="Other">Other</option>
									  	
									  	  
									  </select>
									</td>
								</tr>
								<tr>
									<td>Nationality:<br>
									  <select tabindex="1"data-placeholder="Select here.." class="span8" name="nationality" id="nationality" required="required">
									  		<option value ="">Select here..</option>
									  	 <option value ="Indian">Indian</option>
									  	 <option value ="Forainer">Forainer</option>
									  	 <option value ="Other">Other</option>
									  	
									  	  
									  </select>
									</td>
									<td>Category:<br>
									  <select tabindex="1"data-placeholder="Select here.." class="span8" name="category" id="category" required="required">
									  		<option value ="">Select here..</option>
									  	 <option value ="SC/ST">SC/ST</option>
									  	 <option value ="GEN">GEN</option>
									  	<option value ="OBC">OBC</option>
									  	 
									  	 <option value ="Other">Other</option>
									  	
									  	  
									  </select>
									</td></tr><tr>
									<td>Blood Group:<br>
									  <select tabindex="1"data-placeholder="Select here.." class="span8" name="blood_group" id="blood_group" required="required">
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
									  	<input type="text" name="username" class="span8" id="username" required="required" /></td>
								</tr>
									<tr><td colspan="2"><h2>Address Detail</h2></td></tr>
								  
									<tr><td colspan="2"><h4>Current Address</h4></td></tr>									
									<form><tr>

									  <td >Address:<br>
									  	<input type="text" name="addressname" class="span8" id="addressname"  required="required"/></td>
									  <td>State:<br>
									  	<input type="text" id="statename" name="statename" class="span8" required="required"></td>
									  	</tr>
									  	<tr>
									  <td>City:<br>
									  	<input type="text" id="cityname" name="cityname" class="span8" required="required"></td>
									 
									  	<td>pincode:<br>
									  <input type="text"  name="pincodename"  id="pincodename" class="span8" required="required">
									</td>
								</tr>

								<tr><td colspan="2"><h4> 													
													Permanent Address <h6><input type="checkbox" value="" name="check" id="check" onclick="addresssame(this.form)"  required="required">
									(checked for same current address)</h6></h4></td></tr>					
								   <tr>

									  <td >Address:<br>
									  	<input type="text" name="addressname1" class="span8" id="addressname1" required="required"/></td>
									  <td>State:<br>
									  	<input type="text" id="statename1" name="statename1" class="span8" required="required"></td>
									  	</tr>
									  	
									  	<tr>
									  <td>City:<br>
									  	<input type="text" id="cityname1" name="cityname1" class="span8" required="required"></td>
									 
									  	<td>pincode:<br>
									  <input type="text"  name="pincodename1" id="pincodename1" class="span8" required="required">
									</td>
								</tr>
								   
								</form>
									<tr><td colspan="2"><h2>Contact Detail</h2></td></tr>
								  
									<tr>
									  <td >Student Email Id:<br>
									  	<input type="text" name="std_email" class="span8" id="std_email" required="required"/></td>
									  <td>Student Contact No:<br>
									  	<input type="text" id="std_contact" name="std_contact" class="span8" required="required"></td>
									  	</tr>
									  	<tr>
									  <td>Alternate Contact no:<br>
									  	<input type="text" id="alternate_contact" name="alternate_contact" class="span8"></td>
									 
									  	<td>Alternate Email Id:<br>
									  <input type="text"  name="alternate_email" class="span8" >
									</td>
								</tr>
	
								<tr>
									<td colspan="2"><h2>Academic Detail</h2></td></tr>
						<table class="table table-striped table-bordered table-condensed">
									<tr>
									  <td >Qualification
									  	</td>
									  <td class="span2" >Passing Year
									  	</td>
									  	
									  
									  	<td>Name of Board
									  </td>
								<td class="span2">Name of School
									  	</td>
									 
								 <td>Total Marks
									  </td>
									 
									  	<td class="span1">Obtained Marks
									  	</td>
																
									 
									  	<td>Percentage
									  	</td>
								</tr>
								<tr>
									  <td >
									
									<select tabindex="1" data-placeholder="Select here.."  name="qualification_status1" id="qualification_status1" class="span12" required="required">
													<option value="">Select here..</option>
													<option value="1">10th</option>
												</select>
								</td>
									  <td>
									  	<select  data-placeholder="Select here.."  name="PassingYear1" id="PassingYear1" class="span12" required="required">
													<option value="">Select here..</option>
												<?php  for ($i=1975; $i<=date('Y') ; $i++) 
												{ ?> 
									  			<option value="<?php echo  $i;?>"><?php echo  $i;?></option>
													
									  	<?php } ?>
									  </select>
									</td>
									   <td>
									  	<select  data-placeholder="Select here.."class="span12"  name="board1" id="board1" required="required">
                                             <option value="">Select Board</option>
                                                <?php foreach ($board as  $item1) { ?>
                                                 <option value="<?php echo $item1->board_id;?>">
                                                 	<?php echo $item1->board_name?></option>
                                                    <?php }?>
                                       </select>
                                        </td>
									
									  <td>
									  	<input type="text" id="schoolname1" name="schoolname1" class="span12" required="required"></td>
									 
									  		
									 <td>
									  	<input type="text" id="totalmarks1" name="totalmarks1" class="span12" required="required">
									 </td>
									 
									 <td>
									 <input type="text"  name="obtained1" id="obtained1"class="span12" required="required">
									</td>
									<td>
									 <input type="text"  name="percentage1"id="percentage1" class="span8" required="required" >
									</td>
	</tr>
								<tr>
									  <td >
									
									<select tabindex="1" data-placeholder="Select here.."  name="qualification_status2" id="qualification_status2" class="span12" required="required">
													<option value="">Select here..</option>
													<option value="2">12th</option>
												</select>
								</td>
									  <td>
									  	<select  data-placeholder="Select here.."  name="PassingYear2" id="PassingYear2" class="span12" required="required">
													<option value="">Select here..</option>
												<?php  for ($i=1975; $i<=date('Y') ; $i++) 
												{ ?> 
									  			<option value="<?php echo $i;?>"><?php echo $i;?></option>
													
									  	<?php } ?>
									  </select>
									</td>
									   <td>
									  	<select  data-placeholder="Select here.."class="span12"  name="board2" id="board2" required="required">
                                             <option value="">Select Board</option>
                                                <?php foreach ($board as  $item1) { ?>
                                                 <option value="<?php echo $item1->board_id;?>">
                                                 	<?php echo $item1->board_name?></option>
                                                    <?php }?>
                                       </select>
                                        </td>
									
									  <td>
									  	<input type="text" id="schoolname2" name="schoolname2" class="span12" required="required"></td>
									 
									  		
									 <td>
									  	<input type="text" id="totalmarks2" name="totalmarks2" class="span12" required="required">
									 </td>
									 
									 <td>
									 <input type="text"  name="obtained2" id="obtained2"class="span12" required="required">
									</td>
									<td>
									 <input type="text"  name="percentage2"id="percentage2" class="span8" required="required">
									</td>
								</tr>
								<tr>
									  <td >
									
									<select tabindex="1" data-placeholder="Select here.."  name="qualification_status3" id="qualification_status3" class="span12" required="required">
													<option value="">Select here..</option>
													<option value="3">UG</option>
												</select>
								</td>
									  <td>
									  	<select  data-placeholder="Select here.."  name="PassingYear3" id="PassingYear3" class="span12" required="required">
													<option value="">Select here..</option>
												<?php  for ($i=1975; $i<=date('Y') ; $i++) 
												{ ?> 
									  			<option value="<?php echo  $i;?>"><?php echo  $i;?></option>
													
									  	<?php } ?>
									  </select>
									</td>
									   <td>
									  	 <input type="text"  name="board3" id="board3" class="span12"  required="required">
									 
                                        </td>
									
									  <td>
									  	<input type="text" id="schoolname3" name="schoolname3" class="span12"  required="required"></td>
									 
									  		
									 <td>
									  	<input type="text" id="totalmarks3" name="totalmarks3" class="span12"  required="required">
									 </td>
									 
									 <td>
									 <input type="text"  name="obtained3" id="obtained3"class="span12" required="required">
									</td>
									<td>
									 <input type="text"  name="percentage3"id="percentage3" class="span8" required="required">
									</td>
								</tr>
								<tr>
									  <td>
									
									<select tabindex="1" data-placeholder="Select here.."  name="qualification_status4" id="qualification_status4" class="span12" >
													<option value="">Select here..</option>
													<option value="4">PG</option>
												</select>
								</td>
									  <td>
									  	<select  data-placeholder="Select here.."  name="PassingYear4" id="PassingYear4" class="span12" required="required">
													<option value="">Select here..</option>
												<?php  for ($i=1975; $i<=date('Y') ; $i++) 
												{ ?> 
									  			<option value="<?php echo  $i;?>"><?php echo  $i;?></option>
													
									  	<?php } ?>
									  </select>
									</td>
									   <td>
									  	<input type="text" id="board4" name="board4" class="span12"  required="required"></td>
									  
									
									  <td>
									  	<input type="text" id="schoolname4" name="schoolname4" class="span12" required="required"></td>
									 
									  		
									 <td>
									  	<input type="text" id="totalmarks4" name="totalmarks4" class="span12" required="required">
									 </td>
									 
									 <td>
									 <input type="text"  name="obtained4" id="obtained4"class="span12" required="required">
									</td>
									<td>
									 <input type="text"  name="percentage4"id="percentage4" class="span8" required="required">
									</td>
								</tr>
							<tr><td colspan="7"><h3>Upload Photos</h3></td></tr>
					
									
					<tr>
						 <td colspan="3" >Upload Photo<br>
									  	<input type="file" name="UploadP" class="span8" id="UploadP" required="required" />
									  </td>
							<td colspan="4">Upload Signature<br>
									  	<input type="file" id="Signature" name="Signature" class="span8" required="required"></td>
									 	</tr>
													
					</table></tbody></thead></table></span>
								   
								
									
									
								<br><br>
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




     