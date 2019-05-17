    <style type="text/css">

        .field-icon {
            float: right;
            margin-left: -20px;
            margin-top: 5px;
            position: relative;
            z-index: 2;
          }
    </style>
<div class="content">
  <div class="module">
    <div class="module-head">
      <h1>FORMS</h1>
    </div>
    <div class="module-body">
    <span class="form-horizontal row-fluid">
      <table class="table" border="2">
        <tr>
          <th >
          <h2>
            Add Course</h2>
            </th> 
          <th>
            <h2>
            Add Subject</h2>
          </th>
      </tr>
    <tr>
      <td>
        <form name="frmcourse" id="frmcourse"  Method="POST" action="<?php echo site_url('main/addcourse_controller');?>">
                    <div class="control-group">
                      <label class="control-label" for="University">University</label>
                      <div class="controls">
                        <input type="text" id="University" name="University" placeholder="University" class="span8">
                         </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="Course_IDt">Course ID</label>
                        <div class="controls">
                          <input type="text" id="Course_ID" name="Course_ID" placeholder="Course ID" class="span8">
                        </div>
                      </div>
                    <div class="control-group">
                      <label class="control-label" for="Course_Name">Course Name</label>
                        <div class="controls">
                          <input  type="text" name="Course_Name" id="Course_Name" placeholder="Course Name" class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="Course_Duration">Course Duration</label>
                      <div class="controls">
                        <input  type="number" name="Course_Duration" id="Course_Duration" placeholder="1,2,3..."  class="span8" max="5" min="1">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="No_Of_Semester">No Of Semester</label>
                      <div class="controls">
                        <input type="number"name="No_Of_Semester" id="No_Of_Semester" placeholder="1,2,3..." class="span8 tip"  max="5" min="1">
                      </div>
                    </div>
                    <div class="control-group">
                      <div class="controls">
                        <button type="submit" class="btncourse">GO</button>
                      </div>
                    </div>
        </form>
    </td>   
  <form class="form-horizontal row-fluid">
     <td>                          
     <div class="control-group">
        <label class="control-label" for="CourseName">Course Name</label>
        <div class="controls">
          <select tabindex="1" data-placeholder="Select here.."class="span8"  name="Course" id="Course">
              <option value="">Select Course</option>
                  <?php foreach ($course1 as  $item) { ?>
                    <option value="<?php echo $item->course_id;?>">
                    <?php echo $item->name_of_courses?></option>
                    <?php }?>
          </select>
        </div>
      </div>
    <div class="control-group">
      <label class="control-label" for="basicinput">Semester</label>
        <div class="controls">
          <select tabindex="1" data-placeholder="Select here.."class="span8"  name="Semester" id="Semester">
            <option value="">Select Semester</option>
               <?php foreach ($Semester1 as  $item) { ?>
                  <option value="<?php echo $item->semester_id;?>">
                  <?php echo $item->no_of_semester?>
            </option>
            <?php }?>
          </select>
        </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="Subject_ID">Subject ID</label>
        <div class="controls">
          <input type="text" id="Subject_ID" name="Subject_ID" placeholder="Subject_ID" class="span8">
        </div>
      </div>
    <div class="control-group">
      <label class="control-label" for="Subject_Name">Subject Name</label>
        <div class="controls">
          <input  type="text"id="Subject_Name"class="Subject_Name" placeholder="Subject Name" class="span8">
        </div>
    </div>
    <div class="control-group">
      <div class="controls">
          <button type="submit" class="btn">GO</button>
      </div>
    </div>
  </td>
</form>
</tr>
<tr>
  <th> <h2>Assign-Subject</h2></th> 
  <th><h2>Add Session</h2></th>
</tr>
<tr>
<form name="frmassign" id="frmassign"method="post" action="<?php echo site_url('main/asignsubject_controller');?>">
<td> 
  <div class="control-group">
   <label class="control-label" for="Session">Session</label>
    <div class="controls">
        <select tabindex="1" data-placeholder="Select here.."class="span8"  name="Session" id="Session">
            <option value="">Select Session</option>
              <?php foreach ($Session1 as  $item) { ?>
                <option value="<?php echo $item->s_id;?>">
                  <?php echo $item->session?></option>
              <?php }?>
        </select>
    </div>
  </div>     
    <div class="control-group">
      <label class="control-label" for="CourseName">Course Name</label>
        <div class="controls">
          <select tabindex="1" data-placeholder="Select here.."class="span8"  name="Courseasign" id="Courseasign">
            <option value="">Select Course</option>
              <?php foreach ($course1 as  $item) { ?>
              <option value="<?php echo $item->course_id;?>">
              <?php echo $item->name_of_courses?></option>
              <?php }?>
          </select>
        </div>
    </div>
