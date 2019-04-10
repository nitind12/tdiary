 <div class="wrapper">
     <div class="container">
        <div class="row">
            <div class="span3">
                <?php $this->load->view('templates/sidebar'); ?>
            </div>
           <div class="span9">
	<div class="content">

		<div class="module">
			<div class="module-head">
				  <h2>Lecture Plan</h2>
			</div>
				<div class="module-body">


				<form  method="post" name="myEdit"  id="myEdit"   action="<?php echo site_url('Edit_controller/savingdata	');?>"  class="form-horizontal row-fluid">				

							<table class="table table-striped table-bordered table-condensed">	
							
											<tr>
												 <th colspan="3"><div class="control-group">
												 	<label class=" span3 control-label" ><h3>Lecture Structure</h3></label>	
													</div>
												</th>
											</tr>

										<tr>
		                					<th>
		                      			  		<center>  <h5>Unit</h5></center>
		                      				</th>				

											<th>
												<center>	<h5>Topic</h5></center>
	
											</th>

											<th>
												<center>	<h5>No. Of Lecture</h5>	</center>
												
											</th>
										</tr>


										<tr>
											<td>
												<input type="number" id="txtunit" name="txtunit" class="span8">
											</td>

											<td>
													<textarea id="topic" name="topic" class="span8" rows="5"  cols="30" >
														
													</textarea>
											
											</td>

											<td>
												<input type="text" id="No_Of_Lecture" name="No_Of_Lecture" class="span8">

											</td>
										</tr>

										<tr>
												<td colspan="3">									
													
														Total No. of Lecture:	
														
															<input type="text" id="txttotal" name="txttotal" class="span2">

															<button style="float:right" type="submit" name="save" 
															 class=" span3 btn">Submit</button>
															
												</td>
										</tr>

												</tbody>
											</table>
										</form>

									</div>

						

								</div>
							</div>
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->


        </div>
    </div>
</div>
