<style type="text/css">
  .classBox{font-size: 13px !important; text-align: left; margin: 10px}
</style>
<div class="content">
  <div class="module">
    <div class="module-head">
      <h1>View_Class/Edit_class</h1>
    </div>
      
      <div class="btn-box-row row-fluid" >
       
       <?php foreach($cls_in_session as $item){?>
        <div class="btn-box-row row-fluid  span2"style="background: #f0f0f0; border-radius: 12px; padding: 3px; vertical-align: top; color: #000090; border: #808080 dotted 1px; margin: 10px">
        <div style="float: right: border: #ff0000 solid 0px;"> 
          <a href="<?php echo site_url('Main/deleteClass/'.$item->add_class_id);?>" class="btn btn-danger delete-class-warning" style="padding: 0px 3px; float: right;" onclick="return confirm('Are you sure')">&times;</a>
        </div>
          <div class="btn-box-row row-fluid"  style="border: #ff0000 solid 0px; float: left">
              Session:<?php echo $item->session_id?><br>
              <b><?php echo $item->course_id.'-'.$item->semester_id.' ('.$item->section_id.')';?><br><u></u></b>
          
          </div>
      </div>
    <?php } ?>
</div>
 </div>
  <!-- The Modal -->
      