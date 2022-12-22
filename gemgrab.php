<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('battleLog.php'); 
$battleLog = new BattleLog("%232UR8RYY0L", "players");
$victories = $battleLog->getVictories();
var_dump ($battleLog);

$i = 0;
$cont = array();
foreach($victories as $k => $cur)
{
    $cont[$i] = $cur;
    $i = $i+1;
}

$vict = array();
$victory_flag = 0;
$defeat_flag = 0;
foreach($cont as $k => $cur){
    if($cur == "victory")
        $victory_flag++;
    if($cur == "defeat")
        $defeat_flag++;

}

echo $victory_flag . "-" . $defeat_flag;

$battleLog = new BattleLog("%232UR8RYY0L", "players");
$victories = $battleLog->getRanks();
var_dump ($victories);

?>

<html>
    <head>
        
    <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-base.min.js" type="text/javascript"></script>

    </head>
    <body>
    <select id="typeSelect" onchange="switchType()">\n 
           
    <option value="area">Area</option>    
           <option value="column">Column</option>    
           <option value="jump-line">Jump Line</option>    
           <option value="line">Line</option>    
           <option value="marker">Marker</option>  
           <option value="spline-area">Spline Area</option>   
           <option value="spline">Spline</option>    
           <option value="step-area">Step Area</option>    
           <option value="step-line">Step Line</option>    
           <option value="stick">Stick</option></select>
        <div id="container" style="width: 500px; height: 400px;">
        <script>
         anychart.onDocumentReady(function () {

            // create data
            var data = [
            ["Victory", <?php echo $victory_flag ?>],
            ["Defeat", <?php echo $defeat_flag ?>]
            ];

            // set the chart type
            var chart = anychart.area();

            // set the series type and data
            series = chart.area(data);

            series.seriesType("column");
            // set the chart title
            chart.title("Switching the Series Type");

            // set the container id
            chart.container("container");

            // initiate drawing the chart
            chart.draw();


            var data = [
  {x: "victory", value: <?php echo $victory_flag ?>},
  {x: "defeat", value: <?php echo $defeat_flag ?>}];

// create a chart and set the data
chart = anychart.pie(data);

// set the container id
chart.container("container");

// initiate drawing the chart
chart.draw();






            });



           
                
// switch the series type
function switchType() {
  var select = document.getElementById("typeSelect");
  series.seriesType(select.value);
}
        </script>
    </body>
</html>