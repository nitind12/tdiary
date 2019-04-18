
<!-- Read More -->
<style type="text/css">
    .show-read-more .more-text{
       display: none;
    }
</style>


<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h2>Weekly Plan</h2>
           </div>

        <div class="module-body table">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%">
                <thead>
                    <tr>
                       <th align="center">Session:</th>
                        <th align="center">Course:</th>
                        <th align="center">Semester:</th>
                         <th align="center">Section: </th>  
                        <th align="center">Subject: </th> 
                                           
                  </tr>
                </thead>


                <tbody>
                    <?php foreach($add_class_in as $item){?>
                        <tr >
                            <td><b><?php echo $item->session_id?></b> </td>
                            <td><b><?php echo $item->course_id?></b> </td>
                            <td><b><?php echo $item->semester_id?></b> </td>
                            <td><b><?php echo $item->section_id;?></b></td>
                           <td><b><?php echo $item->subject_id;?></b></td>
                        </tr>        
                    <?php  } ?>
                </tbody>
            </table>
        </div>



          <form  method="post" name="weeklyedit"  id="weeklyedit"   action="<?php echo site_url('Weeklyedit_controller/savingdata/'.$item->add_class_id.'/'.$item->session_id.'/'.$item->course_id);?>"  class="form-horizontal row-fluid">


                <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped" width="100%">
                                   
                      <?php foreach ($add_class_in as $item) { ?>
                          <input type="hidden" value="<?php echo $item->add_class_id;?>" name="addclass_id[]"                                    id="sid_<?php echo $item->add_class_id;?>">
                      <?php } ?>  

                              <thead>
                                  <tr>
                                      <th colspan="3">
                                          <div class="control-group">
                                              <label class=" span3 control-label" >
                                                  <h3>Lecture Analysis</h3>
                                              </label> 
                                          </div>
                                      </th>
                                  </tr>
                              </thead>

                              <tbody>
                                  <tr>

                                      <td>Week No:  <br>                                   
                                          <input type="text" id="week" name="week" class="span8">
                                      </td>

                                      <td>Start Date:<br>
                                          <input type="date" id="startdate" name="startdate" class="span8">
                                      </td>

                                      <td>End Date:<br>
                                          <input type="date" id="enddate" name="enddate" class="span8">
                                      </td>
   
                                  </tr>


                                  <tr>
                                       <td>No. Of Lecture Schedule:
                                            <input type="number" id="Lecture_schedule" name="Lecture_schedule" class="span8">
                                        </td>

                                        <td>No. Of Lost Due To Holiday:
                                            <input type="number" id="due_to_holiday" name="due_to_holiday" class="span8">
                                        </td>

                                        <td>No. Of Lost Due To College Leave(CL):
                                            <input type="number" id="due_to_cl" name="due_to_cl" class="span8">
                                        </td>
                                  </tr>


                                  <tr>
                                      <td>No. Of Extra Taken :
                                          <input type="number" id="extra_taken" name="extra_taken" class="span8">
                                      </td>
 
                                      <td colspan="2">No. Of Lecture Actual Taken :<br>
                                          <input type="number" id="actual_taken" name="actual_taken" class="span4">  
                                      </td>
                                           

                                               <!--   <td colspan="4">Description Of Topic:<br>
                                                        <textarea id="topic" name="topic" class="span8" rows="5" cols="30" ></textarea>
                                                  </td>   -->
                                               </tr>

                                             <tr>
                                                 <td colspan="4">                                    
                                                   <button style="float:right" type="submit" name="save" class="btn btn-primary ">
                                                   Submit</button>
                                                 </td>
                                            </tr>   

                                    </tbody>
                               </table>
                          </form>
                     
<hr/>
 

                        <table class="table table-striped table-bordered table-condensed">

                                <tr style="text-align: left">
                            
                                    
                                    <th align="center">Start Date</th>
                                    <th align="center">End Date</th>
                                    <th align="center">No Of<br> Lect Schedule</th>
                                    <th align="center">No Of<br> Lost <br>Due To Holiday</th>
                                    <th align="center">No Of Lost<br> Due To CL</th>
                                    <th align="center">No Extra Taken</th>  
               
                                    <th align="center">No Of <br>Lect Actual Taken</th>
                                    <th align="center">Details</th>
                                  
                                  <th align="center"> Details</th> 
                                    <th align="center">Delete</th>                            
                                </tr>
                                  <?php foreach ($t_diary as $item) { ?>

                                         
                                        <tr id="clickedit">
                                            <td><input type="hidden" name="start_date" value="?php echo $item->start_date;?>"><?php echo $item->start_date;?></td>
                                            <td><input type="hidden" name="end_date" value="?php echo $item->end_date;?>"><?php echo $item->end_date;?></td> 
                                           
                                            <td><?php echo $item->no_of_lecture_schedule;?></td>
                                            <td><?php echo $item->no_of_lost_due_to_holiday;?></td>
                                            <td><?php echo $item->no_of_lost_due_to_cl;?></td>
                                            <td><?php echo $item->no_extra_taken;?></td>
                                                                                      
                                            <td><?php echo $item->no_of_lecture_actual_taken;?></td>


                                          <td><a href="<?php echo site_url('Weeklyedit_controller/details/' .$item->add_class_id.'/'.$item->start_date .'/'.$item->end_date);?>" class="btn btn-primary">Details</a></td>

                                            <td>

                                              <a href="<?php echo site_url('Weeklyedit_controller/del1/' . $item->week_id)?>" class="btn btn-primary" onclick="return confirm('Are you sure')">Delete</a></td>

                                        </tr>
                                    <?php } ?>

                            </table>
                          </form>
                          </div>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>


