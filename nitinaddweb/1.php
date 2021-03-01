<?php
class xyz{
    public $name;
    public $fname;

    function setFun($name,$fname){
        $this->name = $name;
        $this->fname = $fname;
    }

    function getFun(){
        echo "name is $this->name"."<br>";
        echo "firstname is $this->fname"."<br>";
    }
}

$e = new xyz();
$e->setFun("nit","chauhan");
echo $e->getFun();




?>