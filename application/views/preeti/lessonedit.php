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
                                       
								<table class="table table-striped table-bordered table-condensed">  
									<tbody>
										<tr>
												<td>
														Lesson No:<br>
														
														<input type="number" id="lesson_no" name="lesson_no" class="span8">													
														</td>
											

											 	 <td>	
															Date :	<br>
															
															<input type="Date" id="Date" name="Date" class="span8">
												</td>

												<td>
														Start Time:<br>
														
														<input type="time" id="txtstart" name="txtstart" class="span8">													
												</td>

												<td colspan="2">
														End Time:<br>
														
														<input type="time" id="txtend" name="txtend" class="span8">													
												</td>

											
										</tr>	
											<tr>				

				                					<th>
				                      			  		<center>  <h5>Unit</h5></center>
				                      				</th>				

													<th>
														<center>	<h5>Topic</h5></center>
			
													</th>

													<th colspan="2">
														<center>	<h5>Lecture id</h5>	</center>
														
													</th>
										</tr>


										<tr>
											

											<td>
											<center>	<input type="number" id="Unit" name="Unit" class="span8"></center>
											</td>

											<td>
											<center>		<textarea id="Topic" name="Topic" class="span8" rows="5"  cols="25" >
														
													</textarea></center>
											
											</td>

											<td colspan="2">
											<center>	<input type="text" id="Lecture" name="Lecture" class="span8"></center>

											</td>
										</tr>

										<tr>
												<td colspan="4">									

															
																<div class="controls" style="float:right">
																	<center>
																		<button type="submit" class="btn btn-primary"  name="save" id="save">Submit</button>
																	</center>
																</div>

															</div>
															
												</td>
										</tr>
                                                     
												
											</tbody>
										</table>
									</form>
								</div>




								<table class="table table-striped table-bordered table-condensed">
                                        		<tr style="text-align: left">
                                                    		
                                        			
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
