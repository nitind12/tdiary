


 <div class="span9">
	<div class="content">

		<div class="module">
			<div class="module-head">
				 <h2>Lesson Plan</h2>
			</div>
				<div class="module-body">
					<form  id="mylessonedit" name="mylessonedit" method="post" action="<?php echo site_url('Lessonedit_controller/savingdata');?>" class="form-horizontal row-fluid">

								<table class="table table-striped table-bordered table-condensed">  
									<tbody>
										<tr>

												<td>
														Session:<br>
														
														<select tabindex="1" data-placeholder="Select here.." class="span8" name="session" id="session" >
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
											
												</td>
											<td>  
												Course Name:<br>
														
															<select tabindex="1" data-placeholder="Select here.." class="span8" name="txtcourse" id="txtcourse">
																<option value="">Select here..</option>
																<option value="BCA">BCA</option>
																<option value="BBA">BBA</option>
																<option value="B.COM">B.COM</option>
																<option value="POLY TECHNIQUE">POLY TECHNIQUE</option>
																<option value="BSC">BSC</option>
																<option value="HM">HM</option>
															</select>
										  	 </td>

										  		 <td>									
														Semester:	<br>
												
													<select tabindex="1" data-placeholder="Select here.." class="span8" name="txtsemester" id="txtsemester" >
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


												<td>
													Section:<br>
													  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="txtsection" id="txtsection"  >
															  	<option value ="">Select here..</option>
															  	 <option value ="A">A</option>
															  	 <option value ="B">B</option>
															  	 <option value ="C">C</option>
															  	 <option value ="D">D</option>
									  	 
									 						 </select>
									 			</td>	
										</tr>	


											<tr>

												<td>
														Subject:<br>
														
														<input type="text" id="txtsubject" name="txtsubject" class="span8">													
												</td>


												<td>
														Start Time:<br>
														
														<input type="time" id="txtstart" name="txtstart" class="span8">													
												</td>

												<td>
														End Time:<br>
														
														<input type="time" id="txtend" name="txtend" class="span8">													
												</td>

												<td>
														Lesson No:<br>
														
														<input type="text" id="lesson_no" name="lesson_no" class="span8">													
												</td>
											</tr>	



											     <tr>
												     <td>	
															Date :	<br>
															
															<input type="Date" id="Date" name="Date" class="span8">
													</td>

													<td colspan="3" class="span3">
														 <table class="table" border="0">
															<tr>
																<td colspan="3">
															 		Unit:<br>
															 		<input type="number" id="Unit" name="Unit" class="span4">
															 	</td>
															 </tr>

															 <tr>
															 	<td> Topic:<br>
    																<textarea class="span9" rows="8"  cols="30"  
                                                                    id="Topic" name="Topic"></textarea>
																</td>
															</tr>

															<tr>
																<td>No. Of Lecture :	<br>
    																<input type="number" id="Lecture" name="Lecture"
                                                                     class="span4">


                                                                  <div class="control-group">
																	<div class="controls">  
                                                                     <button style="float:right" type="submit" name="save" 
                                                                                     class=" span3 btn">Submit</button>
                                                                        </div>
                                                                       </div>
                                                                </td>
                                                            </tr>                               
														</table>
													</td>
												</tr>
											</tbody>
										</table>
									</form>
								</div>




								<table class="table table-striped table-bordered table-condensed">
                                        		<tr style="text-align: left">
                                                    <th>Session</th>		
                                        			<th>Course</th>
                                        			<th>Sem</th>
                                        			<th>Sec</th>
                                                    <th>Subject</th>
                                                    <th>Lesson No</th>
                                                    <th>Date</th>
                                        			<th>Start Time</th>
                                        			<th>End Time</th>
                                        			<th>Unit</th>
                                          			<th>Topic</th>	                                        			
                                        			<th>No.Of Lecture</th>
                                        			<th>Delete</th>
                                        			
                                        		</tr>
                                 <?php foreach ($t_diary as $item) { ?>		
                                        <tr>
                                        	<td><?php echo $item->session_id;?></td>		
                                        	<td><?php echo $item->course_id;?></td>
                                        	<td><?php echo $item->semester_id ;?></td>
                                       		<td><?php echo $item->section_id ;?></td>
                                            <td><?php echo $item->subject_id ;?></td>
                                            <td><?php echo $item->lesson_id ;?></td>
                                            <td><?php echo $item->date;?></td>
                                        	<td><?php echo $item->start_time;?></td>
                                        	<td><?php echo $item->end_time;?></td>
                                        	<td><?php echo $item->unit ;?></td>	
                                        	<td><?php echo $item->topic;?></td>
                                        	<td><?php echo $item->no_of_lecture ;?></td>
                                        	<td><a href="<?php echo site_url('Lessonedit_controller/del1/' . $item->lesson_id)?>" class="btn " onclick="return confirm('Are you sure')">Delete</a></td>
                               			</tr>
                                <?php } ?> 

	
		
	</table>
	</div>
</div>
</div>
