<style type="text/css">
  .myclassblock{
    display: block;
    background: #f0f0f0;
    color: #000090;
    border: #808080 dotted 1px;
  }
</style>
 <?php foreach($cls_in_session as $item){?>

     
      <div class="btn-box-row row-fluid  btn-box big span4"style=" float: left; color: #000090;">
        <div class="class"> 
            <a href="<?php echo site_url('Main/deleteClass/'.$item->add_class_id);?>" class="btn btn-danger delete-class-warning" style=" float: right;"  onclick="return confirm('Are you sure')" >&times;</a>
          </div>
          <a href="<?php echo site_url('main/takeattendance_controller/'.$item->add_class_id.'/'.$item->session_id);?>" id="<?php echo $item->add_class_id;?>"><div class="btn-box-row row-fluid span2" style="font-size: 11px !important; text-align: left">
          <td class="myclassblock"><?php echo $item->session_id?></b><br><?php echo $item->course_id?><?php echo $item->semester_id?><?php  echo $item->section_id?><br><?php echo $item->subject_id;?>
                                <input type="hidden" value="$item->session_id?>" name="session_name" id="add_class_id_<?php echo $item->session_id?>">
                    </td>
      
          <!--<b>Course:<td><?php echo $item->course_id?></b>
                      <input type="hidden" value="<?php echo $item->course_id?>" name="course_nane" id="add_class_id_<?php echo $item->course_id?>">
                    </td>      
          <b>Semester:<td><?php echo $item->semester_id?></b>
                      <input type="hidden" value="<?php echo $item->semester_id?>" name="semster_name" id="add_class_id<?php echo $item->semester_id?>">
                    </td>
          
          <b>Section:<td><?php  echo $item->section_id?></b>
                      <input type="hidden" value="<?php  echo $item->section_id?>" name="section_name" id="add_class_id<?php  echo $item->section_id?>">
                    </td>
          
          <b>Subject:<td><?php echo $item->subject_id;?></b>
                      <input type="hidden" value="<?php echo $item->subject_id;?>" name="subject_name" id="sadd_class_id_<?php echo $item->subject_id;?>">
                    </td--> 

      </div>

      </a>
    </div>
      <?php 
        }
      

       ?>
</div>
 </div>
  <!-- The Modal -->
      <!--div class="modal" id="myModal" style="width:700px; height: 890px;">
        <div class="modal-dialog">
            <div class="modal-content">
      
        <!-- Modal Header -->
              <!--div class="modal-header">
                  <h4 class="modal-title">ADD-CLASS</h4>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <div class="modal-body">
                 <?php $this->load->view('ravi/add_class1');?>
               
               </div>
        
              <!-- Modal footer -->
              <!--div class="modal-footer">
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
        </div>
      </div-->
