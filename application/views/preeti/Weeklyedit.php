
<div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                <h2>Weekly Plan</h2>
            </div>
                <div class="module-body">
                    <form  method="post" id="weeklyedit" name="weeklyedit" action="<?php echo site_url('Weeklyedit_controller/savingdata');?>" class="form-horizontal row-fluid">

                                <table class="table table-striped table-bordered table-condensed">                          
                                    <tbody>
                                        <tr>
                                                <td>  
                                            
                                                      Course Name:<br>
                                                        
                                                            <select tabindex="1" data-placeholder="Select here.."
                                                             class="span8"  name="txtcourse" id="txtcourse">
                                                                <option value="">Select Course</option>
                                                                <?php foreach ($course as  $item)   { ?>
                                                                <option value="<?php echo $item->s_no;?>"><?php echo $item->course_id ?></option>
                                                            <?php }?>
                                                            </select>
                                                
                                                 </td>

                                                     
                                                  <td>Semester:<br>
                                                    <select tabindex="1" data-placeholder="Select here.." class="span8" name="txtsemester" id="txtsemester">
                                                      <option value ="">Select here..</option>
                                                     <option value ="1">1</option>
                                                     <option value ="2">2</option>
                                                     <option value ="3">3</option>
                                                     <option value ="4">4</option>
                                                     <option value ="5">5</option>
                                                     <option value ="6">6</option>
                                                     <option value ="7">7</option>
                                                     <option value ="8">8</option>
                                                  </select>
                                            </td>


                                                    <td>                                    
                                                            Subject Name:   <br>
                                                        
                                                        <input type="text" id="txtsubject" name="txtsubject" class="span8">
                                                    </td>
                                            
                                           

                                                    <td>
                                                         Section:<br>
                                                        <select tabindex="1"data-placeholder="Select here.." class="span8" name="txtsection" id="txtsection"  >
                                                                <option value ="">Select here..</option>
                                                                 <option value ="A">A</option>
                                                                 <option value ="B">B</option>
                                                                 <option value ="C">C</option>
                                                                 <option value ="D">D</option>
                                         
                                                             </select>
                                                    </td>
                                             </tr>



                                             <tr>
                                                  <td>                                    
                                                            Week No:   <br>
                                                        
                                                        <input type="text" id="week" name="week" class="span8">
                                                    </td>

                                                <td>Start Date:<br>
                                                        <input type="date" id="startdate" name="startdate" class="span8">
                                                    </td>

                                                    <td colspan="2">End Date:<br>
                                                        <input type="date" id="enddate" name="enddate" class="span5">
                                                    </td>

                                                

                                            <tr>
                                                 <th colspan="4"><div class="control-group">
                                                    <label class=" span3 control-label" ><h3>Lecture Analysis</h3></label> 
                                                    </div>
                                                </th>
                                            </tr>

                                            <tr>
                                                 <td>
                                                    No. Of Lecture Schedule:
                                                      <input type="number" id="Lecture_schedule" name="Lecture_schedule" class="span8">
                                                    
                                                </td>

                                                <td>
                                                    No. Of Lost Due To Holiday:
                                                      <input type="number" id="due_to_holiday" name="due_to_holiday" class="span8">
                                                    
                                                </td>

                                                <td>
                                                    No. Of Lost Due To College Leave(CL):
                                                      <input type="number" id="due_to_cl" name="due_to_cl" class="span8">
                                                    
                                                </td>
                                            
                                            

                                                 <td>
                                                    No. Of Extra Taken :
                                                      <input type="number" id="extra_taken" name="extra_taken" class="span8">
                                                    
                                                </td>
                                         </tr>


                                                 <td>
                                                    No. Of Lecture Actual Taken :<br>
                                                      <input type="number" id="actual_taken" name="actual_taken" class="span8">
                                                    
                                                </td>
                                           
                                                <td colspan="3">Description Of Topic:<br>
                                                        <textarea id="topic" name="topic" class="span8" rows="4" cols="20" ></textarea>
                                                </td>
                                            </tr>
                                             <tr>
                                                <td colspan="4">                                    
                                                   
                                                            <button style="float:right" type="submit" name="save" 
                                                             class=" span3 btn">Submit</button>
                                                    
                                                </td>
                                        </tr>   

