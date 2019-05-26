<style type="text/css">
	.show-read-more1 .more-text{
		display: none;
	}
</style>
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
                         <td> <b><?php echo $item->subject_name;?></b></td>
                    </tr>        
		              <?php 
		                }
		               ?>
		            </tbody>		       
              </table>
          </div>
	<form method="post"  action="<?php echo site_url('assignmentcontroller/assignment_edit_controller_saving
	/'.$item->add_class_id.'/'.$item->session_id);?>" id="<?php echo $item->add_class_id;?>" 
		class="form-horizontal row-fluid">

				<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
            		<thead>
						<div class="module-head">
							<h2 >Edit-Assignment</h2>
						</div>
			
					</thead>
				<tbody>	
					<?php foreach ($add_class_in as $item) { ?>
					<input type="hidden" value="<?php echo $item->add_class_id;?>" name="addclass_id" id="addclass_id">
					<input type="hidden" value="<?php echo $item->subject_id;?>" name="subject_id" id="subject_id">
					
					<?php  }  ?>

						<tr>
							<td>Assignment No<br>
					
							<input type="number" max="10"min="1" name="Assignment_no" id="Assignment_no" class="span8"/>
						</td>
							<td>Given Date<br>
							 <input type="text" value="<?php echo date("Y-m-d")?>" name="Given_date" id="date"></td>
							<td>Submission Date<br>
							<input type="date" name="Submission_date" id="Submission_date" class="span9"/></td></td>
						</tr>
											
						<tr>
						  <td>Unit<br><input type="number" max="12"min="1" name="Unit" id="Unit" class="span8"/></td>
							<td colspan="3">QUESTION<br>
							<textarea class="span8 " rows="5" name="Topic" id="Topic" align="right"></textarea>
							</td>
						</tr>
				</tbody>
			</table>
			<br/>
			<br/>
		<center>
			<div class="control-group">
				<button type="submit" class="btn btn-primary" name="save">INSERT RECORD</button>
			</div>
		</center></div>
		<div class="alert">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Note!</strong>Double Click For Edit!
                  </div>


		<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
              
          		<thead>
                 	<tr>
						<th align="center">A_no</th>
						<th align="center">Given_date</th>
						<th align="center">Submission_date</th>
						<th align="center">Unit</th>
						<th align="center">Topic</th>
						<th align="center"><span class="hideblock">Delete</span></th>
				</tr>
      			</thead>
             <tbody>
				<?php foreach ($users as $item) { ?>
				<tr>
					<td align="center" class="givenassign_data  givenassign_td"  id="<?php echo $item->Assignment_id.'-Assignment_no';?>"><?php echo $item->Assignment_no;?></td>

					<td align="center"  class="givenassign_data  givenassign_td"  id="<?php echo $item->Assignment_id.'-Given_date';?>"><?php echo $item->Given_date;?></td>

					<td align="center" class="givenassign_data  givenassign_td"  id="<?php echo $item->Assignment_id.'-Submission_date';?>"><?php echo $item->Submission_date;?></td>

					<td align="center"  class="givenassign_data  givenassign_td"  id="<?php echo $item->Assignment_id.'-Unit';?>"><?php echo $item->Unit;?></td>
					
					<td align="center" class="show-read-more1  givenassign_data  givenassign_td "  id="<?php echo $item->Assignment_id.'-Topic';?>"><?php echo $item->Topic;?></td>

					<td><span class="hideblock"><a href="<?php echo site_url('assignmentcontroller/del1/' . $item->Assignment_id)?>" class="btn btn-danger icon-trash " onclick="return confirm('Are you sure')"></a></span></td>

					
				</tr>

		<?php } ?>
		
	</table>
</div>

	</div>
</div>
</div>
</div>




     