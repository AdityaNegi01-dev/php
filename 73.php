<?php
$d=date_create("2023-01-01");
date_add($d,date_interval_create_from_date_string("10 days"));
echo date_format($d,"Y-m-d");
echo "\nMade By Aditya Negi 116";
?>