<style type="text/css">
  .show-read-more1 .more-text{
    display: none;
  }
</style>
<style media="print">
  .hideblock{
    display:none;
  }
</style>
<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
        <span class="hideblock"><a href="#"onclick="window.print()"><span class="btn btn-primary icon-print" style="float:right"> print</span></a></span>
        <h1 >View-Assignment</h1>

				</div>

				<div class="module-body">
          

					<div class="module-body table">
            <div class="alert">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Note!</strong>Double Click For Edit!
                  </div>
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
                       <td> <b><?php echo $item->subject_name;?></b></td>
                     </tr>        
              <?php 
                }
               ?>
              </tbody>
        
                
        </table>

          </div>
          	<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display " width="100%">
              
          		<thead>
                 	<tr>
						<th align="center">A_no</th>
						<th align="center">Given_date</th>
						<th align="center">Submission_date</th>
						<th align="center">Unit</th>
						<th align="center">Topic</th>
						<th  class="hideblock" align="center">Delete</th>
				</tr>
      			</thead>
             <tbody>
				<?php foreach ($vie as $item) { ?>
				<tr>
					<td align="center" class="viewgivenassign_data  viewgivenassign_td"  id="<?php echo $item->Assignment_id.'-Assignment_no';?>"><?php echo $item->Assignment_no;?></td>

					<td align="center"  class="viewgivenassign_data  viewgivenassign_td"  id="<?php echo $item->Assignment_id.'-Given_date';?>"><?php echo $item->Given_date;?></td>

					<td align="center"  class="viewgivenassign_data  viewgivenassign_td"  id="<?php echo $item->Assignment_id.'-Submission_date';?>"><?php echo $item->Submission_date;?></td>

					<td align="center"  class="viewgivenassign_data  viewgivenassign_td"  id="<?php echo $item->Assignment_id.'-Unit';?>"><?php echo $item->Unit;?></td>
					
					<td align="center" class="show-read-more1  viewgivenassign_data  viewgivenassign_td "  id="<?php echo $item->Assignment_id.'-Topic';?>" ><?php echo $item->Topic;?></td>
          
					<td><span class="hideblock"><a href="<?php echo site_url('givenassignmentcontroller/del1/' . $item->Assignment_id)?>" class="btn btn-danger icon-trash " onclick="return confirm('Are you sure')"></a></span></td>
					<!--<td><a href="<?php echo site_url('test/pilih/' . $item->Student_Roll)?>" class="btn " onclick="return confirm('Are you sure')">Update</a></td>-->
				</tr>

		<?php } ?>
		
	</table>
</div>

