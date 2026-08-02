<?php
$array=[5, 2, 8, 2, 9, 5];

$length = count($array);
for($i=0; $i<$length; $i++){
    $a = $array[$i];

    for($j=$i+1; $j<$length; $j++){
        if($array[$j]==$a){
            echo $array[$j];
           
        }
        
    }
   
}