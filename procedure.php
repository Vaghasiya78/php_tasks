<?php
// function for give average of given series
function find_avg($start = 0, $end = 0)
{
    $count = 0;
    $sum = 0;
    for ($i = $start; $i <= $end; $i++) {
        $sum = $sum + $i;
        $count++;
    }
    $avg = $sum / $count;
    return $avg;
}

// function for take multi dimentional array values
function parameter_array(array $arr)
{
    foreach ($arr as $arr2) {
        $avg_array[] = find_avg($arr2[0], $arr2[1]);
    }
    print_r($avg_array);
}

// multidimentional array
$number = [
    [1, 10],
    [11, 20],
    [21, 33]
];

// normal find average
echo find_avg(10,1000)."\n";

// calling function
parameter_array($number);
