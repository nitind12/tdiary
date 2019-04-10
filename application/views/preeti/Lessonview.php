

<div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                 <h2>View Lesson Plan</h2>
            </div>
                <div class="module-body">
                    <form  id="myform" name="myform" class="form-horizontal row-fluid">

                                <table class="table table-striped table-bordered table-condensed">  
                                    <tbody>
                                        <tr>
                                               <td> Course Name:<br>
                                                        
                                                            <select tabindex="1" data-placeholder="Select here.." class="span8" name="txtcourse" id="txtcourse">
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
                                                    Section:<br>
                                                        <select tabindex="1"data-placeholder="Select here.." class="span8" name="txtsection" id="txtsection"  >
                                                                <option value ="">Select here..</option>
                                                                 <option value ="A">A</option>
                                                                 <option value ="B">B</option>
                                                                 <option value ="C">C</option>
                                                                 <option value ="D">D</option>
                                         
                                                             </select>
                                                </td>

                                                   <td>
                                                        Subject:<br>
                                                        
                                                        <input type="text" id="txtsubject" name="txtsubject" class="span8">                                                   
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
                                                
                                                <input type="button" class="btn btn-primary" name="btnlesssonsubmit" value="submit" id="btnlesssonsubmit">
                                             </div>
                                            </div>
                              </form>
                              <br>

                                    <div>
                                        
                                           <table class="table table-striped table-bordered table-condensed"
                                            id="lessonhere" name="lessonhere"> 
                                        </table>
                                     </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                             

  <!--    
                                     view database in page -->
                                       <!-- 	<table class="table table-striped table-bordered table-condensed">
                                        		<tr style="text-align: left">
                                                 

                                                 .00
                                                    
                                                    <th>lecture_id</th>
                                                    <th>Subject</th>
                                        			<th>Time Duration</th>
                                        			<th>Start Time</th>
                                        			<th>End Time</th>
                                        			<th>Date</th>
                                                    <th>Topic</th>
                                        			<th>Unit</th>
                                        			
                                        			<th>Lecture No</th>
                                        		</tr>
                                        	<?php foreach ($t_diary as $item) { ?>
                                        		<tr>
                                        		
                                                  
                                                    <td><?php echo $item->lesson_id ;?></td>
                                                    <td><?php echo $item->subject_id ;?></td>
                                                    <td><?php echo $item->time_duration ;?></td>
                                        			<td><?php echo $item->start_time;?></td>
                                        			<td><?php echo $item->end_time;?></td>
                                        			<td><?php echo $item->date;?></td>
                                        			<td><?php echo $item->topic;?></td>
                                        			<td><?php echo $item->unit ;?></td>
                                        			<td><?php echo $item->no_of_lecture ;?></td>
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
        
-->