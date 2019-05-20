	<style media="print">
					.hideblock{
						display:none;
									}
	</style>

<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h1>View Time Table </h1>
								
							</div>
							<div class="module-body">
							
	<form id="myform1001" name="myform1001" class="form-horizontal row-fluid">
	<table class="table table-striped table-bordered table-condensed" border="1">
		
			<!--<table class="table" >-->
				<thead>
<tr>
	<span class="hideblock"><a href="#" onclick="window.print()"><span class="btn btn-primary icon-print" style="float:right">print</span></a></span>
									  <td class="hideblock">Day:<input type="hidden" value="<?php echo date("D")?>" name="day" id="day"><?php echo date("D")?><br>
									  	<select tabindex="1"data-placeholder="Select here.." name="day" id="day"class="span8" required="required">
									  		<option value ="">Select here.. </option>
									  	 <option value ="Monday">Monday</option>
									  	 <option value ="Tuesday">Tuesday</option>
									  	 <option value ="Wednesday">Wednesday</option>
									  	 <option value ="Thursday">Thursday</option>
									  	 <option value ="Friday">Friday</option>
									  	 <option value ="Saturday">Saturday</option>
									  </select></td>
									
									 <td class="hideblock"> Date:<br>
									  	<input type="text" value="<?php echo date("d-m-Y")?>" name="Date" id="Date" class="span8 hideblock"/></td>
									  
									</tr>
								</thead>
							</table>
							<div class="control-group">
								<div class="controls" style="float:left;">
									<button type="Reset" class="btn btn-primary hideblock" name="save" value="Reset">Reset</button>
								</div>
											<div class="controls" style="float:left;">
												
												<button type="button" class="btn btn-primary hideblock" name="save" value="submit" id="btnsubmit1">Submit</button>
											</div>
										</div>
						</form>
						
					<div class="module-body">
									
		                          <table class="table table-striped table-bordered table-condensed"  border="1">
									  <thead>
										<tr bgcolor="lightblue">
										  <th>DAY</th>
										  <th>09:00-09:50</th>
										  <th>09:50-10:40</th>
										  <th>10:40-11:30</th>
					                      <th>11:50-12:40</th>
										  <th>12:40-01:30</th>
										  <th>02:10-03:00</th>
										  <th>03:00-03:50</th>
										</tr>
									  </thead>
									  <tbody>
										<tr>
										  <td>MON</td>
										  <td id="Monday09_00_09_50"></td>
										  <td id="Monday09_50_10_40"></td>
										  <td id="Monday10_40_11_30"></td>
										  <td id="Monday11_50_12_40"></td>
										  <td id="Monday12_40_01_30"></td>
										  <td id="Monday02_10_03_00"></td>
										  <td id="Monday03_00_03_50"></td>
										  
										  
										</tr>
										<tr>
										  <td>TUE</td>
										  <td id="Tuesday09_00_09_50"></td>
										  <td id="Tuesday09_50_10_40"></td>
										  <td id="Tuesday10_40_11_30"></td>
										  <td id="Tuesday11_50_12_40"></td>
										  <td id="Tuesday12_40_01_30"></td>
										  <td id="Tuesday02_10_03_00"></td>
										  <td id="Tuesday03_00_03_50"></td>
										  
										  
										</tr>
										<tr>
										  <td>WED</td>
										  <td id="Wednesday09_00_09_50"></td>
										  <td id="Wednesday09_50_10_40"></td>
										  <td id="Wednesday10_40_11_30"></td>
										  <td id="Wednesday11_50_12_40"></td>
										  <td id="Wednesday12_40_01_30"></td>
										  <td id="Wednesday02_10_03_00"></td>
										  <td id="Wednesday03_00_03_50"></td>
										  
										  
										</tr>
										<tr>
											<td>THU</td>
											<td id="Thursday09_00_09_50"></td>
											<td id="Thursday09_50_10_40"></td>
											<td id="Thursday10_40_11_30"></td>
											<td id="Thursday11_50_12_40"></td>
											<td id="Thursday12_40_01_30"></td>
											<td id="Thursday02_10_03_00"></td>
											<td id="Thursday03_00_03_50"></td>
											
											
										</tr>
										<tr>
											<td>FRI</td>
											<td id="Friday09_00_09_50"></td>
											<td id="Friday09_50_10_40"></td>
											<td id="Friday10_40_11_30"></td>
											<td id="Friday11_50_12_40"></td>
											<td id="Friday12_40_01_30"></td>
											<td id="Friday02_10_03_00"></td>
											<td id="Friday03_00_03_50"></td>
																						
										</tr>
										<tr>
											<td>SAT</td>
											<td id="Saturday09_00_09_50"></td>
											<td id="Saturday09_50_10_40"></td>
											<td id="Saturday10_40_11_30"></td>
											<td id="Saturday11_50_12_40"></td>
											<td id="Saturday12_40_01_30"></td>
											<td id="Saturday02_10_03_00"></td>
											<td id="Saturday03_00_03_50"></td>

											
										</tr>	
									  </tbody>
									</table>
									</table>
										</div>

					<div>
						<table class="table" border="1" id="timetablehere1">
						</table>
					</div>
					</div>
				</div>
			</div>
