<?php
$conn = new mysqli("localhost", "root", "");
$sql = "CREATE DATABASE studentDB";
if ($conn->query($sql)) echo "Database created";
$conn->close();
echo "<br>Made By Aditya Negi 116";
?>
