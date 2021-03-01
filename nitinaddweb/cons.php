<?php
class xyz{
    public $name;
    public $surname;

    function __construct($names,$surnames)
    {
        $this->name = $names;
        $this->surname = $surnames;
    }
}

$e = new xyz("nit","patel");
echo " my name is $e->name"."<br>";
echo " my surname is $e->surname"."<br>";




?>