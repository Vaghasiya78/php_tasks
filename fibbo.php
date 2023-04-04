<?php
  $n = 50;
  $a = 0;
  $b = 1;
  for($i=1;$i<=$n;$i++){
    echo $a,' ';
    $c = $a + $b;
    $a = $b;
    $b = $c;
  }
?>