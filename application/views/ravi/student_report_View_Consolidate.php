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
           <h1>View-Consolidate</h1>
        </div>

 <div class="module-body">
  <?php
                $options = array(
                  'name' => 'frmattendancereports',
                  'id' => 'frmattendancereports'
                ); 
                echo form_open('main/view_attendance_controller/'.$no_, $options);
              ?>
        
      <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%">
          <tr>
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
                        <input type="submit"class="btn btn-primary" value="Search" id="cmbAttendanceReport">
                      </div>
                    </div>
                  </div>
                  </td>
                
                </tr>
               </tbody>
           </table>
          
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