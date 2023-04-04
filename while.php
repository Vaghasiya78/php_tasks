<?php
    $n = 10;
    $a = 0;
    $b = 1;
    while($n>0){
        echo $a."\n";
        $sum = $a+$b;
        $a = $b;
        $b = $sum;
        $n--;
    }

?>