



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
                        			<th>Course</th>
                        			<th>Sem</th>
                        			<th>Sec</th>
                                    <th>
                                         <table class="table table-striped table-bordered table-condensed">
                                            <th colspan="3"><center>Date</center></th>
                                            <tr>
                                			     <th>Date of Commence<br>
                                                 ment</th>
                                			     <th>Actual Date Of Completion</th>
                                			     <th>Expected Date Of Completion</th>        
                                            </tr>
                                         </table>
                                    </th>
                        			<th>Faculty</th>
                        			<th>Subject</th>
                                    <th>Upload file</th>
                        			<th>Unit</th>
                        			<th>Topic</th>
                        			<th>Lecture No</th>
                        			<th>Total</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                        		</tr>

                        	   <?php foreach ($tdiary_database as $item) { ?>
                        		<tr>
                        			<td><?php echo $item->Course_Name;?></td>
                        			<td><?php echo $item->Semester;?></td>
                        			<td><?php echo $item->Section ;?></td>
                                    <td>
                                        <table class="table table-striped table-bordered table-condensed">
                                            <tr>
                            		          	 <td><?php echo $item->Date_Of_Commencement ;?></td>
                            			         <td><?php echo $item->Actual_Date_Of_Completion ;?></td>
                            			         <td><?php echo $item->Expected_Date_Of_Completion;?></td>
                                            </tr>
                                        </table>
                                    </td>
                        			<td><?php echo $item->Faculty_Name ;?></td>
                        			<td><?php echo $item->Subject_Name;?></td>
                                    <td><?php echo $item->Syllabus_Upload;?></td>
                        			<td><?php echo $item->Unit;?></td>
                        			<td><?php echo $item->Topic ;?></td>
                        			<td><?php echo $item->No_Of_Lecture ;?></td>
                        			<td><?php echo $item->Total_No_Of_Lecture ;?></td>
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

 

        
