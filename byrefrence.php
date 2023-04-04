<?php
    $a = [1,2,3];
    $b = [1,2,3];

    // for($i=0;$i<3;$i++){
    //     $a[$i] = $a[$i] * 5;
    // }
    // print_r($a);

    foreach($b as &$p){
        $p = $p * 5;
    }
    print_r($b);

?>