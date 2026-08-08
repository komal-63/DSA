<?php
$array1 = [1, 2, 3, 4];
$array2 = [2, 3, 5, 6];

$array3=[];
$i=0;
$j=0;

while($i<count($array1) && $j<count($array2)){
    if($array1[$i]<$array2[$j]){
       $array3[]=$array1[$i];
       $i++;
    }
    elseif($array1[$i]==$array2[$j]){
        $array3[]=$array1[$i];
        $i++;
        $j++;
    }
    else{
        $array3[]=$array2[$j];
        $i++;
    }
}

while($i<count($array1)){
       $array3[]=$array1[$i];
       $i++;
}
while($j<count($array2)){
       $array3[]=$array2[$j];
       $j++;
}

print_r($array3);