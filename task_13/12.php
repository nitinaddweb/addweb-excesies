<!-- 1. Display table of entered number
2. Display grade according to the marks entered
3. Fibonacci series
4. Prime numbers
5. Palindrome number
6. Factorial
7. Armstrong number
8. Sum of digits
9. Print alphabet triangle
10. LCM of two numbers
11. Factors of number -->

<!-- anss 1 -->
<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <form method="POST" action="../task_13/1_table.php">
        <input type="text" id="no" name="no" />
        <input type="submit" />
    </form>

</body>

</html>
<?php
$n = $_POST['no'];
for ($i = 1; $i <= 10; $i++)
    // echo "<br> $n x $i =\n" . $n * $i;
    echo $n . "*" .  $i . "=" . $i * $n . "<br>";

echo "<br>";
echo "<br>";
echo "<br>";
?> -->
<!-- no input  - 1 -->
<?php
$n = 10;
for ($i = 1; $i <= 10; $i++) {
    echo $n . "*" .  $i . "=" . $i * $n . "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";
?>


<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <form method="POST" action="../task_13/2_marks.php">
        <input type="number" id="marks" name="marks" />
        <input type="submit" name="submit">
    </form>
</body>

</html>

<?php

$marks = $_POST['marks'];
if ($marks >= 90) {
    $grade = "A+" . "<br>";
} else if ($marks >= 80) {
    $grade = "A-" . "<br>";
} else if ($marks >= 70) {
    $grade = "B+" . "<br>";
} else if ($marks >= 60) {
    $grade = "B-" . "<br>";
} else if ($marks >= 50) {
    $grade = "C+" . "<br>";
} else if ($marks >= 40) {
    $grade = "C-" . "<br>";
} else if ($marks >= 33) {
    $grade = "poor" . "<br>";
} else {
    $grade = "Fail" . "<br>";
}

echo "Student grade: $grade";



echo "<br>";
echo "<br>";
echo "<br>";


?>

<?php

echo "<h1> 2nd method</h1>";
$marks = 99;

if ($marks >= 90) {
    $grade = "A+" . "<br>";
} else if ($marks >= 80) {
    $grade = "A-" . "<br>";
} else if ($marks >= 70) {
    $grade = "B+" . "<br>";
} else if ($marks >= 60) {
    $grade = "B-" . "<br>";
} else if ($marks >= 50) {
    $grade = "C+" . "<br>";
} else if ($marks >= 40) {
    $grade = "C-" . "<br>";
} else if ($marks >= 33) {
    $grade = "poor" . "<br>";
} else {
    $grade = "Fail" . "<br>";
}

echo "Student grade: $grade";


echo "<br>";
echo "<br>";
echo "<br>";
?>





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

<!-- ans -6 Factorial  -->
<?php
$num = 4;
$factorial = 1;
for ($i = $num; $i >= 1; $i--) {
    $factorial = $factorial * $i;
}
echo "Factorial Number : $num is:-> $factorial";
?>

<!-- Armstrong number -->
<?php
$num = 15;
$tot = 0;
$n = $num;
while ($n != 0) {
    $rem = $n % 10;
    $tot = $tot + $rem * $rem * $rem;
    $n = $n / 10;
}
if ($num == $tot) {
    echo "<b>$num</b>. it is an Armstrong number";
} else {
    echo "<b>$num</b>. it is not an armstrong number";
}
?>


<!-- 8 sum of digits -->
<?php
   function sum_of_digits($no){
      $sum = 0;
      for ($i = 0; $i < strlen($no); $i++){
         $sum += $no[$i];
      }
      return $sum;
   }
   $no = "11";
   echo "The sum of digits is <b>".sum_of_digits($no);
   
?>






<!-- 9 triangle -->

<!-- <?php
        class triangle
        {
            function get()
            {
                $c = 'A';
                $cnt = 1;
                $str = "A";
                while ($cnt < 27) {

                    echo "<br>$str";
                    $c++;
                    $str = $str . $c;
                    $cnt++;
                }
            }
        }

        $t = new triangle();
        $t->get();
        ?>
-->


<?php
function alpha($val)
{
   $num = 65; // capital A
//    $num = 97; // small A
   for ($m = 0; $m < $val; $m++)
   {
      for ($n = 0; $n <= $m; $n++ )
      {
         $ch = chr($num);
         echo $ch." ";
         $num = $num + 1;
      }
      echo "<br>";
   }
}
$val = 6;
alpha($val);
?>


<!-- 10 LCM -->
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



<!-- 11 factors -->

<?php

$x = 10;

// echo "The factors of the " . $x . " are: ";
// 3,4,6 a nai ave 

for ($i = 1; $i <= $x; $i++) {
    if ($x % $i == 0) {
        echo $i . " <br>";
    }
}

?>