<?php

function g($a,$b){
     ++$a."<br>";
    echo $a."<br>";
    echo "<br>";
    ++$b."<br>";    
    echo $b."<br>";
    echo "<br>";
}

// $m->()
// $m->g()
$a = 10;
$b = 20;

g(20,10);

echo $a."<br>";
echo "<br>";
echo "<br>";
echo $b."<br>";
?>