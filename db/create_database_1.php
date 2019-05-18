<?php
    require_once("connect_1.php");

    $sql = "CREATE DATABASE adressverwaltung";
    $pdo -> query($sql);
    echo "Executed SQL: <br/>".$sql."<br/>";
?>