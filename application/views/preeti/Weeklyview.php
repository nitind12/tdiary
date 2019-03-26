


 <div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                <h2>View Weekly Plan</h2> 
            </div>
                <div class="module-body">
                    <form  method="post" action="<?php echo site_url('Weeklyview_controller/savingdata');?>"
                                     class="form-horizontal row-fluid">       
<!-- view database in page -->
                            <table class="table table-striped table-bordered table-condensed">

                                <tr style="text-align: left">
                                    <th>Course</th>
                                    <th>Semester</th>
                                    <th>Subject</th>
                                    <th> Week no.</th>
                                   
                                    <th>
                                         <table class="table table-striped table-bordered table-condensed">
                                            <th colspan="2"><center>Period</center></th>

                                            <th colspan="4"><center>Lecture Analysis</center></th>


                                            <tr>
                                                 <th>Start Date</th>
                                                 <th>End Date</th>

                                                 <th> No. Of lecture Scheduled</th>
                                                 <th>No. Of Lost Due To Holiday</th>
                                                 <th>No. Of Lost Due To CL </th>
                                                 <th>No. Of Extra Taken</th>
     
                                            </tr>
                                         </table>
                                    </th>
                               
                                   <th> No. of Lecture Actual Taken</th>

                                    <th> Description Of Topic</th>
                                </tr>


                                <?php foreach ($tdiary_database as $item) { ?>
                                                <tr>
                                                    <td><?php echo $item->Course_Name;?></td>
                                                    <td><?php echo $item->Semester;?></td>
                                                    <td><?php echo $item->Subject_Name ;?></td>
                                                    <td><?php echo $item->Week_No ;?></td>

                                                    
                                                    <td><?php echo $item->Start_Date;?></td>
                                                    <td><?php echo $item->End_Date;?></td>
                                                    <td><?php echo $item->No_Of_Lecture_Schedule;?></td>
                                                    <td><?php echo $item->No_Of_Lost_Due_To_Holiday;?></td>
                                                    <td><?php echo $item->No_of_Lost_Due_To_CL ;?></td>
                                                    <td><?php echo $item->No_Of_Extra_Taken ;?></td>
                                                    <td><?php echo $item->No_Of_Lecture_Actual_Taken ;?></td>
                                                    <td><?php echo $item->Description_Of_Topic ;?></td>
                                                            </tr>
                                            <?php } ?>   
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>




