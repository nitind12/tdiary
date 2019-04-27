<div class="content">
  <div class="module">
    <div class="module-head">
      <h1>FORMS</h1>
    </div>
          
         <div class="btn-box-row row-fluid">
          <?php
            $data = array(
              'name' => 'frmformSelected',
              'id' => 'frmformSelected'
            );
            echo form_open('Main/Edit_Form_controller', $data); 
          ?>

           <?php foreach($f4_ as $item){?>
             <div class="btn-box-row row-fluid" >
       
             <div class="btn-box-row row-fluid" >
                <button type="button" class="btn-box big span3" data-toggle="modal" data-target="#myModal">
                    <i class="icon-briefcase" id="btnaddclass"name="btnaddclass"></i>
                    <b> <div class="btn-box-row row-fluid" ><?php echo $item->form_type_name?></div></b>
              </button>
               </div>
   
                <?php 
              } ?>
          </div>
                         <input type="hidden" name="mtypeidfrm" id="mtypeidfrm">
              <input type="hidden" name="mtypenamefrm" id="mtypenamefrm">
              <?php
              echo form_close();
              ?>

      </div>
 </div>
</div>
