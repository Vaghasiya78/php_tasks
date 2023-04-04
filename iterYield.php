<?php

foreach(iter(100) as $val){
    echo $val." ";
}

function iter($k){
    for($i=0;$i<=$k;$i++){
        yield $i;
        // yield 200;
    }

    yield 1;
    yield 2;
    yield 3;
}

$a = range(1,100);
print_r($a);
