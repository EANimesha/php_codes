<?php  

session_start();
session_destroy();
if(isset($COOKIE['name']) and isset($COOKIE['pass'])){
	$name=$COOKIE['name'];
	$pass=$COOKIE['pass'];
	setcookie("name",$name,time()-1);
	setcookie("pass",$pass,time()-1);
	
}

echo "You successfully logout. Click here to <a href='login.php'>login again";

?>