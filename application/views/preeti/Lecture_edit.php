<style type="text/css">
    .show-read-more .more-text{
        display: none;
    }
</style>

<div class="span9">
	<div class="content">

		<div class="module">
			<div class="module-head">
				  <h2>Lecture Plan</h2>
			</div>
				
			 <div class="module-body table">
                 <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%">
                  <thead>
                    <tr>
                     <th align="center">Session:</th>
                      <th align="center">Course:</th>
                      <th align="center">Semester:</th>
                      <th align="center">Subject:
                      </th>
                      
                      </tr>
                  </thead>
                  
               <tbody>
                <?php foreach($add_class_in as $item){?>


                     <tr >
                        <td><b><?php echo $item->session_id?></b> </td>
                        <td><b><?php echo $item->course_id?></b> </td>
                        <td><b><?php echo $item->semester_id?></b> </td>
                       <td><b><?php echo $item->subject_id;?></b></td>
                     </tr>        
              <?php 
                }
               ?>
              </tbody>
        
                
        </table>

          </div>
         

				<form  method="post" name="myEdit"  id="myEdit"   action="<?php echo site_url('Edit_controller/savingdata');?>"  class="form-horizontal row-fluid">

								<table class="table table-striped table-bordered table-condensed">	
								<tbody>


			<?php foreach ($add_class_in as $item) { ?>
										<input type="hidden" value="<?php echo $item->add_class_id;?>"
										 name="addclass_id[]" id="sid_<?php echo $item->add_class_id;?>">
										<?php }?>		
							
											<tr>
												 <th colspan="4"><div class="control-group">
												 	<label class=" span3 control-label" ><h3>Lecture Structure</h3></label>	
													</div>
												</th>
												<tr>
												 <td colspan="2">									
														Date Of Commencement:	<br>
														
														<input type="date" id="txtDOC" name="txtDOC" class="span8">
												</td >

												 <td colspan="2">								
														 Date Of Completion:<br>
														
														<input type="date" id="DOC" name="DOC" class="span8">
												</td>

												</tr>
											</tr>

										<tr>
											<th>
		                      			  		<center>  <h5>Lecture No.</h5></center>
		                      				</th>				

		                					<th>
		                      			  		<center>  <h5>Unit</h5></center>
		                      				</th>				

											<th>
												<center>	<h5>Topic</h5></center>
	
											</th>

											
										</tr>


										<tr>
											<td>
											<center> <input type="number" id="lectureno" name="lectureno" class="span8"></center>
											</td>

											<td>
											<center>	<input type="number" id="txtunit" name="txtunit" class="span8"></center>
											</td>

											<td>
											<center>		<textarea id="topic" name="topic" class="span8" rows="6"  cols="50" >
														
													</textarea></center>
											
											</td>

											</tr>

										<tr>
												<td colspan="4">									
													
														<div class="control-group">
																		<label class="control-label" for="basicinput">Total No. of Lecture:
																</label>
																<div class="controls">
																	<input type="text" id="txttotal" name="txttotal" class="span2">
																</div>

															
																<div class="controls" style="float:right">
																	<center>
																		<button type="submit" class="btn btn-primary"  name="save" id="save">Submit</button>
																	</center>
																</div>

															</div>
															
												</td>
										</tr>

												</tbody>
											</table>

												<table class="table table-striped table-bordered table-condensed">
                                        		<tr style="text-align: left">
                                                    		
                                        			
                                                    <th>Lecture No</th>
                                                   
                                        			<th>Unit</th>
                                          			<th>Topic</th>	                                        			
                                        			

                                        			<th>Delete</th>
                                        			
                                        		</tr>
                                 <?php foreach ($t_diary as $item) { ?>		
                                        <tr>
                                        			
                                        	
                                            <td class="lectdata" id="<?php echo $item->lecture_id.'-lecture_id';?>"><?php echo $item->lecture_id ;?></td>
                                          	<td class="lectdata" id="<?php echo $item->lecture_id.'-unit';?>"><?php echo $item->unit ;?></td>	
                                        	<td id="<?php echo $item->lecture_id.'-topic';?>"class="show-read-more lectdata"><?php echo $item->topic;?></td>
                                        	<!--<td><?php //echo $item->lectureid;?></td>-->
                                        	<td><a href="<?php echo site_url('Edit_controller/del1/' . $item->lecture_id)?>" class="btn " onclick="return confirm('Are you sure')">Delete</a></td>
                               			</tr>
                                <?php } ?> 
								
								

								</div>
							</div>
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

