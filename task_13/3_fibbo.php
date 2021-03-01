<!-- fibbonacci series -->


<!-- ans - 3 fibbonacci -->
<?php

$num = 3;

function Fibbo($num)
{
    if ($num == 0) {
        return 0;
    } else if ($num == 1) {
        return 1;
    } else {
        return (Fibbo($num - 1) + Fibbo($num - 2));
    }
}

for ($i = 0; $i < $num; $i++) {
    echo Fibbo($i)."<br>";
}

?>
