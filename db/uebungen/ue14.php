<?php
    require_once("connect.php");

    $sql = "SELECT * FROM mitarbeiter";

    echo "<table border='100'>";
    foreach ($pdo -> query($sql) as $line)
    {
        echo "<tr>";
        echo "<td>".$line["Name"]."</td>";
        echo "<td>".$line["Vorname"]."</td>";
        echo "</tr>";
    }
    echo "</table";
?>