 

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
                     <tr>
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
                    
                  <thead>
                    <tr>
                     <th align="center">Roll-no</th>
                      <th align="center">Student Name</th>
                      <th align="center">Total Marks</th>
                      <th align="center">Obtained Marks</th>
                        </tr>
                  </thead>
                  <tbody>
                    
                 <?php foreach ($add_attend as $item) { ?>                     
                <tr >
                      <input type="hidden" value="<?php echo $item->add_class_id;?>" name="addclass_id[]" id="sid_<?php echo $item->add_class_id;?>">

                  
                      <td><?php echo $item->student_id;?>
                          <input type="hidden" value="<?php echo $item->student_id;?>" name="Student_Roll[]" id ="sid_<?php echo $item->student_id;?>">
                      </td>
                      <td align="center"><?php echo $item->first_name; ?></td>
                      <td><?php echo "30"?><input type="hidden" value=" <?php echo "30"?>" name="totalmarks[]" id="sid_ <?php echo "30"?>">
                        </td>
                      <td>
                          <input type="text" name="Obtained_Marks[]"id="Obtained_Marks[]" placeholder="Obtained Marks" class="span8">
                      </td>
                </tr>  
                <?php } ?>
              </tbody>
          <br/>
        </table>
      <table class="table">
         <tfoot>
                <tr>
                    <th>
                     <div class="control-group">
                     <div class="controls">
                        <button type="submit" class="btntake" id="btntake">Submit Form</button>
                    </div>
                  </div>
                    </th>
                      </tr>
                  </tfoot>
        </table>
       </form>