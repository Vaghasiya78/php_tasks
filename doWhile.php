<?php
$n = 0;
$i = 0;
$a = 0;
$b = 1;
do {
    echo $a . "\n";
    $sum = $a + $b;
    $a = $b;
    $b = $sum;
    $i++;
} while ($i < $n);