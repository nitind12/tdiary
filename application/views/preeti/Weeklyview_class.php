
<style type="text/css">
  .classBox{font-size: 13px !important; text-align: left; margin: 10px}
</style>



<div class="content">
    <div class="module">
        <div class="module-head">
             <h2>Weekly Plan</h2>
        </div>
      
       <div class="module-body">
            <div class="btn-box-row row-fluid" >

              <?php 
                $data=array(
                  'name'=>'frmweeklyviewclass',
                  'id'=>'frmweeklyviewclass'
                );
                echo form_open('Weeklyedit_controller/weekly_view', $data);
          ?>

          
              <?php foreach($cls_in_session as $item){?>

                <div class="btn-box-row row-fluid  span5"style="background: #f0f0f0; border-radius: 12px; padding: 3px; vertical-align: top; color: #000090; border: #808080 dotted 1px; margin: 10px">

                    <div class="btn-box-row row-fluid"  style="border: #ff0000 solid 0px; float: left">

                     <!-- <a href="<?php //echo site_url('Weeklyedit_controller/weekly_view/'.$item->add_class_id.'/'.$item->session_id.'/'.$item->course_id);?>" id="<?php echo $item->add_class_id;?>">     -->   

                         <a class="btn-box-row row-fluid  weeklyviewclass" id="<?php echo $item->add_class_id . "~" . $item->session_id . "~" . $item->course_id;?>" >
        

                            Session:<?php echo $item->session_id?><br>
                            <b><?php echo $item->course_id.'-'.$item->semester_id.' ('.$item->section_id.')';?><br><u><?php echo $item->subject_id;?></u></b>
                         </a>
                    </div>
                </div>
                  

                 <?php } ?>
                    <input type="hidden" name="addclassidED" id="addclassidED">
                    <input type="hidden" name="sessionidED" id="sessionidED">
                    <input type="hidden" name="courseidED" id="courseidED">
                    
                    <?php
                    echo form_close();
                    ?>
        </div>
      </div>
    </div>
</div>
