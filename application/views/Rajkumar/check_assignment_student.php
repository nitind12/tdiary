<div class="span9">
   <div class="module">
      <div class="module-head">
            <h1>Checks_Assignment</h1>
       </div> 
       <div>  
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
         
             <form class="form-horizontal row-fluid" name="frmclass" id="frmclass" method="post" action="<?php echo site_url('Check_Assignment_Controller/check_assignment_marks_enter');?>">
            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                  <div style="float:right">
                    <input type="hidden" value="<?php echo date("Y-m-d")?>" name="date1" id="date1"> </div>
                    
                  <thead>
                    <tr>
                     <th align="center">Roll-no</th>
                      <th align="center">Student Name</th>
                      <th align="center">Assignment_NO</th>
                      <th align="center">Status</th>
                      <th align="center">Grade</th>
                        </tr>
                  </thead>
                  <tbody>
                    
                 <?php foreach ($add_attend as $item) { ?>                     
                <tr>
                      <input type="hidden" value="<?php echo $item->add_class_id;?>" name="addclass_id[]" id="sid_<?php echo $item->add_class_id;?>">
                  
                      <td><?php echo $item->student_id;?>
                          <input type="hidden" value="<?php echo $item->student_id;?>" name="Student_Roll[]" id ="sid_<?php echo $item->student_id;?>">
                      </td>
                      <td align="center"><?php echo $item->first_name; ?></td>
                      <td>
                      <!--<input type="text" id="txtSection" name="txtSection" class="span8">-->
                      <select tabindex="1"data-placeholder="Select here.." class="span8" name="Assignment_no" id="Assignment_no"  >
                        <option value ="">Select here...</option>
                        <?php foreach($marks_type as $item){?>
                          <option value="<?php echo $item->Assignment_no;?>">
                            <?php echo $item->Assignment_no?></option>

                        <?php
                      }?>
                       
                    </select>
                    </td>
                      <td>
                     	 <label class="radio inline">
                          <input type="radio" name="optionsRadios[]" id="optionsRadios1" value="1">
                             CHECKED
                        </label> 
                        <label class="radio inline">
                          <input type="radio" name="optionsRadios[]" id="optionsRadios2" value="0">
                           UNCHECKED
                        </label> 
                       </td>
                       <td>
                        <select tabindex="1" data-placeholder="" class="span9" name=grade[]>
                          <option value="">Select Grade</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                          <option value="D">D</option>
                        </select>
                    

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
       </form></div>

</div>

</div>
</div>
</div>
