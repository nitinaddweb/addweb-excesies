<?php
class demo{
    private $a;
    function d1(){
        echo "hello"."<br>";
        // echo $a;
    }

    function setsalary($a){
        $this->a = $a;
    }
    function getsalary(){
        echo " private salary is $this->a"."<br>";
    }

}

$m = new demo();
echo $m->d1();
echo $m->setsalary(2000);
echo $m->getsalary();
// echo $m->$a;

?>