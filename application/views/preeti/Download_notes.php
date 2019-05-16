

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
                  <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%">
                    <thead>
                     
                    </thead>

                      <?php foreach ($downloads as $item) {?>
                        
                        <tr><td><a href="<?php  echo base_url('./assets/upload_notes/'. $item->upload_notes);?>"><?php echo $item->upload_notes;?></a>
                        </td>
                        <td>
                      <td><?php echo $item->faculty_id;?>
                         </td>
                      <?php }
                      ?>
                    </div>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
                 



    