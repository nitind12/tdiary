<div class="span9">
	<div class="content">

		<div class="module">
			<div class="module-head">
				  <h2>Lecture Plan</h2>
			</div>
<<<<<<< HEAD
				
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
                        <td> <b><?php echo $item->semester_id?></b> </td>
                       <td> <b><?php echo $item->subject_id;?></b></td>
                     </tr>        
              <?php 
                }
               ?>
              </tbody>
        
                
        </table>

          </div>
         

				<form  method="post" name="myEdit"  id="myEdit"   action="<?php echo site_url('Edit_controller/savingdata	');?>"  class="form-horizontal row-fluid">

								<table class="table table-striped table-bordered table-condensed">	
								<tbody>


									<?php foreach ($add_class_in as $item) { ?>
										<input type="hidden" value="<?php echo $item->add_class_id;?>"
										 name="addclass_id[]" id="sid_<?php echo $item->add_class_id;?>">
										<?php }?>

=======
				<div class="module-body">


				<form  method="post" name="myEdit"  id="myEdit"   action="<?php echo site_url('Edit_controller/savingdata	');?>"  class="form-horizontal row-fluid">				

							<table class="table table-striped table-bordered table-condensed">	
>>>>>>> parent of 649676f... Merge branch 'master' of https://github.com/nitind12/tdiary
							
											<tr>
												 <th colspan="3"><div class="control-group">
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
		                      			  		<center>  <h5>Unit</h5></center>
		                      				</th>				

											<th>
												<center>	<h5>Topic</h5></center>
	
											</th>

											<th>
												<center>	<h5>No. Of Lecture</h5>	</center>
												
											</th>
										</tr>


										<tr>
											<td>
												<input type="number" id="txtunit" name="txtunit" class="span8">
											</td>

											<td>
													<textarea id="topic" name="topic" class="span8" rows="5"  cols="30" >
														
													</textarea>
											
											</td>

											<td>
												<input type="text" id="No_Of_Lecture" name="No_Of_Lecture" class="span8">

											</td>
										</tr>

										<tr>
												<td colspan="3">									
													
														Total No. of Lecture:	
														
															<input type="text" id="txttotal" name="txttotal" class="span2">

															<button style="float:right" type="submit" name="save" 
															 class=" span3 btn">Submit</button>
															
												</td>
										</tr>

												</tbody>
											</table>
<<<<<<< HEAD
								
								
=======
										</form>

									</div>

						
>>>>>>> parent of 649676f... Merge branch 'master' of https://github.com/nitind12/tdiary

								</div>
							</div>
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

