<?php

function g($a1, $b1)
{
    global $a;
    $a++ . "<br>";
    echo $a . "<br>";
    echo "<br>";
    global $b;
    ++$b . "<br>";
    echo $b . "<br>";
    echo "<br>";
}

// $m->()
// $m->g()
$a1 = 50;
$b1 = 50;

g($a1, $b1);

// echo $a . "<br>";
// echo "<br>";
// echo "<br>";
// echo $b . "<br>";
