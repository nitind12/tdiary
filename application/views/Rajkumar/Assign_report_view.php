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
	 <td >Seesion:<br>
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Session" id="Session" >
									  		<option value ="">Select here..</option>
									  	 <option value ="2015">2015</option>
									  	 <option value ="2016">2016</option>
									  	 <option value ="2017">2017</option>
									  	 <option value ="2018 ">2018</option>
									  	 <option value ="2019">2019</option>
									  	 <option value ="2020">2020</option>
									  </select></td>
									  <td >Course_name:<br>
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Course_name" id="Course_name" >
									  		<option value ="">Select here..</option>
									  	 <option value ="BCA">BCA</option>
									  	 <option value ="BBA">BBA</option>
									  	 <option value ="B.COM">B.COM</option>
									  	 <option value ="POLY TECHNIQUE">POLY TECHNIQUE</option>
									  	 <option value ="B.SC">B.SC</option>
									  	 <option value ="HM">HM</option>
									  </select></td>
									  <td>Semester:<br>
									  	<!--<input type="text" id="txtSemester" name="txtSemester" class="span8">-->
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Semester" id="Semester" >
									  		<option value ="">Select here..</option>
									  	 <option value ="1">1</option>
									  	 <option value ="2">2</option>
									  	 <option value ="3">3</option>
									  	 <option value ="4">4</option>
									  	 <option value ="5">5</option>
									  	 <option value ="6">6</option>
									  	 <option value ="7">7</option>
									  	 <option value ="8">8</option>
									  </select>
									  </td>
									</tr>
									<tr>
									  <td>Section:<br>
									  	<!--<input type="text" id="txtSection" name="txtSection" class="span8">-->
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Section" id="Section"  >
									  		<option value ="">Select here..</option>
									  	 <option value ="A">A</option>
									  	 <option value ="B">B</option>
									  	 <option value ="C">C</option>
									  	 <option value ="D">D</option>
									  	 
									  </select>
									  </td>
									
									  <td >Subject:<br>
									  	<!--<input type="text" id="Subject" name="Subject" class="span8"  >-->
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Subject" id="Subject" >
									  		<option value ="">Select here..</option>
									  	 <option value ="Cummunicative English">Cummunicative English</option>
									  	 <option value ="Basic Mathematics">Basic Mathematics</option>
									  	 <option value ="Introduction To Computer">Introduction To Computer</option>
									  	 <option value ="POP">POP</option>
									  	 <option value ="AC">AC</option>
									  	 <option value ="Descrete Mathematics">Descrete Mathematics</option>
									  	 <option value ="DBMS">DBMS</option>
									  	 <option value ="DS">DS</option>
									  	 <option value ="DE">DE</option>
									  	 <option value ="OS">OS</option>
									  	 <option value ="OB">OB</option>
									  	 <option value ="OT">OT</option>
									  	 <option value ="CG">CG</option>
									  	 <option value ="CSA">CSA</option>
									  	 <option value ="OOP WITH C++">OOP WITH C++</option>
									  	 <option value ="DCN">DCN</option>
									  	 <option value ="NAST">NAST</option>
									  	 <option value ="Unix And Shell Programming">Unix And Shell Programming</option>
									  	 <option value ="ES">ES</option>
									  	 <option value ="Java">Java</option>
									  	 <option value ="SE">SE</option>
									  	 <option value ="AI">AI</option>
									  	 <option value ="Python">Python</option>
									  	 <option value ="C#">C#</option>
									  	 <option value ="DBMS">Web Tech</option>

									  </select>
									  </td>
									
									
										
											 <td colspan="3">A_no:<br>
									  	<select tabindex="1"data-placeholder="Select here.." class="span8" name="Assignment_no" id="Assignment_no" >
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