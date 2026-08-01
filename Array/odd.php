<?php
$array = [20, 5, 1, 8, 5, 10, 7];
$oddcount=0;
$length = count($array);
for ($i=0; $i<$length; $i++){
   if($array[$i]%2!=0){

    $oddcount++;
    }
}
echo $oddcount;