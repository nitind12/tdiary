

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
                        <!--input type="file" name="syllabus_pdf"id="syllabus_pdf" placeholder="syllabus_pdf" class="span8"-->
                      </div>
                    </div>
                    
                    <div class="control-group">
                      <div class="controls" style="float:right">
                        <button type="submit" class="btn btn-primary" id="btnaddclass">Upload</button>
                      </div>
                    </div>
          
                  </table>

            </div>
         

            </form>
        </div>
    </div>
</div>
    


    