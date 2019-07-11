<?php
$conn=new MySQLi("localhost","root","","school");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>