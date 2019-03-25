
<div class="content">
	<div class="module">
		<div class="module-head">
			<h3>ONLINE_ATTENDANCE</h3>
		</div>
	<div class="btn-box-row row-fluid">
			<!-- Button to Open the Modal -->
  			<button type="button" class="btn-box big span4" data-toggle="modal" data-target="#myModal">
    				<i class="icon-briefcase"></i>
					<b>Add-Class</b>
			</button>

  <!-- The Modal -->
  		<div class="modal" id="myModal" style="width: 700px">
    		<div class="modal-dialog">
      			<div class="modal-content">
      
        <!-- Modal Header -->
        			<div class="modal-header">
          				<h4 class="modal-title">ADD-CLASS</h4>
         				 <button type="button" class="close" data-dismiss="modal">&times;</button>
        			</div>
        
        			<div class="modal-body">
         				 <?php $this->load->view('add_class');?>
       				 </div>
        
        			<!-- Modal footer -->
        			<div class="modal-footer">
         				 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        			</div>
        		</div>
    		</div>
  		</div>
	</div>
</div>
</div>			