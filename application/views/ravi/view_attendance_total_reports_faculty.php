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
           <h1>View-Total</h1>
        </div>



    <div class="module-body">

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
         

 <div class="module-body">
 <form name="frmattendancereports_faculty" id="frmattendancereports_faculty" method="POST">
              
      <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%">
          <tr>
              <?php foreach($add_class_in as $item){?>

                     <input type="hidden" value="<?php echo $item->session_id?>" name="session_id_total" >
                     <input type="hidden" value="<?php echo $item->course_id?>" name="course_id_total" >
                     <input type="hidden" value="<?php echo $item->semester_id?>" name="semester_id_total" >
                     <input type="hidden" value="<?php echo $item->section_id?>" name="section_id_total" >
                     <input type="hidden" value="<?php echo $item->subject_id;?>" name="subject_id_total" >
                      <input type="hidden" value="<?php echo $item->add_class_id?>" name="add_class_id_total" >
                               
              <?php 
                }
               ?>
              
            <tr>
                
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
                   <td colspan="3">
                  <div class="control-group">
                      <div class="controls">
                        <div style="float: right;"> 
                        <input type="submit"class="btn btn-primary" value="Search" id="cmbAttendanceReportfaculty_com">
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
        <table class="table table-bordered table-striped" id="reportsherefaculty" name="reportsherefaculty">
            </table>
   </div></div></div>