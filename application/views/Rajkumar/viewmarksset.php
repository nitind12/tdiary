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
                <!--div class="alert  hideblock">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Note!</strong>Double Click For Edit!
                  </div-->


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
          <center><a href="<?php echo site_url('test/del/')?>"class="btn btn-danger hideblock" onclick="return confirm('Are you sure??')">Delete Whole data!</a></center>
         
               <form class="form-horizontal row-fluid" name="frmclass" id="frmclass" method="post" action="<?php echo site_url('Test/submitmarks_controller');?>">

                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                  <!-- <div style="float:right">
                    <input type="hidden" value="<?php //echo date("Y-m-d")?>" name="date" id="date"><?php 
                    //echo date("D-d-M-Y")?> </div>--->
                   
                  </h3>
                       
                        </div>
               
                  <thead>
                    <tr>
                     <th align="center">Roll-no</th>
                      <th align="center">Student Name</th>
                      <th align="center">Total Marks</th>
                      <th align="center">Obtained Marks</th>
                       <th align="center">percentage</th>
                      <!--th align="center" class="hideblock">Delete/Edit</th-->
                      
                        </tr>
                  </thead>
                  <tbody>
                  
             <?php foreach ($vim as $item) { ?>
              <tr >
              <td align="center" class="marksdata  markstd" id="<?php echo $item->add_marks_id.'-roll_no';?>"><?php echo $item->roll_no?></td>
              <td align="center"><?php echo $item->first_name?></td>
               <td align="center"><?php echo $item->totalmarks;?></td>

              <td align="center" id="<?php echo $item->add_marks_id.'-marks';?>"><?php echo $item->marks;?></td>
              <td align="center"><?php echo $item->percentage;?></td>

              <!--<td class="hideblock"><a href="<?php echo site_url('test/del1/' .$item->add_marks_id)?>" class="btn btn-danger icon-trash" onclick="return confirm('Are you sure')"></a></td>-->
       
      </tr>

    <?php } ?>
    
                    
   
</div>

  </tbody>
</table>
</div>
</div>
</div>      