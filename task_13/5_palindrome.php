<!-- ans - 5 palindrome -->
<?php

$num = 222;

$rev = strrev($num);

if ($num == $rev) {
    echo " <b>$num</b> it is a palindrome";
} else {
    echo " <b>$num</b> it is not palindrome";
}
?>
