



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
                                        			<th>Course</th>
                                        			<th>Sem</th>
                                        			<th>Sec</th>
                                        			<th>Time Duration</th>
                                        			<th>Start Time</th>
                                        			<th>End Time</th>
                                        			<th>Date</th>
                                        			<th>Unit</th>
                                        			<th>Topic</th>
                                        			<th>Lecture No</th>
                                        		</tr>
                                        	<?php foreach ($tdiary_database as $item) { ?>
                                        		<tr>
                                        			<td><?php echo $item->Course_Name;?></td>
                                        			<td><?php echo $item->Semester;?></td>
                                        			<td><?php echo $item->Section ;?></td>
                                        			<td><?php echo $item->Time_Duration ;?></td>
                                        			<td><?php echo $item->Start_Time;?></td>
                                        			<td><?php echo $item->End_Time;?></td>
                                        			<td><?php echo $item->Date;?></td>
                                        			<td><?php echo $item->Unit;?></td>
                                        			<td><?php echo $item->Topic ;?></td>
                                        			<td><?php echo $item->No_Of_Lecture ;?></td>
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
        
