<?php
$array = [12, 45, 7, 89, 32];
$length = count($array);

$largest = $array[0];
$secondlargest=$array[0];

for ($i=0 ; $i<$length ;$i++){
    if($array[$i]>$largest){
        $secondlargest=$largest;
        $largest=$array[$i];
    }
    elseif($array[$i]<$largest && $array[$i]>$secondlargest){
         $secondlargest=$array[$i];
    }
}
echo $secondlargest;
