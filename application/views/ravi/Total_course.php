<div class="span9">
          <div class="content">

            <div class="module">
              <div class="module-head">
                <h1>Total No Of Course</h1>
              </div>
              <div class="module-body">
         
      <table class="datatable-1 table table-striped table-bordered table-condensed">

                        <thead>
                      <tr>
                          <th align="center">Sr No.</th>
                            <th align="center">Course</th>
                          <th align="center">Duration</th>
                          <th align="center">University</th>
                       </tr>
                  </thead>
              <?php $er=1;
              foreach ($Course as $item) {?>

                    <tr>
                     <td><?php echo $er ?></td>
                     <td><?php echo $item->course_id ?></td> 
              <td><?php echo $item->no_of_years?></td>

              <td><?php echo $item->university_id?></td>
                     <!--td>
                      <a  href="<?php //echo site_url('/Main/gettotal_course_details/'.$item->course_id);?>"class="btn btn-primary">Details</a></td-->  

                     </tr>
            <?php   $er++;
           } ?>
            </table>            

  </div>
</div>
</div>
</div>
</div>
</div>
</div></div>
  