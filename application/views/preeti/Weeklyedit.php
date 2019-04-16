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
                  <?php 
                  } ?>
                </tbody>
            </table>
        </div>

          <form  method="post" name="weeklyedit"  id="weeklyedit"   action="<?php echo site_url('Weeklyedit_controller/savingdata/'.$item->add_class_id.'/'.$item->session_id.'/'.$item->course_id);?>"  class="form-horizontal row-fluid">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped" width="100%">
                                   
                  <?php foreach ($add_class_in as $item) { ?>
                            <input type="hidden" value="<?php echo $item->add_class_id;?>"
                            name="addclass_id[]" id="sid_<?php echo $item->add_class_id;?>">
                          <?php }
                          ?>  

                                    <tbody>




                                              <tr>
                                                  <td>Week No:  <br>                                   
                                                        <input type="text" id="week" name="week" class="span8">
                                                  </td>

                                                  <td>Start Date:<br>
                                                        <input type="date" id="startdate" name="startdate" class="span8">
                                                  </td>

                                                    <td colspan="2">End Date:<br>
                                                        <input type="date" id="enddate" name="enddate" class="span4">
                                                    </td>
                                              </tr>

                                                

                                            <tr>
                                                 <th colspan="4"><div class="control-group">
                                                    <label class=" span3 control-label" ><h3>Lecture Analysis</h3></label> 
                                                    </div>
                                                </th>
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
                                            
                                          
                                                 <td>No. Of Extra Taken :
                                                      <input type="number" id="extra_taken" name="extra_taken" class="span8">
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                 <td>No. Of Lecture Actual Taken :<br>
                                                      <input type="number" id="actual_taken" name="actual_taken" class="span8">  
                                                  </td>
                                           
                                                  <td colspan="3">Description Of Topic:<br>
                                                        <textarea id="topic" name="topic" class="span8" rows="4" cols="20" ></textarea>
                                                  </td>
                                            </tr>

                                             <tr>
                                                 <td colspan="4">                                    
                                                   <button style="float:right" type="submit" name="save" class=" span3 btn">Submit</button>
                                                 </td>
                                            </tr>   

                                    </tbody>
                               </table>
                          </form>
                      </div>

                        <table class="table table-striped table-bordered table-condensed">

                                <tr style="text-align: left">
                            
                                    <th>Week no</th>

                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>No Of Lecture Schedule</th>
                                    <th>No Of Lost Due To Holiday</th>
                                    <th>No Of Lost Due To CL</th>
                                    <th>No Extra Taken</th>  
                                    
                                        
                                    <th>No Of Lecture Actual Taken</th>
                                    <th> Desc of Topic</th>    
                                    <th>Delete</th>                            
                                </tr>

                                  <?php foreach ($t_diary as $item) { ?>

                                        <tr id="clickedit">
                                            <td><?php echo $item->week_id; ?></td>
                                            <td><?php echo $item->startdate;?></td>
                                            <td><?php echo $item->enddate;?></td> 
                                           
                                            <td><?php echo $item->no_of_lecture_schedule;?></td>
                                            <td><?php echo $item->no_of_lost_due_to_holiday;?></td>
                                            <td><?php echo $item->no_of_lost_due_to_cl;?></td>
                                            <td><?php echo $item->no_extra_taken;?></td>
                                                                                      
                                            <td><?php echo $item->no_of_lecture_actual_taken;?></td>
                                            <td><?php echo $item->description_of_topic;?></td>
                                            <td><a href="<?php echo site_url('Weeklyedit_controller/del1/' . $item->week_id)?>" class="btn " onclick="return confirm('Are you sure')">Delete</a></td>

                                        </tr>
                                    <?php } ?>

                            </table>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>


