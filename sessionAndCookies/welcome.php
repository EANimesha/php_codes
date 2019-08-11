<?php 

session_start();
echo "Welcome ".$_SESSION['name'];
echo "<a href='logout.php'>logout</a>";
?>