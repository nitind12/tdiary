
	<div class="container">
	<h1 align="center">Registration Form </h1>
	<h3> Faculty Personal Detail</h3>
<form method="post" action="<?php echo site_url('fac2c/index');?>"  class="form-horizontal row-fluid" >

		<div class=" control-group">
			<label class="btn btn-primary control-label" for="basicinput"><center>S_no</center></label>
				<div class="controls">
					<input type="number" id="basicinput" placeholder="enter your S_no..."  class="span8" required/  >
				</div>
		</div>
     <br>

		<div class="control-group">
			<label class="btn btn-primary control-label" for="basicinput"><center>first_name</center></label>
				<div class="controls">
					<input type="text" id="basicinput" placeholder="enter your first name..."  class="span8" required/  >
				</div>
		</div>
	<br>

		<div class="control-group">
			<label class="btn btn-primary control-label" for="basicinput"><center>last_name</center></label>
				<div class="controls">
					<input type="text" id="basicinput" placeholder="enter your last name..."  class="span8" required/  >
				</div>
		</div>
	<br>	
        
        <div class="control-group" >
		        <label class="btn btn-primary control-label" for="basicinput"><center>date_of_birth</center></label>
		            <div class="controls">
				        <input type="date" id="basicinput"  class="span8" required/ >
				    </div>
	    </div>
    <br>    
        
		<div class="control-group" >
					<label class="btn btn-primary control-label" for="basicinput"><center>gender</center></label>
						<div class="controls">
							<select tabindex="1" data-placeholder="Select here..." class="span8" required/>
								<option value="">Select here..</option>
								<option value="Category 1">Male</option>
								<option value="Category 2">Female</option>
								<option value="Category 3">Other</option>
								
							</select>
						</div>
		</div>
	<br>

		<div class="control-group">
					<label class="btn btn-primary control-label" for="basicinput"><center>marital_status</center></label>
						<div class="controls">
							<label class="radio inline" required/ >
								<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
													married
							</label> 
									<label class="radio inline">
										<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													unmarried
									</label> 
									
						</div>
		</div>
    <br>
		
		<div class="control-group">
		    <label class="btn btn-primary control-label" for="basicinput"><center>father_name</center></label>
				<div class="controls">
					<input type="text" id="basicinput" placeholder="enter your father's name..."  class="span8" required/>
				</div>
		</div>
	<br>
		
		<div class="control-group">
		    <label class="btn btn-primary control-label" for="basicinput"><center>husband_name</center></label>
				<div class="controls">
					<input type="text" id="basicinput" placeholder="enter your father's name..."  class="span8" required/>
				</div>
		</div>
    <br>
	
		<div class="control-group">
					<label class="btn btn-primary control-label"><center>nationality</center></label>
						<div class="controls">
							<label class="checkbox" required/>
								<input type="radio" value="Indian" name="c1" >
													Indian
							</label>
							<label class="checkbox">
								<input type="radio" value="Foreigner" name="c1">
													Foreigner
							</label>
												
						</div>
		</div>
	<br>
		
		<div class="control-group">
					<label class="btn btn-primary control-label" for="basicinput"><center>category</center></label>
						<div class="controls">
							<label class="radio inline" required/ >
								<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
													GEN
							</label> 
									<label class="radio inline">
										<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													SC/ST
									</label> 
									<label class="radio inline">
										<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
													OBC
							</label>
						</div>
		</div>
    <br>
		
		<div class="control-group" >
			<label class="btn btn-primary control-label" for="basicinput"><center>blood_group</center></label>
				<div class="controls">
					<select tabindex="1" data-placeholder="Select here..."  class="span8" required/>
								<option value="">Select here..</option>
								<option value="Category 1">A+</option>
								<option value="Category 2">B+</option>
								<option value="Category 3">AB+</option>
								<option value="Category 3">O+</option>
								<option value="Category 3">O-</option>
					</select>
				</div>
		</div>		
	<br>			
		
		<div class="control-group" >
			<label class="btn btn-primary control-label" for="basicinput"><center>status</center></label>
				<div class="controls">
					<select tabindex="1" data-placeholder="Select here..." class="span8" required/>
								<option value="">Select here..</option>
								<option value="Category 1">0</option>
								<option value="Category 2">1</option>
								
					</select>
				</div>
		</div>
	<br>

        <div class="control-group">
			<label class="btn btn-primary control-label" for="basicinput"><center>user_name</center></label>
				<div class="controls">
					<input type="text" id="basicinput" placeholder="enter username name..."  class="span8" required/  >
				</div>
		</div>
	<br>

		<div class="control-group" >
			<label class="btn btn-primary control-label" for="basicinput"><center>session</center></label>
				<div class="controls">
					<select tabindex="1" data-placeholder="Select here..." class="span8" required/>
								<option value="">Select here..</option>
								<option value="Category 1">even</option>
								<option value="Category 2">odd</option>
								
					</select>
				</div>
		</div>
	<br>		
        
        <div class="control-group">
			<label class="btn btn-primary control-label" for="basicinput"><center>faculty_id</center></label>
				<div class="controls">
					<input type="text" id="basicinput" placeholder="enter student id..."  class="span8" required/  >
				</div>
		</div>
	<br>
		
		<div class="control-group" required/>
				<div class=""btn btn-primary control-label">
							<center><a href="<?php echo site_url('fac2c/index');?>">	
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
	


