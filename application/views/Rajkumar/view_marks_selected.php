<div class="content">
  <div class="module">
    <div class="module-head">
      <h1>VIEW-MARKS</h1>
    </div>
          
         <div class="btn-box-row row-fluid" >
          <?php
            $data = array(
              'name' => 'frmviewSelected',
              'id' => 'frmviewSelected'
            );
            echo form_open('Test/vie_controller', $data); 
          ?>
          <?php foreach($marks_type_ as $item){?>
             
               <div class="btn-box-row row-fluid  btn-box big span5">
                <div class="btn-box-row row-fluid viewtestclass" id="<?php echo $item->marks_type_id . "~" . $item->marks_name;?>">
        
                    <i class="icon-gift" id="btnaddclass"name="btnaddclass"></i>
                            <br>
                      <b><?php echo $item->marks_name?></b>
         
                </div>
                </a>
              </div>
            <?php 
              } ?>
              <input type="hidden" name="mtypeid1" id="mtypeid1">
              <input type="hidden" name="mtypename1" id="mtypename1">
              <?php
              echo form_close();
              ?>

      </div>
 </div>
</div>
