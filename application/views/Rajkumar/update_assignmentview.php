
								  

	
	<!--<div class="span9.5">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1>Given Assignment</h1>
							</div>
							<div class="module-body">
	<form method="post" action="<?php echo site_url('update_assignment_controller/savingdata4');?>" class="form-horizontal row-fluid">
	<table class="table table-striped table-bordered table-condensed"  border="1">
		
			
				<thead>
									<tr >
									 <th align="center">Course</th>
			<th align="center">Semester</th>
			<th align="center">Section</th>
			<th align="center">Subject</th>
			<th align="center">Student_Roll</th>
			<th align="center">Assignment_id</th>
			
			<th align="center">Submission_date</th>
			<th align="center">Late_submission</th>
			<th align="center">Grade</th>
			
									</tr>
								  </thead>
								  <tbody>
								  	<?php foreach($marks as $user):
		?>
			

			<tr>
		
			
				<td >
				<center><?= $user['Course_name']?></center>
				</td>
				<td>
					<center><?= $user['Semester']?></center>
				</td>
				<td>
					<center><?= $user['Section']?></center>
				</td>
				<td>
					<center><?= $user['Subject']?></center>
				</td>
				<td>
					<center><?= $user['Student_Roll']?></center>
				</td>
				<td>
					<center><?= $user['Assignment_id']?></center>
				</td>
				
				<td>
					<center><?= $user['Submission_date']?></center>
				</td>
				<td>
					<center><?= $user['Late_submission']?></center>
				</td>
				<td>
					<center><?= $user['Grade']?></center>
				</td>
				
				
				
			</tr>
			
				<?php endforeach;?>

			

	
	</tbody>
</table>
</div>-->



<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1>Updated Assignment Record </h1>
							</div>
							<div class="module-body">
	<form id="myform7" name="myform7" class="form-horizontal row-fluid">
	<table class="table table-striped table-bordered table-condensed"  border="1">
		
			<!--<table class="table" >-->
				<thead>
<tr>
									  <td >Course_name:<br>
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Course_name" id="Course_name" >
									  		<option value ="">Select here..</option>
									  	 <option value ="BCA">BCA</option>
									  	 <option value ="BBA">BBA</option>
									  	 <option value ="B.COM">B.COM</option>
									  	 <option value ="POLY TECHNIQUE">POLY TECHNIQUE</option>
									  	 <option value ="B.SC">B.SC</option>
									  	 <option value ="HM">HM</option>
									  </select></td>
									  <td>Semester:<br>
									  	<!--<input type="text" id="txtSemester" name="txtSemester" class="span8">-->
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
									  <td>Section:<br>
									  	<!--<input type="text" id="txtSection" name="txtSection" class="span8">-->
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Section" id="Section"  >
									  		<option value ="">Select here..</option>
									  	 <option value ="A">A</option>
									  	 <option value ="B">B</option>
									  	 <option value ="C">C</option>
									  	 <option value ="D">D</option>
									  	 
									  </select>
									  </td>
									  <td>Subject:<br>
									  	<!--<input type="text" id="Subject" name="Subject" class="span8"  >-->
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Subject" id="Subject" >
									  		<option value ="">Select here..</option>
									  	 <option value ="Cummunicative English">Cummunicative English</option>
									  	 <option value ="Basic Mathematics">Basic Mathematics</option>
									  	 <option value ="Introduction To Computer">Introduction To Computer</option>
									  	 <option value ="POP">POP</option>
									  	 <option value ="Financial Account">Financial Account</option>
									  	 <option value ="Descrete Mathematics">Descrete Mathematics</option>
									  	 <option value ="DBMS">DBMS</option>
									  	 <option value ="DS">DS</option>
									  	 <option value ="DE">DE</option>
									  	 <option value ="OS">OS</option>
									  	 <option value ="OB">OB</option>
									  	 <option value ="OT">OT</option>
									  	 <option value ="CG">CG</option>
									  	 <option value ="CSA">CSA</option>
									  	 <option value ="OOP WITH C++">OOP WITH C++</option>
									  	 <option value ="DCN">DCN</option>
									  	 <option value ="NAST">NAST</option>
									  	 <option value ="Unix And Shell Programming">Unix And Shell Programming</option>
									  	 <option value ="ES">ES</option>
									  	 <option value ="Java">Java</option>
									  	 <option value ="SE">SE</option>
									  	 <option value ="AI">AI</option>
									  	 <option value ="Python">Python</option>
									  	 <option value ="C#">C#</option>
									  	 <option value ="DBMS">Web Tech</option>

									  </select>
									  </td>
									</tr>
									
								</thead>
							</table>
							<div class="control-group">
								<div class="controls" style="float:left;">
									<button type="Reset" class="btn btn-primary" name="save" value="Reset">Reset</button>
								</div>
											<div class="controls" style="float:left;">
												
												<button type="button" class="btn btn-primary" name="save" value="submit" id="update">Submit</button>
											</div>
										</div>
						</form>
					<div>
						<table class="table" border="1" id="updatehere">
						</table>
					</div>
					</div>
				</div>
			</div>

