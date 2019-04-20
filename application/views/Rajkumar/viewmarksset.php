<div class="content">
  
  <div class="module">
              <div class="module-head">
                <h1><?php echo $this->session->userdata('marksname');?></h1>
                        </div>
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
                        <td><b><?php echo $item->session_id?></b> </td>
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
         
               <form class="form-horizontal row-fluid" name="frmclass" id="frmclass" method="post" action="<?php echo site_url('Test/submitmarks_controller');?>">

                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                  <!-- <div style="float:right">
                    <input type="hidden" value="<?php //echo date("Y-m-d")?>" name="date" id="date"><?php 
                    //echo date("D-d-M-Y")?> </div>--->
                   
                  </h3>
                       
                        </div>
               
                  <thead>
                    <tr>
                     <th align="center">Roll-no</th>
                      <th align="center">Student Name</th>
                      <th align="center">Total Marks</th>
                      <th align="center">Obtained Marks</th>
                      <th align="center">Delete/Edit</th>
                      
                        </tr>
                  </thead>
                  <tbody>
                  
             <?php foreach ($vim as $item) { ?>
              <tr >
              <td align="center"><?php echo $item->roll_no?></td>
              <td align="center"><?php echo $item->first_name?></td>
               <td align="center"><?php echo $item->totalmarks;?></td>
              <td align="center"><?php echo $item->marks;?></td>
              <td><a href="<?php echo site_url('assignmentcontroller/del1/' .$item->add_marks_id)?>" class="btn btn-primary " onclick="return confirm('Are you sure')">Delete</a></td>
        <!--<td><a href="<?php ///echo site_url('test/pilih/' . $item->Student_Roll)?>" class="btn " onclick="return confirm('Are you sure')">Update</a></td>-->
      </tr>

    <?php } ?>
    
                    
   
</div>

  </tbody>
</table>
</div>
</div>
</div>      