<?php
    require_once("connect.php");
    $sql = "INSERT INTO firma VALUES (?, ?, ?);";
    $statement = $pdo -> prepare($sql);
    $statement -> execute(array(1337, "Elektrotechnik GmbH", "Würzburg"));
    $statement -> execute(array(420, "IT", "Bamberg"));
?>