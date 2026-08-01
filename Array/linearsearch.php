<?php
$array = [15, 25, 8, 42, 18];
$search = 42;
$length=count($array);
for($i=0; $i<$length; $i++){
    if($array[$i]==$search){
        echo $i;
        break;
    } 
}
?>