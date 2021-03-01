<!-- /*All PHP Trainees

Check whether one can write same function in multiple
interfaces and how to implement the same in class


Can one implement an interface into the interface ?
Describe your ans by implementing it practically
Check whether there is a call of default constructor of base
class while making object of derived class


Print the largest number among three parameters using
Function and also include default parameter if not passed
While function call*/ -->


<?php
interface nitin
{
    function getdata();
}

interface prakash extends nitin
{
    function getdata();
}

class myclass implements nitin
{
    function getdata()
    {
        echo "hello , getdata" . "<br>";
    }

    function __construct()
    {
        echo "it is a construct" . "<br>" . "<br>";
    }
}
class myclass2 implements nitin
{
    function getdata()
    {
        echo "hello , getdata second" . "<br>";
        parent::__construct();
    }
}


$gt = new myclass();
$gt->getdata();
$gt2 = new myclass2();
$gt2->getdata();

?>



<!-- default parameterized -->

<?php
function setsum($a, $b = 10, $c = 10)
{
    echo  $a + $b + $c;
};
echo setsum(10);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>