<div class="span9">
  <div class="content">

    <div class="module">
      <div class="module-head">
          <h2>View Lecture</h2>
      </div>
        <div class="module-body">
          <div class="btn-box-row row-fluid" >

       
         <div class="btn-box-row row-fluid" >
     
   


 <?php foreach($cls_in_session as $item){?>
      <div class="btn-box-row row-fluid  btn-box big span4"style=" float: left; color: #000090;">
        <div class="class"> 
            <a href="<?php echo site_url('Main/deleteClass/'.$item->s_no);?>" class="btn btn-danger delete-class-warning" style=" float: right;"  onclick="return confirm('Are you sure')" >&times;</a>
          </div>
          <a href="<?php echo site_url('Edit_controller/lecture_edit/'.$item->s_no.'/'.$item->session_id.'/'.$item->course_id);?>" id="<?php echo $item->s_no;?>">
          <div class="btn-box-row row-fluid span2" style="font-size: 11px !important; text-align: left">
          <b>Session:<?php echo $item->session_id?></b>
      
          <b>Course:<?php echo $item->course_id?></b>
      
          <b>Semester:<?php echo $item->semester_id?></b>
          
         <!-- <b>Section:<?php  echo $item->section_id?></b>    -->
          
          <b>Subject:<?php echo $item->subject_id;?></b>

         
      </div>

      </a>
      </div>
  <?php  }?>
      

</div>
 </div>
