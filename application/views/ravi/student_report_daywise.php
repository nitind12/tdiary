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
           <h1>View-Daywise</h1>
        </div>

 <div class="module-body">
    <form name="frmdaywise" id="frmdaywise"  Method="POST" action="<?php echo site_url('main/student_report_daywise_controller');?>">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%">
          <tr>
            <tr>
                <td>
                 <div class="control-group">
                      <div class="controls">
                         Date From:
                 <br/>
                          <input type="date" name="d1" class="span2">
                      </div>
                    </div>
                </td>
                 <td>
                 <div class="control-group">
                      <div class="controls">
                         Date Upto:
                  <br/>
                          <input type="date" name="d2" class="span2">
                      </div>
                    </div>
                </td>
                </tr>  
                <tr>
                  <td colspan="2">
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
          </table></form> 
         <table class="table table-bordered table-striped" id="reportdaywise" name="reportdaywise">
        </table>
   </div>
 </div>
</div>