<!-- <!-- 
1. Swap two variable’s value using call by value and call by
2. Reference. Which is better to use and why?
3. Make one abstract class within that keep some methods
4. Abstract and some as it is and call those abstract class’s Methods accordingly.
5. Can one use the final keyword with variables? Describe Your ans
6. Override final methods and call them accordingly
7. Inherit final class and use it’s properties accordingly
8. Pass array into the function and update the values into the
9. function and after that print an array. Check whether it
10. Prints original array or an updated array 

<?php

function myfunction(&$a, $cnt)
{
    for ($i = 0; $i < $cnt; $i++) {
        $a[$i] += 1;
    }
}
function myfunction1(...$a)
{
    foreach ($a as $value) {
        echo $value;
    }
}

$a = array(1, 2, 3, 4);
$cnt = count($a);
myfunction($a, $cnt);
myfunction1(1, 2, 3);

for ($i = 0; $i < $cnt; $i++) {
    echo $a[$i];
}
?> -->


<!-- /// ... spalt operator -->

<?php
class myclass
{
    function myfunction(...$string)
    {
        foreach ($string as $value) {
            # code...
            echo $value;
        }
    }
}

$obj = new myclass();
$obj->myfunction(10, 20, 30);

?>