<?php
function isArm($n){$s=0;
$t=$n;
while($n){
$d=$n%10;$s+=$d**3;$n=intval($n/10);}
return $s==$t;}
echo isArm(153)?"Yes":"No";
echo "\nMade By Aditya Negi 116";
?>