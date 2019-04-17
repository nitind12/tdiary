
<div class="span9">
	<div class="content">

		<div class="module">
			<div class="module-head">
				  <h2>Upload Time Table</h2>
			</div>
				<div class="module-body">

				<form  method="post" name="myform111"  id="myform111"   action="<?php echo site_url('Upload/file_data');?>"  class="form-horizontal row-fluid" enctype="multipart/form-data">				

							<table class="table table-striped table-bordered table-condensed">							
                				<tbody>
										<tr>
											<td>Course_id:<br>
														
															<select tabindex="1" data-placeholder="Select here.." class="span8"  id="Course_id" name="Course_id">
																<option value="">Select here..</option>
																<option value="BCA">BCA</option>
																<option value="BBA">BBA</option>
																<option value="B.COM">B.COM</option>
																<option value="POLY TECHNIQUE">POLY TECHNIQUE</option>
																<option value="BSC">BSC</option>
																<option value="BHM">BHM</option>
															</select>
												
										  	 </td>
										  	  <td>Semester:<br>
												  	<select tabindex="1" data-placeholder="Select here.." class="span8" name="Semester" id="Semester">
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
                                                    <td>
														Session:<br>
														<select tabindex="1" data-placeholder="Select here.." class="span8" name="Session" id="Session">
												  		<option value ="">Select here..</option>
												  	 <option value =" 2010-2011">2010-2011</option>
									  	             <option value =" 2011-2012">2011-2012</option>
									  	             <option value =" 2012-2013">2012-2013</option>
									  	             <option value =" 2013-2014">2013-2014</option>
									  	             <option value =" 2014-2015">2014-2015</option>
									  	             <option value =" 2015-2016">2015-2016</option>
												  </select>
														
																											
												</td>
												<td>		
										           Section:<br>
												  	<select tabindex="1" data-placeholder="Select here.." class="span8" name="Section" id="Section">
												  		<option value ="">Select here..</option>
												  	 <option value ="A">A</option>
												  	 <option value ="B">B</option>
												  	 <option value ="C">C</option>
												  	 <option value ="D">D</option>
												  	 <option value ="E">E</option>
												  </select>
									  </td>
									</tr>
									<tr>

										<td colspan="2">									
												Time Table Upload:	<br>
												
												<input class="specialInput" type="file"  id="txtttUpload" name="txtttUpload">
										</br></td>
									</tr>
									<tr>
										<td>
										<div class="controls" style="float:left;">
										
										<input type="submit" class="btn btn-primary" name="save" value="submi" id="btnsubmit1">
									</div>
								</td>
								</tr>

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


