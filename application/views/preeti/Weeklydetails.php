<style type="text/css">
    .show-read-more .more-text{
       display: none;
    }
</style>
<div class="span9">
  <div class="content">
    <div class="module">
      <div class="module-head">
          <h1>Weekly Details</h1>
      </div>
               <div class="module-body">
          

                <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%">
                  <!-- <div style="float:right">
                    <input type="hidden" value="<?php //echo date("Y-m-d")?>" name="date" id="date"><?php 
                    //echo date("D-d-M-Y")?> </div>--->
      
                    
                      <thead>
                          <tr>
                              <!-- <th align="center">No_of_Lecture</th>  -->
                              <th align="center">Week_No</th>
                              <th align="center">StartDate</th>
                              <th align="center">EndDate</th>
                              <th align="center">L.Schedule</th>
                              <th align="center">Holiday</th>
                              <th align="center">CLG.Leave</th>
                              <th align="cneter">L.Extra </th>
                              <th align="center">L.Actual</th>
                            
                          
                           </tr>
                      </thead>
                      <tbody>
                      
                        <?php foreach ($t_diary as $item) { ?>
                           <tr>
                                <td><?php echo $item->week_id ?></td>
                                <td><?php echo $item->start_date ?></td>
                                <td><?php echo $item->end_date ?></td>
                                <td><?php echo $item->no_of_lecture_schedule ?></td>
                                <td><?php echo $item->no_of_lost_due_to_holiday ?></td>
                                <td><?php echo $item->no_of_lost_due_to_cl ?></td>
                                <td><?php echo $item->no_extra_taken ?></td>
                                <td><?php echo $item->no_of_lecture_actual_taken ?></td>
                          </tr>
                         <?php }?>
                      </tbody>
                    </table>
                    


                <br>




                  <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
               
                                <tr style="text-align: left">
                            
                                    
                                  <th align="center">Date</th>
                                  <th align="center">Unit</th>
                                  
                                  <th align="center"> Topic</th> 
                                   </tr>
                                  <?php foreach ($details as $item) { ?>

                                        <tr>
                                           
                                            <td><?php echo $item->date;?></td>
                                            <td><?php echo $item->unit;?></td>
                                            <td><?php echo $item->topic;?></td>
                                            
                                        </tr>
                                    <?php } ?>

                            </table>
                          </div>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>


