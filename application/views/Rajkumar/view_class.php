

<div class="span9">
          <div class="content">

            <div class="module">
              <div class="module-head">
                <h1>Edit Assignment</h1>
              </div>
              <div class="module-body">
                 <div class="btn-box-row row-fluid" >
       
<<<<<<< HEAD
      <div class="btn-box-row row-fluid" >      
  <!--php //foreach($cls_in_session as $item){?>
      <!---div class="btn-box-row row-fluid  btn-box big span4"style=" float: left; color: #000090;">
=======
      <div class="btn-box-row row-fluid" >
        <a href="<?php echo site_url('assignmentcontroller/assignment_edit_controller/'.$item->add_class_id.'/'.$item->session_id);?>" id="<?php echo $item->add_class_id;?>" onclick="submit_form(); return false;">
          <form method="post" name="form_name_here" id="form_name_here"> 
            <input type="hidden" value="<?php echo date("Y-m-d")?>" name="date" id="date"><?php 
                    echo date("D-d-M-Y")?> </div>
                   
          </form>
        </a>

  <?php foreach($cls_in_session as $item){?>
      <div class="btn-box-row row-fluid  btn-box big span4"style=" float: left; color: #000090;">
>>>>>>> parent of d743830... update
          <a href="<?php echo site_url('assignmentcontroller/assignment_edit_controller/'.$item->add_class_id.'/'.$item->session_id);?>" id="<?php echo $item->add_class_id;?>">
          <div class="btn-box-row row-fluid span2" style="font-size: 11px !important; text-align: left">
          <b>Session:<?php echo $item->session_id?></b>
      
          <b>Course:<?php echo $item->course_id?></b>
      
          <b>Semester:<?php echo $item->semester_id?></b>
          
          <b>Section:<?php  echo $item->section_id?></b>
          
<<<<<<< HEAD
          <b>Subject:<?php echo $item->subject_id;?></b-->

         

       
      <?php foreach($cls_in_session as $item){?>
      <div class="btn-box-row row-fluid  span5"style="background: #f0f0f0; border-radius: 12px; padding: 3px; vertical-align: top; color: #000090; border: #808080 dotted 1px; margin: 10px">
          <div class="btn-box-row row-fluid"  style="border: #ff0000 solid 0px; float: left">
            <a href="<?php echo site_url('assignmentcontroller/assignment_edit_controller/'.$item->add_class_id.'/'.$item->session_id);?>" id="<?php echo $item->add_class_id;?>">
              Session:<?php echo $item->session_id?><br>
              <b><?php echo $item->course_id.'-'.$item->semester_id.' ('.$item->section_id.')';?><br><u><?php echo $item->subject_id;?></u></b>
          </a>
          </div>
=======
          <b>Subject:<?php echo $item->subject_id;?></b>

         
>>>>>>> parent of d743830... update
      </div>


      </a>
    </div>
      <?php 
        }
      

       ?>
     </div>
   </div>
 </div>
</div>
</div>
</div>




