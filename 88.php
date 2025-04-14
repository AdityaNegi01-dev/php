<?php
$conn = new mysqli("localhost", "root", "", "studentDB");
$result = $conn->query("SELECT * FROM students");
while($row = $result->fetch_assoc()) {
 echo "<p>ID: {$row['id']} Name: {$row['name']} Marks:
{$row['marks']}</p>";
}
$conn->close();
echo "<br>Made By Aditya Negi 116";
?>
