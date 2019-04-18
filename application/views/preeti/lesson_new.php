<!--  Read More -->

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
                                <th>Session</th>
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

                 

				<!--	<form  method="post"action="<?php //echo site_url('Lessonedit_controller/lesson_edit_saving_controller');?>" 
				 class="form-horizontal row-fluid">		-->

					<table class="table table-bordered table-striped  display" width="100%">

		                	<?php foreach ($add_class_in as $item) { ?>
								<input type="hidden" value="<?php echo $item->add_class_id;?>"
								name="addclass_id[]" id="sid_<?php echo $item->add_class_id;?>">
							<?php }?>	

				
				
						<!--<div style="float:right">
                   		 <input type="hidden" value="<?php echo date("Y-m-d")?>" name="date1" id="date1"> </div>		-->
                    
		                 <thead>
		                  	<th colspan="3">
								<div class="control-group">
									<label class="control-label span3" >
										<h3>Lesson Structure</h3>
									</label>
								</div>
							</th>	
		                </thead>

						<tbody>
							<tr>
								<!--
									<td>Lesson No:<br>
										<input type="text" id="lesson_no" name="lesson_no" class="span8">					 
									</td>
								-->
								<td>Start Time:<br>
									<input type="time" id="txtstart" name="txtstart" class="span8">
								</td>

								<td colspan="2">End Time:<br>
									<input type="time" id="txtend" name="txtend" class="span8">				
								</td>

								
							</tr>	

								
							 <tr>
							 	<td>Date:<br>
									<input type="text" value="<?php echo date("Y-m-d");?>" id="date" name="date"class="span8">
    							</td>
						 		<td colspan="2"> Lecture Type:<br>
									<select tabindex="1" data-placeholder="Select here.." class="span8">
										<option value="">Select here..</option>
										<option value="Letcure Schedule">Letcure Schedule</option>
										<option value="Arrangement">Arrangement</option>
										<option value="Extra Lecture Taken">Extra Lecture Taken</option>
												
									</select>
										
								</td>
							

				 				
				 					
					 						<tr>
	    										<td >Unit:<br>
													<input type="number" id="Unit" name="Unit" class="span8">
												</td>
											

										
												<td > Topic:<br>
				    								<textarea class="span12" rows="5"  cols="30" id="Topic" name="Topic"></textarea>
												</td>
											<tr>
										
											<td>No Of Lecture:<br>
												<input type="number" id="Lecture" name="Lecture"class="span8">
    										</td>
    									</tr>

								
								</td>
							</tr>
							<tr>


							<tr>
								<td colspan="3">			
									<button style="float:right" type="submit" name="save" id="save" class="btn btn-primary">Submit</button>
								</td>
							</tr>
						</tbody>
					</table>
			

			<table class="table table-striped table-bordered table-condensed">
                    <tr style="text-align: left">
                        <!--  <th>Lesson No</th>	-->
                        <th>Date</th>
                       	<th>Start Time</th>
                        <th>End Time</th>
                        <th>Unit</th>
                        <th>Topic</th>	                               	
                        <th>No Of Lecture </th>
                        <th>Delete</th>
                    </tr>


                        <?php foreach ($t_diary as $item) { ?>		
                            <tr>
                                <!--     <td><?php echo $item->lesson_id ;?></td>		-->
	                            <td class="lessondata lesstd"   id="<?php echo $item->lesson_id.'-date';?>"> <?php echo $item->date;?></td>

	                            <td class="lessondata lesstd"  id="<?php echo $item->lesson_id.'-start_time' ;?>"><?php echo $item->start_time;?></td>

	                            <td class="lessondata lesstd"  id="<?php echo $item->lesson_id.'-end_time' ;?>"><?php echo $item->end_time;?></td>

	                            <td class="lessondata lesstd"  id="<?php echo $item->lesson_id.'-unit' ;?>"><?php echo $item->unit ;?></td>	

	                            <td class="show-read-more lessondata lesstd"  id="<?php echo $item->lesson_id.'-topic' ;?>"><?php echo $item->topic;?></td>

	                            <td class="lessondata lesstd"  id="<?php echo $item->lesson_id.'-lecture_id' ;?>"><?php echo $item->lecture_id;?></td>


	                            <td><a href="<?php echo site_url('Lessonedit_controller/del1/' . $item->lesson_id)?>" class="btn btn-primary" onclick="return confirm('Are you sure')">Delete</a></td>
	                                        
	                        </tr>
                        <?php } ?>
                </table>
                	</form>
			</div>
   			 <br>
        </div>
    </div>
</div>
    




	