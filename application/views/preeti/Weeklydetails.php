<style type="text/css">
    .show-read-more .more-text{
       display: none;
    }

     .redcolor{
      color: #ff0000 !important;
    }
</style>


<style media="print">
  .hideblock{
      display:none;
    }
</style>


<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">

                <div style="float:right">
                    <input type="hidden" value="<?php echo date("Y-m-d")?>" name="date" id="date"> <?php echo date("Y-m-d")?>
                </div>
      
              <h1>Weekly Details</h1>
                     <span class="hideblock"> <a href="#" onclick="window.print()"><span class="btn  btn-primary icon-print" style="float:right" > Print</span> </a></span>
               <br>

            </div>

            <div class="module-body">
          
                <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%">
            
                      <thead>
                          <tr>
                              <!-- <th align="center">No_of_Lecture</th>  -->
                              <th align="center">Week_No</th>
                              <th align="center">StartDate</th>
                              <th align="center">EndDate</th>
                            
                              <th align="center">Holiday</th>
                              <th align="center">CLG.Leave</th>
                                <th align="center">L.Schedule</th>
                              <th align="cneter">L.Extra </th>
                                <th align="center">Arrangement</th>
                              <th align="center">L.Actual</th>
                          </tr>
                      </thead>
                      <tbody>
                      
                        <?php foreach ($t_diary as $item) { ?>
                           <tr>
                                <td><?php echo $item->week_id ?></td>
                                <td><?php echo $item->start_date ?></td>
                                <td><?php echo $item->end_date ?></td>
                            
                                <td><?php echo $item->no_of_lost_due_to_holiday ?></td>
                                <td><?php echo $item->no_of_lost_due_to_cl ?></td>
                                    <td><?php echo $item->no_of_lecture_schedule ?></td>
                                <td><?php echo $item->no_extra_taken ?></td>
                                    <td><?php echo $item->arrangement?></td>
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
                                  <th align="center">Lecture Type</th> 
                              </tr>

                              <?php foreach ($details as $item) { ?>
                                     <tr>
                                           <td><?php echo $item->date;?></td>
                                            <td><?php echo $item->unit;?></td>
                                            <td><?php echo $item->topic;?></td>

                                            <?php if(trim($item->lecture_type) == 'Arrangement' || trim($item->lecture_type) == 'Extra Lecture Taken'){?>
                                             <td class="redcolor">
                                                   <?php echo $item->lecture_type;?>
                                                </td>
                                            <?php }
                                               else
                                                  { ?>
                                                     <td>
                                                   <?php echo $item->lecture_type;?>
                                          <?php } ?>
                                  
                                </td>
                                              
                                            
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


