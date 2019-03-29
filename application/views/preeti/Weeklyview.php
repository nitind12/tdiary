
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
                                    <th>Session</th>
                                    <th>Course</th>
                                    <th>Sem</th>
                                    <th>Subject</th>
                                    <th>Week no</th>
                                    
                                        <th>
                                             <table class="table table-striped table-bordered table-condensed">
                                                <th colspan="2"><center>Date</center></th>
                                                 <th colspan="5">Lecture Analysis</th>
                                                <tr>
                                                     <th>Start Date</th>
                                                     <th>End Date</th>
                                                     <th>No Of Lecture Schedule</th>
                                                     <th>No Of Lost Due To Holiday</th>
                                                     <th>No Of Lost Due To CL</th>
                                                     <th>No Extra Taken</th>
                                                     
                                                </tr>

                                             </table>
                                        </th>
                                        <th>No Of Lecture Actual Taken</th>
                                    <th> Desc of Topic</th>                                
                                </tr>


                                    <?php foreach ($t_diary as $item) { ?>

                                        <tr>

                                            <td><?php echo $item->session_id;?></td>
                                            <td><?php echo $item->course_id;?></td>
                                            <td><?php echo $item->semester_id ;?></td>
                                            <td><?php echo $item->subject_id ;?></td>
                                            <td><?php echo $item->week_id; ?></td>
                                            <td>
                                                <table class="table table-striped table-bordered table-condensed">
                                                    <tr>
                                                         <td><?php echo $item->start_date ;?></td>
                                                         <td><?php echo $item->end_date;?></td>
                                                         <td><?php echo $item->no_of_lecture_schedule;?></td>
                                                         <td><?php echo $item->no_of_lost_due_to_holiday;?></td>
                                                         <td><?php echo $item->no_of_lost_due_to_cl;?></td>
                                                         <td><?php echo $item->no_extra_taken;?></td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td><?php echo $item->no_of_lecture_actual_taken;?></td>
                                            <td><?php echo $item->description_of_topic;?></td>

                                        </tr>
                                    <?php } ?>

                            </table>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>
</body>


















<!--
 <div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                <h2>View Weekly Plan</h2> 
            </div>
                <div class="module-body">
                    <form  method="post" action="<?php echo site_url('Weeklyview_controller/savingdata');?>"
                                     class="form-horizontal row-fluid">       

                            <table class="table table-striped table-bordered table-condensed">

                                <tr style="text-align: left">
                                    <th>Session</th>
                                    <th>Course</th>
                                    <th>Semester</th>
                                    <th>Subject</th>
                                    
                                   
                                    <th>
                                         <table class="table table-striped table-bordered table-condensed">
                                            <th colspan="2"><center>Period</center></th>

                                            <th colspan="4"><center>Lecture Analysis</center></th>
                                            <tr>
                                                 <th>Start Date</th>
                                                 <th>End Date</th>
                                                 <th>No. Of lecture Scheduled</th>
                                                 <th>No. Of Lost Due To Holiday</th>
                                                 <th>No. Of Lost Due To CL </th>
                                                 <th>No. Of Extra Taken</th>
     
                                            </tr>
                                         </table>
                                    </th>
                               
                                   <th> No. of Lecture Actual Taken</th>

                                    <th> Description Of Topic</th>
                                </tr>

 
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>

-->


