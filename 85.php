<?php
$conn = new mysqli("localhost", "root", "", "studentDB");
$sql = "CREATE TABLE students (id INT, name VARCHAR(50))";
if ($conn->query($sql)) echo "Table created";
$conn->close();
echo "<br>Made By Aditya Negi 116";
?>
