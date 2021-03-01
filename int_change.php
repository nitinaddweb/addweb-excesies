<?php

function change(&$a,&$b)
{
    $t = $a;
    echo $a."<br>";
    $a = $b;
    echo $b."<br>";
    $b = $t;
    echo $t."<br>";
    echo "<br>";
    echo "<br>";
}

$a = 10;
$b = 20;

change($a,$b);
echo $a."<br>";
echo $b;
?>