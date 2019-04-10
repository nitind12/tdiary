<div class="content">
  
  <div class="module">
              <div class="module-head">
                <h3>ONLINE_ATTENDANCE </h3>
                        </div>
              <div class="module-body table">
               <form class="form-horizontal row-fluid" name="frmclass" id="frmclass" method="post" action="<?php echo site_url('Main/submitattendance_controller');?>">

                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                   <div style="float:right"> <input type="hidden" value="<?php echo date("d-m-yy")?>" name="date" id="date"><?php echo date("D-d-M-Y")?> </div></h3>
                        </div>
               
                  <thead>
                    <tr>
                     <th align="center">Roll-no</th>
                      <th align="center">Student Name</th>
                      <th align="center">Attendance status</th>
                      <th align="center">Delete</th>
                      </tr>
                  </thead>
                  <tbody>
                    
    <?php foreach ($add_attend as $item) { ?>
      <tr >
        <td><?php echo $item->student_id;?>
                      <input type="hidden" value="<?php echo $item->student_id;?>" name="Student_Roll[]" id="sid_<?php echo $item->student_id;?>">
                    </td>
                   
        <td align="center"><?php echo $item->first_name; ?></td>
        <td>
          <div class="control-group">
                      <div class="controls">
                        <label class="radio inline">
                          <input type="radio" name="optionsRadios[].<?php echo $item->student_id;?>" id="optionsRadios1" value="PRESENT" checked="">
                          PRESENT
                        </label> 
                        <label class="radio inline">
                          <input type="radio" name="optionsRadios[].<?php echo $item->student_id;?>" id="optionsRadios2" value=" ABSENT">
                           ABSENT
                        </label> 
                        <label class="radio inline">
                          <input type="radio" name="optionsRadios[].<?php echo $item->student_id;?>" id="optionsRadios3" value="LEAVE">
                          LEAVE
                        </label>
                      </div>
                    </div>
          </td>
        <td><a href="#">Delete</a></td>
        </tr>  
    <?php } ?>
  </tbody>
  <br/>
                
</table>
<table class="table">
<tfoot>
                    <tr>
                      <th <div class="control-group">
                      <div class="controls">
                        <button type="submit" class="btntake" id="btntake">Submit Form</button>
                      </div>
                    </th>
                      </tr>
                  </tfoot>
  </table>
</form>
</div>



</div>
</div>
</div>      