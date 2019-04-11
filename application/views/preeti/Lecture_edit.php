<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				  <h2>Lecture Plan</h2>
			</div>
		<div class="module-body table">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%">
                <thead>
                    <tr>
	                     <th align="center">Session:</th>
	                      <th align="center">Course:</th>
	                      <th align="center">Semester:</th>
	                      <th align="center">Subject:
	                      </th>                     
	                </tr>
                </thead>
             	<tbody>
                	<?php foreach($add_class_in as $item){?>
                    <tr >
                        <td><b><?php echo $item->session_id?></b> </td>
                        <td><b><?php echo $item->course_id?></b> </td>
                        <td><b><?php echo $item->semester_id?></b> </td>
                       <td><b><?php echo $item->subject_id;?></b></td>
                    </tr>        
              		<?php 
                	} ?>
               	</tbody>
            </table>
        </div>
   		<form  method="post" name="myEdit"  id="myEdit"   action="<?php echo site_url('Edit_controller/lecture_saving_data');?>"  class="form-horizontal row-fluid">
				<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%">
                	<?php foreach ($add_class_in as $item) { ?>
						<input type="hidden" value="<?php echo $item->add_class_id;?>"
						name="addclass_id[]" id="sid_<?php echo $item->add_class_id;?>">
					<?php }?>		
				<div class="module-body">
					<tr>
					<th colspan="3">
						<div class="control-group">
							<label class="control-label" >
								<h3>Lecture_Structure</h3>
							</label>	
						</div>
					</th>
					</tr>
					<tr>
						<th>
							<center><h5> Lecture No</h5></center>
						</th>
						<th>
		                	<center>  <h5>Unit</h5></center>
		                </th>				
						<th>
						<center><h5>Topic</h5></center>
						</th>
					</tr>
					<tr>
						<td>
							<input type="number" id="txtunit" name="txtunit" class="span12">
						</td>
						<td>
						<textarea id="topic" name="topic" class="span12" rows="6"  cols="50">
						</textarea>
						</td>	
						<td>
						<input type="text" id="No_Of_Lecture" name="No_Of_Lecture" class="span12">
						</td>
					</tr>
					<tr>
						<td colspan="3">			
					
							<button style="float:right" type="submit" name="save" 
							class=" span3 btn">Submit</button>
						</td>
					</tr>
				</tbody>
		</table>
			<div claas="module-body">
				<div class="control-group">
					<label class="control-label" >
						<h3>Lecture_Details</h3>
					</label>	
				</div>
			   </div> 
		<table class="table table-striped table-bordered table-condensed">
                 <thead>
                  <tr style="text-align: left">
                    <th>Lecture No</th>
                    <th>Unit</th>
              		<th>Topic</th>	                                        			
                    <th>Delete</th>
                   </tr>
                  </thead>
                   <tbody>
                   <?php foreach ($t_diary as $item) { ?>		
                       <tr>                 	
	                       <td class="lectdata" id="<?php echo $item->lecture_id.'-lecture_id';?>"><?php echo 
	                       $item->lecture_id ;?></td>
	                       <td class="lectdata" id="<?php echo $item->lecture_id.'-unit';?>"><?php echo $item->unit ;?></td>	
	                        <td id="<?php echo $item->lecture_id.'-topic';?>"class="show-read-more lectdata"><?php echo $item->topic;?></td>
	                        <td><a href="<?php echo site_url('Edit_controller/del1/' . $item->lecture_id)?>" class="btn " onclick="return confirm('Are you sure')">Delete</a></td>
	                    </tr>
                   <?php } ?> 
                  </tbody> 
               </table>
				</form>
			</div>						
		</div>
	</div>
</div><!--/.content-->
</div><!--/.span9-->

