<?php
    $start = 1;
    $end = 100;

    for($i=$start;$i<=$end;$i++){
        $flag=1;
        for($div=2;$div<=$i/2;$div++){
            if(($i/$div) == 0 ){
                $flag--;
            }
        }
        if($flag == 1){
            echo $i." ";
        }
    }
    

?>