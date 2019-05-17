

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

          
                  <table class="table table-bordered table-striped  display" >

                        <div class="control-group">
                          <label class="control-label" for="basicinput">Upload Notes</label>
                          <div class="controls">
                            <input type="file" name="pic_file" class="form-control"  id="pic_file" class="span8">
                            <input type="hidden" value="<?php echo date("Y-m-d")?>" name="dateup" id="dateup"></td>
                          </div>
                        </div>
                        
                        <div class="control-group">
                          <div class="controls" style="float:right">
                            <button type="submit" class="btn btn-primary" id="btnaddclass">Upload</button>
                          </div>
                        </div>

          
                  </table>
                  <br>

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
    


    