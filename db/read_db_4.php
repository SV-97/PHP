<?php
    require_once("connect_2.php");
    $sql = "SELECT * FROM adressen";
    echo "<table border='1'>";
    foreach ($pdo -> query($sql) as $zeile)
    {
        echo "<tr>";
        echo "<td>".$zeile["id"]."</td>";
        echo "<td>".$zeile["nachname"]."</td>";
        echo "<td>".$zeile["vorname"]."</td>";
        echo "<td>".$zeile["kuerzel"]."</td>";
        echo "<td>".$zeile["strasse"]."</td>";
        echo "<td>".$zeile["plz"]."</td>";
        echo "<td>".$zeile["telefon"]."</td>";
        echo "</tr>";
    }
    echo "</table";
?>