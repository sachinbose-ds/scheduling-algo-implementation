<!DOCTYPE html>
    <html>
        <head>
            <title>Basic Column Chart using CanvasJS</title>
            <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        </head>
     
        <?php
 
            $dataPoints = array();
            $y = 40;
            for($x = 0; $x < $NumProcess; $x++){
                 
                array_push($dataPoints, array("x" => ($x + 1), "y" => $WT[$x]));
            }
        ?>
     
        <body>
            <div id="chartContainer"></div>
     
            <script type="text/javascript">
     
                $(function () {
                    var chart = new CanvasJS.Chart("chartContainer", {
                        theme: "theme2",
                        zoomEnabled: true,
                        animationEnabled: true,
                        title: {
                            text: "Process Vs Waiting Time Graph"
                        },
                        
                        data: [
                        {
                            type: "line",                
                            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                        }
                        ]
                    });
                    chart.render();
                });
            </script>
        </body>
     
    </html>


