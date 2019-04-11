<style type="text/css">
  .classBox{font-size: 13px !important; text-align: left; margin: 10px}
</style>
<div class="content">
  <div class="module">
    <div class="module-head">
      <h3>ONLINE_ATTENDANCE</h3>
    </div>
      
      <div class="btn-box-row row-fluid" >
       
      <div class="btn-box-row row-fluid" >
      <!-- Button to Open the Modal -->
        <button type="button" class="btn-box big span4" data-toggle="modal" data-target="#myModal">
            <i class="icon-briefcase" id="btnaddclass"name="btnaddclass"></i>
          <b>Add-Class</b>
        </button>
      </div>
    <?php foreach($cls_in_session as $item){?>
      <div class="btn-box-row row-fluid  span2"style="background: #f0f0f0; border-radius: 12px; padding: 3px; vertical-align: top; color: #000090; border: #808080 dotted 1px; margin: 10px">
        <div style="float: right: border: #ff0000 solid 0px;"> 
          <a href="<?php echo site_url('Main/deleteClass/'.$item->add_class_id);?>" class="btn btn-danger delete-class-warning" style="padding: 0px 3px; float: right;" onclick="return confirm('Are you sure')">&times;</a>
        </div>
          <div class="btn-box-row row-fluid"  style="border: #ff0000 solid 0px; float: left">
            <a href="<?php echo site_url('main/takeattendance_controller/'.$item->add_class_id);?>" id="<?php echo $item->add_class_id;?>">
              Session:<?php echo $item->session_id?><br>
              <b><?php echo $item->course_id.'-'.$item->semester_id.' ('.$item->section_id.')';?><br><u><?php echo $item->subject_id;?></u></b>
          </a>
          </div>
      </div>
    <?php } ?>
</div>
 </div>
  <!-- The Modal -->
      <div class="modal fade" id="myModal" style="width:700px; height: 890px;">
        <div class="modal-dialog">
            <div class="modal-content">
      
        <!-- Modal Header -->
              <div class="modal-header">
                  <h4 class="modal-title">ADD-CLASS</h4>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <div class="modal-body">
                 <?php $this->load->view('ravi/add_class1');?>
               
               </div>
        
              <!-- Modal footer -->
              <div class="modal-footer">
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
        </div>
      </div>    
        <?php //$this->load->view('ravi/view_class');?>     
  </div>
</div>
</div>      