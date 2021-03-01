
<!-- //highest sum of number -->
    
<?php
class highestdum
{
    function high_num($a, $b, $c=1000)
    {
        if ($a > $b and $a > $c) {
            echo "a $a is big";
        } else if ($b > $a and $b > $c) {
            echo "b $b is big";
        } else {
            echo "c $c is big";
        }
    }
};

$s = new highestdum();
$s->high_num(100, 200);
// $s->high_num(100, 2000,100);
?>