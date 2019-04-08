<div class="span8">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1 > Student personal detail</h1>
							</div>
	<form method="post" action="<?php echo site_url('stu1c/savingdata4');?>" class="form-horizontal row-fluid">
	<table class="table table-striped table-bordered table-condensed" id="s7" name="s7" border="1">
		
			<!--<table class="table" >-->
				<thead>
				<tbody>
								  
									<tr>
										<td>address:<br>
									  	<input type="text" name="address" class="span8" required/></td>
									  <td>state:<br>
									  	<input type="text" name="state" class="span8" required/></td>
									  <td>city:<br>
									  	<input type="number" name="city" class="span8" required/></td>
									  	<td>pincode:<br>
									  	<input type="number" name="pincode"class="span8" required/></td>
									  	<td>address_status:<br>
									    <select tabindex="1"data-placeholder="Select here.." class="span8" name="status" required/>
									  	<option value ="Yes">Select here..</option>
									  	<option value ="No">0</option>
									  	<option value ="No">1</option>
									    </select></td>
									    <td>status:<br>
									    <select tabindex="1"data-placeholder="Select here.." class="span8" name="status" required/>
									  	<option value ="Yes">Select here..</option>
									  	<option value ="No">0</option>
									  	<option value ="No">1</option>
									    </select></td>
									  <td>date_of_commencement:<br>
									  	<input type="number" name="date_of_commencement" class="span8" required/></td>
									  <td>username:<br>
									  	<input type="number" name="username" class="span8" required/></td>
									  
									  <td>faculty_id:<br>
									  	<input type="number" name="faculty_id" class="span8" required/></td>
									  </tr>
									</tbody>
								</thead>
							</table>

				                       <div class="control-group">
											<div class="controls">
												
												<button type="submit" class="btn" name="save">INSERT RECORD</button>
											</div>
										</div></center><br><br>
									</form>
									<center><a href="<?php echo site_url('stu1c/del/' )?>" class="btn " onclick="return confirm('Are you sure to delete whole data from the table??')">Delete Whole Data From the Table!</a></center>
									<br>
										<table border="1" cellpadding="5" cellspacing="5" width="40%" align="center">

		<tr style="text-align: left">
			<th align="center">s-no</th>
			<th align="center">first_name</th>
			<th align="center">last_name</th>
			<th align="center">date_of_birth</th>
			<th align="center">father_name</th>
			<th align="center">mother_name</th>
			
			<th align="center">gender</th>
			<th align="center">nationality</th>
			
			<th align="center">category</th>
			<th align="center">blood_group</th>
			<th align="center">status</th>
			<th align="center">username</th>
			<th align="center">student_id</th>
			<th align="center">Delete</th>

			<!--<th align="center">Update</th>-->
		</tr>

		<?php foreach ($users as $item) { ?>
			<tr >
				<td align="center"><?php echo $item->s_no;?></td>
				<td align="center"><?php echo $item->first_name;?></td>
				<td align="center"><?php echo $item->last_name;?></td>
				<td align="center"><?php echo $item->date_of_birth;?></td>
				<td align="center"><?php echo $item->father_name;?></td>
				<td align="center"><?php echo $item->mother_name;?></td>
				<td align="center"><?php echo $item->gender;?></td>
  				<td align="center"><?php echo $item->nationality;?></td>
				<td align="center"><?php echo $item->category;?></td>
				<td align="center"><?php echo $item->blood_group;?></td>
				<td align="center"><?php echo $item->status;?></td>
				<td align="center"><?php echo $item->username;?></td>
				<td align="center"><?php echo $item->student_id;?></td>
				<td><a href="<?php echo site_url('stu1c/del1/' . $item->Assignment_id)?>" class="btn " onclick="return confirm('Are you sure')">Delete</a></td>
				<!--<td><a href="<?php echo site_url('test/pilih/' . $item->Student_Roll)?>" class="btn " onclick="return confirm('Are you sure')">Update</a></td>-->
			</tr>

		<?php } ?>
		
	
</div></div></div></div></div></div>




     