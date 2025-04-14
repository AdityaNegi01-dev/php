<?php
$conn = new mysqli("localhost", "root", "", "studentDB");
$sql = "ALTER TABLE students ADD marks INT";
if ($conn->query($sql)) echo "Table altered";
$conn->close();
echo "<br>Made By Aditya Negi 116";
?>
