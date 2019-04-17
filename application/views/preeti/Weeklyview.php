<style type="text/css">
    .show-read-more .more-text{
       display: none;
    }
</style>
<div class="span9">
  <div class="content">
    <div class="module">
      <div class="module-head">
          <h2>Weekly Plan</h2>
      </div>
    <div class="module-body table">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%">
                <thead>
                    <tr>
                       <th align="center">Session:</th>
                        <th align="center">Course:</th>
                        <th align="center">Semester:</th>
                         <th align="center">Section: </th>  
                        <th align="center">Subject: </th> 
                                           
                  </tr>
                </thead>
              <tbody>
                  <?php foreach($add_class_in as $item){?>
                    <tr >
                        <td><b><?php echo $item->session_id?></b> </td>
                        <td><b><?php echo $item->course_id?></b> </td>
                        <td><b><?php echo $item->semester_id?></b> </td>
                        <td><b><?php echo $item->section_id;?></b></td>
                       <td><b><?php echo $item->subject_id;?></b></td>
                       
                    </tr>        
                  <?php 
                  } ?>
                </tbody>
            </table>
        <br>
            
                  <form class="form-horizontal row-fluid" name="frmclass" id="frmclass" method="post" action="<?php echo site_url('Test/submitmarks_controller');?>">

                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                  <!-- <div style="float:right">
                    <input type="hidden" value="<?php //echo date("Y-m-d")?>" name="date" id="date"><?php 
                    //echo date("D-d-M-Y")?> </div>--->
                   
                  </h3>
                       
                        </div>
               
                  <thead>
                      <tr>
                          <!-- <th align="center">No_of_Lecture</th>  -->
                          <th align="center">Week No</th>
                          <th align="center">Start Date</th>
                          <th align="center">End Date</th>
                          <th align="center">Lect Schedule</th>
                          <th align="center">Lost Due To Holiday </th>
                          <th align="center">Lost Due To CL </th>
                          <th align="cneter">Extra Lect Taken</th>
                          <th align="center">Actual Lect Taken</th>
                          <th align="center">Desc If Any</th>
                          
                         
                          <th align="center">Delete</th>
                      
                       </tr>
                  </thead>
                  <tbody>
                  
             <?php foreach ($t_diary as $item) { ?>
                <tr>
                      <td><?php echo $item->week_id ?></td>
                      <td><?php echo $item->start_date ?></td>
                      <td><?php echo $item->end_date ?></td>
                      <td><?php echo $item->no_of_lecture_schedule ?></td>
                      <td><?php echo $item->no_of_lost_due_to_holiday ?></td>
                      <td><?php echo $item->no_of_lost_due_to_cl ?></td>
                      <td><?php echo $item->no_extra_taken ?></td>
                      <td><?php echo $item->no_of_lecture_actual_taken ?></td>
                      <td><?php echo $item->description_of_topic ?></td>

              
                    <!--  <td align="center"><?php echo $item->no_of_lecture ?></td>    -->
                      
                         <td><a href="<?php echo site_url('Weeklyedit_controller /del1/' . $item->week_id)?>" class="btn btn-primary" onclick="return confirm('Are you sure')">Delete</a></td>    
                     <!--<td><a href="<?php ///echo site_url('test/pilih/' . $item->Student_Roll)?>" class="btn " onclick="return confirm('Are you sure')">Update</a></td>-->
                </tr>

           <?php } ?>
  
</div>

  </tbody>
</table>
</div>
</div>
</div>      
                    