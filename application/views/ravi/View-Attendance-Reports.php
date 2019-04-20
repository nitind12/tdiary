<div class="span9">
<div class="content">
    <div class="module">
       <div class="module-head">
           <h1>View-Attendance-Reports </h1>
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
              <?php
                $options = array(
                  'name' => 'frmViewAttendance',
                  'id' => 'frmViewAttendance'
                ); 
                echo form_open('#', $options);
              ?>
            <?php foreach($add_class_in as $item){?>
              
              <tr >
                        <td><b><select tabindex="1" data-placeholder="Select here.." class="span1">
                          <option value="<?php echo $item->session_id?>"><?php echo $item->session_id?></option>
                          /select>
                    </b> </td>
                        <td><select tabindex="1" data-placeholder="Select here.." class="span1" id="crs_for_attendance">
                          <?php foreach ($cls_in_session as $itemcrs) {?>
                            <?php if($item->course_id == $itemcrs->course_id){ ?>
                              <option value="<?php echo $item->course_id?>" selected="selected"><?php echo $itemcrs->course_id?></option>
                            <?php } else { ?>
                              <option value="<?php echo $item->course_id?>"><?php echo $itemcrs->course_id?></option>
                            <?php } ?>
                          <?php } ?>
                          /select>
                    </b> </td>
                        <td> <select tabindex="1" data-placeholder="Select here.." class="span1">
                          <option value="<?php echo $item->semester_id?>"><?php echo $item->semester_id?></option>
                          /select>
                    </b> </td>
                        <td><select tabindex="1" data-placeholder="Select here.." class="span1">
                          <option value="<?php echo $item->section_id?>"><?php echo $item->section_id?></option>
                          /select>
                    </b> </td>
                       <td> <select tabindex="1" data-placeholder="Select here.." class="span1">
                          <option value="<?php echo $item->subject_id;?>"><?php echo $item->subject_id;?></option>
                          /select>
                    </b> </td>
                </tr>        
              <?php 
                }
               ?>
               <?php
                echo form_close(); 
               ?>
              </tbody>
           </table>
        </div>
    <div class="module-head">
           <h2>View-Attendance-Reports </h2>
        </div>
  <form class="form-horizontal row-fluid" name="frmattendancereports" id="frmattendancereports" method="post" action="<?php echo site_url('Main/view_attendance_reports_controller/'.$item->add_class_id.'/'.$item->session_id);?>">

        <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%">
          
        <div class="module-body table">
             <tr>
              <td>
              <div class="control-group">
                      <label class="control-label" for="basicinput">SELECT DATE'S</label>
                      <div class="controls">
                        <div class="input-append">
                          <input type="date" name="d1" class="span12">
                         
                        </div>
                      </div>
                    </div>
                 </div>
                    </td>

                      <td> <div class="control-group">
                      <div class="controls">
                          
                        <button type="submit" class="btntake" id="btntake">Submit Form</button>
                      </div>
                    </td>
                    </tr>
                </table>
              </form>
              </div>
        <table class="table table-bordered table-striped" id="reportshere" name="reportshere">
            </table>
   </div></div></div>
                 
            