<div class="control-group">
  <label class="control-label" for="Semester">Semester
  </label>
    <div class="controls">
      <select tabindex="1" data-placeholder="Select here.."class="span8"  name="Semesterasign" id="Semesterasign">
        <option value="">Select Semester</option>
          <?php foreach ($Semester1 as  $item) { ?>
            <option value="<?php echo $item->semester_id;?>">
          <?php echo $item->no_of_semester?></option>
          <?php }?>
      </select>
    </div>
</div>
<div class="control-group">
  <label class="control-label" for="Class">Class 
  </label>
    <div class="controls">
      <select tabindex="1" data-placeholder="Select here.."class="span8"  name="Classasign" id="Classasign">
        </select>
    </div>
</div>
  <div class="control-group">
     <label class="control-label" for="basicinput">Subject</label>
       <div class="controls">
        <select tabindex="1" data-placeholder="Select here.."class="span8"  name="SubjectNameasign" id="SubjectNameasign">
        </select>
      </div>
  </div>
<div class="control-group">
    <label class="control-label" for="basicinput">Faculty</label>
      <div class="controls">
        <select tabindex="1" data-placeholder="Select here.."class="span8"  name="Faculty" id="Faculty">
          <option value="">Select Faculty</option>
          <?php foreach ($faculty as  $item) { ?>
          <option value="<?php echo $item->faculty_id;?>">
          <?php echo $item->first_name.'  '.$item->last_name?></option>
          <?php }?>
        </select>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn">Go</button>
    </div>
  </div>
  </td>
</form>     
 <form class="form-horizontal row-fluid" method="post" name="frmsession" id="frmsession" action="get_sessionassign"> 
  <td>
  <div class="control-group">
    <label class="control-label" for="basicinput">Session id</label>
    <div class="controls">
      <input type="text" id="inputsession_id" name="inputsession_id" class="span8">
    </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput">Session Name</label>
                      <div class="controls">
                        <input type="text" id="inputsession_name" name="inputsession_name" class="span8" >
                      </div>
                    </div>

         
                    <div class="control-group">
                      <div class="controls">
                        <button type="submit" class="btn">Go</button>
                      </div>
                    </div>
</form>
</td>

</tr>
 <tr>
        <th> <center><h2>Add Batch</h2></center></th>
        <th> <h2><center>Add Admin</center></h2></th> 
      
         </tr>
    <tr>
      <td>    <form class="form-horizontal row-fluid" method="post" name="frmbatch" id="frmbatch" action="get_Batchsign">
                     <div class="control-group">
                      <label class="control-label" for="basicinput">Batch id</label>
                      <div class="controls">
                        <input type="text" id="inputbatch_id" name="inputbatch_id" class="span8">
                    
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput">Batch Name</label>
                      <div class="controls">
                        <input type="text" id="inputbatch_name" name="inputbatch_name" class="span8" >
                      </div>
                    </div>

         
                    <div class="control-group">
                      <div class="controls">
                        <button type="submit" class="btn">Go</button>
                      </div>
                    </div>
</form>
</td> 
   
       <td> 
          <form class="form-horizontal row-fluid" method="post" name="frmadmin" id="frmadmin" action="getAdmin_pwd">
                     <div class="control-group">
                      <label class="control-label" for="basicinput">Admin Name</label>
                      <div class="controls">
                        <input type="text" id="inputadmin_name" name="inputadmin_name" class="span12">
                    
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput">Admin Password</label>
                      <div class="controls">

                        <input type="password" name="inputadmin_pwd" id="inputadmin_pwd"  class="span12 "><span toggle="#inputadmin_pwd"   class="icon-eye-open field-icon  toggle-password"></span>
                </div>
                      </div>
                    </div>
         
                    <div class="control-group">
                      <div class="controls">
                        <button type="submit" class="btn">Go</button>
                      </div>
                    </div>
                  </td></tr></form>
</form>
</table>         
   </div>
            
  
 </div>
</div>
