<!-- for Read More -->
<style type="text/css">
    .show-read-more .more-text{
       display: none;
    }
</style>

<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				  <h2> Proposed Lecture Plan</h2>
			</div>
			<div class="module-body table">

									<div class="alert">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Note!</strong> For Edit Double Click!
									</div>

           		 <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%">
                	<thead>
                  		<tr>
	                    	<th align="center">Session</th>
	                        <th align="center">Course</th>
	                        <th align="center">Semester</th>
	                         <th align="center">Section</th>
	                       <th align="center">Subject</th>
	                      <!--<th align="center">Date Of Commencement</th> 
	                      <th align="center">Date Of Completion</th> -->
	               		</tr>
               		</thead>

             		<tbody>
                		<?php foreach($add_class_in as $item){?>
                    		<tr >
		                        <td><b><?php echo $item->session_id?></b> </td>
		                        <td><b><?php echo $item->course_id?></b> </td>
		                        <td><b><?php echo $item->semester_id?></b> </td>
		                       <td><b><?php echo $item->section_id;?></b></td>
		                      
		                       <td><b><?php echo $item->subject_name;?></b></td>
		                       </tr>        
              			<?php } ?>
               		</tbody>
           		 </table>
           	</div>

   		<form  method="post" name="myEdit"  id="myEdit" class="form-horizontal row-fluid" action="<?php echo site_url('Edit_controller/lecture_saving_data/'.$item->add_class_id.'/'.$item->session_id.'/'.$item->course_id.'/'.$item->subject_id);?>" >

				<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped" width="100%">


			            <?php foreach ($add_class_in as $item) { ?>
							<input type="hidden"   value="<?php echo $item->add_class_id;?>"   name="addclass_id[]"                        
							 id="sid_<?php echo $item->add_class_id;?>">
							  <input type="hidden" value="<?php echo $item->subject_id; ?>" name="subject_id" id="subject_id"> 
                
						<?php }?>	
						
							<tr>
								<th colspan="3">
									<div class="control-group">
										<label class="control-label span3" >
											<h3>Lecture Structure</h3>
										</label>	
									</div>
								</th>
							</tr>
            					
							<tr>
								
								<th>
				                	<center>  <h5>Unit No</h5></center>
				                </th>				
								<th>
								<center><h5>Topic</h5></center>
								</th>
							
								<th>
									<center><h5>No Of Lecture Aspect</h5></center>
								</th>
								
							</tr>


								<tr>		
									<td>
										<input type="number" id="txtunit" name="txtunit" class="span12" min="1" max="12" required="required">
									</td>

									<td>
										<textarea id="topic" name="topic" class="span12" rows="6"  cols="30" required="required">
										</textarea>
									</td>
							
									<td>
										<input type="number" id="Lecture_no" name="Lecture_no" class="span12" min="1" max="12" required="required">
									</td>
									
								</tr>
						


								<tr>
									<td colspan="3">
										<div class="control-group">
											<div class="controls">			
												<button style="float:right" type="submit" name="save" class=" btn btn-primary">Submit</button>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
				</table>
</form>


				<div claas="module-body">
					<div class="control-group">
						<label class="control-label" >
							<h3>Lecture Details</h3>
						</label>
					</div>
				</div> 



			<!---table class="table table-striped table-bordered table-condensed">

				<thead>
			        <tr style="text-align: left">
			            <th>Lecture No</th>
			            <th>Unit No</th>
			       		<th>Topic</th>
			             		                                      			
			           	<th>Delete</th>
			       	</tr>
	            </thead>


	            <tbody>
		            <?php foreach ($t_diary as $item) { ?>		
				        <tr>                 	
					       	<td class="lectdata mytd"   id="<?php //echo $item->lecture_id.'-lecture_id';?>"><?php //echo $item->lecture_id ;?></td>

					        <td class="lectdata mytd"   id="<?php// echo $item->lecture_id.'-unit';?>"><?php //echo $item->unit ;?></td>

					        <td id="<?php //echo $item->lecture_id.'-topic';?>"class="show-read-more lectdata mytd"><?php //echo $item->topic;?></td>

					        <td><a href="<?php //echo site_url('Edit_controller/del1/' . $item->lecture_id)?>" class="btn btn-primary" onclick="return confirm('Are you sure')">Delete</a></td>
					    </tr>
				 	<?php } ?> 
	            </tbody> 
        	</table>
		</form>
	</div>						
</div>
</div>
			   </div--> 
		<table class="table table-striped table-bordered table-condensed">
                 <thead>
                  <tr style="text-align: left">
                    <th>Sr.No</th>
              		
                    <th>Unit No</th>
              		<th>Topic</th>
              		<th>No Of Lecture Aspect</th>
              		                                      			
                    <th>Delete</th>
                   </tr>
                  </thead>
                   <tbody>
                   	<tr>
                       
                   	<?php $tot = 0;?>
                   <?php
                	  $length=1;
                        foreach ($t_diary as $item) {  ?>
                        	<tr>
                       	    <td><?php  echo $length;  ?></td>
	               
	                       <td class="lectdata mytd"   id="<?php echo $item->lecture_id.'-unit';?>"><?php echo $item->unit ;?></td>	
	                        <td id="<?php echo $item->lecture_id.'-topic';?>"class="show-read-more lectdata mytd"><?php echo $item->topic;?></td>
	                        <td class="lectdata mytd"   id="<?php echo $item->lecture_id.'-no_of_lecture';?>"><?php echo 
	                       $item->no_of_lecture ; $tot = $tot + $item->no_of_lecture; ?></td>

	                        <td><a href="<?php echo site_url('Edit_controller/del1/' . $item->lecture_id)?>" class="btn btn-danger icon-trash " onclick="return confirm('Are you sure')"></a></td>
	                    </tr>

                   		<?php 
                   	$length++;
                   	} 

                   	?> <?php ///foreach ($total as $item) {?>

                   <tr><td colspan="5">TOTAL LECTURE: <b id="totalLectures"><?php echo $tot;?>	</b></td></tr>
                  </tbody> 
               </table>
				</form>
				
			</div>						
		</div>
	</div>
</div><!--/.content-->
</div><!--/.span9-->



				