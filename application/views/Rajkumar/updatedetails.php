 <!---tbody>
                  
		             <?php// foreach ($vie as $item)
		             { 
		             	?>
		              <tr >
		              <td align="center"  class="checkedassign_data  checkedassign_td"   id="<?php echo $item->assignment_checker_id.'-roll_no';?>"><?php echo $item->roll_no;?></td>

      						<td align="center"><?php echo $item->first_name;?></td>

      						<td align="center" class="checkedassign_data  checkedassign_td"   id="<?php echo $item->assignment_checker_id.'-assignment_id';?>"><?php echo $item->assignment_id;?></td>

      						<td align="center" class="checkedassign_data  checkedassign_td"   id="<?php echo $item->assignment_checker_id.'-assignment_status';?>"><?php echo $item->assignment_status;?></td>

      						<td align="center" class="checkedassign_data  checkedassign_td"   id="<?php echo $item->assignment_checker_id.'-checker_date';?>"><?php echo $item->checker_date;?></td>

                  <td align="center" class="checkedassign_data  checkedassign_td"   id="<?php echo $item->assignment_checker_id.'-Grade';?>"><?php echo $item->Grade;?></td>

      						<td class="hideblock"><a href="<?php// echo site_url('update_assignment_controller/del1/' .$item->assignment_checker_id)?>" class="btn btn-danger icon-trash " onclick="return confirm('Are you sure')"></a></td>
				    <?php } ?>
		  </tbody--->

<style media="print">
  .hideblock{
      display:none;
}
</style>





<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
                   <span class="hideblock"> <a href="#" onclick="window.print()"><span class="btn  btn-primary icon-print" style="float:right" > Print</span> </a></span>
								<h1 >Check_View_Assignment</h1>


							</div>

							<div class="module-body">
					 <div class="module-body table">
            <div class="alert  hideblock">
                    <button type="button" class="close " data-dismiss="alert">×</button>
                    <strong>Note!</strong>Double Click For Edit!
                  </div>
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
                        <td><b><?php echo $item->session_id?></b>
                      </td>
                         <td><b><?php echo $item->course_id?></b> </td>
                         
                        <td> <b><?php echo $item->semester_id?></b> </td>
                        

                         <td> <b><?php  echo $item->section_id?></b> </td>
                       <td> <b><?php echo $item->subject_id;?></b></td>
                     </tr>        
              <?php 
                }
               ?>
              </tbody>
        
                
        </table>
          </div>
          <br>
               <form class="form-horizontal row-fluid" name="frmclass" id="frmclass" method="post" action="<?php echo site_url('Test/submitmarks_controller');?>">
<?php foreach($add_class_in as $item){?>


                         
                     value=" <?php echo $item->semester_id?>"                       

                        value="<?php  echo $item->section_id?>"
                       value="<?php echo $item->subject_id;?>"
                      <?php 
                }
               ?>
              <input type="hidden" value="<?php echo $item->session_id?>"
                     name="addclassidCA" id="addclassidCA">
              <input type="hidden" name="sessionidCA" id="sessionidCA">
              <input type="hidden" value="<?php echo $item->course_id?>"
                      name="courseidCA" id="courseidCA">
              <input type="hidden" name="subjectidCA" id="subjectidCA">
            
                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                  <!-- <div style="float:right">
                    <input type="hidden" value="<?php //echo date("Y-m-d")?>" name="date" id="date"><?php 
                    //echo date("D-d-M-Y")?> </div>--->
                   
                  </h3>
                       
                        </div>
                        
                  <thead>
                   <tr>
                    
						<th align="center">Student_Roll</th>
						<th align="center">Student name</th>
						<th align="center">Total Assignment No.</th>
						<th align="center"><br>Assignment Status</th>	
						<th align="center" class="hideblock">Details</th>
					</tr>
   
              </thead>
          <tbody>
                  
                 <?php foreach ($vie as $item)
                 { 
                  ?>
                  <tr >
                  <td align="center"  class="checkedassign_data  checkedassign_td"   id="<?php echo $item->assignment_checker_id.'-roll_no';?>"><?php echo $item->roll_no;?></td>

                  <td align="center"><?php echo $item->first_name;?></td>

                  <td align="center" class="checkedassign_data  checkedassign_td"   id="<?php echo $item->assignment_checker_id.'-assignment_id';?>"><?php echo $item->assignment_id;?></td>

                  <td align="center" class="checkedassign_data  checkedassign_td"   id="<?php echo $item->assignment_checker_id.'-assignment_status';?>"><?php echo $item->assignment_status;?></td>

                  <td align="center" class="checkedassign_data  checkedassign_td"   id="<?php echo $item->assignment_checker_id.'-checker_date';?>"><?php echo $item->checker_date;?></td>

                  <td align="center" class="checkedassign_data  checkedassign_td"   id="<?php echo $item->assignment_checker_id.'-Grade';?>"><?php echo $item->Grade;?></td>
 <?php } ?>

                <?php echo count($vie2);
                foreach($vie2 as $vie){


                  }
               ?>
              </tbody>
        
               
              </table>
</table>
</div>
</div>

