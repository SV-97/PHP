<?php
    $nums = array();
    for ($i=0 ; $i < 6 ; $i++) { 
        $num = rand(1, 49);
        if (in_array($num, $nums)) {
            $i--;
        } else {
            $nums[] = $num;
        }
    }
    sort($nums);
    foreach ($nums as $num) {
        echo $num."<br>";
    }
?>