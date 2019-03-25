


 <div class="span9">
	<div class="content">

		<div class="module">
			<div class="module-head">
				 <h2>Lesson Plan</h2>
			</div>
				<div class="module-body">
					<form  id="myform1" name="myform1" method="post" action="<?php echo site_url('Lessonview_controller/savingdata');?>"
									 class="form-horizontal row-fluid">

								<table class="table table-striped table-bordered table-condensed">  
									<tbody>
										<tr>
											<td>  
												Course Name:<br>
														
															<select tabindex="1" data-placeholder="Select here.." class="span8" name="course" id="course">
																<option value="">Select here..</option>
																<option value="BCA">BCA</option>
																<option value="BBA">BBA</option>
																<option value="B.COM">B.COM</option>
																<option value="POLY TECHNIQUE">POLY TECHNIQUE</option>
																<option value="BSC">BSC</option>
																<option value="HM">HM</option>
															</select>
										  	 </td>

										  		 <td>									
														Semester:	<br>
														
															<input type="number" id="txtsemester" name="txtsemester" class="span8">
												</td>


												<td>
														Section:<br>
														
														<input type="text" id="txtsection" name="txtsection" class="span8">													
												</td>
											</tr>	


											<tr>

												 <td>									
														Time Duration:	<br>
														
															<input type="text" id="txttime" name="txttime" class="span8">
												</td>


												<td>
														Start Time:<br>
														
														<input type="time" id="txtstart" name="txtstart" class="span8">													
												</td>

												<td>
														End Time:<br>
														
														<input type="time" id="txtend" name="txtend" class="span8">													
												</td>
											</tr>	



											     <tr>
												     <td>	
															Date :	<br>
															
															<input type="Date" id="Date" name="Date" class="span8">
													</td>

													<td colspan="3" class="span3">
														 <table class="table" border="0">
															<tr>
																<td colspan="2">
															 		Unit:<br>
															 		<input type="number" id="Unit" name="Unit" class="span4">
															 	</td>
															 </tr>

															 <tr>
															 	<td> Topic:<br>
    																<textarea class="span9" rows="8"  cols="30"  
                                                                    id="Topic" name="Topic"></textarea>
																</td>
															</tr>

															<tr>
																<td>No. Of Lecture :	<br>
    																<input type="number" id="Lecture" name="Lecture"
                                                                     class="span4">
                                                                    
                                                                     <button style="float:right" type="submit" name="save" 
                                                                                     class=" span3 btn">Submit</button>
                                                                </td>
                                                            </tr>                               
														</table>
													</td>
												</tr>
									</tbody>
								</table>
							</form>
						</dicv>
				</div>
                        
            </div>
        </div>    


