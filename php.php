<?php
    $number=345;
    $sum=0;
    for($i=0;$i<=strlen($number);$i++)
    {
        $sum=$sum+$number%10;
        $number/=10;
    }
    echo"Sum of digit 345 is $sum";
?>
