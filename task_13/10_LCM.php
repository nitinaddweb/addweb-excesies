<?php
        $x = 5;
        $y = 5;

        if ($x > $y) {
            $temp = $x;
            $x = $y;
            $y = $temp;
        }

        for ($i = 1; $i < ($x + 1); $i++) {
            if ($x % $i == 0 && $y % $i == 0)
                $gcd = $i;
        }

        $lcm = ($x * $y) / $gcd;
        echo "LCM of $x and $y is: $lcm";

?> 

