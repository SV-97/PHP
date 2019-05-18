<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gästebuch</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <p>Name: <input type="text" name="name" /></p>
        <p>Kommentar: <input type="text" name="comment" /></p>
        <p><input type="submit" value="Speichern"/></p>
    </form>
    <?php
        $pdo = new PDO("mysql:host=localhost;dbname=gaestebuch", "root", "");

        if (sizeof($_GET) > 0) {
            $name = $_GET["name"];
            $comment = $_GET["comment"];
            
            $sql = "
            INSERT INTO gaestebuch 
            VALUES (?, ?, ?);
            ";        
            
            $statement = $pdo -> prepare($sql);
            $statement -> execute(array(NULL, $name, $comment));
            };
        $sql = "SELECT name, comment FROM gaestebuch";
        echo "<table border='1'>";
        foreach ($pdo -> query($sql) as $line)
        {
            echo "<tr>";
            echo "<td>".$line["name"]."</td>";
            echo "<td>".$line["comment"]."</td>";
            echo "</tr>";
        }
    ?>
</body>
</html>