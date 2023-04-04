<?php
    // continue example
    for($i=1;$i<=10;$i++){
        if(($i%2) === 0){
            continue;
        }
        $i = $i + 1;
        echo $i;
    }
?>