<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
					<h1 >View-Assignment</h1>
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
          	<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
          		<thead>
                 	<tr>
						<th align="center">A_id</th>
						<th align="center">Given_date</th>
						<th align="center">Submission_date</th>
						<th align="center">Unit</th>
						<th align="center">Topic</th>
						<th align="center">Delete</th>
				</tr>
      			</thead>
             <tbody>
				<?php foreach ($vie as $item) { ?>
				<tr>
					<td align="center"><?php echo $item->Assignment_id;?></td>
					<td align="center"><?php echo $item->Given_date;?></td>
					<td align="center"><?php echo $item->Submission_date;?></td>
					<td align="center"><?php echo $item->Unit;?></td>
					
					<td align="center" class="show-read-more"><?php echo $item->Topic;?></td>
					<td><a href="<?php echo site_url('assignmentcontroller/del1/' . $item->Assignment_id)?>" class="btn btn-primary " onclick="return confirm('Are you sure')">Delete</a></td>
					<!--<td><a href="<?php echo site_url('test/pilih/' . $item->Student_Roll)?>" class="btn " onclick="return confirm('Are you sure')">Update</a></td>-->
				</tr>

		<?php } ?>
		
	</table>
</div>

