<?php

$x = 10;

// echo "The factors of the " . $x . " are: ";
// 3,4,6 a nai ave 

for ($i = 1; $i <= $x; $i++) {
    if ($x % $i == 0) {
        echo $i . " <br>";
    }
}

?>