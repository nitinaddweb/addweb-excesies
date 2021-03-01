<!-- Armstrong number -->
<?php
$num = 153;
$tot = 0;
$n = $num;
while ($n != 0) {
    $rem = $n % 10;
    $tot = $tot + $rem * $rem * $rem;
    $n = $n / 10;
}
if ($num == $tot) {
    echo "<b>$num</b>. it is Armstrong number";
} else {
    echo "<b>$num</b>. it is not armstrong number";
}
?>