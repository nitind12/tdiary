    <style type="text/css">

        .field-icon {
            float: right;
            margin-left: -20px;

            margin-top: 5px;
            position: relative;
            z-index: 2;
               padding: 2px 3px;
          }
    </style>


	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
						<div class="module-head">
							<h3>LOG IN</h3>
					</div>
						<?php
							$data = array(
								'name' => 'frmLogin',
								'id' => 'frmLogin',
								'class' => 'form-vertical'
							);
						    echo form_open('Login_controller/authenticate', $data);  
    						//echo validation_errors();
						    ?>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid input-prepend">
									<span class="add-on"><i class="icon-user"></i></span><input class="span11" type="text" name="username"id="username" placeholder="Username"></i>
								</div>
							</div>

							<div class="control-group">
								<div class="controls row-fluid input-prepend">
									<span class="add-on"><i class="icon-lock"></i></span><input class="span11" type="password"name="password" id="password" placeholder="Password"><span toggle="#password"   class="icon-eye-open field-icon  toggle-password"></span>
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<input type="submit" name="btnSignin" id="btnSignin" class="btn btn-primary pull-right" value="Login">
									<label class="checkbox">
										<input type="checkbox"> Remember me
									</label>
								</div>
							</div>
						</div>
					<?php
						echo form_close();  
					?>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; ravi.com </b> All rights reserved.
		</div>
	</div>