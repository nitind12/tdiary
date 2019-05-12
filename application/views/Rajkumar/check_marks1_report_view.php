<style media="print">
	.hideblock{
		display:none;
	}
</style>
<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<div style="float:right">
                    <input type="hidden" value="<?php echo date("Y-m-d")?>" name="date" id="date"><?php 
                    echo date("D-d-M-Y")?> </div>
                   
								<h1>Internal Marks Report </h1>
							</div>

							<div class="module-body">
							<span class="hideblock"><a href="#"onclick="window.print()"><span class="btn btn-primary icon-print" style="float:right"> print</span></a></span>

	<form id="marks1formview" name="marks1formview" class="form-horizontal row-fluid">
	<table class="table table-striped table-bordered table-condensed"  >
		
			<!--<table class="table" >-->
				<tbody>
<tr>
	 <td><div class="control-group">
                     Session<br/>
                         <select tabindex="1" data-placeholder="Select here.."class="span8"  name="Session" id="Session">
                                             <option value="">Select Session</option>
                                                <?php foreach ($Session1 as  $item) { ?>
                                                 <option value="<?php echo $item->s_id;?>">
                                                  <?php echo $item->session?></option>
                                                    <?php }?>
                                                 </select>
                       </td>
									  <td >Course_name:<br>
									 
                       <select tabindex="1" data-placeholder="Select here.."class="span8"  name="Course_name" id="Course_name">
                                             <option value="">Select Course</option>
                                                <?php foreach ($course1 as  $item) { ?>
                                                 <option value="<?php echo $item->course_id;?>">
                                                  <?php echo $item->name_of_courses?></option>
                                                    <?php }?>
                                                 </select>
                    </td>
									  <td>Semester:<br>
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Semester" id="Semester" >
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
									  <td>Section:<br>
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Section" id="Section"  >
									  		<option value ="">Select here..</option>
									  	 <option value ="A">A</option>
									  	 <option value ="B">B</option>
									  	 <option value ="C">C</option>
									  	 <option value ="D">D</option>
									  	 
									  </select>
									  </td>
						
										
											 <td >roll_no:<br>
									  <input type="text" id="roll_no" name="roll_no" class="span8"></td>
										</td>
										 <td>Type of Marks:<br>
									  	<!--<input type="text" id="txtSection" name="txtSection" class="span8">-->
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="marks_type_id" id="marks_type_id"  >
									  		<option value ="">Select marks type...</option>
									  		<?php foreach($marks_type as $item){?>
									  			<option value="<?php echo $item->marks_type_id;?>">
									  				<?php echo $item->marks_name?></option>

									  		<?php
									  	}?>
									  	 
									  </select>
									  </td>
									 
									</tr>
								</tbody>
							</table>
							<div class="control-group">
								<div class="controls" style="float:left;">
									<span class="hideblock"><button type="Reset" class="btn btn-primary" name="save" value="Reset">Reset</button></span>
								</div>
											<div class="controls" style="float:left;">
												
												<span class="hideblock"><button type="button" class="btn btn-primary" name="save" value="submit" id="btnViewmarks1report">Submit</button></span>
											</div>
										</div>
						</form>
					<div>
						<table class="table" border="1" id="marksreporthere">
						</table>
					</div>
					</div>
				</div>
			</div>
</div>