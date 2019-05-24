
<style type="text/css">
  .classBox{font-size: 13px !important; text-align: left; margin: 10px}
</style>

<div class="span9">
          <div class="content">

            <div class="module">
              <div class="module-head">
                 <?php foreach($marks_headerr_ as $item){?>
 
                <h1><?php echo $item->marks_name?>
                <?php 
            }
      

       ?>
     </h1>
              </div>
              <div class="module-body">
                 <div class="btn-box-row row-fluid" >
                     <?php
            $data = array(
              'name' => 'frmMarksedit',
              'id' => 'frmMarksedit'
            );
            echo form_open('Test/Testinternal_controller', $data); 
          ?>

      <div class="btn-box-row row-fluid" >
 
              <?php foreach($cls_in_session as $item){?>

              <div class="btn-box-row row-fluid  span2"style="background:#f0f0f0; border-radius:12px; padding:3px; vertical-align:top;     color: #000090; border: #808080 dotted 1px; margin: 10px">

                  <div class="btn-box-row row-fluid"  style="border: #ff0000 solid 0px; float: left">
                    
                      <div class="btn-box-row row-fluid span10" style="background: #ffffff; border-radius: 12px; padding: 3px; vertical-align: top; color: #000090; border: #808080 dotted 1px; margin: 10px">

                          <a class="btn-box-row row-fluid  testviewselected" id="<?php echo $item->add_class_id . "~" . $item->session_id . "~" . $item->course_id. "~" . $item->subject_id;?>" >
        

                              Session:<?php echo $item->session_id?><br>
                             <b><?php echo $item->course_id.'-'.$item->semester_id.' ('.$item->section_id.')';?></b><br>
                       </div>
                 
                          <center><button style="float:top,left; vertical-align:bottom; border-radius: 12px;  border:2px solid grey" type="submit" name="save ">
                        <u><?php echo $item->subject_name;?></u></button></center></b>
                         </div> </a>
            </div>
        
                 <?php 
        } 
        ?>
              <input type="hidden" name="addclassid" id="addclassid">
              <input type="hidden" name="sessionid" id="sessionid">
              <input type="hidden" name="courseid" id="courseid">
             
              <input type="hidden" name="subject_id" id="subject_id">
              <?php
              echo form_close();
              ?>

     </div>
   </div>
 </div>
</div>
</div>
</div>




