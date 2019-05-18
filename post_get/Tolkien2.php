<html>
<head><title>Antwort</title></head>
<body>
<h1>Daten weiterreichen</h1>
<h3>Was haben Sie bestellt?</h3>
Sie haben das Buch <i>
<?php
switch($_GET['artikel']) {
    case 1: echo "Der Herr der Ringe I "; break;
    case 2: echo "Der Herr der Ringe II "; break;
    case 3: echo "Der Herr der Ringe III "; break;
    case 4: echo "Der kleine HObbit "; break;
}
?>
</i>von J. R. R. Tolkien bestellt. Vielen Dank!
</body>
</html>