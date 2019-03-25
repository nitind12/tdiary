


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
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



