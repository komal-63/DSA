<?php
$array = [12, 45, 7, 89, 32];

$length= count($array);
$smallest=$array[0];
$secondsmallest=PHP_INT_MAX;

for($i=0; $i<$length; $i++){

    if($array[$i]<$smallest){
        $secondsmallest=$smallest;
        $smallest=$array[$i];
    }
    elseif($array[$i]>$smallest && $array[$i]<$secondsmallest){
            $secondsmallest=$array[$i];
    }
}
echo $secondsmallest;