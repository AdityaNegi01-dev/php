<?php
$conn = new mysqli("localhost", "root", "", "studentDB");
$sql = "INSERT INTO students VALUES (1, 'Aditya', 85)";
if ($conn->query($sql)) echo "Data inserted";
$conn->close();
echo "<br>Made By Aditya Negi 116";
?>
