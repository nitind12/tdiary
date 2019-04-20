

<div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                 <h2>View Weekly Plan</h2>
            </div>
                <div class="module-body">
                    <form  method="post" id="myweek" name="myweek" class="form-horizontal row-fluid">

                                <table class="table table-striped table-bordered table-condensed">  
                                    <tbody>
                                        <tr>
                                               <td> Course Name:<br>
                                                        
                                                            <select  tabindex="1" data-placeholder="Select here.." class="span8" name="txtcourse" id="txtcourse">
                                                                <option value="">Select here..</option>
                                                                <option value="BCA">BCA</option>
                                                                <option value="BBA">BBA</option>
                                                                <option value="B.COM">B.COM</option>
                                                                <option value="POLY TECHNIQUE">POLY TECHNIQUE</option>
                                                                <option value="BSC">BSC</option>
                                                                <option value="HM">HM</option>
                                                            </select>
                                             </td>

                                                 <td>                                   
                                                        Semester:   <br>
                                                
                                                    <select tabindex="1" data-placeholder="Select here.." class="span8" name="txtsemester" id="txtsemester" >
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
                                                        Subject:<br>
                                                        
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
                                                        Start Date:<br>
                                                        
                                                        <input type="date" id="startdate" name="startdate" class="span8">                                                   
                                                </td> 

                                                      <td colspan="3">
                                                        End Date:<br>
                                                        
                                                        <input type="date" id="enddate" name="enddate" class="span4 ">                                                   
                                                </td> 
                                        </tr>


                                      </tbody>
                                  </table>
                                  <br>

                                       <div class="control-group">
                                              <div class="controls" style="float:left;">
                                                  <button type="Reset" class="btn btn-primary" name="save" value="Reset">Reset</button>
                                              </div>

                                                <div class="controls" style="float:left;">
                                                
                                                <input type="button" class="btn btn-primary" name="btnweeklysubmit" value="submit" id="btnweeklysubmit">
                                             </div>
                                            </div>
                              </form>
                              <br>

                                    <div>
                                        
                                           <table class="table table-striped table-bordered table-condensed"
                                            id="weeklyhere" name="weeklyhere"> 
                                        </table>
                                     </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    












<!--
 <div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                <h2>View Weekly Plan</h2> 
            </div>
                <div class="module-body">
                    <form  method="post" action="<?php echo site_url('Weeklyview_controller/savingdata');?>"
                                     class="form-horizontal row-fluid">       

                            <table class="table table-striped table-bordered table-condensed">

                                <tr style="text-align: left">
                                    <th>Session</th>
                                    <th>Course</th>
                                    <th>Semester</th>
                                    <th>Subject</th>
                                    
                                   
                                    <th>
                                         <table class="table table-striped table-bordered table-condensed">
                                            <th colspan="2"><center>Period</center></th>

                                            <th colspan="4"><center>Lecture Analysis</center></th>
                                            <tr>
                                                 <th>Start Date</th>
                                                 <th>End Date</th>
                                                 <th>No. Of lecture Scheduled</th>
                                                 <th>No. Of Lost Due To Holiday</th>
                                                 <th>No. Of Lost Due To CL </th>
                                                 <th>No. Of Extra Taken</th>
     
                                            </tr>
                                         </table>
                                    </th>
                               
                                   <th> No. of Lecture Actual Taken</th>

                                    <th> Description Of Topic</th>
                                </tr>

 
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>

-->


