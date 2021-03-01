<?php
class demo{
    function setdata($a,$b){
        echo "first function $a+$b"."<br>";
        echo $a+$b."<br>";
    }
}
class demo2 extends demo{
    function setdata($a,$b){
        echo "second function $a+$b"."<br>";
        echo $a+$b."<br>";
    }
}

$m = new demo();
$m2 = new demo2();
$m->setdata(10,20);
$m2->setdata(10,20);



?>