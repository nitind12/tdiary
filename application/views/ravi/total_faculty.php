<div class="span9">
          <div class="content">

            <div class="module">
              <div class="module-head">
                <h1>Total NO ReG</h1>
              </div>
              <div class="module-body">
         
      <table class="datatable-1 table table-striped table-bordered table-condensed">

                        <thead>
                      <tr>
                          <th align="center">Sr No.</th>
                            <th align="center">Faculty Name</th>
                          <th align="center">Details</th>
                       </tr>
                  </thead>
              <?php $er=1;
              foreach ($Faculty as $item) {?>

                    <tr>
                     <td><?php echo $er ?></td>
                     <td><?php echo $item->first_name.''.$item->last_name?></td>
                     <td>
                      <a  href="<?php echo site_url('/Main/gettotal_faculty_details/'.$item->faculty_id);?>"class="btn btn-primary">Details</a--></td>  

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
  

