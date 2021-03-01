<!-- prime number -->
<!-- ans -> prime number -->
<?php
function primeNumber($no)
{
    if ($no == 1)
        return 0;
    for ($i = 2; $i <= $no / 2; $i++) {
        if ($no % $i == 0)
            return 0;
    }
    return 1;
}


$no = 31;
$pr = primeNumber($no);
if ($pr == 1)
    echo " <b>$no</b>. it is a Prime";
else
    echo "<b>$no</b>. it is Not Prime";

echo "<br>";
?>