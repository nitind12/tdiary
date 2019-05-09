        <div class="content">
            <div class="module">
              
              <div class="module-body">
                <?php
                    $data = array(
                      'name' => 'frmclass',
                    'id' => 'frmclass'
                  );
                     echo form_open_multipart('Main/Upload_controller', $data); 
                  ?>
                  <span class="form-horizontal row-fluid">                  
                          <div class="control-group">
                      <label class="control-label" for="basicinput">upload Notes</label>


                  <div class="control-group">
                      <label class="control-label" for="basicinput">Upload Notes</label>
                      <div class="controls">
                        <input type="file" name="pic_file" class="form-control"  id="pic_file" class="span8">
                        <!--input type="file" name="syllabus_pdf"id="syllabus_pdf" placeholder="syllabus_pdf" class="span8"-->
                      </div>
                    </div>
                    
                    <div class="control-group">
                      <div class="controls">
                        <button type="submit" class="btn" id="btnaddclass">Upload</button>
                      </div>
                    </div>
                  </form>
              </div>
            </div>

            
            
          </div>