<?php
class employee{
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

class begineer extends programmer{
    public $bname;
    public $bage;

    function setbInfo($bnames,$bages){
        $this->bname = $bnames;
        $this->bage = $bages;
    }

    function getbInfo(){
        echo "name is $this->bname"."<br>";
        echo "age of beginner is $this->bage"."<br>";
    }
}


$s1 = new employee();
$s1->setInfo("nitin",21);
$s1->getInfo();

$f1 = new programmer();
$f1->setfInfo("xyz",51);
$f1->getfInfo();

$b1 = new begineer();
$b1->setbInfo("prakash",21);
$b1->getbInfo();




?>