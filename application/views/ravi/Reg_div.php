<div class="span9">
          <div class="content">

            <div class="module">
              <div class="module-head">
                <h1>Dashboard-Admin</h1>
              </div>
              <div class="module-body">
         
        <div class="module-body row-fluid">
        <div class="module-body row-fluid">
                        

      <div class="btn-box-row row-fluid  btn-box big span5" style="border: #ff0000 solid 0px;">
           <b class="label yellow pull-right" style="background:#ffCC00; padding: 5px;"><?php echo $view_edit_class_no;?></b> 
          <a href="<?php echo site_url('Main/attendance_controller');?>" >
           <i class="icon-adjust"></i>
                <b>View_Class/Edit_class</b>
      </div>
      </a>
    
   <div class="btn-box-row row-fluid" >
       <button type="button" class="btn-box big span5" data-toggle="modal" data-target="#myModal">
            <i class="icon-briefcase" id="btnaddclass"name="btnaddclass"></i>
          <b>Add-Class</b>
        </button>
      </div>
   
       <div class="btn-box-row row-fluid  btn-box big span5" style="border: #ff0000 solid 0px;">   
        <b class="label yellow pull-right" style="background:#ffCC00; padding: 5px;"><?php echo $student_no;?></b> <br>
          <a href="<?php echo site_url('main/total_student');?>" >
           <i class="icon-group"></i>
                <b>Total No. of Student</b></a>
      </div>
      
       <div class="btn-box-row row-fluid  btn-box big span5" style="border: #ff0000 solid 0px;" >
        <b class="label yellow pull-right" style="background:#ffCC00; padding: 5px;"><?php echo $faculty_no;?></b> <br>
          <a href="<?php echo site_url('main/total_faculty');?>" >
           <i class="icon-user"></i>
               <b>Total No. of Faculty</b> </a>
      </div>
     
       <div class="btn-box-row row-fluid  btn-box big span5" style="border: #ff0000 solid 0px;" >
         <b class="label yellow pull-right" style="background:#ffCC00; padding: 5px;"><?php echo $course_no;?></b> <br>
          <a href="<?php echo site_url('main/total_course');?>" >
           <i class="icon-book"></i>
                <b>Total No. of Course</b>
       </a>
     </div>
    

  </div>
</div>
</div>
</div>
</div>
</div>
</div></div>
  


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


