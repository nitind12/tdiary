				<div class="content">
						<div class="module">
							
							<div class="module-body">
								<?php
            				$data = array(
              				'name' => 'frmclass',
              			'id' => 'frmclass'
            			);
           					 echo form_open_multipart('Main/addclass_controller', $data); 
          				?>
          				<span class="form-horizontal row-fluid">									
          								<div class="control-group">
											<label class="control-label" for="basicinput">Session</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.."class="span8"  name="Session" id="Session">
                                             <option value="">Select Session</option>
                                                <?php foreach ($Session1 as  $item) { ?>
                                                 <option value="<?php echo $item->s_id;?>">
                                                 	<?php echo $item->session?></option>
                                                    <?php }?>
                                                 </select>
                                             	
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Course</label>
											<div class="controls">
									         <select tabindex="1" data-placeholder="Select here.."class="span8"  name="Course" id="Course">
                                             <option value="">Select Course</option>
                                                <?php foreach ($course1 as  $item) { ?>
                                                 <option value="<?php echo $item->course_id;?>">
                                                 	<?php echo $item->name_of_courses?></option>
                                                    <?php }?>
                                                 </select>
                                                
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Semester</label>
											<div class="controls">
											 <select tabindex="1" data-placeholder="Select here.."class="span8"  name="Semester" id="Semester">
											<option value="">Select Semester</option>
                                                <?php foreach ($Semester1 as  $item) { ?>
                                                 <option value="<?php echo $item->semester_id;?>">
                                                 	<?php echo $item->no_of_semester?></option>
                                                    <?php }?>
                                                 </select>
                                             
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Section</label>
											<div class="controls">
												 <select tabindex="1" data-placeholder="Select here.."class="span8"  name="Section" id="Section">
											<option value="">Select Section</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            </select>
												</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="basicinput">Date Of Commencement:</label>
											<div class="controls">
												<input type="date" name="DateOfCommencement"id="DateOfCommencement" placeholder="Date-Of-Commencement" class="span8">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Date Of Completion:</label>
											<div class="controls">
												<input type="date"  name="DateOfCompletion"id="DateOfCompletion" placeholder="Date-Of-Completion" class="span8">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">syllabus_pdf</label>
											<div class="controls">
												<input type="file" name="pic_file" class="form-control"  id="pic_file" class="span8">
												<!--input type="file" name="syllabus_pdf"id="syllabus_pdf" placeholder="syllabus_pdf" class="span8"-->
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