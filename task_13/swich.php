<?php

$a = 'a';
$count = "hello";
switch ($a) {
    case 'a':
        $character = 0;
        for ($i = 0; $i < strlen($count); $i++) {
            if (($count[$i] >= 'A' && $count[$i] <= 'Z') || ($count[$i] >= 'a' && $count[$i] <= 'z')) {
                $letter++;
            }
        }
        echo $letter;
        break;

    case 2:
        echo "hello1";
        break;

    case 3:
        echo "hello";
        break;

    default:
        echo "please enter valid character";
}
