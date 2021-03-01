<?php

class myclass
{
    static function myfunction2()
    {
        echo "i am parent"."<br>";
    }
}

class myclass1 extends myclass
{
    static function myfunction()
    {
        echo "hello child"."<br>";
        myclass::myfunction2();
    }
}

$obj = new myclass1();
$obj->myfunction();
// $obj2 = new myclass();
// $obj2->myfunction();
