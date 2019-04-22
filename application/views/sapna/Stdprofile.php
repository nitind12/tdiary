		<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>profile</h3>
							</div>

							<div class="module-body" >


							<form class="form-horizontal row-fluid"  >	
								<table class="table table-striped table-bordered table-condensed span8 " style="float:right" >
								<thead>
				            		<tr>
					                    	<th align="center">First Name:</th>
					                  </tr>

					                  <tr>
					                  		<th align="center">Last Name:</th>
					                  	</tr>

					                  	<tr>
					                  		<th align="center">Contact:</th>
					                  	</tr>

					                  	<tr>
					                  		<th align="center">Email id:</th>
					                  	</tr>

					                  	<tr>
					                  		<th align="center">Course:</th>
					                  	</tr>

					                  	<tr>
					                  		<th align="center">Blood Group:</th>
					                  	</tr>
	
               						</thead>

               						 <?php foreach ($profile as $item) { ?>
												<tr>
								                      <td><?php echo $item->first_name ;?></td>
								                     
								                    </tr>
								          <?php } ?>
											
               									</table>
               					
             		
			                
								</div>
							</div>
						</div>
					</div>

