
	<div class="container">
	<h3> Address Detail</h3>
<form method="post" action="<?php echo site_url('fac3c/index');?>"  class="form-horizontal row-fluid" >

		     
		<div class="control-group">
			<label class="btn btn-primary control-label" for="basicinput"><center>address</center></label>
				<div class="controls">
					<input type="text" id="basicinput" placeholder="enter your complete address"  class="span8" required/  >
				</div>
		</div>
	<br>

		<div class="control-group" >
					<label class="btn btn-primary control-label" for="basicinput"><center>state</center></label>
						<div class="controls">
							<select tabindex="1" data-placeholder="Select here.." class="span8" required/>
								<option value="">Select here..</option>
								<option value="Category 1">UK</option>
								<option value="Category 2">UP</option>
								<option value="Category 3">Other</option>
								
							</select>
						</div>
		</div>
	<br>

		<div class="control-group" >
					<label class="btn btn-primary control-label" for="basicinput"><center>city</center></label>
						<div class="controls">
							<select tabindex="1" data-placeholder="Select here.." class="span8" required/>
								<option value="">Select here..</option>
								<option value="Category 1">HALDWANI</option>
								<option value="Category 2">DELHI</option>
								<option value="Category 3">MUMBAI</option>
								
							</select>
						</div>
		</div>
	<br>
				
		<div class="control-group">
			<label class="btn btn-primary control-label" for="basicinput"><center>pincode</center></label>
				<div class="controls">
					<input type="number" id="basicinput" placeholder="enter your pin..."  class="span8" required/  >
				</div>
		</div>
	<br>			
		
		<div class="control-group" >
			<label class="btn btn-primary control-label" for="basicinput"><center>address_status</center></label>
				<div class="controls">
					<select tabindex="1" data-placeholder="Select here.." class="span8" required/>
								<option value="">Select here..</option>
								<option value="Category 1">0</option>
								<option value="Category 2">1</option>
								
					</select>
				</div>
		</div>
	<br>

		<div class="control-group" >
			<label class="btn btn-primary control-label" for="basicinput"><center>status</center></label>
				<div class="controls">
					<select tabindex="1" data-placeholder="Select here.." class="span8" required/>
								<option value="">Select here..</option>
								<option value="Category 1">0</option>
								<option value="Category 2">1</option>
								
					</select>
				</div>
		</div>		
	<br>    
        
        <div class="control-group" >
		        <label class="btn btn-primary control-label" for="basicinput"><center>date_of_commencement</center></label>
		            <div class="controls">
				        <input type="date" id="basicinput"  class="span8" required/ >
				    </div>
	    </div>
    <br>

        <div class="control-group">
		    <label class="btn btn-primary control-label" for="basicinput"><center>faculty_id</center></label>
				<div class="controls">
					<input type="number" id="basicinput" placeholder="enter username..."  class="span8" required/>
				</div>
		</div>
    <br>

		<div class="control-group" required/>
				<div class=""btn btn-primary control-label">
							<center><a href="<?php echo site_url('fac3c/index');?>">	
                                <button><input type="submit" id="course" class="btn" onclick="return validation();">
                                	Save & Next
                                </button> </a>
							</center>
				</div>
		</div>
									</form>
							
						

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->
</center>
	


