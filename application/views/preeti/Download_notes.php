

<div class="span9">
    <div class="content">
         <div class="module">
            <div class="module-head">
              <div style="float:right">
                    <input type="hidden" value="<?php echo date("Y-m-d")?>" name="date" id="date"> <?php echo date("Y-m-d")?>
                </div>
               
                    
               <br>

            </div>

            <div class="module-body ">

              <form id="frm_download_notes" name="frm_download_notes" class="form-horizontal row-fluid"action="<?php echo site_url('main/Download_controller');?>">

                   <table class="table table-striped table-bordered table-condensed"  >
    
      <!--<table class="table" >-->
                    <tbody>
                      <tr>
                         <td>Subject:<br>
                  <select tabindex="1"data-placeholder="Select here.." class="span8" name="Subject" id="Subject" >
                    <option value ="">Select here...</option>
                    <?php foreach ($subjects as  $item) { ?>
                                                 <option value="<?php echo $item->subject_id;?>">
                                                  <?php echo $item->subject_name?></option>
                                                    <?php }?>
                                                
                    
                  </select>
                </td>
                <td>
                     
                       <br> 
                        <button  style="float:left" type="button" class="btn btn-primary" name="btndownload_notes" value="submit" id="btndownload_notes">Submit</button>
                    
                </td>
              </tr>
            </tbody>
          </table>


               
        </form>
        <br/>
                  <!--table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%">
                    <thead>
                              <th>File</th>
                             <th>Date</th>
                             <th>faculty Name</th>
                             <th> Subject</th>
                             

                     
                    </thead>

                
                      <?php foreach ($downloads as $item) {?>
                        
                        <tr><td><a href="<?php  //echo base_url('./assets/upload_notes/'. $item->upload_notes);?>"><?php echo $item->upload_notes;?></a>
                        </td>
                        <td> <?php echo $item->date_notes;?></td>
                      <td><?php echo $item->faculty_id;?></td>
                         <td> <?php echo $item->subject_id;?></td>
                         </td>
                      <?php }
                      ?>
                    </div>
                  </tr>
                </table-->
              </div>

                <table class="table" border="1" id="download_noteshere">
            </table>
            </div>
          </div>
        </div>
                 



    