<!-- class : blueprint of real world entities

object : instance of a class

polymorphism : c.overloading r.ol - overloading , overriding bane thy , one man many forms

construct: object creation time , return no use na thy

distruct  : last ma call thy

static : no object na banaia to b chale :: parent no call thy

instance : object a j instanceof

self : same class na var n method ne call karva

parent : parent class ne call karava

this : current value ne point karva use thy

call by value: variable method ni copy pass karava , nydefault callby vakue j hoi

call by ref : address pass karavamate , array ma pass thy

final class,variale : final class extend na thy , override in sub class

constant : ni value change na thy

interface : interface extend thy , multiple inhe use na kari skia atle interface no use thy

class : implements na thy

inheritance : parent class ni property inherit karva mate use thy

overloading : same name diff parameter

overriding : same name same parameter

abstarct : object na bane , aeni body na hoi , implements karvi pade 

bydefvalue ma first ma aapia to biji last value ne b apvi pade 
kato a first value ne last ma lai levi pade 


magic overloading : __call()

method chaining : $d ->f1()->f2()->f3();
method chaining 2nd rit : $d->f1();
                          $d->f2();
                          $d->f3();


-->


<?php


$a = "nitin";
$b = 'chauhan';
$c = "$a $b"; // nitin chauhan
$c = "$a" . "$b"; // nitin chauhan

// $c = '$a'.'$b'; --> error

echo var_dump($a) . "<br>";
echo var_dump($b) . "<br>";
echo var_dump($c) . "<br>";

?>


<?php

$i = 1;
function fun($i)
{
    $i++;
}
echo $i;
fun($i);
echo $i;
?>

<?php
$i = "nitin";
echo print($i);
?>