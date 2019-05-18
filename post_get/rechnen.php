<?php
    $add = function($op1, $op2) { return $op1 + $op2; };
    $sub = function($op1, $op2) { return $op1 - $op2; };
    $mul = function($op1, $op2) { return $op1 * $op2; };
    $div = function($op1, $op2) { return $op1 / $op2; };
    $mod = function($op1, $op2) { return $op1 % $op2; };

    switch ($_POST["operator"]) {
        case "add":
            $fn = $add;
            break;
        
        case "sub":
            $fn = $sub;
            break;

        case "mul":
            $fn = $mul;
            break;

        case "div":
            $fn = $div;
            break;

        case "mod":
            $fn = $mod;
            break;

        default:
            $fn = function($op1, $op2) { return "Unknown function"; };
            break;
    };
    echo $fn((float)$_POST["op1"], (float)$_POST["op2"]);
    
    echo "<br>";
    # Or alternatively:
    $fn = array(
        "add" => function($op1, $op2) { return $op1 + $op2; },
        "sub" => function($op1, $op2) { return $op1 - $op2; },
        "mul" => function($op1, $op2) { return $op1 * $op2; },
        "div" => function($op1, $op2) { return $op1 / $op2; },
        "mod" => function($op1, $op2) { return $op1 % $op2; });
    $operator = $_POST["operator"];

    if (array_key_exists($operator, $fn)) {
        echo $fn[$operator]((float)$_POST["op1"], (float)$_POST["op2"]);
    } else {
        echo "Unknown function";
    };
?>