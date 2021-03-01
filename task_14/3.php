<?php
$cnt = "helloNitinChauhan#@$9698";
$num = 0;
$alpha = 0;
$symbol = 0;
for ($i = 0; $i < strlen($cnt); $i++) {
    $a = $cnt[$i];
    
    switch ($a) {
        case is_numeric($a):
            $num++;
            break;

        case ctype_alpha($a):
            
            $alpha++;
            break;


        default:
            $symbol++;
    }
}
echo "number of numbers:$num" . "<br> ";
echo "number of alphabets:$alpha" . "<br> ";
echo "number of Symbols:$symbol" . "<br> ";
