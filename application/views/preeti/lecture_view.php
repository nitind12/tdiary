<!-- for Read More -->

<style type="text/css">
    .show-read-more .more-text{
        display: none;
    }
</style>



<div class="span9">
    <div class="content">
         <div class="module">
            <div class="module-head">
                <h1>Lecture View</h1>
            </div>

            <div class="module-body table">

                  <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%">


                        <thead>
                            <tr>
                                <th align="center">Session:</th>
                                <th align="center">Course:</th>
                                <th align="center">Semester:</th>
                                <th align="center">Subject:</th>
                            </tr>
                        </thead>


                        <tbody>
                           <?php foreach($add_class_in as $item){?>
                              <tr >
                                  <td><b><?php echo $item->session_id?></b> </td>
                                  <td><b><?php echo $item->course_id?></b> </td>
                                  <td> <b><?php echo $item->semester_id?></b> </td>
                                  <td> <b><?php echo $item->subject_id;?></b></td>
                              </tr>        
                             <?php  }?>
                        </tbody>
                    
                  </table>

            </div>
         


            <form  class="form-horizontal row-fluid"   name="frmclass"   id="frmclass"   method="post" 
                action="<?php echo site_url('Test/submitmarks_controller');?>">

                    <table  class="datatable-1 table table-bordered table-striped  display" width="100%">
                      <!-- <div style="float:right">
                        <input type="hidden" value="<?php //echo date("Y-m-d")?>" name="date" id="date"><?php 
                        //echo date("D-d-M-Y")?> </div>--->
                   

                          <thead>
                            <tr>
                                <th align="center">Lecture No</th>
                                <th align="center">Unit No</th>
                                <th align="center">Topic</th>
                                <th align="center">Delete</th>
                            </tr>
                          </thead>


                          <tbody>
                  
                              <?php foreach ($t_diary as $item) { ?>
                                <tr>
                                   <td align="center"><?php echo $item->lecture_id ?></td>
                                   <td class="show-read-more lectdata"><?php echo $item->unit ?></td>
                                   <td  class="show-read-more" align="center"><?php echo $item->topic ?></td>

                                   <td><a href="<?php echo site_url('Edit_controller/del1/' . $item->lecture_id)?>" class="btn btn-primary" 
                                    onclick="return confirm('Are you sure')">Delete</a></td>
     
                                </tr>

                              <?php } ?>
                          </tbody>
                      </table>
            </form>
        </div>
    </div>
</div>
    


    
                    
   
     