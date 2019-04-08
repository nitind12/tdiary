
<style type="text/css">
    .show-read-more .more-text{
        display: none;
    }
</style>


<div class="span9">
	<div class="content">

		<div class="module">
			<div class="module-head">
				  <h2>Lecture Plan</h2>
			</div>
				<div class="module-body">


				<form  method="post" name="myEdit"  id="myEdit"   action="<?php echo site_url('Newedit_controller/savingdata	');?>"  class="form-horizontal row-fluid">	

						<table class="table table-striped table-bordered table-condensed">

                        		<tr style="text-align: left">
                                    
                        			<th>Course</th>
                        			<th>Semester</th>
                                 	<!--<th>Date of Commencement</th>
                                	<th>Date Of Completion</th>		-->
                        			<th>Faculty</th>
                        			<th>Subject</th>
                         		</tr>

                        	   <?php foreach ($t_diary as $item) { ?>
	                        		<tr id=''>
	                        			
	                        			<td><?php echo $item->course_id;?></td>
	                        			<td><?php echo $item->semester_id ;?></td>
	                                   
	                            		        <!--  	 <td><?php echo $item->date_of_commencement ;?></td>
	                            			         <td><?php echo $item->date_of_completion ;?></td>		-->
	                            			         
	                                
	                        			<td><?php echo $item->faculty_id ;?></td>
	                        			<td><?php echo $item->subject_id;?></td>                
	                         
	                        		</tr>
                        	   <?php } ?>
                        	</table>

                        	<br>			

								<table class="table table-striped table-bordered table-condensed">

                					<tbody>

											<tr>
												 <th colspan="4"><div class="control-group">
												 	<label class=" span3 control-label" ><h3>Lecture Structure</h3></label>	
													</div>
												</th>
											</tr>

										<tr>

											<th>
		                      			  		<center>  <h5>Syllabus pdf</h5></center>
		                      				</th>	
		                					<th>
		                      			  		<center>  <h5>Unit</h5></center>
		                      				</th>				

											<th>
												<center>	<h5>Topic</h5></center>
	
											</th>

											<th>
												<center>	<h5>No. Of Lecture</h5>	</center>
												
											</th>
										</tr>


										<tr>

											<td>							
														
											<input class="specialInput" type="file"  id="syllabus" name="syllabus">

												</td>
											<td>
												<center><input type="number" id="txtunit" name="txtunit" class="span8">
												</center>
											</td>

											<td>
													<center><textarea id="topic" name="topic" class="span8" rows="5"  cols="50" ></textarea>
													</center>					
											
											</td>

											<td>
												<center><input type="text" id="No_Of_Lecture" name="No_Of_Lecture" class="span8"></center>

											</td>
										</tr>

										<tr>
												<td colspan="4">									
													
														Total No. of Lecture:	
														
															<input type="text" id="txttotal" name="txttotal" class="span2">

															<button style="float:right" type="submit" name="save" 
															 class=" span3 btn">Submit</button>
															
												</td>
										</tr>

												</tbody>
											</table>
											<br>

							<table class="table table-striped table-bordered table-condensed">
                        		<tr style="text-align: left">
                        			    <th>Syllabus pdf</th>
                                  
	                                   <th>Lecture No</th>
	                        			<th>Unit</th>
	                        			<th>Topic</th>
	                                    <th>No Of Lecture</th>
	                        			<th>Total</th>
	                        			<th>Delete</th>
	                        	</tr>	

	                        	 <?php foreach ($t_diary as $item) { ?>
	                        		<tr id='update'>
	                        			  <td><?php echo $item->syllabus_pdf;?></td> 
	                                    
	                                    <td><?php echo $item->lecture_id ;?></td>     
	                        			<td><?php echo $item->unit;?></td>
	                        			<td  class="show-read-more"><?php echo $item->topic ;?></a></td>
	                        			
	                                    <td><?php echo $item->no_of_lecture;?></td>
	                        			<td><?php echo $item->total_lecture ;?></td>	
	                        			<td><a href="<?php echo site_url('Edit_controller/del1/' . $item->lecture_id)?>" class="btn " onclick="return confirm('Are you sure')">Delete</a></td>
	                        		</tr>
                        	   		<?php } ?>
								</table>
								</form>
							</div>
						</div>
					</div>
				</div>
					


				
					