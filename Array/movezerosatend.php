<?php
$array= [1,3,0,4,0,6];

$left=0;
$right=0;
$temp=0;
$length=count($array);

for($right=0; $right<$length; $right++){
    if($array[$right]!=0){
        $temp=$array[$left];
        $array[$left]=$array[$right];
        $left++;
    }
   
}
 print_r($array);
