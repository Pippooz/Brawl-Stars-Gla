<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<html>
    <head>
        <link rel="stylesheet" href="css/grid.css">
        <link rel="stylesheet" href="css/button.css">
        <style>
            .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
                height:50%;
                }

            .rotation{
                animation: rotation 8s infinite linear;
            }

                @keyframes rotation {
                from {
                    transform: rotate(0deg);
                }
                to {
                    transform: rotate(359deg);
                }
                }

                .center-field {
                display: block;
                margin-top:10%;
                width: 500px;
                height: 50px;
                caret-color: transparent;
                font-size:25px;
                text-align: center;
                text-transform:uppercase;
                }

                .border{
                    border:5px solid #FF9A00;
                    border-radius: 18px;
                }

                
        </style>


    </head>
    <body style="background-color:#526EFF">
        
        <div>
            <img src="images/brawlstars_logo.png" class="center">
            <!--<input type="text" class="center border center-field" placeholder="#ABCDEFG" maxlength="6">
            --></div>
        <div class="row">
            <div class="column">
                <div style="padding:2%">
                    <a href="gemgrab.php">
                        <input type="image" src="images/showdown.png" width="100%" class="border">        
                    </a>
                    </div>
                    <div style="padding:2%">
                    <a href="">
                        <input type="image" src="images/gemgrab.png"  width="100%" class="border">
                    </a>
                    </div>
                    <div style="padding:2%">
                    <a href="">
                        <input type="image" src="images/gemgrab.png"  width="100%" class="border">
                    </a>
                </div>  
            </div>   
            <div class="column">
                <div style="padding:2%">
                    <a href="">
                        <input type="image" src="images/showdown.png" width="100%"  class="border">
                    </a>
                    </div>  
                    <div style="padding:2%">
                    <a href="">
                        <input type="image" src="images/gemgrab.png" width="100%"  class="border">
                    </a>
                    </div>
                    <div style="padding:2%">
                    <a href="">
                        <input type="image" src="images/gemgrab.png"  width="100%" class="border">
                    </a>
                </div>  
            </div> 
        </div>

        <?php
        
        require_once('battleLog.php'); 
        $battleLog = new BattleLog("%232UR8RYY0L");
        var_dump($battleLog->getRanks());
        
        ?>
    </body>

    

</html>