<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<h1>Student Information System</h1>
<form action="" method="post">
Enter Student NO:<br>
<input type="text" name="sno">
<input type="submit" value="search" name="submit">
</form>
<?php

include "db.php";

$sql="SELECT sno FROM student;";
$result = $conn->query($sql);

$student_no=0;
$found=0;

if(isset($_REQUEST["submit"])){
	$student_no= $_REQUEST["sno"];
	while($row = $result->fetch_assoc()) {
		if($row["sno"]==$student_no){
			$found=1;
			break;
		}else{
			$found=0;
		}
	}
	if($found==1){
		header("location:view.php?var1=".$student_no);
	}else{
		header("location:add.php?var1=".$student_no);
	}
	
}


$conn->close();
?>

</body>
</html>