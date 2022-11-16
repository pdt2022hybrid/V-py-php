<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Cauko</h1>" ;

        function timeChange($t){
            if (date("H") > 8) {
                if (20 <= date("H") && 23 >= date("H")) {
                     echo "neni mozne ";
                     die;
                }
                $t = $t . " - meškaňie";
                return $t;
            }
            else {
                return $t;
            }
        }
            
        date_default_timezone_set("Europe/Bratislava");
        $date = date('d-m-y H:i:s');
        
        echo " <h2>akutalny datum a cas je :$date </h2> <br>";
        $date = timeChange($date);
        $date = "$date,<br> \n";

        file_put_contents("cas.log", $date, FILE_APPEND);
        $obsahlog = file_get_contents("cas.log");
        echo $obsahlog;

        
           
    ?>
</body>
</html>