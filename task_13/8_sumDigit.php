<?php
   function sum_of_digits($no){
      $sum = 0;
      for ($i = 0; $i < strlen($no); $i++){
         // echo $sum."<br>";

         $sum += $no[$i];
         // echo $sum."<br>";
         // echo $i."<br>";
      }
      return $sum."<br>";
   }
   $no = "11";
   echo "The sum of digits is <b>".sum_of_digits($no);
   
?>