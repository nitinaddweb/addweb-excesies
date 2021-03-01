<?php

class grandfather{
    public $gfname;
    public $gfage;

    function setgfInfo($gfnames,$gfages){
        $this->gfname = $gfnames;
        $this->gfage = $gfages;
    }

    function getgfInfo(){
        echo "name is $this->gfname"."<br>";
        echo "age of grandfather is $this->gfage"."<br>";
    }
}



class father extends grandfather{
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


class son extends grandfather{
    public $sname;
    public $sage;

    function setInfo($names,$ages){
        $this->sname = $names;
        $this->sage = $ages;
    }

    function getInfo(){
        echo "name is $this->sname"."<br>";
        echo "age of son is $this->sage"."<br>";
    }
    
}



$s1 = new son();
$s1->setInfo("nitin",21);
$s1->getInfo();

$f1 = new father();
$f1->setfInfo("mahendrabhai",51);
$f1->getfInfo();

$gf1 = new grandfather();
$gf1->setgfInfo("punjalal",81);
$gf1->getgfInfo();
