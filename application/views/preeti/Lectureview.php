<div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">bnjbjnkjn
                  <h2>Lecture Plan</h2>
            </div>
                <div class="module-body">

                <form  method="post" name="mylectureviewform"  id="mylectureviewform"   action="<?php echo site_url('Lview_controller/savingdata   ');?>"  class="form-horizontal row-fluid">              

                            <table class="table table-striped table-bordered table-condensed">                          
                                <tbody>
                                        <tr>
                                            
                                        
                                                <td>        
                                            
                                                Course Name:<br>
                                                        
                                                            <select tabindex="1" data-placeholder="Select here.." class="span8"  id="course" name="course">
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
                                               

                                                    <td colspan="2">                                    
                                                        Facutly Name:   <br>
                                                        
                                                        <input type="text" id="txtfaculty" name="txtfaculty" class="span8">
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
                                                
                                                     <input type="button" class="btn btn-primary" name="btnlecturesubmit" value="submit" id="btnlecturesubmit">
                                                </div>
                                            </div>
                                </form>
                                <br>

                                 <div>
                                        
                                           <table class="table table-striped table-bordered table-condensed"
                                            id="lecturehere" name="lecturehere"> 
                                        </table>
                                     </div>
                            </div>
                        </div>
                    </div>
                </div>
                



 

        
