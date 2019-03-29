								  

	
	<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1>Internal Test Marks</h1>
							</div>
	<form method="post" id="myform" action="<?php echo site_url('test/savingdata');?>" class="form-horizontal row-fluid">
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
									  	<input type="text" id="Subject" name="Subject" class="span8"  >
									  </td>
									</tr>


									<tr >
										<th><center>Course_name</center></th>
										<th><center>Semester</center></th>
										<th><center>Section</center></th>
										<th><center>Subject</center></th>
									  <th><center>Student Roll</center></th>
									  <!--<th><center>Student Name</center></th>-->
									  <th><center>Marks1</center></th>
									  <th><center>Marks1</center></th>
									</tr>
								  </thead>
								  <tbody>
								  	<?php foreach($marks as $user):
		?>
			

			<tr>
				<td>
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
				<!--<td>
					<center><?= $user['Student_name']?></center>
				</td>-->
				<td>
					<center><?= $user['marks1']?></center>
				</td>
				<td>
					<center><?= $user['marks2']?></center>
				</td>
				
			</tr>
			
				<?php endforeach;?>

			

	
	</tbody>
</table>
</div>

