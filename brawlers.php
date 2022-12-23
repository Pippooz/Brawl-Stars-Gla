<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('battleLog.php'); 
require_once('./entities/brawler/Brawler.php'); 
$battleLog = new BattleLog("%232UR8RYY0L", "players");
$raw_brawlers = $battleLog->getBrawlers();
//var_dump ($raw_brawlers[0]);
/*
$this->id = $id;
$this->name = $name;
$this->power = $power;
$this->rank = $rank;
$this->highestTrophies = $highestTrophies;
$this->trophies = $trophies;
$this->starPower = $starPower;
$this->gadget = $gadget;
*/

$brawlers = array();
for($i = 0; $i < sizeof($raw_brawlers); $i++){
$brawler = new Brawler($raw_brawlers[$i]["id"], $raw_brawlers[$i]["name"], $raw_brawlers[$i]["power"], $raw_brawlers[$i]["rank"], $raw_brawlers[$i]["highestTrophies"], $raw_brawlers[$i]["trophies"], /*$raw_brawlers[$i]["starPower"]*/"", /*$raw_brawlers[$i]["gadget"]*/"");
    $brawlers[$i] = $brawler;
}

//var_dump($brawler);


?>

<html>
    <head>
        <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-base.min.js" type="text/javascript"></script>
    </head>
    <body>
        <select id="typeSelect" onchange="switchType()">
            <?php
                foreach($brawlers as $k => $brw){
                    echo "<option value=\"" . $brw->get_name() . "\">". $brw->get_name() ."</option>";
                }
            ?>
        </select>

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


        </script>
    </body>
</html>