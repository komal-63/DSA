<?php
$array = [1, 2, 4, 5, 6];

$n=count($array)+1;

$nsum=$n*($n+1)/2;
$actualsum= 0;

for($i=0; $i<count($array); $i++){
    $actualsum=$actualsum + $array[$i];
}

$missingnumber= $nsum- $actualsum;
echo $missingnumber;


