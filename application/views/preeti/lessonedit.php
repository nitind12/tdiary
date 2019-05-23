<style type="text/css">
    .show-read-more .more-text{
        display: none;							rfgfgrh
    }
</style>

<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				 <h2>Actual Lesson Plan</h2>
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
                 

			<form  method="post" name="myEdit"  id="myEdit"   action="<?php echo site_url('Lessonedit_controller/lesson_edit_saving_controller');?>"  class="form-horizontal row-fluid">
				<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%">
                	<?php foreach ($add_class_in as $item) { ?>
						<input type="hidden" value="<?php echo $item->add_class_id;?>"
						name="addclass_id[]" id="sid_<?php echo $item->add_class_id;?>">
					<?php }
					?>		
			<div class="module-body">
				<div class="control-group">
					<label class="control-label" >
						<h3>Lesson_Structure</h3>
					</label>	
				</div>
				<div style="float:right">
                    <input type="text" name="date1" id="date1"> </div>
                    
                  <thead>
                 </thead>
				<tbody>
				<tr>
					<td>Start Time:<br>
						<input type="time" id="txtstart" name="txtstart" class="span12">
					</td>
					<td>End Time:<br>
						<input type="time" id="txtend" name="txtend" class="span12">				
					</td>
					<td >Unit:<br>
						<input type="number" id="Unit" name="Unit" class="span12">
					</td>

				</tr>	
				 <tr>
				 	<td>Lecture_Plan_No:<br>
						<input type="number" id="Lecture" name="Lecture"class="span12">
    				</td>
					
					<td>Lesson No:<br>
					<input type="text" id="lesson_no" name="lesson_no" class="span12">					 
					</td>
					<td > Topic:<br>
    				<textarea class="span12" rows="8"  cols="30" id="Topic" name="Topic"></textarea>
					</td>
				</tr>
				<tr>
						<td colspan="3">			
					
							<button style="float:right" type="submit" name="save" 
							class=" span3 btn">Submit</button>
						</td>
					</tr>
				</div>
    	</tbody>
    </table>
 </form>
</div>		
</div>
</div>

<table class="table table-striped table-bordered table-condensed">
                           <tr style="text-align: left">
                                                 <th>Lesson_No</th>
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
                                       <td class="show-read-more"><?php echo $item->topic;?></td>
                                        <td><?php echo $item->lecture_id;?></td>
                                        <td>Delete</td>
                               			</tr>
                                <?php } ?>
</table>
	