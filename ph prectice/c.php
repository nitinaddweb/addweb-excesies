<?php
class dell{
    public $name;
    public $model;

    function __construct($names,$models)
    {
        $this->name = $names;
        $this->model = $models;
    }
}

$d1 = new dell("dell",2.1);

echo "name is laptop is $d1->name "."<br>";
echo "name is model is $d1->model "."<br>";



?>