<style type="text/css">
  #msg_{
    color: #ff0000;
    font-size: Arial;
    font-size: 11px;
    text-align: center;
  }
</style>
<div class="span9">
<div class="content">
    <div class="module">
       <div class="module-head">
           <h1>View-Attendance-Reports </h1>
        </div>
      <div class="module-body table">
        <?php
                $options = array(
                  'name' => 'frmattendancereports',
                  'id' => 'frmattendancereports'
                ); 
                echo form_open('main/view_attendance_controller/'.$no_."/".$sess_, $options);
              ?>
              <input type="hidden" name="txtclsid" id="txtclsid" value="<?php echo $no_;?>">
              <input type="hidden" name="txtSession" id="txtSession" value="<?php echo $sess_;?>">
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
                  <td>
                    <b>
                    <select tabindex="1" data-placeholder="Select here.." class="span1" name="sessionji" id="sessionji">
                      <?php foreach ($session__ as $itemSess) { ?>
                          <?php if($itemSess->s_id == $item->session_id){?>
                            <option value="<?php echo $itemSess->s_id?>" selected="selected"><?php echo $itemSess->s_id?></option>
                          <?php } else { ?>
                            <option value="<?php echo $itemSess->s_id?>"><?php echo $itemSess->s_id?></option>
                          <?php } ?>
                      <?php } ?>
                      </select>
                    </b> 
                  </td>
                        <td><select tabindex="1" data-placeholder="Select here.." class="span1" id="crs_for_attendance"name="crs_for_attendance">
                          <?php foreach ($cls_in_session as $itemcrs) {?>
                            <?php if($item->course_id == $itemcrs->course_id){ ?>
                              <option value="<?php echo $itemcrs->course_id?>" selected="selected"><?php echo $itemcrs->course_id?></option>
                            <?php } else { ?>
                              <option value="<?php echo $itemcrs->course_id?>"><?php echo $itemcrs->course_id?></option>
                            <?php } ?>
                          <?php } ?>
                          </select>
                    </b> </td>
                        <td> <select tabindex="1" data-placeholder="Select here.." class="span1" name="semji" id="semji">
                          <option value="<?php echo $item->semester_id?>"><?php echo $item->semester_id?>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                            
                          </option>
                          </select>
                    </b> </td>
                        
                        <td><select tabindex="1" data-placeholder="Select here.." class="span1" name="sectionji" id="sectionji">
                          <option value="<?php echo $item->section_id?>"><?php echo $item->section_id?></option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                          <option value="D">D</option>
                          <option value="E">E</option>
                          <option value="F">F</option>
                          
                          </select>
                    </b> </td>
                       <td> <select tabindex="1" data-placeholder="Select here.." class="span1" name="subjectji" id="subjectji">
                         <?php foreach ($subject__ as $itemSubj) { ?>
                          <?php if($itemSubj->subject_id == $item->subject_id){?>
                            <option value="<?php echo $itemSubj->subject_id?>" selected="selected">
                              <?php echo $itemSubj->subject_id?></option>
                          <?php } else { ?>
                            <option value="<?php echo $itemSubj->subject_id?>"><?php echo $itemSubj->subject_id?></option>
                          <?php } ?>
                      <?php } ?>
                    
                         </option>

                          </select>
                    </b> </td>
                </tr>    
                <tr>
                  <td colspan="3">
                    <div class="control-group">
                      <label class="control-label" for="basicinput">SELECT DATE'S</label>
                      <div class="controls">
                        <div class="input-append">
                          <input type="date" name="d1" class="span3">
                         
                        </div>
                      </div>
                    </div>
                 </div>
                  </td>
                  <td colspan="2">
                  <div class="control-group">
                      <div class="controls">
                        <input type="submit" value="Submit Form" id="cmbAttendanceReport"></button>
                      </div>
                    </div>
                  </td>
                </tr>  
              <?php 
                }
               ?>
               <tr>
                <td id="msg_" colspan="5"></td>
               </tr>
              </tbody>
           </table>
            <?php
              echo form_close(); 
            ?>
        </div>
         <div class="module-body">
        
        <table class="table table-bordered table-striped" id="reportshere_faculty_day" name="reportshere_faculty_day">
        </table>
   </div>
 </div>
</div>
</div>
                 
            