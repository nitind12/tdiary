
<div class="span9">
	<div class="content">

		<div class="module">
			<div class="module-head">
				  <h2> View Time Table</h2>
			</div>
				<div class="module-body">

				<form  method="post" name="myform111"  id="myform111" class="form-horizontal row-fluid">				

							<table class="table table-striped table-bordered table-condensed">							
		
 					<?php foreach ($time1 as  $item) { ?>
                                                <img src="<?php  echo base_url('./assets/upload_notes/'. $item->Choose_File);?>">	<?php echo $item->Choose_File;?>
                                                 
                                                    <?php }?>
                                                 

											

			</div>
</html>
			

        
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


