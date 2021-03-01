<?php
$cnt = "n2@3";
$symbol = 0;
$number = 0;
$character = 0;

for ($i = 0; $i < strlen($cnt); $i++) {
    $a = $cnt[$i];

    switch ($a) {
        case is_numeric($a):
            $number++;
            break;
        case ctype_alpha($a):
            $character++;

            break;
        default:
            $symbol++;
    }
}
echo $symbol . "<br>";
echo $number . "<br>";
echo $character . "<br>";
