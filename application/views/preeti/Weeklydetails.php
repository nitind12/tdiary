<style type="text/css">
    .show-read-more .more-text{
       display: none;
    }
</style>
<div class="span9">
  <div class="content">
    <div class="module">
      <div class="module-head">
          <h1>Weekly Details</h1>
      </div>
               <div class="module-body">
          

                  <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
               
                                <tr style="text-align: left">
                            
                                    
                                  <th align="center">Date</th>
                                  <th align="center">Unit</th>
                                  
                                  <th align="center"> Topic</th> 
                                   </tr>
                                  <?php foreach ($details as $item) { ?>

                                        <tr>
                                           
                                            <td><?php echo $item->date;?></td>
                                            <td><?php echo $item->unit;?></td>
                                            <td><?php echo $item->topic;?></td>
                                            
                                        </tr>
                                    <?php } ?>

                            </table>
                          </div>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>


