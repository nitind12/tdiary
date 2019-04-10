<style type="text/css">
    .show-read-more .more-text{
        display: none;
    }
</style>


 <div class="span9">
	<div class="content">

		<div class="module">
			<div class="module-head">
				 <h2>Lesson Plan</h2>
			</div>
				<div class="module-body">
					<form  id="mylessonedit" name="mylessonedit" method="post" action="<?php echo site_url('Lessonedit_controller/savingdata');?>" class="form-horizontal row-fluid">

<<<<<<< HEAD

						<table class="table table-striped table-bordered table-condensed">
							<thead>
                                        		<tr style="text-align: left">
                                                    		
                                        			<th>session</th>
                                                    <th>Course</th>
                                                    <th>Semester</th>
                                        			<th>Section</th>
                                        			<th>Faculty</th>
                                        		
                                        			
                                        		</tr>
                                      </thead>
                            

                                <tbody>

							<?php foreach($add_class_in  as $item){?>
	                        		<tr>
	                        			<td><?php echo $item->session_id?></td>
	                        			<td><?php echo $item->course_id;?></td>
	                        			<td><?php echo $item->semester_id ;?></td>
	                        			<td><?php echo $item->section_id ;?></td>
	                        			<td><?php echo $item->faculty_id ;?></td>
	                        			
	                        		</tr>
	                        	<?php }?>		
                         	</tbody>
                         </table>	
                         <br>		
                                       
=======
>>>>>>> parent of 649676f... Merge branch 'master' of https://github.com/nitind12/tdiary
								<table class="table table-striped table-bordered table-condensed">  
									<tbody>
										<tr>

											<td>  
												Course Name:<br>
														
															<select tabindex="1" data-placeholder="Select here.." class="span8" name="txtcourse" id="txtcourse">
																 
                                                                    <option value="">Select Course</option>
                                                                    <?php foreach ($course as  $item)   { ?>
                                                                        <option value="<?php echo $item->s_no;?>"><?php echo $item->course_id ?></option>
                                                                    <?php }?>
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
									 			

												<td>
														Subject:<br>
														
														<input type="text" id="txtsubject" name="txtsubject" class="span8">													
												</td>
												<tr>


												<td>
														Start Time:<br>
														
														<input type="time" id="txtstart" name="txtstart" class="span8">													
												</td>

												<td>
														End Time:<br>
														
														<input type="time" id="txtend" name="txtend" class="span8">													
												</td>

												<td colspan="2">
														Lesson No:<br>
														
														<input type="text" id="lesson_no" name="lesson_no" class="span4">													
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
																<td>Lecture id:	<br>
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
                                        			<th>Lecture id</th>
                                        			<th>Delete</th>
                                        			
                                        		</tr>
                                 <?php foreach ($t_diary as $item) { ?>		
                                        <tr id='clickedit'>
                                        			
                                        	<td><?php echo $item->course_id;?></td>
                                        	<td><?php echo $item->semester_id ;?></td>
                                       		<td><?php echo $item->section_id ;?></td>
                                            <td><?php echo $item->subject_id ;?></td>
                                            <td><?php echo $item->lesson_id ;?></td>
                                            <td><?php echo $item->date;?></td>
                                        	<td><?php echo $item->start_time;?></td>
                                        	<td><?php echo $item->end_time;?></td>
                                        	<td><?php echo $item->unit ;?></td>	
                                        	<td  class="show-read-more"><?php echo $item->topic;?></td>
                                        	<td><?php echo $item->lectureid;?></td>
                                        	<td><a href="<?php echo site_url('Lessonedit_controller/del1/' . $item->lesson_id)?>" class="btn " onclick="return confirm('Are you sure')">Delete</a></td>
                               			</tr>
                                <?php } ?> 

	
		
	</table>
	</div>
</div>
</div>
