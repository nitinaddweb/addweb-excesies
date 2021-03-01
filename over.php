<?php
class myclass
{

    function addition()
    {


        foreach (func_get_args() as $a) {
            // echo "<br>";
            $sum = $sum + $a . "<br>";
        }

        echo $sum;
        echo "<br>";
        $a = func_get_args();
        $cnt = count(func_get_args());
        for ($i = 0; $i < $cnt; $i++) {

            echo $a[$i] . "<br>";
        }

        echo $cnt;
    }
}

$add = new myclass();
$add->addition(20, 32);
$add->addition(1, 2, 3, 10);
