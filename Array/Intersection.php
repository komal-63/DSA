<?php
$array1 = [1, 2, 3, 4];
$array2 = [2, 3, 5, 6];

$array3 = [];
$i = 0;
$j = 0;

while ($i < count($array1) && $j < count($array2)) {

    if ($array1[$i] < $array2[$j]) {
        $i++;
    }
    elseif ($array1[$i] == $array2[$j]) {
        $array3[] = $array1[$i];
        $i++;
        $j++;
    }
    else {
        $j++;
    }
}

print_r($array3);