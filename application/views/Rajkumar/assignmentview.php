<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h1 >Given_Assignment</h1>
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
                        <td><b><?php echo $item->session_id?></b></td>
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
	<form method="post"  action="<?php echo site_url('assignmentcontroller/assignment_edit_controller_saving
	/'.$item->add_class_id.'/'.$item->session_id);?>" name="formhere" id="<?php echo $item->add_class_id;?>" 
		class="form-horizontal row-fluid">

				<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
            		<thead>
						<div class="module-head">
							<h2 >Edit-Assignment</h2>
						</div>
			
					</thead>
				<tbody>	
					<?php foreach ($add_class_in as $item) { ?>
					<input type="hidden" value="<?php echo $item->add_class_id;?>" name="addclass_id[]" id="sid_<?php echo $item->add_class_id;?>">
					<?php  }  ?>
						<tr>
							<td>Assignment_id<br>
							<input type="number" name="Assignment_id" id="Assignment_id" class="span8"/></td>
							<td>Given_date<br>
							 <input type="text" value="<?php echo date("Y-m-d")?>" name="Given_date" id="date"></td>
							<td>Submission_date<br>
							<input type="date" name="Submission_date" id="Submission_date" class="span9"/></td></td>
						</tr>
											
						<tr>
						  <td>Unit<br><input type="number" name="Unit" id="Unit" class="span8"/></td>
							<td colspan="3">QUESTION<br>
							<textarea class="span8" rows="5" name="Topic" id="Topic" align="right"></textarea>
							</td>
						</tr>
				</tbody>
			</table>
		</form>
			<br/>
			<br/>
		<center>
			<div class="control-group">
				<button type="submit" class="btn btn-primary" name="save" id="given">INSERT RECORD</button>
			</div>
		</center></div>
	</div>
</div>
</div>
</div>




     