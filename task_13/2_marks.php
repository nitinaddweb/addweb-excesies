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