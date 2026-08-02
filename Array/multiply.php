<?php
$array = [12, 45, 7, 89, 32];

$length= count($array);
$multiplication=1;

for($i=0; $i<$length; $i++){
      $multiplication=$multiplication*$array[$i];
   
}
echo $multiplication;