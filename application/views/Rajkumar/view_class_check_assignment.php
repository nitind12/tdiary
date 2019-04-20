<div class="span9">
          <div class="content">

            <div class="module">
              <div class="module-head">
                 <h1>View_Check_Assignment</h1>
              </div>
              <div class="module-body">
                 <div class="btn-box-row row-fluid" >
                     <?php
            $data = array(
              'name' => 'frmassignmentchecker',
              'id' => 'frmassignmentchecker'
            );
            echo form_open('Check_Assignment_Controller/check_assignment_marks_controller', $data); 
          ?>

      <div class="btn-box-row row-fluid">
  <?php foreach($cls_in_session as $item){?>
      <div class="btn-box-row row-fluid  btn-box big span4"style=" float: left; color: #000090;">
          <div class="btn-box-row row-fluid span2  assignmentchecker" id="<?php echo $item->add_class_id . "~" . $item->session_id;?>"  style="font-size: 11px !important; text-align: left">
          <b>Session:<?php echo $item->session_id?></b>
      
          <b>Course:<?php echo $item->course_id?></b>
      
          <b>Semester:<?php echo $item->semester_id?></b>
          
          <b>Section:<?php  echo $item->section_id?></b>
          
          <b>Subject:<?php echo $item->subject_id;?></b>

         
      </div>


      </a>
    </div>
      <?php 
        } 
        ?>
              <input type="hidden" name="addclassidCA" id="addclassidCA">
              <input type="hidden" name="sessionidCA" id="sessionidCA">
              <?php
              echo form_close();
              ?>

     </div>
   </div>
 </div>
</div>
</div>
</div>





         

       
  