<!-- <?php
        $t1 = array(array(1, 2, 3), 22, 33);

        function hello($targ)
        {
            $targ[0][0] = 99;
        }

        function world(&$targ)
        {
            $targ[0][0] = 66;
        }

        hello($t1);
        var_dump($t1);

        world($t1);
        var_dump($t1);


        ?> -->

<?php

function myfunction(&$a, $cnt)
{
    for ($i = 0; $i < $cnt; $i++) {
        $a[$i] += 1;
    }
}

$a = array(1, 2, 3, 4);
$cnt = count($a);
myfunction($a, $cnt);
for ($i = 0; $i < $cnt; $i++) {
    echo $a[$i]."<br>";
}
?>