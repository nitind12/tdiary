<div class="span12">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1 >academic_detail</h1>
							</div>
	<form method="post" action="<?php echo site_url('stu4c/savingdata40');?>" class="form-horizontal row-fluid">
	<table class="table table-striped table-bordered table-condensed" id="s4" name="s4" border="1">
		
			<!--<table class="table" >-->
				<thead>
				<tbody>
								  
									<tr>
										<td>s_no:<br>
									  	<input type="number" name="s_no" id="s_no" class="span8" required/></td>
									    <td>student_id:<br>
									  	<input type="text" name="student_id" id="student_id" class="span8" required/></td>
									    <td>qualification_status:<br>
									    <select tabindex="1"data-placeholder="Select here.." id="qualification_status" class="span8" name="qualification_status" required/>
									  	<option value ="Yes">Select here..</option>
									  	<option value ="No">0</option>
									  	<option value ="No">1</option>
									    </select></td></tr>
									    <tr>
									  	
									  	<td>passing_year:<br>
									  	<input type="year" name="passing_year"class="span8" id="passing_year" required/></td>
									    <td>school:<br>
									  	<input type="text" name="school" class="span8" id="school" required/></td>
									    <td>board:<br>
									  	<input type="text" name="board" class="span8" id="board" required/></td>
				                        </tr>
				                        <tr>
				                        <td>percentage:<br>
									  	<input type="number" name="percentage" id="percentage" class="span8" required/></td>
				                      
				                       	<td>status:<br>
									    <select tabindex="1"data-placeholder="Select here.." id="status" class="span8" name="qualification_status" required/>
									  	<option value ="Yes">Select here..</option>
									  	<option value ="No">0</option>
									  	<option value ="No">1</option>
									    </select></td>
									    <td>username:<br>
									  	<input type="text" name="username" class="span8" required/></td>

                                         </tr>
									  	</tbody></thead></table>
								<div class="control-group">
											<div class="controls">
												
												<button type="submit" class="btn btn-primary" name="save">INSERT RECORD</button>
											</div>
										</div></center><br><br>
									</form>
									<center><a href="<?php echo site_url('stu4c/del/' )?>" class="btn btn-primary " onclick="return confirm('Are you sure to delete whole data from the table??')">Delete Whole Data From the Table!</a></center>
									<br>
										<table border="1" cellpadding="5" cellspacing="5" width="40%" align="center">

		<tr style="text-align: left">
			<th align="center">s_no</th>
			<th align="center">student_id</th>
			<th align="center">qualification_status</th>
			<th align="center">passing_year</th>
			<th align="center">school</th>
			<th align="center">board</th>
			
			<th align="center">percentage</th>
			<th align="center">status</th>
			
			<th align="center">username</th>
			<th align="center">Delete</th>

			<!--<th align="center">Update</th>-->
		</tr>

		<?php foreach ($users as $item) { ?>
			<tr >
				<td align="center"><?php echo $item->s_no;?></td>
				<td align="center"><?php echo $item->student_id;?></td>
				<td align="center"><?php echo $item->qualification_status;?></td>
				<td align="center"><?php echo $item->passing_year;?></td>
				<td align="center"><?php echo $item->school;?></td>
				<td align="center"><?php echo $item->board;?></td>
				<td align="center"><?php echo $item->percentage;?></td>
  				<td align="center"><?php echo $item->status;?></td>
				<td align="center"><?php echo $item->username;?></td>
				<td align="center"><?php echo $item->delete();?></td>
				<td><a href="<?php echo site_url('stu4c/del1/' . $item->student_id)?>" class="btn btn-primary " onclick="return confirm('Are you sure')">Delete</a></td>
				<!--<td><a href="<?php echo site_url('test/pilih/' . $item->Student_Roll)?>" class="btn " onclick="return confirm('Are you sure')">Update</a></td>-->
			</tr>

		<?php } ?>
		
	
</div></div></div></div></div></div>




     