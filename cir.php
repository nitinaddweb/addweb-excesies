<?php

//circumference
class circumference
{
    var $PI = 3.1415;
    function myfunc($r)
    {
        global $PI;
        $cir = 2 * $this->PI * $r;
        echo $cir;
    }
}

class employee extends circumference{
    public $sname;
    public $sage;

    function setInfo($names,$ages){
        $this->sname = $names;
        $this->sage = $ages;
    }

    function getInfo(){
        echo "name is $this->sname"."<br>";
        echo "age of employee is $this->sage"."<br>";
    }
}

class programmer extends employee{
    public $fname;
    public $fage;

    function setfInfo($fnames,$fages){
        $this->fname = $fnames;
        $this->fage = $fages;
    }

    function getfInfo(){
        echo "name is $this->fname"."<br>";
        echo "age of sfather is $this->fage"."<br>";
    }
}


//multiple objects
$obj = new circumference();
$obj->myfunc(5);

echo "<br>";
$obj1 = new circumference();
$obj1->myfunc(10);

echo "<br>";
$obj3 = new circumference();
$obj3->myfunc(2);

echo "<br>";
echo "<br>";
// echo "class employee objects";
$emp = new employee();
$emp->setInfo("nitin",22);
$emp->getInfo();

echo "<br>";
// echo "class programmer objects";
$prom = new programmer();
$prom->setfInfo("uv",21);
$prom->getfInfo();
