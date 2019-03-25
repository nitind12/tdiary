

<div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                <h2>Weekly Plan</h2>
            </div>
                <div class="module-body">
                    <form  method="post" action="<?php echo site_url('Lview_controller/savingdata');?>"
                                     class="form-horizontal row-fluid">

                                <table class="table table-striped table-bordered table-condensed">                          
                        <tbody>
                                        <tr>
                                            
                                            <td colspan="2">  
                                            
                                                Course Name:<br>
                                                        
                                                            <select tabindex="1" data-placeholder="Select here.." class="span4"
                                                             name="course" id="course">
                                                                <option value="">Select here..</option>
                                                                <option value="BCA">BCA</option>
                                                                <option value="BBA">BBA</option>
                                                                <option value="B.COM">B.COM</option>
                                                                <option value="POLY TECHNIQUE">POLY TECHNIQUE</option>
                                                                <option value="BSC">BSC</option>
                                                                <option value="HM">HM</option>
                                                            </select>
                                                
                                             </td>

                                               <td colspan="2">Semester:<br>
                                                    <input type="text" id="txtsemester" name="txtsemester" class="span8">
                                                </td>

                                             </tr>

                                             <tr>
                                                <td colspan="2">                                    
                                                        Subject Name:   <br>
                                                        
                                                        <input type="text" id="txtsubject" name="txtsubject" class="span8">
                                                </td>

                                              


                                            
                                            <tr>
                                             
                                                 <th>
                                                    <center>    <h5>Week no.</h5></center>
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

        



