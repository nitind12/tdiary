<div class="span12">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1 > Student_reg</h1>
							</div>
	<form method="post" action="<?php echo site_url('stu5c/savingdata400');?>" class="form-horizontal row-fluid">
	<table class="table table-striped table-bordered table-condensed" id="s5" name="s5" border="1">
		
			<!--<table class="table" >-->
				<thead>
				<tbody>
								  
									<tr>
										
									  	<td>session:<br>
									    <select tabindex="1"data-placeholder="Select here.." class="span8" name="session" id="session" required/>
									  	<option value ="Yes">Select here..</option>
									  	<option value ="No">2018-19</option>
									  	<option value ="No">2019-20</option>
									    <option value ="No">2020-21</option>
                                        <option value ="No">2021-22</option>
                                        <option value ="No">2022-23</option>  
                                        <option value ="No">2023-24</option>
                                        <option value ="No">2024-25</option>
									</select></td>
									    <td>course_of_admission:<br>
									    <select tabindex="1"data-placeholder="Select here.." class="span8" id="course_of_admission" name="course_of_admission" required/>
									  	<option value ="Yes">Select here..</option>
									  	<option value ="No">BCA</option>
									  	<option value ="No">BBA</option>
									  	<option value ="No">HM</option>
									  	<option value ="No">MCA</option>
									  	<option value ="No">MBA</option>
									  	<option value ="No">B-TECH</option>
									  	<option value ="No">M-TECH</option>
									    </select></td>
									  <td>date_of_admission:<br>
									  	<input type="date" name="date_of_admission" class="span8" id="date_of_admission" required/></td>
									  	<td>status:<br>
									    <select tabindex="1"data-placeholder="Select here.." class="span8" name="status" id="status" required/>
									  	<option value ="Yes">Select here..</option>
									  	<option value ="No">0</option>
									  	<option value ="No">1</option>
									    </select></td></tr>
									    <tr>
									  	<td >description<br>
									  	<input type="text" name="description" class="span5" id="description" required/></td>
									  <td>username:<br>
									  	<input type="text" name="username" class="span8" id="username" required/></td>
									  <td>std_id:<br>
									  	<input type="number" name="std_id" id="std_id" class="span8" required/></td></tr>
									  	</tbody></thead></table>
								<div class="control-group">
											<div class="controls">
												
												<button type="submit" class="btn btn-primary" name="save">INSERT RECORD</button>
											</div>
										</div></center><br><br>
									</form>
									<center><a href="<?php echo site_url('stu5c/del/' )?>" class="btn btn-primary " onclick="return confirm('Are you sure to delete whole data from the table??')">Delete Whole Data From the Table!</a></center>
									<br>
										<table border="1" cellpadding="5" cellspacing="5" width="40%" align="center">

		<tr style="text-align: left">
			<th align="center">session</th>
			<th align="center">course_of_admission </th>
			<th align="center">date_of_admission</th>
			<th align="center">status</th>
			<th align="center">description</th>
			<th align="center">username</th>
			
			<th align="center">std_id</th>
			
			<th align="center">Delete</th>

			<!--<th align="center">Update</th>-->
		</tr>

		<?php foreach ($users as $item) { ?>
			<tr >
				<td align="center"><?php echo $item->session;?></td>
				<td align="center"><?php echo $item->course_of_admission;?></td>
				<td align="center"><?php echo $item->date_of_admission;?></td>
				<td align="center"><?php echo $item->status;?></td>
				<td align="center"><?php echo $item->description;?></td>
				<td align="center"><?php echo $item->username;?></td>
				<td align="center"><?php echo $item->std_id;?></td>
				<td><a href="<?php echo site_url('stu5c/del1/' . $item->std_id)?>" class="btn btn-primary " onclick="return confirm('Are you sure')">Delete</a></td>
				<!--<td><a href="<?php echo site_url('test/pilih/' . $item->Student_Roll)?>" class="btn " onclick="return confirm('Are you sure')">Update</a></td>-->
			</tr>

		<?php } ?>
		
	
</div></div></div></div></div></div>




     