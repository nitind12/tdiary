<div class="span9">
          <div class="content">

            <div class="module">
              <div class="module-head">
                <h1>View_Assignment</h1>
              </div>
              <div class="module-body">
                 <div class="btn-box-row row-fluid" >
       
      <div class="btn-box-row row-fluid" >
        <?php
            $data = array(
              'name' => 'frmassignmentview',
              'id' => 'frmassignmentview'
            );
            echo form_open('Givenassignmentcontroller/view_assignment', $data); 
          ?>

  <?php foreach($cls_in_session as $item){?>
      <div class="btn-box-row row-fluid  span5"style="background: #f0f0f0; border-radius: 12px; padding: 3px; vertical-align: top; color: #000090; border: #808080 dotted 1px; margin: 10px">
          <div class="btn-box-row row-fluid"  style="border: #ff0000 solid 0px; float: left">
        <a class="btn-box-row row-fluid  span2  assignmentview" id="<?php echo $item->add_class_id . "~" . $item->session_id . "~" . $item->course_id;?>" >
        
               Session:<?php echo $item->session_id?><br>
              <b><?php echo $item->course_id.'-'.$item->semester_id.' ('.$item->section_id.')';?><br><u><?php echo $item->subject_id;?></u></b>
          </a>
          </div>
      </div>
        <?php 
        } 
        ?>
              <input type="hidden" name="addclassidAV" id="addclassidAV">
              <input type="hidden" name="sessionidAV" id="sessionidAV">
              <?php
              echo form_close();
              ?>
</div>
   </div>
 </div>
</div>
</div>
</div>




