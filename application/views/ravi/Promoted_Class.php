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
 <form class="form-horizontal row-fluid" method="POST" name="frmPromotedClass" id="frmPromotedClass" action="<?php echo site_url('main/addsectionClass');?>">
  
<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%">      
       <tr>
      <td> 
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
                    </div></td></tr>
                    <tr><td>
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
                    </div></td></tr><tr><td>
                    <div class="control-group">
                      <label class="control-label" for="basicinput">Class</label>
                      <div class="controls">
                         <select tabindex="1" data-placeholder="Select here.."class="span8"  name="ClassG" id="ClassG">
                     </select>
                      </div>
                    </div>
</td></tr><tr><td>
                    <div class="control-group">
                      <label class="control-label" for="basicinput">Student</label>
                      <div class="controls">
                        <div name="getstudent"id="getstudent" class="span8" ></div>
                      </div>
                    </div>
</td></tr><tr><td>
         
                    <div class="control-group">
                      <div class="controls">
                        <button type="submit" class="btn">Go</button>
                      </div>
                    </div>
                  </td></tr>
                 </form>
        
   </div></table></form>
 </span>
 <h1>Promoted Class</h1>
       <span class="form-horizontal row-fluid">

   <form class="form-horizontal row-fluid" method="post" name="frmPromotedClass1" id="frmPromotedClass1" action="<?php echo  site_url('main/promotedClass');?>">       
    
<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%">     
    
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
                           
                      </div>
                    </div></td> 
                    <td>
                     <div class="control-group">
                      <label class="control-label" for="basicinput">Session</label>
                      <div class="controls">
                         <select tabindex="1" data-placeholder="Select here.."class="span8"  name="SessionP1" id="SessionP1">
                                             <option value="">Select Session</option>
                                                 <option value="<?php echo date('Y');?>"><?php echo date('Y');?></option>
                                                 </select>
                           
                      </div>
                    </div></td>
                    <tr>
                      <td>
                    <div class="control-group">
                      <label class="control-label" for="basicinput">Course</label>
                      <div class="controls">
                       <select tabindex="1" data-placeholder="Select here.."class="span8"  name="CourseP" id="CourseP">
                                             <option value="">Select Course</option>
                                                <?php foreach ($course1 as  $item) { ?>
                                                 <option value="<?php echo $item->course_id;?>">
                                                  <?php echo $item->name_of_courses?></option>
                                                    <?php }?>
                                                 </select>
                      
                      </div>
                    </div></td><td>
                    <div class="control-group">
                      <label class="control-label" for="basicinput">Course</label>
                      <div class="controls">
                       <select tabindex="1" data-placeholder="Select here.."class="span8"  name="CourseP1" id="CourseP1">
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
                         <select tabindex="1" data-placeholder="Select here.."class="span8"  name="ClassP" id="ClassP">
                     </select>
                      </div>
                    </div>
                  </td>
              <td><div class="control-group">
                      <label class="control-label" for="basicinput">Class</label>
                      <div class="controls">
                         <select tabindex="1" data-placeholder="Select here.."class="span8"  name="ClassP1" id="ClassP1">
                     </select>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <div class="control-group">
                      <label class="control-label" for="basicinput">Student</label>
                      <div class="controls">
                        <div name="getstudentP"id="getstudentP" class="span8" style="text-align: center;"></div>
                      </div>
                    </div>
                  </td>
                </tr>

         <tr>
          <td colspan="2">
                    <div class="control-group">
                      <div class="controls">
                        <button type="submit" class="btn">Go</button>
                      </div>
                    </div>
                  </td>
                </tr>
                         
   </table></form></span></div></div>

 