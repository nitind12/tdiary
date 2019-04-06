<div class="span8">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1 > Student contact detail</h1>
							</div>
	<form method="post" action="<?php echo site_url('stu4c/savingdata4');?>" class="form-horizontal row-fluid">
	<table class="table table-striped table-bordered table-condensed" id="s8" name="s8" border="1">
		
			<!--<table class="table" >-->
				<thead>
				<tbody>
								  
									<tr>
										<td>std_email:<br>
									  	<input type="email" name="std_email" class="span8" required/></td>
									  <td>std_contact:<br>
									  	<input type="number" name="std_contact" class="span8" required/></td>
									  <td>altenate_contact:<br>
									  	<input type="number" name="alternate_email" class="span8" required/></td>
									  	<td>contact_status:<br>
									  		<select tabindex="1"data-placeholder="Select here.." class="span8" name="status" required/>
									  	<option value ="Yes">Select here..</option>
									  	<option value ="No">0</option>
									  	<option value ="No">1</option>
									    </select></td>
									  	
									  <td>email_status:<br>
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
									  	
				                       <td>alternate_email:<br>
									  	<input type="email" name="alternate_email" class="span8" required/></td>
									  	<td>std_id:<br>
									  	<input type="number" name="std_id" class="span8" required/></td>
									  	<td>username:<br>
									  	<input type="text" name="username" class="span8" required/></td>
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
									<center><a href="<?php echo site_url('stu4c/del/' )?>" class="btn " onclick="return confirm('Are you sure to delete whole data from the table??')">Delete Whole Data From the Table!</a></center>
									<br>
										<table border="1" cellpadding="5" cellspacing="5" width="40%" align="center">

		<tr style="text-align: left">
			<th align="center">std_email</th>
			<th align="center">std_contact</th>
			<th align="center">alternate_contact</th>
			<th align="center">contact_status</th>
			<th align="center">email_status</th>
			<th align="center">status</th>
			
			<th align="center">alternate_email</th>
			<th align="center">std_id</th>
			
			<th align="center">username</th>
			<th align="center">Delete</th>

			<!--<th align="center">Update</th>-->
		</tr>

		<?php foreach ($users as $item) { ?>
			<tr >
				<td align="center"><?php echo $item->std_email;?></td>
				<td align="center"><?php echo $item->std_contact;?></td>
				<td align="center"><?php echo $item->alternate_contact;?></td>
				<td align="center"><?php echo $item->contact_status;?></td>
				<td align="center"><?php echo $item->email_status;?></td>
				<td align="center"><?php echo $item->status;?></td>
				<td align="center"><?php echo $item->alternate_email;?></td>
  				<td align="center"><?php echo $item->std_id;?></td>
				<td align="center"><?php echo $item->username;?></td>
				
				<td><a href="<?php echo site_url('stu4c/del1/' . $item->std_id)?>" class="btn " onclick="return confirm('Are you sure')">Delete</a></td>
				<!--<td><a href="<?php echo site_url('test/pilih/' . $item->Student_Roll)?>" class="btn " onclick="return confirm('Are you sure')">Update</a></td>-->
			</tr>

		<?php } ?>
		
	
</div></div></div></div></div></div>




     