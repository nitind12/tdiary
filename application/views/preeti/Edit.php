
<div class="span9">
	<div class="content">

		<div class="module">
			<div class="module-head">
				  <h2>Lecture Plan</h2>
			</div>
				<div class="module-body">

				<form  method="post" name="myform"  id="myform"   action="<?php echo site_url('Lview_controller/savingdata	');?>"  class="form-horizontal row-fluid">				

							<table class="table table-striped table-bordered table-condensed">							
                				<tbody>
										<tr>
											
										
												<td>
														Session:<br>
														
														<input type="text" id="session" name="session" class="span8">													
												</td>
												<td>		
											
												Course Name:<br>
														
															<select tabindex="1" data-placeholder="Select here.." class="span8"  id="course" name="course">
																<option value="">Select here..</option>
																<option value="BCA">BCA</option>
																<option value="BBA">BBA</option>
																<option value="B.COM">B.COM</option>
																<option value="POLY TECHNIQUE">POLY TECHNIQUE</option>
																<option value="BSC">BSC</option>
																<option value="HM">HM</option>
															</select>
												
										  	 </td>

										  
												  <td>Semester:<br>
												  	<select tabindex="1" data-placeholder="Select here.." class="span8" name="txtsemester" id="txtsemester">
												  		<option value ="">Select here..</option>
												  	 <option value ="1">1</option>
												  	 <option value ="2">2</option>
												  	 <option value ="3">3</option>
												  	 <option value ="4">4</option>
												  	 <option value ="5">5</option>
												  	 <option value ="6">6</option>
												  	 <option value ="7">7</option>
												  	 <option value ="8">8</option>
												  </select>
									  </td>


											
											</tr>


											<tr>
												 <td>									
														Date Of Commencement:	<br>
														
														<input type="date" id="txtDOC" name="txtDOC" class="span8">
												</td>

												 <td>								
														 Date Of Completion:<br>
														
														<input type="date" id="DOC" name="DOC" class="span8">
												</td>

													<td>									
														Facutly Name:	<br>
														
														<input type="text" id="txtfaculty" name="txtfaculty" class="span8">
												</td>

											
											</tr>

											<tr>

											

												<td>									
														Subject Name:	<br>
														
														<input type="text" id="txtsubject" name="txtsubject" class="span8">
												</td>


												<td colspan="2">									
														Syllabus Upload:	<br>
														
														<input class="specialInput" type="file"  id="syllabus" name="syllabus">
												</td>
											</tr>

											<tr>
												 <th colspan="3"><div class="control-group">
												 	<label class=" span3 control-label" ><h3>Lecture Structure</h3></label>	
													</div>
												</th>
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
													<textarea id="topic" name="topic" class="span9" rows="8"  cols="30" ></textarea>
											
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



											
																
	

						  
<!--
<div class="span9">
	<div class="content">
		<div class="module">
			<div class=" module-head">
				<center>	<h2>Lecture Plan</h2>	
					<div class="control-group">
											
							<div class="controls">
														<input type="text" id="session"  placeholder="Session" class="span2">
													</div>
										</div>
							</div>
						</center>
							<div class="module-body">
							
									<form  method="post" action="<?php echo site_url('Lview_controller/savingdata');?>"
									 class="form-horizontal row-fluid">
										<table class="table table-striped table-bordered table-condensed">
										<tbody>
											<tr>
												 <td>
													  <div class=" control-group">
														<label class="control-label" for="Course">Course Name</label>
														<div class="controls">
															<select tabindex="1" data-placeholder="Select here.." class="span9" name="course" id="course">
																<option value="">Select here..</option>
																<option value="BCA">BCA</option>
																<option value="BBA">BBA</option>
																<option value="B.COM">B.COM</option>
																<option value="POLY TECHNIQUE">POLY TECHNIQUE</option>
																<option value="BSC">BSC</option>
																<option value="HM">HM</option>
															</select>
														</div>
													  </div>
										  		 </td>

												<td>									
													<div class=" col control-group">
														<label class="control-label" for="Semester">Semester:	</label>
														<div class="controls">
															<input type="text" id="txtsemester" name="txtsemester" class="span8">
														</div>
													</div>
												</td>

												<td>
													<div class="control-group">
														<label class="control-label" for="Section">Section:	</label>
														<div class="controls">
															<input type="text" id="txtsection" name="txtsection" class="span8">
														</div>
													</div>
												</td>
											</tr>

											<tr>
							
												<td>
													<div class="control-group">
														<label class="control-label" for="Section">Date Of Commencement:	
														</label>
														<div class="controls">
															<input type="text" id="txtDOC" name="txtDOC" class="span8">
														</div>
													</div>
												</td>

												<td>
													<div class="control-group">
														<label class="control-label" for="Section">Actual Date Of Completion:	</label>
														<div class="controls">
															<input type="text" id="txtADOC" name="txtADOC" class="span8">
														</div>
													</div>
												</td>


												<td>
													<div class="control-group">
														<label class="control-label" for="Section">Expected Date Of Completion:	</label>
														<div class="controls">
															<input type="text" id="txtEDOC" name="txtEDOC" class="span8">
														</div>
													</div>
												</td>
											</tr>

											<tr>
												<td>
													<div class="control-group">
														<label class="control-label" for="Faculty">Faculty Name:	</label>
														<div class="controls">
															<input type="text" id="txtfaculty" name="txtfaculty" class="span8">
														</div>
													</div>
												</td>


											<td>
												<div class="control-group">
													<label class="control-label" for="Subject">Subject Name:	</label>
													<div class="controls">
														<input type="text" id="txtsubject" name="txtsubject" class="span8">
													</div>
												</div>
											</td>

											<td>
												<div class="control-group">
													<label class="control-label" for="Syllabus">Syllabus Pdf:</label>
													<div class="controls">
														<a class=" span8 dropdown-toggle btn"  id="syllabus" name="syllabus"href="#">Upload</a>
													</div>
												</div>
											</td>						
										</tr>

										<tr>
											 <th colspan="3"><div class="control-group">
											 	<label class=" span3 control-label" for="Unit"><h3>Lecture Structure</h3></label>	
												 </div>
											</th>

												
										</tr>

										<tr>
											 
											<th><div class="control-group">
													<label class="control-label" for="Unit"><h5>Unit</h5></label>
												</div>
											</th>
											
											
																					
											<th><div class=" control-group">
													<label class="control-label" for="Topic"><h5>Topic</h5></label>
												</div>
											</th>
												
											
											

											<th><div class="control-group">
													<label class="control-label" for="Lecture"><h5>No. Of Lecture</h5>
													</label>
												</div>
											</th>
										</tr>


										<tbody>
											<tr>
												<td>
													<center>	<input type="text" id="txtunit" name="txtunit" cltxtass="span8">
													</center>
												</td>

												<td>
														<center> <textarea class="span8" rows="3" id="topic" name="topic"></textarea>
													</center>
												</td>

												<td>

													<center> <input type="text"  id="No_Of_Lecture" name="No_Of_Lecture" class="span8">
													</center>
												</td>
											</tr>
										
										<tr>
												<td colspan="3">									
													<div class=" control-group">
														<label class="control-label" for="Semester">Total No. of Lecture:	</label>
														<div class="controls" >
															<input type="text" id="txttotal" name="txttotal" class="span2">
															<button style="float:right" type="submit" name="save" 
															 class="btn btn-primary">Submit Form</button>
														</div>
													</div>
												</td>
										</tr>
									</tbody>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</li>
</ul>
</ul>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
			-->

        
												</tbody>
											</table>
										</form>

									</div>
								</div>
							</div>
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->


