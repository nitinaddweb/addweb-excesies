<?php
//we cannot create object of abstract class
//abstraction means showing only essential infortion to user and hiding the implementaion

abstract class myclass
{
    function myfunc()
    {
        echo "it's simple method...."."<br>";
    }

    abstract function func(); //abstract method does not have a body

}

class demo extends myclass
{
    function func()
    {
        echo "abstract overriding function.."."<br>";
    }
}

// $obj = new myclass();//abstract does not create object
$obj = new demo();
$obj->func();
$obj->myfunc();
