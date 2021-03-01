<!-- <?php
        class myfunc
        {
            // public static $i=0;
            function myfunc1()
            {
                static $i = 0;
                $i++;
                echo $i;
            }
        }

        $a = new myfunc();
        $a->myfunc1() . "<br>";
        $a->myfunc1() . "<br>";

        echo "<br>";
        echo "<br>";

        $b = new myfunc();
        $b->myfunc1() . "<br>";
        $b->myfunc1() . "<br>";

        echo "<br>";
        echo "<br>";

        $c = new myfunc();
        $c->myfunc1() . "<br>";
        $c->myfunc1() . "<br>";




        ?>
 -->


<!-- //////// static :: operotr -->

<?php
class myfunction
{
    public static $i = 0;
    function myfunc1()
    {
        // static $i=0;

        //self ma continuee reh.. 1,2,3,4,5,6

        // self::$i++;
        // echo self::$i;


        //this object wise le 1,2 1,2 1,2
        $this->i++;
        echo $this->i . "<br>";
    }
    static function myfunc2()
    {
        echo " i am static function";
    }
}

$a = new myfunction();
$a->myfunc1() . "<br>";
$a->myfunc1() . "<br>";

echo "<br>";
echo "<br>";

$b = new myfunction();
$b->myfunc1() . "<br>";
$b->myfunc1() . "<br>";

echo "<br>";
echo "<br>";

// $c = new myfunction();
// // $c->myfunc2()."<br>";
// $c->myfunc2()."<br>";
myfunction::myfunc2(); //object create karya vagar run thy :: use karine

//static : ama object create karvani jarur na pade
//instant atle object craete : ama apde object create time a call thy ,




?>