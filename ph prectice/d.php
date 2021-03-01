<?php
class dell{
    public $name;
    public $model;

    function __construct($names,$models)
    {
        $this->name = $names;
        $this->model = $models;
    }

    function __destruct()
    {
        echo " i am destuctor and my model number is $this->model"."<br>";
    }
}

$d1 = new dell("dell",2.1);

echo "name is laptop is $d1->name "."<br>";
echo "name is model is $d1->model "."<br>";



?>