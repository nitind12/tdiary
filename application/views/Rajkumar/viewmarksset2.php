<style media="print">
  .hideblock{
      display:none;
}
</style>



<div class="content">
  
  <div class="module">
              <div class="module-head">
                <h1><?php echo $this->session->userdata('marksname');?></h1>
                        </div>
              <div class="module-body table">
                <div class="alert  hideblock">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Note!</strong>Double Click For Edit!
                  </div>


       <span class="hideblock"> <a href="#" onclick="window.print()"><span class="btn  btn-primary icon-print" style="float:right" > Print</span> </a></span>
               <br>


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
         
               <form class="form-horizontal row-fluid" name="frmclass" id="frmclass" method="post" action="<?php echo site_url('Test/submitmarks_controller_update');?>">

                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">                
                  </h3>
                       
                        </div>
               
                  <thead>
                    <tr>
                     <th align="center">Roll-no</th>
                      <th align="center">Student Name</th>
                      <th align="center">Total Marks</th>
                      <th align="center">Obtained Marks</th>
                    <th align="center">Percentage</th>
                      <!--th align="center" class="hideblock">Delete/Edit</th-->
                      
                        </tr>
                  </thead>
                  <tbody>
                  
             <?php 
             foreach ($vim as $item) { ?>
              <tr >
                    <input type="hidden" value="<?php echo $item->subject_id;?>" name="subject[]" id="sid_<?php echo $item->subject_id;?>">
                      <input type="hidden" value="<?php echo $item->add_class_id;?>" name="addclass_id[]" id="sid_<?php echo $item->add_class_id;?>">

                  
                      <td><?php echo $item->student_id;?>
                          <input type="hidden" value="<?php echo $item->student_id;?>" name="Student_Roll[]" id ="sid_<?php echo $item->student_id;?>">
                      </td>
                      <td align="center"><?php echo $item->first_name; ?></td>
                      <td>
                        <?php echo "30"?><input type="hidden" value="<?php echo "30"?>" name="totalmarks[]" id="tot_<?php echo $item->student_id;?>" class="marks1">
                        </td>
                      <td>
                          <input type="number"  value="<?php echo $item->marks;?>" max="30" min="0"name="Obtained_Marks[]"id="om_<?php echo $item->student_id;?>" placeholder="Obtained Marks" class="span8 marks">
                      </td>
                    <td>
                       <input type="text" name="Percentage[]"  value="<?php echo $item->percentage;?>" id="per_<?php echo $item->student_id;?>" placeholder="Percentage" class="span8 ">
                      </td>

            
      </tr>

    <?php } ?>
    
                    
   
</div>

  </tbody>
</table>
<table class="table">
         <tfoot>
                <tr>
                    <th>
                     <div class="control-group">
                     <div class="controls">
                        <button type="submit" class="btntake" id="btntake">Update Marks</button>
                    </div>
                  </div>
                    </th>
                      </tr>
                  </tfoot>
        </table>
       </form>
<center>
</div>
</div>
</div>      