
 <div class="span9">
	<div class="content">

		<div class="module">
			<div class="module-head">
				 <h2>View Lecture Plan</h2>
			</div>
				<div class="module-body">
					<form  method="post" action="<?php echo site_url('Lview_controller/savingdata');?>"
									 class="form-horizontal row-fluid">       
<!-- view database in page -->
                        	<table class="table table-striped table-bordered table-condensed">


                        		<tr style="text-align: left">
                                    <th>Session</th>
                        			<th>Course</th>
                        			<th>Sem</th>
                        			
                                    <th>
                                         <table class="table table-striped table-bordered table-condensed">
                                            <th colspan="3"><center>Date</center></th>
                                            <tr>
                                			     <th>Date of Commence<br>ment</th>
                                			     <th>Date Of Completion</th>
                                			           
                                            </tr>
                                         </table>
                                    </th>
                        			<th>Faculty</th>
                        			<th>Subject</th>
                                    
                                    <th>Upload file</th>
                                    <th>Lecture No</th>
                        			<th>Unit</th>
                        			<th>Topic</th>
                                    <th>No Of Lecture</th>
                        			<th>Total</th>
                                    <th>Delete</th>
                                  
                        		</tr>

                        	   <?php foreach ($t_diary as $item) { ?>
                        		<tr>
                        			<td><?php echo $item->session_id;?></td>
                        			<td><?php echo $item->course_id;?></td>
                        			<td><?php echo $item->semester_id ;?></td>
                                    <td>
                                        <table class="table table-striped table-bordered table-condensed">
                                            <tr>
                            		          	 <td><?php echo $item->date_of_commencement ;?></td>
                            			         <td><?php echo $item->date_of_completion ;?></td>
                            			         
                                            </tr>
                                        </table>
                                    </td>
                        			<td><?php echo $item->faculty_id ;?></td>
                        			<td><?php echo $item->subject_id;?></td>
                                    
                                    <td><?php echo $item->syllabus_pdf;?></td>  
                                    <td><?php echo $item->lectureid ;?></td>     
                        			<td><?php echo $item->unit;?></td>
                        			<td><?php echo $item->topic ;?></td>
                        			
                                    <td><?php echo $item->no_of_lecture;?></td>
                        			<td><?php echo $item->total_lecture ;?></td>
                                    <td>
                                    <input type="button" id="del" name="del" class="btn btn-danger" value="Delete" > 
                                    </td>
                              
                        
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
</body>

 

        
