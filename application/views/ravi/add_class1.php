				<div class="content">
						<div class="module">
							<div class="module-body">
									<form class="form-horizontal row-fluid" name="frmclass" id="frmclass" method="post" action="<?php echo site_url('Main/addclass_controller');?>">
										<div class="control-group">
											<label class="control-label" for="basicinput">Session</label>
											<div class="controls">
												<input type="text" id="Session" name="Session" placeholder="Session" class="span8">
												
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Course</label>
											<div class="controls">
												<input type="text" id="Course" name="Course"placeholder="Course" class="span8">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Semester</label>
											<div class="controls">
												<input type="text" name="Semester" id="Semester" placeholder="Semester" class="span8">
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Section</label>
											<div class="controls">
												<input type="text" id="Section" name="Section" placeholder="Section" class="span8">
												</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Subject-Name
											</label>
											<div class="controls">
												<input type="text" name="Subject_Name"id="Subject_Name" placeholder="Subject-Name" class="span8">
												</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Date Of Commencement:</label>
											<div class="controls">
												<input type="text" name="DateOfCommencement"id="DateOfCommencement" placeholder="Subject-Name" class="span8">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Date Of Completion:</label>
											<div class="controls">
												<input type="text" name="DateOfCompletion"id="DateOfCompletion" placeholder="Subject-Name" class="span8">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">syllabus_pdf</label>
											<div class="controls">
												<input type="file" name="syllabus_pdf"id="syllabus_pdf" placeholder="Subject-Name" class="span8">
											</div>
										</div>
										
										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn" id="btnaddclass">Submit Form</button>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div>