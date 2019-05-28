<style type="text/css">
    .show-read-more .more-text{
        display: none;
      }
      
    .redcolor{
      color: #ff0000 !important;
    }
    }
</style>
<div class="content">
<div class="module">
    <div class="module-head">
          <h1> Actual Lecture View</h1>
    </div>
    <div class="module-body table">
          <!--div class="alert">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Note!</strong> For Edit Double Click!
                  </div-->    

      <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%">
        <thead>
            <tr>
              <th align="center">Session:</th>
              <th align="center">Course:</th>
               <th align="center">Semester:</th>
               <th align="center">Section:</th>
               <th align="center">Subject:</th>
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
         
               <form class="form-horizontal row-fluid" name="frmclass" id="frmclass" method="post" action="<?php echo site_url('Test/submitmarks_controller');?>">

                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                  <!-- <div style="float:right">
                    <input type="hidden" value="<?php //echo date("Y-m-d")?>" name="date" id="date"><?php 
                    //echo date("D-d-M-Y")?> </div>--->
                   
                  </h3>
                       
                        </div>
               
                  <thead>
                      <tr>
                          <!-- <th align="center">No_of_Lecture</th>  -->
                          <th align="center">Date</th>
                          <th align="center">Start Time</th>
                          <th align="center">End Time</th>
                          <th align="center">Unit</th>
                          <th align="center">Topic</th>
                          <th align="center">Lecture Type</th>
                          
                         
                         <th align="center">Delete</th>    
                      
                       </tr>
                  </thead>
                  <tbody>
                  
             <?php foreach ($t_diary as $item) { ?>
                <tr>
                      <td><?php echo $item->date ?></td>
                      <td><?php echo $item->start_time ?></td>
                      <td><?php echo $item->end_time ?></td>
                      <td><?php echo $item->unit ?></td>
                      <td class="show-read-more  "><?php echo $item->topic ?></td>

                     <?php if(trim($item->lecture_type) == 'Arrangement' || trim($item->lecture_type) == 'Extra Lecture Taken'){?>
                       <td class="redcolor"><?php echo $item->lecture_type ?>
                          <?php } else { ?>
                          <td><?php echo $item->lecture_type;?>
                              <?php } ?>
                             
                       </td>
                     
                      <!--td class="show-read-more"><?php echo $item->lecture_id ?></td>
              
                      <td align="center"><?php echo $item->no_of_lecture ?></td>    -->
                      
                       <td><a href="<?php echo site_url('Lessonedit_controller/del1/' . $item->lesson_id)?>" class="btn btn-danger icon-trash" onclick="return confirm('Are you sure')"></a></td>  

                     <!--<td><a href="<?php ///echo site_url('test/pilih/' . $item->Student_Roll)?>" class="btn " onclick="return confirm('Are you sure')">Update</a></td>-->
                </tr>

           <?php } ?>
  
</div>

  </tbody>
</table>
</div>
</div>
</div>      