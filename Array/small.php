<?php
$A=[4,14,89,45,2];
$x=$A[0];
for($i=1;$i<count($A);$i++){
 if($A[$i]<$x){
    $x=$A[$i];
 }

}
 echo $x;