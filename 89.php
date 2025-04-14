<?php
$conn = new mysqli("localhost", "root", "", "studentDB");
$result = $conn->query("SELECT * FROM students");
echo "<table
border='1'><tr><th>ID</th><th>Name</th><th>Marks</th></tr>";
while($row = $result->fetch_assoc()) {
 echo
"<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['marks']}</t
d></tr>";
}
echo "</table>";
$conn->close();
echo "<br>Made By Aditya Negi 116";
?>