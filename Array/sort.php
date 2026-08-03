<?php
$array=[10,20,30,40,50];

$length=count($array);
$issorted=true;

for($i=0;$i<$length-1;$i++){
    if($array[$i]<=$array[$i+1]){
        $issorted=true;
    }else{
        $issorted=false;
    }
}
if($issorted==true){
    echo "array is sorted";
}
else{
    echo "array is not sorted";
}