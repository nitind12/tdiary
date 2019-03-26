

<div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                <h2>Weekly Plan</h2>
            </div>
                <div class="module-body">
                    <form  method="post" id="myform2" name="myform2"   action="<?php echo site_url('Weeklyview_controller/savingdata');?>"   class="form-horizontal row-fluid">

                                <table class="table table-striped table-bordered table-condensed">                          
                                    <tbody>
                                        <tr>
                                            
                                                <td>  
                                            
                                                      Course Name:<br>
                                                        
                                                            <select tabindex="1" data-placeholder="Select here.."
                                                             class="span8"  name="course" id="course">
                                                                <option value="">Select here..</option>
                                                                <option value="BCA">BCA</option>
                                                                <option value="BBA">BBA</option>
                                                                <option value="B.COM">B.COM</option>
                                                                <option value="POLY TECHNIQUE">POLY TECHNIQUE</option>
                                                                <option value="BSC">BSC</option>
                                                                <option value="HM">HM</option>
                                                            </select>
                                                
                                                 </td>

                                                    <td>Semester:<br>
                                                            <input type="number" id="txtsemester" name="txtsemester" class="span8">
                                                    </td>


                                                    <td>                                    
                                                            Subject Name:   <br>
                                                        
                                                        <input type="text" id="txtsubject" name="txtsubject" class="span8">
                                                    </td>
                                         </tr>
                                        
                                        <tr>
                                                    <td>                                    
                                                            Week No.:   <br>
                                                        
                                                        <input type="text" id="week" name="week" class="span8">
                                                    </td>

                                                    <td>                                    
                                                            Start Date:   <br>
                                                        
                                                        <input type="date" id="startdate" name="startdate" class="span8">
                                                    </td>

                                                    <td>                                    
                                                            End Date:   <br>
                                                        
                                                        <input type="date" id="enddate" name="enddate" class="span8">
                                                    </td>
                                        </tr>

                                            <tr>
                                                 <th colspan="3"><div class="control-group">
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
                                                    No. Of Lost Due To CL:
                                                      <input type="number" id="due_to_cl" name="due_to_cl" class="span8">
                                                    
                                                </td>
                                            <tr>
                                            <tr>

                                                 <td>
                                                    No. Of Extra Taken :
                                                      <input type="number" id="extra_taken" name="extra_taken" class="span8">
                                                    
                                                </td>


                                                 <td>
                                                    No. Of Lecture Actual Taken :<br>
                                                      <input type="number" id="actual_taken" name="actual_taken" class="span8">
                                                    
                                                </td>
                                           
                                                <td>Description Of Topic:<br>
                                                        <textarea id="topic" name="topic" class="span8" rows="5"  cols="30" ></textarea>
                                                </td>
                                            </tr>
                                             <tr>
                                                <td colspan="3">                                    
                                                   
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
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

        



