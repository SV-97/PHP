<?php
    $abbrevs = array (
        "Wü" => "Würzburg",
        "BA" => "Bamberg",
        "N" => "Nürnberg",
        "M" => "München",
        "R" => "Regensburg");

    asort($abbrevs);
    foreach ($abbrevs as $key => $value) {
        echo $key.": ".$value."<br>";
    }
?>