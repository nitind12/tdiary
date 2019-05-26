
<div class="span9">
	<div class="content">

		<div class="module">
			<div class="module-head">
				  <h1> View Time Table</h1>
			</div>
				<div class="module-body">

				<form  method="post" name="myform111"  id="myform111" class="form-horizontal row-fluid">			<h2>Time Table of
					<?php echo $this->session->userdata('sin');?>-
       				<?php echo $this->session->userdata('cos');?>-
     				<?php echo $this->session->userdata('tan');?>
     				<?php echo $this->session->userdata('cot');?>
     <table class="table table-striped table-bordered table-condensed">							
				<?php foreach ($time1 as  $item) { ?>
                       <img src="<?php  echo base_url('assets/ttdocs1/'.$item->Choose_File);?>" height="100%" width="100%">
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


