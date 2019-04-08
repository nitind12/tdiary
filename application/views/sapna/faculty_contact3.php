	<div class="container">
	
	<h3> Contact Detail</h3>

<form method="post" action="<?php echo site_url('facc/index');?>"  class="form-horizontal row-fluid">
		
		<div class="control-group">
			<label class="btn btn-primary control-label" for="basicinput"><center>faculty_email</center></label>
				<div class="controls">
					<input type="Email" id="email" name="email" placeholder="Enter your current Email..." class="span8"  required/>
				</div>
		</div>
	<br>
        
		
		<div class="control-group" >
			<label class="btn btn-primary control-label" for="basicinput"><center>email_status</center></label>
				<div class="controls">
							<select tabindex="1" data-placeholder="Select here.." class="span8" required/>
								<option value="">Select here..</option>
								<option value="Category 1">0</option>
								<option value="Category 2">1</option>
								
							</select>
				</div>
		</div>
	<br>
		
		<div class="control-group">
		    <label class="btn btn-primary control-label" for="basicinput"><center>faculty_contact</center></label>
				<div class="controls">
					<input type="number"   id="scon" name="scon" placeholder="Enter your Contact no..."  class="span8"  required/>
				</div>
		</div>		
	<br>
			
		<div class="control-group" >
			<label class="btn btn-primary control-label" for="basicinput"><center>faculty_status</center></label>
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
			<label class="btn btn-primary control-label" for="basicinput"><center>contact_status</center></label>
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

        <div class="control-group">
			<label class="btn btn-primary control-label" for="basicinput"><center>username</center></label>
				<div class="controls">
					<input type="text" id="basicinput" placeholder="enter student id..."  class="span8" required/  >
				</div>
		</div>
	<br>

		<div class="control-group">
			<label class="btn btn-primary control-label" for="basicinput"><center>faculty_id</center></label>
				<div class="controls">
					<input type="text" id="basicinput" placeholder="enter username name..."  class="span8" required/  >
				</div>
		</div>
	<br>
			
		<div class="control-group" required/>
				<div class="controls">
						<center><a href="<?php echo site_url('facc/index');?>">	
                                <button><input type="submit" id="course" class="btn" onclick="return validation();">
                                	Save & Next
                                </button> </a>
							</center>
				</div>
		</div>
							
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->


	