<?php
$array = [1,2,3,4,5,6,7];
$k = 3;
$temp=[1,2,3];
$length=count($array);

for($i=0; $i<$length-$k; $i++){
    $array[$i]=$array[$i+$k];

}
for($i = 0; $i < count($temp); $i++){
    $array[$length - $k + $i]=$temp[$i];
     
}
print_r($array);