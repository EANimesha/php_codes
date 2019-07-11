<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php

include "db.php";
$sno=$_REQUEST["var1"];

echo "Student No :".$sno."<br>";

$sql="SELECT sname FROM student where sno='".$sno."';";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
		echo  "Student Name : ".$row["sname"]."<br>";
}

//$sql1="SELECT s.sdescription,ss.marks FROM subject as s,student_subject as aa WHERE ss.sno='".$sno."' AND ss.scode=s.scode;";
$sql1="SELECT marks,sdescription FROM student_subject ss,subject s where ss.sno='".$sno."' AND ss.scode=s.scode;";
$result1 = $conn->query($sql1);

echo "<h4>Subject      &nbsp;&nbsp;&nbsp;&nbsp;      Marks </h4>";
echo "-----------    &nbsp;&nbsp;&nbsp;&nbsp;  -----------<br>";
while($row1 = $result1->fetch_assoc()) {
		echo  $row1["sdescription"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo  $row1["marks"]."<br>";
		
}


$conn->close();

?>
</body>
</html>