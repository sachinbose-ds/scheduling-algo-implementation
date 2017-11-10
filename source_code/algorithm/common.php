<?php
    //calculates the CT, TT, and WT
    $time = 0;
    $total = 0;
    $total1 = 0;
    for($x = 0; $x < $NumProcess; $x++)
    {
        $time += $BT[$queue[$x]];
        $CT[$queue[$x]] = $time;
    }
    
//calculates the TT, WT
    for($x = 0; $x < $NumProcess; $x++)
    {
        $TT[] = $CT[$x] - $AT[$x];
        $WT[] = $TT[$x] - $BT[$x];
        $total = $total + $WT[$x];
        $total1 = $total1 + $TT[$x];
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body background = "3.jpg">
<font size = "6" color = "#4B0082">
        <table border=1>
            <thead>
                <tr>
                    <th>Process</th>
                    <th>AT</th>
                    <th>BT</th>
                    <th>Priority</th>
                    <th>CT</th>
                    <th>TT</th>
                    <th>WT</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    for($x = 0; $x < $NumProcess; $x++)
                    {
                        print
                        ("
                            <tr>
                                <td>P" . ($x + 1) . "</td>
                                <td>" . $AT[$x] . "</td>
                                <td>" . $BT[$x] . "</td>
                                <td>" . $Prio[$x] . "</td>
                                <td>" . $CT[$x] . "</td>
                                <td>" . $TT[$x] . "</td>
                                <td>" . $WT[$x] . "</td>
                            </tr>
                        ");
                    }

                ?>
            </tbody>
        </table>
<?php
echo "Average Waiting Time is = ".$total/$NumProcess;
echo "<br>";
echo "Average Turn Around Time is = ".$total1/$NumProcess;
include("graph.php");
?>
</form>

    </body>
</html>


    
