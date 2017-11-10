<?php
    if(isset($_POST['process']) && isset($_POST['algo']))
    {
        $process = $_POST['process'];
        $algo = $_POST['algo'];
    }
    else
        exit("Error!");
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Input</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body background = "bg_table.jpg">
<font size = "6" color = "#4B0082">
        Please fill up Arrival Time and Burst Time. If applicable, fill up Priority -
</font>
</br></br>
<font size = "6" color = "#8B008B">
        <form action="./algorithm/<?php print($algo); ?>.php" method="POST">
            <table border=2 background = "#DA70D6" bordercolor = "#800000">
            
                <thead>
                    <tr>
                        <th>Process</th>
                        <th>AT</th>
                        <th>BT</th>
                        <th>Priority</th>
                    </tr>
                </thead>

                <tbody>
                        <?php
                            for($x = 1; $x <= $process; $x++)
                            {
                                print
                                ("
                                    <tr>
                                        <td>P" . $x . "</td>
                                        <td><input class=\"in\" type=\"number\" name=\"AT[]\" min=\"0\"></td>
                                        <td><input class=\"in\" type=\"number\" name=\"BT[]\" min=\"0\"></td>
                                        <td><input class=\"prio\" type=\"number\" name=\"Prio[]\" min=\"0\"></td>                 
                                    </tr>
                                ");
                            }
                        ?>
                </tbody>
            </table>
            <input type="hidden" name="process" value="<?php print($process); ?>">
            <br>
            <input type="submit">
        </form>
</font>
    </body>
</html>
