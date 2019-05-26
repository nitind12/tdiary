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

            <div class="alert">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Note!</strong> For Edit Double Click!
                  </div>

          
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
                           <td><b><?php echo $item->subject_name;?></b></td>
                        </tr>        
                    <?php  } ?>
                </tbody>
            </table>
        </div>



          <form  method="post" name="weeklyedit"  id="weeklyedit"    class="form-horizontal row-fluid" action="<?php echo site_url('Weeklyedit_controller/savingdata/'.$item->add_class_id.'/'.$item->session_id.'/'.$item->course_id);?>">

               
                <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped" width="100%">
                                   
                      <?php foreach ($add_class_in as $item) { ?>
                          <input type="hidden" value="<?php echo $item->add_class_id;?>" name="addclass_id[]"  id="sid_<?php echo $item->add_class_id;?>">

                           <input type="hidden" value="<?php echo $item->subject_id; ?>" name="subject_id" id="subject_id"> 
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

                                      <td>Start Date:<br>
                                          <input type="date" id="startdate" name="startdate" class="span8"  required="required">
                                      </td>

                                      <td>End Date:<br>
                                          <input type="date" id="enddate" name="enddate" class="span12"  required="required">
                                      </td>

                                          <td>No. Of Lost Due To Holiday:
                                            <input type="number" id="due_to_holiday" name="due_to_holiday" class="span8"  required="required">
                                        </td>

                                  </tr>


                                  <tr>
                                      <td>No. Of Lost Due To College Leave(CL):
                                            <input type="number" id="due_to_cl" name="due_to_cl" class="span8"  required="required">
                                        </td>

                                         <td>No. Of Lecture Schedule:
                                            <div class="span8"id="Lecture_schedule" name="Lecture_schedule" ></div>
                                            <input type="hidden" value="" name="Lecture_schedule_" id="Lecture_schedule_">
                                        </td>

                                       <td>No. Of Extra Taken :
                                          <div id="extra_taken" name="extra_taken" class=" span8"  required="required"></div>
                                           <input type="hidden" value="" name="extra_taken_" id="extra_taken_">
                                      </td>
                                      

                                    
                                  </tr>


                                  <tr>
                                     
                                        <td>No. Of Arrangement :<br>
                                            <div id="Arrangement" name="Arrangement" class=" span8"  required="required"></div>
                                            <input type="hidden" value="" name="Arrangement_" id="Arrangement_">
                                         </td>

                                        <td colspan="2">No. Of Lecture Actual Taken :<br>
                                            <div class="type span8"id="Acual_Lecture_taken" name="Acual_Lecture_taken" ></div> 
                                            <input type="hidden" value="" name="Acual_Lecture_taken_" id="Acual_Lecture_taken_"> 
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
                         
                        <br>

                        <table class="table table-striped table-bordered table-condensed">

                                <tr style="text-align: left">
                          
                                    <th align="center">Week No</th>
                                    <th align="center">Start Date</th>
                                    <th align="center">End Date</th>
                                  
                                    <th align="center">Holiday</th>
                                    <th align="center">CLG.Leave</th>
                                      <th align="center">L.Schedule</th>
                                    <th align="center">L.Extra</th>  
                                      <th align="center">Arrangement</th>  
                                    <th align="center">L.Actual</th>
                                 <!--     <th align="center">Details</th>   -->
                                    <th align="center">Delete</th>                            
                                </tr>
                                
                                  <?php foreach ($t_diary as $item) { ?>   
                                      <tr>

                                           <td  class="weekdata  weektd"  id="<?php echo $item->week_id.'-week_id';?>"><?php echo $item->week_id ?></td>
                                           


                                            <td  class="weekdata  weektd"   id="<?php echo $item->week_id.'-start_date';?>"><input type="hidden" name="start_date" value="?php echo $item->start_date;?>"><?php echo $item->start_date;?></td>

                                            <td  class="weekdata  weektd"   id="<?php echo $item->week_id.'-end_date';?>"><input type="hidden" name="end_date" value="?php echo $item->end_date;?>"><?php echo $item->end_date;?></td> 
                                           
                                          

                                            <td class="weekdata  weektd"   id="<?php echo $item->week_id.'-no_of_lost_due_to_holiday';?>"><?php echo $item->no_of_lost_due_to_holiday;?></td>

                                            <td class="weekdata  weektd"   id="<?php echo $item->week_id.'-no_of_lost_due_to_cl';?>"><?php echo $item->no_of_lost_due_to_cl;?></td>

                                              <td class="weekdata  weektd"   id="<?php echo $item->week_id.'-no_of_lecture_schedule';?>"><?php echo $item->no_of_lecture_schedule;?></td>

                                            <td class="weekdata  weektd"   id="<?php echo $item->week_id.'-no_extra_taken';?>"><?php echo $item->no_extra_taken;?></td>
                                                       
                                             <td class="weekdata  weektd"   id="<?php echo $item->week_id.'-arrangement';?>"><?php echo $item->arrangement;?></td>  

                                            <td class="weekdata  weektd"   id="<?php echo $item->week_id.'-no_of_lecture_actual_taken';?>"><?php echo $item->no_of_lecture_actual_taken;?></td>


                                      <!--    <td><a href="<?php //echo site_url('Weeklyedit_controller/details/' .$item->add_class_id.'/'.$item->start_date .'/'.$item->end_date. '/'.$item->week_id);?>" class="btn btn-primary">Details</a></td>   -->

                                            <td>

                                              <a href="<?php echo site_url('Weeklyedit_controller/del1/' . $item->week_id)?>" class="btn btn-danger icon-trash" onclick="return confirm('Are you sure')"></a></td>

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


