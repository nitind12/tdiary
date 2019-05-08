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
      <h1>Student Group</h1>
    </div>
  <div class="module-body">
   <span class="form-horizontal row-fluid">
<table class="table" border="2">
    <tr>
      <td>
          <form class="form-horizontal row-fluid" method="post" name="frmPromotedClass" id="frmPromotedClass" action="addsectionClass">
                     <div class="control-group">
                      <label class="control-label" for="basicinput">Session</label>
                      <div class="controls">
                         <select tabindex="1" data-placeholder="Select here.."class="span8"  name="SessionG" id="SessionG">
                                             <option value="">Select Session</option>
                                                <?php foreach ($Session1 as  $item) { ?>
                                                 <option value="<?php echo $item->s_id;?>">
                                                  <?php echo $item->session?></option>
                                                    <?php }?>
                                                 </select>
                           
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput">Course</label>
                      <div class="controls">
                       <select tabindex="1" data-placeholder="Select here.."class="span8"  name="CourseG" id="CourseG">
                                             <option value="">Select Course</option>
                                                <?php foreach ($course1 as  $item) { ?>
                                                 <option value="<?php echo $item->course_id;?>">
                                                  <?php echo $item->name_of_courses?></option>
                                                    <?php }?>
                                                 </select>
                      
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="basicinput">Class</label>
                      <div class="controls">
                         <select tabindex="1" data-placeholder="Select here.."class="span8"  name="ClassG" id="ClassG">
                     </select>
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput">Student</label>
                      <div class="controls">
                        <div name="getstudent"id="getstudent" class="span8" ></div>
                      </div>
                    </div>

         
                    <div class="control-group">
                      <div class="controls">
                        <button type="submit" class="btn">Go</button>
                      </div>
                    </div>
                  
                 </form>
        
   </div></td></tr></table>
 </span>
 <h1>Promoted Class</h1>
    
       <span class="form-horizontal row-fluid">
<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%"> 
  <form class="form-horizontal row-fluid" method="post" name="frmPromClass" id="frmPromotedClass" action="addsectionClass">
    <tr>
      <td>
                     <div class="control-group">
                      <label class="control-label" for="basicinput">Session </label>
                      <div class="controls">
                         <select tabindex="1" data-placeholder="Select here.."class="span8"  name="SessionP" id="SessionP">
                                             <option value="">Select Session</option>
                                                <?php foreach ($Session1 as  $item) { ?>
                                                 <option value="<?php echo $item->s_id;?>">
                                                  <?php echo $item->session?></option>
                                                    <?php }?>
                                                 </select></div></div></td>
<td>
                    <div class="control-group">
                      <label class="control-label" for="basicinput">Course</label>
                      <div class="controls">
                       <select tabindex="1" data-placeholder="Select here.."class="span8"  name="CourseG" id="CourseG">
                                             <option value="">Select Course</option>
                                                <?php foreach ($course1 as  $item) { ?>
                                                 <option value="<?php echo $item->course_id;?>">
                                                  <?php echo $item->name_of_courses?></option>
                                                    <?php }?>
                                                 </select>
                      
                      </div>
                    </div></td>
                    </tr>
                    <tr> 
                    <td>
                      <div class="control-group">
                      <label class="control-label" for="basicinput">Class</label>
                      <div class="controls">
                         <select tabindex="1" data-placeholder="Select here.."class="span8"  name="ClassG" id="ClassG">
                     </select>
                      </div>
                    </div></td>
</tr>
                    <h4>   Update</h4>
                  <tr>
              <td>
              <div class="control-group">
                      <label class="control-label" for="basicinput">Session</label>
                      <div class="controls">
                         <select tabindex="1" data-placeholder="Select here.."class="span8"  name="SessionP" id="SessionP">
                                             <option value="">Select Session</option>
                                                <?php foreach ($Session1 as  $item) { ?>
                                                 <option value="<?php echo $item->s_id;?>">
                                                  <?php echo $item->session?></option>
                                                    <?php }?>
                                                 </select>
                        </div></div></td>   
                      <td>
                    <div class="control-group">
                      <label class="control-label" for="basicinput">Course</label>
                      <div class="controls">
                       <select tabindex="1" data-placeholder="Select here.."class="span8"  name="CourseG" id="CourseG">
                                             <option value="">Select Course</option>
                                                <?php foreach ($course1 as  $item) { ?>
                                                 <option value="<?php echo $item->course_id;?>">
                                                  <?php echo $item->name_of_courses?></option>
                                                    <?php }?>
                                                 </select>
                      
                      </div>
                    </div></td></tr>
                    <tr>
                    <td>

                    <div class="control-group">
                      <label class="control-label" for="basicinput">Class</label>
                      <div class="controls">
                         <select tabindex="1" data-placeholder="Select here.."class="span8"  name="ClassG" id="ClassG">
                     </select>
                      </div>
                    </div></td></tr>
                    <tr>
                    <td>

                    <div class="control-group">
                      <label class="control-label" for="basicinput">Student</label>
                      <div class="controls">
                        <div name="getstudent"id="getstudent" class="span8" ></div>
                      </div>
                    </div>
</td></tr>
         
                    <div class="control-group">
                      <div class="controls">
                        <button type="submit" class="btn">Go</button>
                      </div>
                    </div>
                  
                 </form>        
   </div>
 </td>
</tr>
</table>
 </span>     
  
 </div>
</div>
