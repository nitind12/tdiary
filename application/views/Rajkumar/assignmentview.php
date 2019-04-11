<style type="text/css">
	.show-read-more .more-text{
		display: none;
	}
</style>


<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1 >Assignment</h1>
							</div>

							<div class="module-body">
					 <div class="module-body table">
                 <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%">
                  <thead>
                    <tr>
                     <th align="center">Session:</th>
                      <th align="center">Course:</th>
                      <th align="center">Semester:</th>
                      <th align="center">Section:</th>
                      <th align="center">Subject:
                      </th>
                      
                      </tr>
                  </thead>
                  
               <tbody>
                <?php foreach($add_class_in as $item){?>


                     <tr >
                        <td><b><?php echo $item->session_id?></b>
                      </td>
                         <td><b><?php echo $item->course_id?></b> </td>
                         
                        <td> <b><?php echo $item->semester_id?></b> </td>
                        

                         <td> <b><?php  echo $item->section_id?></b> </td>
                       <td> <b><?php echo $item->subject_id;?></b></td>
                     </tr>        
              <?php 
                }
               ?>
              </tbody>
        
                
        </table>

          </div>

	<form method="post" id="myform2" action="<?php echo site_url('assignmentcontroller/savingdata3/'.$item->add_class_id.'/'.$item->session_id.'/'.$item->course_id);?>" id="<?php echo $item->add_class_id;?>" 
		class="form-horizontal row-fluid">

	<table class="table table-striped table-bordered table-condensed"  border="1">
		
				<thead>
				<tbody>
								
						<div class="module-head">
								<h2 >Edit-Assignment</h2>
							</div>
			
									  </thead>
								</tbody>
								   
				<?php foreach ($add_class_in as $item) { ?>
						<input type="hidden" value="<?php echo $item->add_class_id;?>" name="addclass_id[]" id="sid_<?php echo $item->add_class_id;?>">
		
							<?php
							 } 
							 ?>


									<tr>
									  <td>Assignment_id<br>
									  	<input type="number" name="Assignment_id" id="Assignment_id" class="span8"/></td>
									  <td>Given_date<br>
									  	<input type="date" name="Given_date" id="Given_date"class="span9"/></td>
									  <td>Submission_date<br>
									  	<input type="date" name="Submission_date" id="Submission_date" class="span9"/></td>
									  <td>Last_submission_date<br>
									  	<input type="date" name="Last_submission_date" id="Last_submission_date" class="span9"/></td>
									</tr>
									
								  </thead>
								   <tbody>
									
									<tr>
									   <td>Unit<br>
									   	<input type="number" name="Unit" id="Unit" class="span8"/></td>
									   <td colspan="3">Topic<br>
									   	
									   	<textarea class="span8" rows="5" name="Topic" id="Topic" align="right"></textarea>
									   </td>
									</tr>
								
								  </tbody>
								</table><br><br>
								<center>
								<div class="control-group">
											<!--<div class="controls">-->
												
												<button type="submit" class="btn btn-primary" name="save">INSERT RECORD</button>
											<!--</div>-->
										</div></center><br><br>
									</form>
									<center><a href="<?php echo site_url('assignmentcontroller/del/' )?>" class="btn btn-primary " onclick="return confirm('Are you sure to delete whole data from the table??')">Delete Whole Data From the Table!</a></center>
									<br>
</div></div></div></div></div>




     