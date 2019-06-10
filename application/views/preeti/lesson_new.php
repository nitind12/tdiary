<!--  Read More -->
<style type="text/css">
    .show-read-more .more-text{
        display: none;
    }
    .redcolor{
    	color: #ff0000 !important;
    }
</style>



<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				 <h2> Actual Lecture Plan</h2>
			</div>

			<div class="module-body table">

				  <div class="alert">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Note!</strong> For Edit Double Click!
                  </div>

				<form  id="mylessonedit" name="mylessonedit" method="post" action="<?php echo site_url('Lessonedit_controller/savingdata');?>" class="form-horizontal row-fluid">

					<table class="table table-striped table-bordered table-condensed">

						<thead>
                     		<tr style="text-align: left">                   		
                                <th>Session</th>
                                <th>Course</th>
                                <th>Semester</th>
                           		<th>Section</th>
                                <th>Subject</th>	
                       		</tr>
             			</thead> 

              			<tbody>
							<?php foreach($add_class_in  as $item){?>
		            	      	<tr>
				         			<td><?php echo $item->session_id?></td>
			       	    			<td><?php echo $item->course_id;?></td>
				          			<td><?php echo $item->semester_id ;?></td>
				         			<td><?php echo $item->section_id ;?></td>
				                    <td><?php echo $item->subject_name?></td>		
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

								 <input type="hidden" value="<?php echo $item->subject_id; ?>" name="subject_id" id="subject_id"> 
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
									<input type="time" id="txtstart" name="txtstart" class="span8" required="required">
								</td>

								<td>End Time:<br>
									<input type="time" id="txtend" name="txtend" class="span8" required="required">				
								</td>
						

							 	<td>Date:<br>
									<input type="text" value="<?php echo date("Y-m-d");?>" id="date" name="date" class="span8" required="required">
    							</td>
    						</tr>


						 		<td colspan="2"> Lecture Type:<br>
									<select tabindex="1" data-placeholder="Select here.." class="span8" name="lecturetype[]"id="lecturetype[]" required="required">
										<option value="">Select here..</option>
										<option value="Lecture Schedule">Lecture Schedule</option>
										<option value="Arrangement">Arrangement</option>
										<option value="Extra Lecture Taken">Extra Lecture Taken</option>
												
									</select><br>
									<p style="color:red">*It will not be Edit</p>
								</td>
							

				 				<td colspan="2">
				 					<table class="table table-striped table-bordered table-condensed">
				 						<tbody>
				 				
				 					
					 						<tr>
	    										<td >Unit:<br>
													
													<input type="number" id="Unit" name="Unit" class="span8"  min="1" max="12" required="required">
												</td>
											</tr>
											

											<tr>
										
												<td > Topic:<br>
				    								<textarea class="span12" rows="5"  cols="30" id="Topic" name="Topic" required="required"></textarea>
												</td>
											</tr>

										<tr>
										
										<!--	<td>No Of Lecture:<br>
												<input type="number" id="Lecture" name="Lecture"class="span8">
    										</td>		-->
    									</tr>
    								</tbody>
    							</table>
    						</td>


    									<tr>					
											<td colspan="3">			
									
												<button style="float:right" type="submit" name="save" id="save" class="btn btn-primary">Submit</button>
											</td>
										</tr>
									</tbody>
								</table>
							<br>
				

			<table class="table table-striped table-bordered table-condensed">
				<thead>
                    <tr style="text-align: left">
                        <th>SrNo.</th>	
                        <th>Date</th>
                       	<th>Start Time</th>
                        <th>End Time</th>
                        <th>Unit</th>
                        <th>Topic</th>	                               	
                      <!--  <th>No Of Lecture </th>		-->
                        <th>Lecture Type</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                      	       
                        <?php 
                          $length=1;
                          	foreach ($t_diary as $item) {?>

                            <tr>
                                <!--     <td><?php echo $item->lesson_id ;?></td>		-->
                                <td><?php  echo $length;  ?></td>
	                            <td class="lessondata lesstd"  id="<?php echo $item->lesson_id.'-date';?>"> <?php echo $item->date;?></td>

	                            <td class="lessondata lesstd"  id="<?php echo $item->lesson_id.'-start_time' ;?>"><?php echo $item->start_time;?></td>

	                            <td class="lessondata lesstd"  id="<?php echo $item->lesson_id.'-end_time' ;?>"><?php echo $item->end_time;?></td>

	                            <td class="lessondata lesstd"  id="<?php echo $item->lesson_id.'-unit' ;?>"><?php echo $item->unit ;?></td>	

	                            <td class="show-read-more lessondata lesstd"  id="<?php echo $item->lesson_id.'-topic' ;?>"><?php echo $item->topic;?></td>

	                        <!--    <td class="lessondata lesstd"  id="<?php echo $item->lesson_id.'-lecture_id' ;?>"><?php echo $item->lecture_id;?></td>		-->
	                        	<?php if(trim($item->lecture_type) == 'Arrangement' || trim($item->lecture_type) == 'Extra Lecture Taken'){?>
	                            <td class="redcolor" >
	                            	
	                           	<?php echo $item->lecture_type;?>
	                          	<?php }
	                          	 else
	                          	  { ?>
	                          		 <td>
	                          		 	<?php echo $item->lecture_type;?>
	                          	<?php } ?>
								                  
	                            	</td>


	                            <td><a href="<?php echo site_url('Lessonedit_controller/del1/' . $item->lesson_id)?>" class="btn btn-danger icon-trash" onclick="return confirm('Are you sure')"></a></td>
	                                        
	                        </tr>
                        <?php 
                     	$length++;} ?>


              
                                
                </table>
                          <!--tr><td>LECTURE SCHEDULE=	 <b id="lect_schedule">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	</b></td>
                        <td>ARRANGEMENT=<b id="Arrangement">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></td>
                        <td>EXTRA LECTURE TAKEN= <b id="extra_lect">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></td>
                        <td>ACTUAL LECTURE TAKEN= <b id="actual_lect"></b></td>
                    </tr-->

                	</form>
			</div>
   			 <br>
        </div>
    </div>
</div>





	