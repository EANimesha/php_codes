<?php 

$myname="Nimesha";
$mypass="1234";

if (isset($_REQUEST["login"])) {
	$name=$_REQUEST["uname"];
	$password=$_REQUEST["pwd"];
	
	if ($name==$myname and $password=$mypass) {
		if(isset($_REQUEST["remem"])){
			setcookie("name",$name,time()+3600);
			setcookie("pass",$password,time()+3600);
		}
		session_start();
			$_SESSION['name']=$name;
			header("location:welcome.php");
	
	}else{
		echo "Email or password ivalid<br>Click here to <a href='login.php'>try again";
	}
}
else{
	header("location:login.php");
}

?>