<!--
                                            
                                            <tr>
                                             
                                                 <th>
                                                    <center>    <h5>Week<br> no.</h5></center>
                                                </th>

                                                <th>
                                                     <table class="table table-striped table-bordered table-condensed"> 
                                                        <tr>
                                                            <th colspan="2">
                                                              <center>    <h5>Period</h5></center>
                                                            </th>

                                                            <th colspan="4">
                                                              <center>    <h5>Lecture Analysis</h5></center>
                                                            </th>

                                                       
                                                        </tr>

                                                        <tr>
                                                            <th>
                                                              <center>    <h5>Start Date</h5></center>
                                                            </th>

                                                            <th>
                                                              <center>    <h5>End Date</h5></center>
                                                            </th>

                                                            <th>
                                                              <center>    <h5>No.of Lecture Scheduled</h5></center>
                                                             </th>

                                                            <th>
                                                              <center>    <h5>No.of Lost Due To Holiday</h5></center>
                                                            </th>

                                                            <th>
                                                              <center>    <h5>No.of Lost Due To CL </h5></center>
                                                             </th>

                                                            <th>
                                                              <center>    <h5>No.Extra Taken</h5></center>
                                                            </th> 
                                                        </tr>    
                                                    </table>
                                                </th>


                                                        <th>
                                                            <center>    <h5>No.Of Lecture Actual Taken</h5></center>
                                                        </th>

                                                        <th>
                                                            <center>    <h5>Description Of Topic</h5></center>
                                                        </th>
                                               
                                                 </tr>


                                            <tr>
                                                <td>
                                                    <input type="number" id="txtunit" name="txtunit" class="span8">
                                                </td>



                                                <td>
                                                    <table class="table table-striped table-bordered table-condensed"> 
                                                        <tr>
                                                            <td>
                                                                <input type="date" id="txtunit" name="txtunit" class="span4">
                                                            </td>

                                                             <td>
                                                                <input type="date" id="txtunit" name="txtunit" class="span4">
                                                            </td>

                                                            <td>
                                                                 <input type="number" id="txtunit" name="txtunit" class="span3">
                                                            </td>

                                                             <td>
                                                                 <input type="number" id="txtunit" name="txtunit" class="span3">
                                                            </td>

                                                             <td>
                                                                 <input type="number" id="txtunit" name="txtunit" class="span3">
                                                            </td>

                                                            <td>
                                                                 <input type="number" id="txtunit" name="txtunit" class="span3">
                                                            </td>




                                                        </tr>
                                                    </table>
                                                </td>
                                         

                                              <td>
                                                    <input type="number" id="txtunit" name="txtunit" class="span8">
                                                </td>

                                                <td>
                                                    <input type="number" id="txtunit" name="txtunit" class="span8">
                                                </td>



-->

                                            </tr>
                                            </tbody>
                                     </table>
                                 </form>
                             </div>

                        <table class="table table-striped table-bordered table-condensed">

                                <tr style="text-align: left">
                                    <th>Session</th>
                                    <th>Course</th>
                                    <th>Sem</th>
                                    <th>sec</th>
                                    <th>Subject</th>
                                    <th>Week no</th>
                                    
                                      
                                                    
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
                                            <td><?php echo $item->session_id;?></td>
                                            <td><?php echo $item->course_id;?></td>
                                            <td><?php echo $item->semester_id ;?></td>
                                            <td><?php echo $item->section;?></td>
                                            <td><?php echo $item->subject_id ;?></td>
                                            <td><?php echo $item->week_id; ?></td>
                                           
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

        



