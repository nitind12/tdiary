
	<div class="container">
	<h3> Course Registration</h3>
<form method="post" action="<?php echo site_url('stu5c/index');?>"  class="form-horizontal row-fluid" >

		
		<div class="control-group" >
			<label class="btn btn-primary control-label" for="basicinput"><center>session</center></label>
				<div class="controls">
					<select tabindex="1" data-placeholder="Select here.." class="span8" required/>
								<option value="">Select here..</option>
								<option value="Category 1">2018-19</option>
								<option value="Category 2">2019-20</option>
								<option value="Category 3">2020-2021</option>
								<option value="Category 4">2021-22</option>
								<option value="Category 5">2022-23</option>
								<option value="Category 6">2023-24</option>
								<option value="Category 7">2024-25</option>
					</select>
				</div>
		</div>		
	<br>

	    
		<div class="control-group" >
			<label class="btn btn-primary control-label" for="basicinput"><center>course_of_admission</center></label>
				<div class="controls">
					<select tabindex="1" data-placeholder="Select here.." class="span8" required/>
								<option value="">Select here..</option>
								<option value="Category 1">BCA</option>
								<option value="Category 2">BBA</option>
								<option value="Category 3">HM</option>
								<option value="Category 4">MCA</option>
								<option value="Category 5">MBA</option>
								<option value="Category 6">B-TECH</option>
								<option value="Category 7">M-TECH</option>

					</select>
				</div>
		</div>		
	<br>
	    
	    <div class=" control-group">
			<label class="btn btn-primary control-label" for="basicinput"><center>date_of_addmission</center></label>
				<div class="controls">
					<input type="date" id="basicinput" placeholder="enter your date_of_addmission..."  class="span8" required/  >
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
			<label class="btn btn-primary control-label" for="basicinput"><center>description</center></label>
				<div class="controls">
					<textarea class="span8" rows="8"></textarea>
				</div>
	    </div>    
    <br>    
        
        <div class="control-group">
		    <label class="btn btn-primary control-label" for="basicinput"><center>username</center></label>
				<div class="controls">
					<input type="text" id="basicinput" placeholder="enter your username name..."  class="span8" required/>
				</div>
		</div>
    <br>
    	
    	<div class="control-group">
		    <label class="btn btn-primary control-label" for="basicinput"><center>student_id</center></label>
				<div class="controls">
					<input type="text" id="basicinput" placeholder="enter your student_id..."  class="span8" required/>
				</div>
		</div>
	<br>	
		
		<div class="control-group" required/>
				<div class=""btn btn-primary control-label">
							<center>	
                                <button><input type="submit" id="course" class="btn" onclick="return validation();">
                                	save
                                </button>
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
	


