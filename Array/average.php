<?php
$array= [20,5,1,8,5];

$sum = 0;

for ($i=0 ; $i< count($array) ;$i++){
    $sum= $sum + $array[$i];
    
}
$average = $sum/ count($array);
echo $average;
