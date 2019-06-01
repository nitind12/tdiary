<div class="content">
  
  <div class="module">
              <div class="module-head">
                <h3>ONLINE_ATTENDANCE </h3>
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
                       <td> <b><?php echo $item->subject_name;?></b></td>
                     </tr>        
              <?php 
                }
               ?>
              </tbody>
        
                
        </table>

          </div>
         
               <form class="form-horizontal row-fluid" name="frmclass" id="frmclass" method="post" action="<?php echo site_url('Main/submitattendance_controller');?>">

                <table cellpadding="0" cellspacing="0" border="1" class="datatable-1 table table-bordered table-striped  display" width="100%">
                   <div style="float:right">
                    <input type="hidden" value="<?php echo date("Y-m-d")?>" name="date" id="date"><?php 
                    echo date("D-d-M-Y")?>
                    <input type="hidden" value="<?php echo date('h:i:s')?>" name="time" id="time">

                     </div> 
                     <?php foreach($add_class_in as $item){?>

                    <input type="hidden" value="<?php echo $item->subject_id ?>" name="subject" id="subject">
                  <?php }?> 
                  </h3>
                       
                        </div>
               
                  <thead>
                    <tr>
                     <th align="center">Roll-no</th>
                      <th align="center">Student Name</th>
                      <th>Attendance status<br>
                        <div style="float: left; padding: 0px 5px">
                  <input type="radio" name="checkUncheckAll"  id="optionsRadios5">PRESENT All
                </div>
                <div style="float: left; padding: 0px 5px"><input type="radio" name="checkUncheckAll"  id="optionsRadios4"> ABSENT ALL</div>
                   
                    </th>
                     </tr>
                  </thead>
                  <tbody>
                    
    <?php foreach ($add_attend as $item) { ?>


                            
            
      <tr >
        <input type="hidden" value="<?php echo $item->add_class_id;?>" name="addclass_id[]" id="sid_<?php echo $item->add_class_id;?>">
                  
        <td><?php echo $item->student_id;?>
                      <input type="hidden" value="<?php echo $item->student_id;?>" name="Student_Roll[]" id="sid_<?php echo $item->student_id;?>">
                    </td>

                   
        <td align="center">

          <?php echo $item->first_name; ?></td>
        <td>
                      <div style="float: left; padding: 0px 5px">
                          <input type="radio" name="optionsRadios[].<?php echo $item->student_id;?>" id="optionsRadios1" value="1" class="PRESENT_class">
                          PRESENT
                      </div>
                      <div style="float: left; padding: 0px 22px">
                          <input type="radio" name="optionsRadios[].<?php echo $item->student_id;?>" id="optionsRadios2" value="0" class="ABSENT_class">
                           ABSENT
                      </div>

          </td>
       
        </tr>  
    <?php } ?>
  </tbody>
  <br/>
                
<table class="table">
<tfoot>
                    <tr>
                      <th> <div class="control-group">
                      <div class="controls">
                        <button type="submit" class="btntake" id="btntake">Submit Form</button>
                      </div>
                    </th>
                      </tr>
                  </tfoot>
  </table>
</form>
</div>



</div>
</div>
</div>      