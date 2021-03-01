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