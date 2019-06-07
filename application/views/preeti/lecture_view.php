<!-- for Read More -->

<style type="text/css">
    .show-read-more .more-text{
        display: none;
    }
</style>

<style media="print">
  .hideblock{
      display:none;
}
</style>


<div class="span9">
    <div class="content">
         <div class="module">
            <div class="module-head">
              <div style="float:right">
                    <input type="hidden" value="<?php echo date("Y-m-d")?>" name="date" id="date"> <?php echo date("Y-m-d")?>
                </div>
                <h1>Proposed Lecture View</h1>
                      <span class="hideblock"> <a href="#" onclick="window.print()"><span class="btn  btn-primary icon-print" style="float:right" > Print</span> </a></span>
               <br>

            </div>

            <div class="module-body table">

               <!--   <div class="alert hideblock">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Note!</strong> For Edit Double Click!
                  </div>    -->

          
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
                       // echo date("D-d-M-Y")?> </div>-->
                   


                          
                  <thead>
                    <tr>
                       <th align="center">Sr.No</th>
                        <th align="center">Unit</th>
                        <th align="center">Topic</th>
                        <th align="center">No Of Lecture Aspect</th>
                        <th align="center" class="hideblock">Delete</th>    
                    </tr>
                  </thead>
                  <tbody>
                  
             <?php    $length=1;
             foreach ($t_diary as $item) { ?>
              <tr>
               <td><?php  echo $length;  ?></td>
              <td><?php echo $item->unit ?></td>
               <td><?php echo $item->topic ?></td>
                 <td><?php echo $item->no_of_lecture?></td>
                                <td class="hideblock"><a href="<?php echo site_url('Edit_controller/del1/' . $item->lecture_id)?>" class="btn btn-danger icon-trash " 
                                    onclick="return confirm('Are you sure')"></a></td>    
     
                                </tr>

                              <?php 
                                $length++;} ?>


                          </tbody>
                      </table>
            </form>
        </div>
    </div>
</div>
    


    
                    
   
     