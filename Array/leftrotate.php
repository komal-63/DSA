<?php
$array = [1,2,3,4,5];

$temp=$array[0];
$length=count($array);

for($i=1; $i<$length; $i++){
     $array[$i-1]=$array[$i];
}
$array[$length-1]=$temp;
print_r($array);