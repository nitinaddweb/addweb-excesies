<?php

function g($a1, $b1)
{
    global $a;
    $a1++ . "<br>";
    echo $a1 . "<br>";
    echo "<br>";

    global $b;
    $b1++ . "<br>";
    echo $b1 . "<br>";
    echo "<br>";
}

// $m->()
// $m->g()
$a1 = 110;
$b1 = 20;

g($a1, $b1);

// echo $a . "<br>";
// echo "<br>";
// echo "<br>";
// echo $b . "<br>";
