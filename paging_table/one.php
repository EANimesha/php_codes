<html>
<head>
<title>Paging Table</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body style="margin:20px auto;width:50%;">
<h1 align="center">Customer Details</h1>
<?php
$servername="localhost";
$username="root";
$password="";

$conn=new MySQLi($servername,$username,$password,"sample");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_GET['page_no'])) {
    $page_no = $_GET['page_no'];
} else {
    $page_no = 1;
}

if($page_no==0){
	$sql="SELECT * FROM customers ;";
	$id=1;
}
else{
	
$rec_per_page=25;
$start_rec=$rec_per_page*($page_no-1)+1;
$sql="SELECT * FROM customers limit ".$start_rec.",".$rec_per_page.";";
$id=$start_rec;
}

$result = $conn->query($sql);

echo "<table border='1' >
<tr bgcolor='#9BB2DB'>
<th>No</th>
<th>Customer Number</th>
<th>Customer Name</th>
<th>Last Name</th>
<th>First Name</th>
<th>Phone</th>
</tr>";



while($row = $result->fetch_assoc()) {
	echo "
	<tr bgcolor='#CEF1E5'>
	<td>".$id."</td>
	<td>".$row["customerNumber"]."</td>
	<td>".$row["customerName"]."</td>
	<td>".$row["contactLastName"]."</td>
	<td>".$row["contactFirstName"]."</td>
	<td>".$row["phone"]."</td>
	</tr>
	";
	$id++;
		
}

echo "</table>";
$conn->close();
?>

<p class="page">
<a href="<?php  echo $_SERVER['PHP_SELF']."?page_no=1"; ?>" > 1 </a> &nbsp;&nbsp;
<a href="<?php  echo $_SERVER['PHP_SELF']."?page_no=2"; ?>" > 2 </a> &nbsp;&nbsp;
<a href="<?php  echo $_SERVER['PHP_SELF']."?page_no=3"; ?>"> 3 </a> &nbsp;&nbsp;
<a href="<?php  echo $_SERVER['PHP_SELF']."?page_no=4"; ?>"> 4 </a> &nbsp;&nbsp;
<a href="<?php  echo $_SERVER['PHP_SELF']."?page_no=5"; ?>"> 5 </a> &nbsp;&nbsp;
<a href="<?php  echo $_SERVER['PHP_SELF']."?page_no=0"; ?>"> Show All </a>
</p>

</body>
</html>
