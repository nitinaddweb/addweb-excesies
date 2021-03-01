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
