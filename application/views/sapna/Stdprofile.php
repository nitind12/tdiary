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
									 <?php foreach ($profile as $item) { ?>
				            		<tr>
					                    	<th align="center">Name:<td><?php echo $item->first_name ;?> <?php echo $item->last_name ;?></td></th>
					                  </tr>

					                  	 <tr>
					                  		<th align="center">Date Of Birth:<td><?php echo $item->date_of_birth ;?></td></th>
					                  	</tr>


					                  	<tr>
					                  		<th align="center">Contact:<td><?php echo $item->std_contact ;?></td></th>

					                  	</tr>

					                  	<tr>
					                  		<th align="center">Email id:<td><?php echo $item->std_email ;?></td></th>
					                  	</tr>

					                  	<tr>
					                  		<th align="center">Course:<td><?php echo $item->course_id ;?></td></th>
					                  	</tr>

					                  	<tr>
					                  		<th align="center">Blood Group:<td><?php echo $item->blood_group ;?></td></th>
					                  	</tr>
					                  	 <?php } ?>
	
               						</thead>
               					</table>
               				</form>
               			</div>
               		</div>
               	</div>
               </div>


               						
												
								       

