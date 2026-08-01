<?php
$array = [10, 20, 30, 40, 50];

$a=[];
$b=count($array)-1;
for ($i=$b; $i>=0; $i--){
    $a[]=$array[$i];
    
}
print_r($a);


$array = [10, 20, 30, 40, 50];
$a=0;
$b=count($array)-1;
$c=0;
while($a<$b){
  $c=$array[$a];
  $array[$a]=$array[$b];
  $array[$b]=$c;
  $a++;
  $b--;
}
print_r($array);