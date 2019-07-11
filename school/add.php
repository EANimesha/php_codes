<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>Add new Student</h1>
<?php

include "db.php";
$sno=$_REQUEST["var1"];

echo "Student No :".$sno."<br>";
?>

<form action="" method="post">
Student Name : <input type="text" name="ntext"><br>
<input type="submit" value="Submit" name="submit1">
</form>
<?php
if(isset($_REQUEST["submit1"])){
	$sname= $_REQUEST["ntext"];
	$sql2="INSERT INTO student values('".$sno."','".$sname."')";
	$conn->query($sql2);
	header("location:search.php");
}

$conn->close();
?>
</body>
</html>