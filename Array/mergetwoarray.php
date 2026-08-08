<?php
$array1 = [1, 3, 5, 7];
$array2 = [2, 4, 6, 8];

$array3 = [];

$i = 0;
$j = 0;

while ($i < count($array1) && $j < count($array2)) {

    if ($array1[$i] < $array2[$j]) {
        $array3[] = $array1[$i];
        $i++;
    } else {
        $array3[] = $array2[$j];
        $j++;
    }
}
while ($i < count($array1)) {
    $array3[] = $array1[$i];
    $i++;
}

while ($j < count($array2)) {
    $array3[] = $array2[$j];
    $j++;
}
print_r($array3);