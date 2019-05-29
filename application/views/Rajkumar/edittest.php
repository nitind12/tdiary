<div class="span9">
   <div class="module">
      <div class="module-head">
            <h1><?php echo $this->session->userdata('itype');?>
            

</h1> </div> 
       <div>
       <?php
       if(count($update_marks)!=0){?>
       	<div class="module-body table">

          <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%">
            <thead>
               <tr>
                   <th align="center">Session:</th>
                    <th align="center">Course:</th>
                    <th align="center">Semester:</th>
                    <th align="center">Section:</th>
                    <th align="center">Subject:
                </th>
                      
                </tr>
             </thead>
                  
            <tbody>
              <?php foreach($add_class_in as $item)
              {?>
                     <tr>
                        <td><b><?php echo $item->session_id?></b> </td>
                        <td><b><?php echo $item->course_id?></b> </td>
                        <td> <b><?php echo $item->semester_id?></b> </td>
                        <td> <b><?php  echo $item->section_id?></b> </td>
                       <td> <b><?php echo $item->subject_name;?></b></td>
                     </tr>        
              <?php 
                }
               ?>
              </tbody>    
        </table>
      </div>
      <?php
	        redirect('test/viewmarks_controller2/'.$item->add_class_id.'/'.$item->session_id);      
        } 
         else {?>

        <?php $this->load->view('Rajkumar/edit_test_marks_view'); } ?>
        </div>

</div>

</div>
</div>
</div>
