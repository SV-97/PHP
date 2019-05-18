<?php
    require_once("connect_2.php");

    $sql = "
        CREATE TABLE adressen
        (
            id INT (10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            nachname VARCHAR(150) NOT NULL,
            vorname VARCHAR(150) NULL,
            kuerzel VARCHAR(2) NOT NULL,
            strasse VARCHAR(150) NULL,
            plz INT(5) NOT NULL,
            telefon VARCHAR(20) NULL
        );
    ";
    $pdo -> query($sql);
    echo "Executed SQL: <br/>".$sql."<br/>";
?>