<div class="span12">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1 > address_detail</h1>
							</div>
	<form method="post" action="<?php echo site_url('stu2c/savingdata100');?>" class="form-horizontal row-fluid">
	<table class="table table-striped table-bordered table-condensed" id="s2" name="s2" border="1">
		
			<!--<table class="table" >-->
				<thead>
				<tbody>
								  
									<tr>
										<td>student_id:<br>
									  	<input type="text" name="student_id" id="student_id" class="span8" required/></td>
									  <td>address:<br>
									  	<input type="text" name="address" id="address" class="span8" required/></td>
									  <td>state:<br>
									  	<input type="text" name="state" id="state"  class="span8" required/></td></tr>
									  	<tr>
									  	<td>city:<br>
									  	<input type="text" name="city" id="city" class="span8" required/></td>
									  	<td>pincode:<br>
									  	<input type="text" name="pincode" id="pincode" class="span8" required/></td>
									  	
									  	<td>address_status:<br>
									    <select tabindex="1"data-placeholder="Select here.." class="span8" id="address_status" name="address_status" required/>
									  	<option value ="Yes">Select here..</option>
									  	<option value ="No">0</option>
									  	<option value ="No">1</option>
									    </select></td></tr>
									    <tr>
									    <td>status:<br>
									    <select tabindex="1"data-placeholder="Select here.." class="span8" name="status" id="status" required/>
									  	<option value ="Yes">Select here..</option>
									  	<option value ="No">0</option>
									  	<option value ="No">1</option>
									    </select></td>
									  <td>date_of_commencement<br>
									  	<input type="date" name="date_of_commencement" class="span8" required/></td>
									  <td>username:<br>
									  	<input type="number" name="username" class="span8" required/></td>
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

									<center><a href="<?php echo site_url('stu3c/del/' )?>" class="btn " onclick="return confirm('Are you sure to delete whole data from the table??')">Delete Whole Data From the Table!</a></center>
									<br>
										<table border="1" cellpadding="5" cellspacing="5" width="40%" align="center">

		<tr style="text-align: left">
			<th align="center">student_id</th>
			<th align="center">address</th>
			<th align="center">state</th>
			<th align="center">city</th>
			<th align="center">pincode</th>
			<th align="center">address_status</th>
			
			<th align="center">status</th>
			<th align="center">date_of_commencement</th>
			
			<th align="center">username</th>
			<th align="center">Delete</th>

			<!--<th align="center">Update</th>-->
		</tr>

		<?php foreach ($users as $item) { ?>
			<tr >
				<td align="center"><?php echo $item->student_id;?></td>
				<td align="center"><?php echo $item->address;?></td>
				<td align="center"><?php echo $item->state;?></td>
				<td align="center"><?php echo $item->city;?></td>
				<td align="center"><?php echo $item->pincode;?></td>
				<td align="center"><?php echo $item->address_status;?></td>
				<td align="center"><?php echo $item->status;?></td>
  				<td align="center"><?php echo $item->date_of_commencement;?></td>
				<td align="center"><?php echo $item->username;?></td>
				<td><a href="<?php echo site_url('stu3c/del1/' . $item->student_id)?>" class="btn " onclick="return confirm('Are you sure')">Delete</a></td>
				<!--<td><a href="<?php echo site_url('test/pilih/' . $item->Student_Roll)?>" class="btn " onclick="return confirm('Are you sure')">Update</a></td>-->
			</tr>

		<?php } ?>
		
	
</div></div></div></div></div></div>




     