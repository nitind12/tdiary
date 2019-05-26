<style type="text/css">
  .classBox{font-size: 13px !important; text-align: left; margin: 10px}
</style>

<div class="content">
  <div class="module">
    <div class="module-head">
      <h1>View Consolidate</h1>
    </div>
      
      <div class="btn-box-row row-fluid" >
       
      <?php foreach($cls_in_session as $item){?>

      <div class="btn-box-row row-fluid  span2"style="background: #f0f0f0; border-radius: 12px; padding: 3px; vertical-align: top; color: #000090; border: #808080 dotted 1px; margin: 10px">

          <div class="btn-box-row row-fluid"  style="border: #ff0000 solid 0px; float: left">
            <div class="btn-box-row row-fluid span10" style="background: #ffffff; border-radius: 12px; padding: 3px; vertical-align: top; color: #000090; border: #808080 dotted 1px; margin: 10px">

              <a href="<?php echo site_url('main/attendance_report_View_Consolidate2/'.$item->add_class_id.'/'.$item->session_id.'/'.$item->course_id.'/'.$item->semester_id.'/'.$item->subject_id);?>" id="<?php echo $item->add_class_id;?>">

                  Session:<?php echo $item->session_id?><br>
                  <b><?php echo $item->course_id.'-'.$item->semester_id.' ('.$item->section_id.')';?></b><br>
              </div> 
              
                <center><button style="float:top,left; vertical-align:bottom;  border-radius: 12px; border:2px solid grey" type="submit" name="save ">
                  <u><?php echo $item->subject_name;?></u></button></center></b>
                   
            </a>
          </div>
      </div>
    <?php } ?>
</div>
 </div>
 