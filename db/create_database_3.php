<?php
    require_once("connect_2.php");

    $sql = "
        INSERT INTO adressen 
        VALUES (?, ?, ?, ?, ?, ?, ?);
    ";
    $statement = $pdo -> prepare($sql);
    $statement -> execute(array(NULL, "Schmied", "Ria", "sr", "Dorfstraße 3", 97123, "0931/88.."));
    $statement -> execute(array(NULL, "Schmitty", "Aria", "sa", "Dorfstraße 2", 97123, "0931/88.."));
    $statement -> execute(array(NULL, "Schmidt", "Maria", "sm", "Dorfstraße 1", 97123, "0931/88.."));

    echo "Executed SQL: <br/>".$sql."<br/>";
?>