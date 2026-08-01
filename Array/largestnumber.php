<?php
    $array = [12, 45, 7, 89, 32];
    $x=$array[0];
    for($i=1; $i<count($array); $i++){
        if($array[$i]>$x){
         $x=$array[$i];
        }
    }
    echo $x;
?>