<div class="span9">
          <div class="content">

            <div class="module">
              <div class="module-head">
                <h1>Dashboard-Admin</h1>
              </div>
              <div class="module-body">
                 <div class="btn-box-row row-fluid" >
       
      <div class="btn-box-row row-fluid" >

      <div class="btn-box-row row-fluid  btn-box big span6" >
          <a href="<?php echo site_url('Registrationform_controller/index');?>" >
           <i class="icon-briefcase"></i>
                <b>Student Registration</b>
      </div>
      </a>
      <div class="btn-box-row row-fluid  btn-box big span5" >
          <a href="<?php echo site_url('Registrationform_controller/index');?>" >
           <i class="icon-briefcase"></i>
                <b>Faculty Registration</b>
      </div>
      </a>

        <div class="btn-box-row row-fluid  btn-box big span5" >
          <a href="#" >
           <i class="menu-icon icon-table"></i>
                <b>Time Table</b>
      </div>
      </a>

      <div class="btn-box-row row-fluid  btn-box big span5" >
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
   
    
    
    </div>
         
      </div>
     
     </div>
   </div>
 </div>
</div>
</div>

</div>
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



