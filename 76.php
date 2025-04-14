<?php
$dob=new DateTime("2000-01-01");$now=new DateTime();$diff=$now->diff($dob);
echo $diff->y;
echo "\nMade By Aditya Negi 116";
?>