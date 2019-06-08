<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
						<div class="module-head">
							<h3>Account Setting</h3>
						</div>
					
						<div class="module-body">
								<div ><?php echo $this->session->flashdata('c');?> </div>	
				
											
					<form method="post" action=''>
						<div class="control-group">
							<div class="controls row-fluid  input-prepend">
							<span class="add-on"><i class="icon-lock"></i></span><input type="password" name="old_pass" id="old_pass" class="span11" placeholder="Old Password"  required="required"/>
						</div>
					</div>
							
						<div class="control-group">
							<div class="controls row-fluid  input-prepend">
							<span class="add-on"><i class="icon-lock"></i></span><input type="password" name="new_pass" id="new_pass"  class="span11" placeholder="New Password"  required="required"/>
						</div>
					</div>

						<div class="control-group">
							<div class="controls row-fluid  input-prepend">
							<span class="add-on"><i class="icon-lock"></i></span><input type="password" name="confirm_pass" id="confirm_pass"  class="span11" placeholder="Confirm Password"  required="required"/>
						</div>
					</div>
							
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix "align="center">
									<input type="submit" name="change_pass" id="change_pass" class="btn btn-primary " value="Reset Password ">
									

								</div>
							</div>
						</div>
					</form>
				</div>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; ravi.com </b> All rights reserved.
		</div>
	</div>
	
