<?php

$array=[1, 1, 2, 3, 3, 4];

$left=0;
$right=1;
$length=count($array);

for($right=1; $right<$length; $right++){
    if($array[$right]!=$array[$left]){
        $left++;
        $array[$left]=$array[$right];   
    }  
}
for ($i = 0; $i <= $left; $i++) {
    echo $array[$i] . " ";
}