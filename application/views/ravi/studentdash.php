<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
<style>
zing-grid[loading]{height:800px;}</style>

<div class="span9">
  <div class="content">
    <div class="module">
      <div class="module-head">
        <h1>Dashboard</h1>
       </div>
      <div class="module-body">

        <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%">
          <tr>
            <th>ID</th>
            <th>Session</th>
            <th>Course</th>
            <th>Semseter</th>
            <th>Section</th>

          </tr>
          <tr>
            <td>
              <?php 
               echo $this->session->userdata('studentid');
        ?>
          
        </td>
            <td><?php echo $this->session->userdata('sin');?>
        </td>
            <td><?php echo $this->session->userdata('cos');
        ?></td>
            <td><?php  echo $this->session->userdata('tan');
        ?></td>
            <td><?php  echo $this->session->userdata('cot');
       ?></td>
          </tr>
        </table>
        <div class="module-body"> 
              <div id="chartDiv">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%">
        <h2>Your Attendance Subject Wise Reports</h2>
                <tr>
                   <th>No of subject</th>
            <th>0</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>

          </tr>
          <tr>
       <th>Name of subject</th>
             <?php foreach ($subject_ as $item) {?>
            <td>  <?php echo $item->subject_name; }?></td>
          </tr>
          </table>
              </div>
  <script>ZC.LICENSE=["b55b025e438fa8a98e32482b5f768ff5"];var chartData = {
      type: 'bar',  // Specify your chart type here.
      title: {
        text: 'Your Attendance Reports' 

        // Adds a title to your chart
      },
      legend: {}, // Creates an interactive legend
      series: [  // Insert your series data here
          { values: [35, 42, 67, 100,67,89] },
           ]
    };
    zingchart.render({ // Render Method[3]
      id: 'chartDiv',
      data: chartData,
      height: 400,
      width: '100%'
    });</script>
          
          
          <h3>Your Marks Performance</h3>
          <?php foreach ($subject_ as $item) {?>
        <?php echo $item->subject_name;?>
       
      <div class="prg">
        <div class="prg success-color" style="width: 96%;">
        </div>
      </div>
          <?php  }
?>
      </div>
    </div>      
</div>
</div>

<style>
.prg {
  height: 10px;
  margin-bottom: 10px;
  overflow: hidden;
  background-color: #f5f5f5;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
          box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
}
.success-label{
    position:absolute;
    height:26px;
    left: 15px;
    margin-top:-10px;
    padding-left: 5px;
    padding-right: 5px;
    z-index:1;
    border-radius:15px;
    border: 1px solid white;
    background-color: #5cb85c;
    color: white;
    text-align: center;
}
.danger-label{
    position:absolute;
    height:26px;
    left: 15px;
    margin-top:-10px;
    padding-left: 5px;
    padding-right: 5px;
    z-index:1;
    border-radius:15px;
    border: 1px solid white;
    background-color: #d9534f;
    color: white;
    text-align: center;
}
.warning-label{
    position:absolute;
    height:26px;
    left: 15px;
    margin-top:-10px;
    padding-left: 5px;
    padding-right: 5px;
    z-index:1;
    border-radius:15px;
    border: 1px solid white;
    background-color: #f0ad4e;
    color: white;
    text-align: center;
}
.primary-color{
    background-color:#4989bd;
}
.success-color{
    background-color:#5cb85c;
}
.danger-color{
    background-color:#d9534f;
}
.warning-color{
    background-color:#f0ad4e;
}
.info-color{
    background-color:#5bc0de;
}
.no-color{
    background-color:inherit;
}
</style>

      
     </div>
   </div>
 </div>
</div>

