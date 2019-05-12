
<div class="span9">
	<div class="content">

		<div class="module">
			<div class="module-head">
				  <h2>Upload Time Table</h2>
			</div>
				<div class="module-body">
					<?php
						$data = array(
							'class' => 'form-horizontal row-fluid',
						);
					?>
					<?php echo form_open_multipart('Studenttimetableeditcontroller/uploadTT', $data);?>  
			

							<table class="table table-striped table-bordered table-condensed">							
                				<tbody>
										<tr>
											 <div class="control-group">

                                          <td>Course Name:<br/>
                                         
                                         	
                                         <select tabindex="1" data-placeholder="Select here.."class="span8"  name="Course_Name" id="Course_Name" required="required">
                                             <option value="">Select Course</option>
                                                <?php foreach ($course1 as  $item) { ?>
                                                 <option value="<?php echo $item->course_id;?>">
                                                  <?php echo $item->name_of_courses?></option>
                                                    <?php }?>
                                                 </select></td>
                                                </div>
                                             </div>
										  	  <td>Semester:<br>
												  	 <select tabindex="1" data-placeholder="Select here.."class="span8"  name="Semester" id="Semester" required="required">
                                        <option value="">Select Semester</option>
                                                <?php foreach ($Semester1 as  $item) { ?>
                                                 <option value="<?php echo $item->semester_id;?>">
                                                  <?php echo $item->no_of_semester?></option>
                                                    <?php }?>
                                                 </select></td>
                                             </div></div>
									         
                                                    <td>
														Session:<br>
														<select tabindex="1" data-placeholder="Select here.."class="span8"  name="Session" id="Session" required="required">
                                             <option value="">Select Session</option>
                                                <?php foreach ($Session1 as  $item) { ?>
                                                 <option value="<?php echo $item->s_id;?>">
                                                  <?php echo $item->session?></option>
                                                    <?php }?>
                                                 </select></td>
                                         </div>
                                     </div>     
														
																											
												
												<td>		
										           Section:<br>
												  	<select tabindex="1" data-placeholder="Select here.." class="span8" name="Section" id="Section" required="required">
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
												
												<input class="specialInput" type="file"  id="txtttUpload" name="txtttUpload" required="required" required="required"> 
										</br></td>
									</tr>
									<tr>
										<td>
										<div class="controls" style="float:left;">
										

										<input type="submit"class="btn btn-primary" name="save" value="submit" id="btnsubmit1"  required="required">

										

									</div>
								</td>
								</tr>

										</tbody>
									</table>
							<?php echo form_close();?>

									</div>
								</div>
							</div>
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->


