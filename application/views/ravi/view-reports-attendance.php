<div class="span9">
<div class="content">
    <div class="module">
       <div class="module-head">
           <h1>Attendance Report </h1>
        </div>
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
            <?php foreach($add_class_in as $item){?>
              <tr >
                        <td><b><?php echo $item->session_id?></b> </td>
                        <td><b><?php echo $item->course_id?></b> </td>
                        <td> <b><?php echo $item->semester_id?></b> </td>
                        <td> <b><?php  echo $item->section_id?></b> </td>
                       <td> <b><?php echo $item->subject_id;?></b></td>
                </tr>        
              <?php 
                }
               ?>
              </tbody>
           </table>
        </div>
    <table cellpadding="0" cellspacing="0" border="0" class="table datatable-1 table-bordered table-striped  display" width="100%">
          
        <div class="module-body table">
        
<thead>
                    <tr>
                     <th align="center">Roll-No</th>
                      <th align="center">Name</th>
                      <th align="center">Attendance_Status</th>
                    </th>
                      
                  </tr>
                  </thead>
                  
            <tbody>
            <?php foreach($attendance_Status as $item){?>
              <tr >
                        <td><b><?php echo $item->roll_no?></b> </td>
                        <td><b><?php echo $item->first_name?></b> </td>
                        <td> <b><?php echo $item->attendance_status?></b> </td>
             </tr>        
              <?php 
                }
               ?>
              </tbody>

        </div>
        
    </table>
        
    </div></div></div>
                 
            