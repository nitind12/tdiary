



 <div class="span9">
	<div class="content">

		<div class="module">
			<div class="module-head">
				 <h2>View Lesson Plan</h2>
			</div>
				<div class="module-body">
					<form  method="post" action="<?php echo site_url('Lessonview_controller/savingdata');?>"
									 class="form-horizontal row-fluid">       
                                        <!-- view database in page -->
                                        	<table class="table table-striped table-bordered table-condensed">
                                        		<tr style="text-align: left">
                                                    <th>Session</th>
                                        			<th>Course</th>
                                        			<th>Sem</th>
                                        			<th>Sec</th>
                                                    <th>Subject</th>
                                                    <th>lecture_id</th>
                                        			<th>Time Duration</th>
                                        			<th>Start Time</th>
                                        			<th>End Time</th>
                                        			<th>Date</th>
                                        			<th>Unit</th>
                                        			<th>Topic</th>
                                        			<th>Lecture No</th>
                                        		</tr>
                                        	<?php foreach ($t_diary as $item) { ?>
                                        		<tr>
                                        			<td><?php echo $item->session_id;?></td>
                                        			<td><?php echo $item->course_id;?></td>
                                        			<td><?php echo $item->semester_id ;?></td>
                                        			<td><?php echo $item->section_id ;?></td>
                                                    <td><?php echo $item->subject_id ;?></td>
                                                    <td><?php echo $item->lesson_id ;?></td>
                                                    <td><?php echo $item->time_duration ;?></td>
                                        			<td><?php echo $item->start_time;?></td>
                                        			<td><?php echo $item->end_time;?></td>
                                        			<td><?php echo $item->date;?></td>
                                        			<td><?php echo $item->topic;?></td>
                                        			<td><?php echo $item->unit ;?></td>
                                        			<td><?php echo $item->no_of_lecture ;?></td>
                                        					</tr>
                                        	<?php } ?>     
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
