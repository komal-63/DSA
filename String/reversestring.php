<?php
function reversestring($str){
    $reversestring = "";
    for($i=strlen($str);$i>=0;$i--){
     $reversestring.=$str[$i].'';

    }
    return $reversestring;
}
echo reversestring(""."komal");

function usingfunction($str){
    return strrev($str);
}
echo usingfunction(""."saini");
?>

