<!--
Increment one integer variable’s value and print
Increment one char variable’s value and print
Declare one variable into the php tag and print it in second php’s tag
Can one variable be available into the second file?
Output of the following:
echo print “welcome”;
__call function
Method chaining
-->



<!-- Method chaining -->
<?php
class myclass
{
    private $str;
    function __construct()
    {
        $this->str = "chauhan" . "<br>";
    }

    function fun1()
    {
        $this->str .= "this is function 1" . "<br>";
        return $this;
    }

    function fun2()
    {
        $this->str .= "this is function 2" . "<br>";
        return $this;
    }

    function fun3()
    {
        return $this->str;
    }
}


$a = new myclass();


echo $a->fun1()->fun2()->fun3();


echo "<br>";
echo "<br>";
echo "<br>";

?>


<!-- // __call (overloading) -->
<!-- 
<?php
class addweb
{
    public function __call($name, $arguments)
    {

        echo "it's object method '$name' "
            . implode(', ', $arguments) . "\n";
    }


    public static function __callStatic($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo "it's static method '$name' "
            . implode(', ', $arguments) . "\n";
    }
}

$obj = new addweb();
$obj->nitin('in object context') . "<br>";

addweb::nitin('in static context') . "<br>";


echo "<br>";
echo "<br>";
echo "<br>";
?> -->



<!-- __call() 2nd rit -->
<?php
class dell
{
    function getData()
    {
        echo "<b>getData method.<br>";
    }
    public function __call($method, $args)
    {
        print "Method $method called:\n";
    }
}

$d = new dell();
$d->getData();
$d->randomli();
$d->getData();


echo "<br>";
echo "<br>";
echo "<br>";
?>





<!-- Increment one integer variable’s value and print -->

<?php

$i = 1;
function fun($i)
{
    $i++;
    echo "increment value is : ".$i."<br>";
}
echo "value is : ".$i."<br>";
fun($i);
echo "value is : ".$i;


echo "<br>";
echo "<br>";
echo "<br>";
?>


<!-- Increment one char variable’s value and print -->


<?php

$i = 'n';
function funProm($i)
{
    $i++;
    // echo $i . "<br>";
}
echo $i . "<br>";
funProm($i);
echo $i . "<br>";


echo "<br>";
echo "<br>";
echo "<br>";
?>

<!-- // 2nd rit -->


<?php

$a = 'm';
$b = $a++;
echo $a . "<br>";
echo $b . "<br>";
?>

<!-- output -->

<?php

echo print “welcome”;

// o/p :-> “welcome”1

?>


