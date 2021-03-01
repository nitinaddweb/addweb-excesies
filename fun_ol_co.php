<?php
class myclass
{

    function __construct()
    {
        foreach (func_get_args() as $value) {
            echo $value . "<br>";
            $sum += $value;

            # code...
        }
        echo "sum is :" . $sum;
    }
}

$obj = new myclass(10, 20, 30);
