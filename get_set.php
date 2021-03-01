<!-- <?php
// magic methods
// __autoload
class myclass
{

    public $name;
    public $age;
    public function __get($name)
    {

        echo $name;
        return $this->$name;
        // return $this->$age;
    }


    public function __set($name, $age)
    {

        echo "Set:$name to $age";
        $this->name = $name;
        $this->age = $age;
    }
}


$myclass = new myclass();

echo $myclass->name;
$myclass->name = 'nitin';
echo $myclass->age;
$myclass->age = 21;

echo "name is [$myclass->name]" . "<br>";
echo "age is [$myclass->age]";
?>
 -->


<?php
// Declare a simple class

class TestClass
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return $this->name;
    }
}

$class = new TestClass('<h1>nitin</h1>');
echo $class;
?>
