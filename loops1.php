<!-- <?php
        for ($i = 1; $i < 5; ++$i) {
            echo $i . "<br>";
            echo $i . "<br>";
        }
        ?>

 -->

<?php
class iphone
{
    public $name;
    public $rate;

    function setfun($name, $rate)
    {
        $this->name = $name;
        $this->rate = $rate;
    }
    function getfun()
    {
        echo "the iphone is  $this->name" . "<br>";
        echo "the iphone is  $this->rate" . "<br>";
    }
}

class apple extends iphone
{
    public $surname;
    // public $rate;

    function setafun($surname)
    {
        $this->surname = $surname;
        // $this->rate = $rate;
    }
    function getafun()
    {
        echo "the iphone surname  $this->surname" . "<br>";
        //    echo "the iphone is  $this->rate";
    }
}

$ip1 = new iphone();
$ip1->setfun("nitin", 21);
$ip1->getfun();

$ip = new apple();
$ip->setafun(2111);
$ip->getafun();


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>


<!-- <?php
        function sum($a, $b)
        {
            $c = $a + $b;
            return $c;
        }


        echo sum(100, 200)
        ?> -->

<?php
for ($i = 0; $i < 5; $i++) {
    echo $i;
}
?>
<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>
<?php

$c = array(1, 2, 3);
foreach ($c as $values) {
    echo $values;
}
?>