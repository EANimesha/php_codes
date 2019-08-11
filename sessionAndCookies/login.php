
<html>
<head>
	<title>
		login
	</title>
</head>
<body>
<h2>Session and cookies use for login</h2>
<form action="remember.php" method="post">
	Username :<input type="text" id="name" name="uname"><br>
	Password :<input type="text" id="pass" name="pwd"><br>
	<input type="checkbox" name="remem">Remember Me <br>
	<input type="submit" name="login" value="login ">
	
</form>
<?php 

if(isset($_COOKIE['name']) and isset($_COOKIE['pass'])){
	$name=$_COOKIE['name'];
	$pass=$_COOKIE['pass'];
	echo "<script>
		document.getElementById('name').value='$name';
		document.getElementById('pass').value='$pass';
	</script>"	;
}

?>
</body>
</html>