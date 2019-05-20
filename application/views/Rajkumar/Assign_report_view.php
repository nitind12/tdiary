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
                   
								<h1>Assignment </h1>
							</div>

							<div class="module-body">
							<span class="hideblock"><a href="#"onclick="window.print()"><span class="btn btn-primary icon-print" style="float:right"> print</span></a></span>

				<form id="assignmentform" name="assignmentform" class="form-horizontal row-fluid">
				<table class="table table-striped table-bordered table-condensed"  >
		
					<!--<table class="table" >-->
						<tbody>
							<tr>	
									<td >Subject:<br>
									  	<!--<input type="text" id="Subject" name="Subject" class="span8"  >-->
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Subject" id="Subject" >
									  	 </select>
									</td>
									
									
										
									<td>Assignment No:<br>
									  	<select tabindex="1"data-placeholder="Select here.." class="span4" name="Assignment_no" id="Assignment_no" >
									  		<option value ="">Select here..</option>
									  	 <option value ="1">1</option>
									  	 <option value ="2">2</option>
									  	 <option value ="3">3</option>
									  	 <option value ="4">4</option>
									  	 <option value ="5">5</option>
									  	 <option value ="6">6</option>
									  </select></td>
										</td>
									</tr>
								</tbody>
							</table>
							<br>
							<div class="control-group">
								<div class="controls" style="float:left;">
									<span class="hideblock"><button type="Reset" class="btn btn-primary" name="save" value="Reset">Reset</button></span>
								</div>
											<div class="controls" style="float:left;">
												
												<span class="hideblock"><button type="button" class="btn btn-primary" name="save" value="submit" id="btnViewassignment">Submit</button></span>
											</div>
										</div>
						</form>
					<div>
						<table class="table" border="1" id="assignmenthere">
						</table>
					</div>
					</div>
				</div>
			</div>
</div>