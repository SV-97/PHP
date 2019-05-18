<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Radarfalle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <p>Geschwindigkeit in m/s: <input type="text" name="velocity" /></p>
    </form>
    <?php
        if (sizeof($_GET) > 0) {
            $v = $_GET["velocity"];
            if ($v > 50) {
                $fine = 50.;
                $points = 10;
                $duration = 100;
            } elseif ($v > 20) {
                $fine = 10.;
                $points = 1;
                $duration = 0;
            } else {
                $fine = 0.;
                $points = 0;
                $duration = 0;
            }
            echo "
            <p>Punkte: {$points}</p>
            <p>Dauer: {$duration} Tage</p>
            <p>Bußgeld: {$fine}€</p>
            ";
        } else {
            echo "
            <p>Punkte: </p>
            <p>Dauer: </p>
            <p>Bußgeld: </p>
            ";
        }
    ?>
</body>
</html>