<?php
# find_decrement_of_the_quadratic_equation
# return the decrement of the quadratic equation
// header('Content-Type: application/json');

// decode JSON string to PHP object, 2nd param sets to associative array
//$decoded = json_decode($_POST['str'],true);


//var_dump(json_decode($_POST['str'],true));
//print_r($decoded);



function getDecrement($a, $b, $c)
{

    $decrement = (sqrt(pow($b, 2) - (4 * $a * $c)));

    $x1 = (-$b + $decrement / (2 * $a));
    $x2 = (-$b - $decrement / (2 * $a));


    echo '<p>' . 'Decrement = ' . $decrement . '</p>' . '</br>';

//    echo $x1 . '</br>';
//    echo $x2 . '</br>';

}

//$a = $_POST['a'];
//$a = $_POST['b'];
//$a = $_POST['c'];





getDecrement($_POST["a"], $_POST["b"], $_POST["c"]);
