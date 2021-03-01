<?php

class myclass
{

    function myfunc()
    {

        $cnt = func_num_args();
        $a = func_get_args();
        for ($i = 0; $i < $cnt; $i++) {

            $sum = $sum + $a[$i];
        }
        echo "Sum is :" . $sum;
    }

    function __construct()
    {
        echo "<br> it's parent class constructor";
    }

    function callingself()
    {
        self::__construct();
    }

    function override()
    {
        echo "<br>";
        echo "<br>parent class override";
    }
}

class childclass extends myclass
{
    function child()
    {

        echo "<br>";
        echo "<br>this is child class<br>";
        parent::myfunc(10, 20, 30);
    }


    function __construct($a, $b)
    {

        echo "<br><br>";
        echo "it's child class constructor";

        parent::__construct();
    }

    function override()
    {
        // echo "<h1>this is overriding</h1>";
        parent::override();
        echo "<br>child class override";
    }
}

$obj = new myclass();
$obj->myfunc(10, 20, 30, 40);
$obj->callingself();
//calling parent and child class both function

$child = new childclass(10, 20);
$child->child();
$child->override();
