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
           <h1>Attendance-Reports </h1>
        </div>

 <div class="module-body">
  <form name="frmconsolidate2" id="frmconsolidate2"  Method="POST" >
    
      <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%">
          <tr>
            <td>
            <td colspan="2"> <div class="control-group">
                   <label class="control-label" for="basicinput">Subject</label>
                      <div class="controls">
                        <select tabindex="1" data-placeholder="Select here.."class="span4"  name="Subject_Name" id="Subject_Name">
        
                           <option value ="">Select Subjects..</option>
                      <?php foreach ($subjects as $items) {?>
                       <option value="<?php echo $items->subject_id ?>"><?php echo $items->subject_name ?></option>
                     <?php } ?>
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
                        <input type="submit"class="btn btn-primary" value="Search" id="cmbAttendanceReportcom">
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
        <table class="table table-bordered table-striped" id="reportshere2" name="reportshere2">
            </table>
   </div></div></div>