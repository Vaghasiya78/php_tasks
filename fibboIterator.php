<?php
function iter($val){
    $a = 0;
    $b = 1;
    for($i=1;$i<=$val;$i++){
        yield $a;
        $sum = $a + $b;
        $a = $b;
        $b = $sum;
    }
}

foreach(iter(20) as $i){
    echo $i."\n";
}