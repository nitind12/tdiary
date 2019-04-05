
<div class="content">
	<div class="module">
		<div class="module-head">
			<h3>ONLINE_ATTENDANCE</h3>
		</div>
	<div class="btn-box-row row-fluid">
			 
<div class="btn-box-row row-fluid" >
      <!-- Button to Open the Modal -->
        <button type="button" class="btn-box big span4" data-toggle="modal" data-target="#myModal">
            <i class="icon-briefcase" id="btnaddclass"name="btnaddclass"></i>
          <b>Add-Class</b>
      </button>
</div>

          
  <?php foreach($cls_in_session as $item){?>
            
      <a href="<?php echo site_url('main/takeattendance_controller/'.$item->s_no);?>" id="<?php echo $item->s_no;?>">
          
      <div class="btn-box-row row-fluid  btn-box big span4"style=" float: left; color: #000090;">
        <div class="class"> 
            <div class="btn btn-danger delete-class-warning" data-toggle="modal" style=" float: right;" data-target=".delete-warning">&times;</div>
          </div>
          <div class="btn-box-row row-fluid">
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
  <!-- The Modal -->
  		<div class="modal" id="myModal" style="width: 700px">
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
      <div class="modal fade delete-warning" tabindex="-1" role="dialog" aria-labelledby="delete-warning" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <h2 class="text-center"> Do you really want to delete</h2>
      
        <div class="text-center">
          <p>
            Are you sure you want to delete ?<br>
            You can't undo this action.
          </p>
          <a href="<?php echo site_url('main/delclass_controller/' . $item->s_no)?>">
          <div class="btn btn-danger delete-class-code">Delete</div> 
          </a>
          <button class="btn btn-primary" onclick="$('.delete-warning').modal('hide');">Cancel</button>
        </div>
      </div>
    </div>
  </div>
      </div>
    </div>
  </div>

	</div>
</div>
</div>			