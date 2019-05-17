<div class="span9">
    <div class="content">
         <div class="module">
            <div class="module-head">
              <div style="float:right">
                    <input type="hidden" value="<?php echo date("Y-m-d")?>" name="date" id="date"> <?php echo date("Y-m-d")?>
                </div>
                <h1>Upload Notes</h1>
                    
               <br>

            </div>

            <div class="module-body ">


                      <?php
                    $data = array(
                      'method'=>'post',
                      'name' => 'frmnotes',
                    'id' => 'frmnotes'
                  );
                     echo form_open_multipart('Main/save_notes_controller', $data); 
                  ?>


    <table>
      
          <tbody>
            <tr>
                <td >Session:<br>
                  
                         <select tabindex="1" data-placeholder="Select here.."class="span1"  name="Session" id="Session">
                                             <option value="">Select Session</option>
                                                <?php foreach ($Session1 as  $item) { ?>
                                                 <option value="<?php echo $item->s_id;?>">
                                                  <?php echo $item->session?></option>
                                                    <?php }?>
                                                 </select>
                    </td>

                    <td >Course_name:<br>
                       <select tabindex="1" data-placeholder="Select here.."class="span1"  name="Course_name" id="Course_name">
                                             <option value="">Select Course</option>
                                                <?php foreach ($course1 as  $item) { ?>
                                                 <option value="<?php echo $item->course_id;?>">
                                                  <?php echo $item->name_of_courses?></option>
                                                    <?php }?>
                                                 </select>
                      </td>
                    <td>Semester:<br>
                      <!--<input type="text" id="txtSemester" name="txtSemester" class="span8">-->
                      <select tabindex="1"data-placeholder="Select here.." class="span1" name="Semester" id="Semester" >
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
                  </tr>
                  <tr>
                    <td>Section:<br>
                      <!--<input type="text" id="txtSection" name="txtSection" class="span8">-->
                      <select tabindex="1"data-placeholder="Select here.." class="span1" name="Section" id="Section"  >
                        <option value ="">Select here..</option>
                       <option value ="A">A</option>
                       <option value ="B">B</option>
                       <option value ="C">C</option>
                       <option value ="D">D</option>
                       
                    </select>
                    </td>
                  
                    <td >Subject:<br>
                      <!--<input type="text" id="Subject" name="Subject" class="span8"  >-->
                      <select tabindex="1"data-placeholder="Select here.." class="span1" name="Subject" id="Subject" >
                       </select>
                    </td>
                  
                  
                    
                     
                  </tr>
  
                        
                    <tr> <td>   <div class="control-group">
                          <div class="controls" style="float:right">
                            <button type="submit" class="btn btn-primary" id="btnaddclass">Upload</button>
                          </div>
                        </div>
          </td></tr>
           
               
    </div></tbody></table>          </form>

                      <table class="table table-bordered table-striped  display" width="100%">
                         <thead>
                             <th>File</th>
                             <th>Date</th>
                             <th>faculty Name</th>
                             <th> Subject</th>
                             <th>Delete</th>

                        </thead>

                      <?php foreach ($downloads as $item) {?>

                        <tr><td><a href="<?php  echo base_url('./assets/upload_notes/'. $item->upload_notes);?>"><?php echo $item->upload_notes;?></a>
                        </td><td>
                                <?php echo $item->date_notes;?>
                        </td>
                        <td> <?php echo $item->faculty_id;?></td>
                       <td> <?php echo $item->subject_id;?></td>
                       
                           <td class="hideblock"><a href="<?php echo site_url('Main/del1/' . $item->notes_id)?>" class="btn btn-danger icon-trash " 
                                    onclick="return confirm('Are you sure')"></a></td>    
     

                      <?php }
                      ?>
                    </div>
                  </tr>
                </table>
            </div>
         

            </form>    

        </div>
    </div>
</div>
    


    