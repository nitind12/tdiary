<div class="span9">
          <div class="content">

            <div class="module">
              <div class="module-head">
                <h1>tDashboard</h1>
              </div>
              <div class="module-body">
                 <div class="btn-box-row row-fluid" >

       <h2>View Time Table </h2>
        <form method="post" id="myform100tn" name="myform100tn"  class="form-horizontal row-fluid">
  
      <table class="table table-striped table-bordered table-condensed" border="1" id="timetablehere">
                                         
              <thead>
                    <tr bgcolor="lightblue">
                      <th>DAY</th>
                      <th>09:00-09:50</th>
                      <th>09:50-10:40</th>
                      <th>10:40-11:30</th>
                      <th>11:50-12:40</th>
                      <th>12:40-01:30</th>
                      <th>02:10-03:00</th>
                      <th>03:00-03:50</th>
                      <th>03:50-04:40</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($days_ as $item) { ?>
                    <tr>
                      <td><?php echo $item;?></td>
                      <?php  foreach ($time_ as $timeitem) { ?>
                      <td id="<?php  echo $item.$timeitem;?>"<?php if($this->my_lib->days(date('D')) == $item)  {echo "style='background: #ffff00'";}?><?php echo $item;?>></td>
                      <?php } ?>
                    </tr>
                <?php } ?>
                      
                    </tr> 
                    </tbody>
                  
                  </table>
              </form>            
    
                    </div>

       
      <div class="btn-box-row row-fluid" >

      <div class="btn-box-row row-fluid  btn-box big span5" style="border: #ff0000 solid 0px;">
        <b class="label yellow pull-right" style="background:#ffCC00; padding: 5px;"><?php echo $view_edit_class_no;?></b>
          <a href="<?php echo site_url('Main/attendance_controller');?>" >
           <i class="icon-adjust"></i>
                <b>View_Class/Edit_class</b>
      </div>
      </a>
    
    
     <div class="btn-box-row row-fluid  btn-box big span5" >
           <i class="icon-adjust"></i>
                <b>Attendance Reports</b>
      </div>
      <div class="btn-box-row row-fluid  btn-box big span5"  style="border: #ff0000 solid 0px;">
         <b class="label yellow pull-right" style="background:#ffCC00; padding: 5px;"><?php echo $subject_no;?></b>
          <a href="<?php echo site_url('Main/total_subject');?>" >
           <i class="icon-adjust"></i>
                <b>Total No Of Subjects</b>
      </div>
      </a>
     <div class="btn-box-row row-fluid  btn-box big span5" >
           <i class="icon-adjust"></i>
                <b>Total No Of Class</b>
      </div>
      <div class="btn-box-row row-fluid  btn-box big span5" >
          <a href="<?php echo site_url('Main/attendance_controller');?>" >
           <i class="icon-adjust"></i>
                <b>View_Class/Edit_class</b>
      </div>
      </a>
     <div class="btn-box-row row-fluid  btn-box big span5" >
          <a href="<?php echo site_url('Main/attendance_controller');?>" >
           <i class="icon-adjust"></i>
                <b>View_Class/Edit_class</b>
      </div>
      </a>
     <div class="btn-box-row row-fluid  btn-box big span5" >
          <a href="<?php echo site_url('Main/attendance_controller');?>" >
           <i class="icon-adjust"></i>
                <b>View_Class/Edit_class</b>
      </div>
      </a>
    
    
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



