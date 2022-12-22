<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('battleLog.php'); 
$battleLog = new BattleLog("%232UR8RYY0L");
$victories = $battleLog->getVictories();
$map = $battleLog->getVictories();
var_dump ($battleLog);

?>

<html>
    <head>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    </head>
    <body>
        
        
        <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
        <script>
            var json_data = <?php echo json_encode($victories); ?>;
            var result = [];

            for(var i = 0; i < json_data.length; i++){
                if(i % 2 != 0)
                    result.push([i, json_data [i]]);
            }

            document.write(result);

            var xValues = ["victory", "defeat"];
            var yValues = result;
            var barColors = ["red", "yellow"];

            new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                backgroundColor: barColors,
                data: yValues
                }]
            },
            options: {
                legend: {display: false},
                title: {
                display: true,
                text: "World Wine Production 2018"
                }
            }
            });
        </script>
    <?php
            
            
            
            //var_dump($battleLog->getIDs());

            //var_dump($battleLog->getRanks());
    
                    



            
 
        ?>
    </body>
</html>