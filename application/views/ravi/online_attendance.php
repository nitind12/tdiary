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
      <div class="btn-box-row row-fluid  btn-box big span4"style=" float: left; color: #000090;">
        <div class="class"> 
            <a href="" class="btn btn-danger delete-class-warning" style=" float: right;" >&times;</a>
          </div>
          <a href="<?php echo site_url('main/takeattendance_controller/'.$item->s_no);?>" id="<?php echo $item->s_no;?>">
          <div class="btn-box-row row-fluid span2" style="font-size: 11px !important; text-align: left">
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
</div>
 </div>
  <!-- The Modal -->
      <div class="modal" id="myModal" style="width:700px; height: 890px;">
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
     
  </div>
</div>
</div>      