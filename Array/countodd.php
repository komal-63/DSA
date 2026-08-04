<?php
$array = [10, 15, 21, 8, 7];
$oddcount=0;
$length = count($array);
for ($i=0; $i<$length; $i++){
   if($array[$i]%2!=0){
    
    $oddcount++;
     echo $array[$i] . "<br>";
    }
}
echo $oddcount;