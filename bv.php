
<?php
class highestdum{
    function high_num($a,$b,$c){
        if ($a > $b and $a > $c) {
            echo "a is big";
        } else if ($b > $a and $b > $c) {
            echo "b is big";
        } else {
            echo "c is big";
        }

    }
};

$s = new highestdum();
$s->high_num(100,200,12);
?>