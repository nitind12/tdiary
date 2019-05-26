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
                   
								<h1>Internal Marks Report </h1>
							</div>

							<div class="module-body">
							<span class="hideblock"><a href="#"onclick="window.print()"><span class="btn btn-primary icon-print" style="float:right"> print</span></a></span>

		<form id="marks1formview" name="marks1formview" class="form-horizontal row-fluid">
			<table class="table table-striped table-bordered table-condensed"  >
		
			<!--<table class="table" >-->
						<tbody>
								<td> 		
													<input type="radio" name="r1" id="allsub" checked required>
													All Subject<br>
													<input type="radio" name="r1" id="sub" required>
													Subject-wise
													
													</td>

								<td>Subject:<br>
									<!--<input type="text" id="Subject" name="Subject" class="span8"  >-->
									<select tabindex="1"data-placeholder="Select here.." class="span8" name="Subject" id="Subject" disabled >
										<option value ="">Select here...</option>
										<?php foreach ($subject as  $item) { ?>
                                                 <option value="<?php echo $item->subject_id;?>">
                                                 	<?php echo $item->subject_name?></option>
                                                    <?php }?>
                                                
										
									</select>
								</td>

								<td>Type of Marks:<br>
									  	<!--<input type="text" id="txtSection" name="txtSection" class="span8">-->
									<select tabindex="1"data-placeholder="Select here.." class="span8" name="marks_type_id" id="marks_type_id"  >
									  	<option value ="">Select marks type...</option>
									  		<?php foreach($marks_type as $item){?>
									  			<option value="<?php echo $item->marks_type_id;?>">
									  				<?php echo $item->marks_name?></option>

									  		<?php
									  	}?>
									  	 
									</select>
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
												
												<span class="hideblock"><button type="button" class="btn btn-primary" name="save" value="submit" id="btnViewmarks1report">Submit</button></span>
											</div>
										</div>
						</form>
					<div>
						<table class="table" border="1" id="marksreporthere">
						</table>
					</div>
					</div>
				</div>
			</div>
</div>