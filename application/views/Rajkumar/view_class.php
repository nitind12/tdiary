<div class="span9">
          <div class="content">

            <div class="module">
              <div class="module-head">
                <h1>Edit Assignment</h1>
              </div>
              <div class="module-body">
                 <div class="btn-box-row row-fluid" >
       
      <div class="btn-box-row row-fluid" >
       
      <?php foreach($cls_in_session as $item){?>
      <div class="btn-box-row row-fluid  span5"style="background: #f0f0f0; border-radius: 12px; padding: 3px; vertical-align: top; color: #000090; border: #808080 dotted 1px; margin: 10px">
          <div class="btn-box-row row-fluid"  style="border: #ff0000 solid 0px; float: left">
            <a href="<?php echo site_url('assignmentcontroller/assignment_edit_controller/'.$item->add_class_id.'/'.$item->session_id);?>" id="<?php echo $item->add_class_id;?>">
              Session:<?php echo $item->session_id?><br>
              <b><?php echo $item->course_id.'-'.$item->semester_id.' ('.$item->section_id.')';?><br><u><?php echo $item->subject_id;?></u></b>
          </a>
          </div>
      </div>
    <?php } ?>
</div>
   </div>
 </div>
</div>
</div>
</div>




