<div class="content">
  <div class="module">
    <div class="module-head">
      <h1>EDIT-MARKS</h1>
    </div>
          
         <div class="btn-box-row row-fluid">
          <?php
            $data = array(
              'name' => 'frmMarksSelected',
              'id' => 'frmMarksSelected'
            );
            echo form_open('test/Edt_controller', $data); 
          ?>
           <?php foreach($marks_type_ as $item){?>
             
               <div class="btn-box-row row-fluid  btn-box big span5">
                 <!--a href="<?php //echo site_url('Test/Edt_controller/'.$item->marks_type_id.'/'.$item->marks_name);?>" id="<?php echo $item->marks_type_id;?>"-->
                <div class="btn-box-row row-fluid editmarksselected" id="<?php echo $item->marks_type_id . "~" . $item->marks_name;?>">
        
                    <i class="icon-gift" id="btnaddclass"name="btnaddclass"></i>
                            <br>
                      <b><?php echo $item->marks_name?></b>
         
                </div>
                </a>
              </div>
            <?php 
              } ?>
              <input type="hidden" name="mtypeid" id="mtypeid">
              <input type="hidden" name="mtypename" id="mtypename">
              <?php
              echo form_close();
              ?>

      </div>
 </div>
</div>
