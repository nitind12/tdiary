 <style>
#chartdiv {
  width: 100%;
  height: 500px;
}

</style>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.XYChart);

// Add data
chart.data = [{
  "country": "Subjects-1",
  "visits": 65
},
 {
  "country": "Subjects-2",
  "visits": 70
}];

// Create axes

var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "country";
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.renderer.minGridDistance = 30;

categoryAxis.renderer.labels.template.adapter.add("dy", function(dy, target) {
  if (target.dataItem && target.dataItem.index & 2 == 2) {
    return dy ;
  }
  return dy;
});

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

// Create series
var series = chart.series.push(new am4charts.ColumnSeries());
series.dataFields.valueY = "visits";
series.dataFields.categoryX = "country";
series.name = "Visits";
series.columns.template.tooltipText = "{categoryX}: [bold]{valueY}[/]";
series.columns.template.fillOpacity = .8;

var columnTemplate = series.columns.template;
columnTemplate.strokeWidth = 2;
columnTemplate.strokeOpacity = 1;

}); // end am4core.ready()
</script>

<!-- HTML --><div class="span9">
          <div class="content">

            <div class="module">
              <div class="module-head">
                <h1>Dashboard</h1>
              </div>
              <div class="module-body">
                 <div class="btn-box-row row-fluid" >

       <h2>View Time Table </h2>
        <form method="post" id="myform100tn" name="myform100tn"  class="form-horizontal row-fluid">
  
      <table class="table table-striped table-bordered table-condensed" border="1" id="timetablehere">
                                         
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
                      <th>03:50-04:40</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($days_ as $item) { ?>
                    <tr>
                      <td><?php echo $item;?></td>
                      <?php  foreach ($time_ as $timeitem) { ?>
                      <td id="<?php  echo $item.$timeitem;?>"<?php if($this->my_lib->days(date('D')) == $item)  {echo "style='background: #ffff00'";}?><?php echo $item;?>></td>
                      <?php } ?>
                    </tr>
                <?php } ?>
                      
                    </tr> 
                    </tbody>
                  
                  </table>
              </form>            
    
                    </div>
       
      <div class="btn-box-row row-fluid" >

      <div class="btn-box-row row-fluid  btn-box big span5" style="border: #ff0000 solid 0px;">
        <b class="label yellow pull-right" style="background:#ffCC00; padding: 5px;"><?php echo $view_edit_class_no;?></b>
          <a href="<?php echo site_url('Main/total_subject2');?>" >
           <i class="icon-adjust"></i>
                <b>Total No Of Class</b>
      </div>
      </a>
    
    
      <div class="btn-box-row row-fluid  btn-box big span5"  style="border: #ff0000 solid 0px;">
         <b class="label yellow pull-right" style="background:#ffCC00; padding: 5px;"><?php echo $subject_no;?></b>
          <a href="<?php echo site_url('Main/total_subject2');?>" >
           <i class="icon-adjust"></i>
                <b>Total No Of Subjects</b>
      </div>
      </a>
    </div>
   <div class="module-body">
       <h2>Attendance Reports</h2>       
<div id="chartdiv"></div></div>
</div></div></div></div></div></div></div>
