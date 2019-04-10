<div class="span9">
   <div class="module">
      <div class="module-head">
            <h1>Internal-Marks</h1>
       </div> 

       <!----<table class="table table-bordered">
                  <thead>
                    <hr/>
                  <tr >
                    <th >
                      
                    </th>
                    <th  align="center">
                      <div class="control-group">
                  
                    <div class="controls">
                        <div class="dropdown span6">
                          <a class="dropdown-toggle btn  span6" data-toggle="dropdown" href="#">SELECT YOUR ENTER MARKS MODE<i class="icon-caret-down"></i></a>
                          <ul class="dropdown-menu span6" role="menu" aria-labelledby="dLabel">
                            <li><a href="<?php echo site_url('/Testinternal_controller');?>">INTERNAL_EXAM-1</a></li>
                            <li><a href="#">INTERNAL_EXAM-2</a></li>
                            <li><a href="#">UNIT_TEST</a></li>
                            <li><a href="#">ASSIGNMENT_MARKS</a></li>
                            <li><a href="#">LAB-TEST-MARKS-1</a></li>
                            <li><a href="#">LAB-TEST-MARKS-1</a></li>
                            
                          </ul>
                        </div>
                      </div></div>
                    
            </th>
                  </tr>
                  </thead>
                </table>-->
       <table class="table table-bordered">
                  <thead>
                    <hr/>
                  <tr >
                    <th  align="center">
                    <div class="control-group">
                      <div class="controls">
                        <select tabindex="1" data-placeholder="Select here.." class="span5">
                          <option value="">Select here..</option>
                          <option value="Category 1">First Row</option>
                          <option value="Category 2">Second Row</option>
                          <option value="Category 3">Third Row</option>
                          <option value="Category 4">Fourth Row</option>
                        </select>
                      </div>
                    </div>
  </th>
                  </tr>
                  </thead>
                </table>
                
       
       <div>  <?php $this->load->view('Rajkumar/edit_test_marks_view');?></div>
</div>

</div>
</div>
</div>
