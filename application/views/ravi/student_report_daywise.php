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
           <h1>Consolidate </h1>
        </div>

 <div class="module-body">
     <form name="frmconsolidateAd" id="frmconsolidateAd"  Method="POST" >
 
      <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%">
          <tr>
            <td>
                 <div class="control-group">
                   <label class="control-label" for="basicinput">Session</label>
                      <div class="controls">
                      <select tabindex="1" data-placeholder="Select here.."class="span2"  name="Session_admin" id="Session_admin">
                                             <option value="">Select Session</option>
                                                <?php foreach ($Session1 as  $item) { ?>
                                                 <option value="<?php echo $item->s_id;?>">
                                                  <?php echo $item->session?></option>
                                                    <?php }?>
                                                 </select>
                                              </div>
                    </div>
               </td>
                
                <td>
                 <div class="control-group">
                   <label class="control-label" for="basicinput">Course</label>
                      <div class="controls">
                     <select tabindex="1" data-placeholder="Select here.."class="span2"  name="Course_admin" id="Course_admin">
                                             <option value="">Select Course</option>
                                                <?php foreach ($course1 as  $item) { ?>
                                                 <option value="<?php echo $item->course_id;?>">
                                                  <?php echo $item->name_of_courses?></option>
                                                    <?php }?>
                                                 </select>
                                              </div>
                    </div>
                </td>
                 <td>
                 <div class="control-group">
                   <label class="control-label" for="basicinput">Semester</label>
                      <div class="controls">
                           <select tabindex="1" data-placeholder="Select here.."class="span2"  name="Semester_admin" id="Semester_admin">
                      <option value="">Select Semester</option>
                                                <?php foreach ($Semester1 as  $item) { ?>
                                                 <option value="<?php echo $item->semester_id;?>">
                                                  <?php echo $item->no_of_semester?></option>
                                                    <?php }?>
                                                 </select>
                                             
                       </div>
                    </div>
                </td>
                
            <td>
                 <div class="control-group">
                   <label class="control-label" for="basicinput">Class</label>
                      <div class="controls">
                          <select tabindex="1" data-placeholder="Select here.."class="span2"  name="Class_admin" id="Class_admin">
                         </select>
                         
                       </div>
                    </div>
               </td>
                </tr>
              <tr>
              
            <td colspan="2"> <div class="control-group">
                   <label class="control-label" for="basicinput">Subject</label>
                      <div class="controls">
                          <select tabindex="1" data-placeholder="Select here.."class="span2"  name="subject_name_admin" id="subject_name_admin">
                         </select>
                          </div>
                    </div>
               </td>
                
                <td>
                 <div class="control-group">
                   <label class="control-label" for="basicinput">Date From </label>
                      <div class="controls">
                          <input type="date" name="d1" class="span2">
                      </div>
                    </div>
                </td>
                 <td>
                 <div class="control-group">
                   <label class="control-label" for="basicinput">Date Upto</label>
                      <div class="controls">
                          <input type="date" name="d2" class="span2">
                      </div>
                    </div>
                </td>
                </tr>  
                <tr>
                   <td colspan="4">
                  <div class="control-group">
                      <div class="controls">
                        <div style="float: right;"> 
                        <input type="submit"class="btn btn-primary" value="Search" id="cmbAdminCON">
                      </div>
                    </div>
                  </div>
                  </td>
                
                </tr>
               </tbody>
           </table>
          </form>
        <div class="module-body table">
             <tr>
              <td>
                
                    </td>

                      <td> 
                    </td>
                    </tr>
                </table>
              
              </div>
        <table class="table table-bordered table-striped" id="reportshere" name="reportshere">
            </table>
   </div></div></div>