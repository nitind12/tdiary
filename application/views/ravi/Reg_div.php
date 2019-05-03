<div class="span9">
          <div class="content">

            <div class="module">
              <div class="module-head">
                <h1>Dashboard-Admin</h1>
              </div>
              <div class="module-body">
                 <div class="btn-box-row row-fluid" >
       <h2>View Time Table </h2>
                
  <table class="table table-striped table-bordered table-condensed" border="1">
    <?php foreach ($das1 as  $re) 
    {
      echo $re->Subject_id;
?>
<br/>
<?php
    }?>
              <thead>
                    <tr bgcolor="lightblue">
                      <th>DAY</th>
                      <th>09:00-09:50</th>
                      <th>09:50-10:40</th>
                      <th>10:40-11:30</th>
                      <th>11:50-12:40</th>
                      <th>12:40-01:30</th>
                      <th>02:10-03:00</th>
                      <th>03:00-03:50</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>MON</td>
                      <td id="Monday09_00_09_50"></td>
                      <td id="Monday09_50_10_40"></td>
                      <td id="Monday10_40_11_30"></td>
                      <td id="Monday11_50_12_40"></td>
                      <td id="Monday12_40_01_30"></td>
                      <td id="Monday02_10_03_00"></td>
                      <td id="Monday03_00_03_50"></td>
                      
                      
                    </tr>
                    <tr>
                      <td>TUE</td>
                      <td id="Tuesday09_00_09_50"></td>
                      <td id="Tuesday09_50_10_40"></td>
                      <td id="Tuesday10_40_11_30"></td>
                      <td id="Tuesday11_50_12_40"></td>
                      <td id="Tuesday12_40_01_30"></td>
                      <td id="Tuesday02_10_03_00"></td>
                      <td id="Tuesday03_00_03_50"></td>
                      
                      
                    </tr>
                    <tr>
                      <td>WED</td>
                      <td id="Wednesday09_00_09_50"></td>
                      <td id="Wednesday09_50_10_40"></td>
                      <td id="Wednesday10_40_11_30"></td>
                      <td id="Wednesday11_50_12_40"></td>
                      <td id="Wednesday12_40_01_30"></td>
                      <td id="Wednesday02_10_03_00"></td>
                      <td id="Wednesday03_00_03_50"></td>
                      
                      
                    </tr>
                    <tr>
                      <td>THU</td>
                      <td id="Thursday09_00_09_50"></td>
                      <td id="Thursday09_50_10_40"></td>
                      <td id="Thursday10_40_11_30"></td>
                      <td id="Thursday11_50_12_40"></td>
                      <td id="Thursday12_40_01_30"></td>
                      <td id="Thursday02_10_03_00"></td>
                      <td id="Thursday03_00_03_50"></td>
                      
                      
                    </tr>
                    <tr>
                      <td>FRI</td>
                      <td id="Friday09_00_09_50"></td>
                      <td id="Friday09_50_10_40"></td>
                      <td id="Friday10_40_11_30"></td>
                      <td id="Friday11_50_12_40"></td>
                      <td id="Friday12_40_01_30"></td>
                      <td id="Friday02_10_03_00"></td>
                      <td id="Friday03_00_03_50"></td>
                                            
                    </tr>
                    <tr>
                      <td>SAT</td>
                      <td id="Saturday09_00_09_50"></td>
                      <td id="Saturday09_50_10_40"></td>
                      <td id="Saturday10_40_11_30"></td>
                      <td id="Saturday11_50_12_40"></td>
                      <td id="Saturday12_40_01_30"></td>
                      <td id="Saturday02_10_03_00"></td>
                      <td id="Saturday03_00_03_50"></td>

                      
                    </tr> 
                    </tbody>
                  </table>
                  </table>
                    </div>

         

      <div class="btn-box-row row-fluid" >

         
              <div class="module-body row-fluid">
                  

<div class="btn-box-row row-fluid  btn-box big span6" >
          <a href="<?php echo site_url('Registrationform_controller/index');?>" >
           <i class="icon-briefcase"></i>
                <b>Student Registration</b>
      </div>
      </a>
      <div class="btn-box-row row-fluid  btn-box big span5" >
          <a href="<?php echo site_url('Registrationform_controller/index');?>" >
           <i class="icon-briefcase"></i>
                <b>Faculty Registration</b>
      </div>
      </a>


  </div>
</div>
</div>
</div>
</div>
</div>
</div></div>



