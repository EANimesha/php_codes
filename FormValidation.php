<!DOCTYPE html>
<html>
<head>
	<title>ff</title>
	<style type="text/css">
		.error{
			color: red;
		}
	</style>
</head>
<body>
<?php 
$nameErr = $addErr = $emailErr =$emailInvalid= $nicErr =$doberror= "";
$sn=$fn=$tt=$add=$em=$ni=$db=$nation=$permit="";

if (isset($_REQUEST["submit"])) {
	if (empty($_REQUEST["sname"])) {
		$nameErr="Surname required";
	}else{
		$sn=$_REQUEST["sname"];
	}

	if (empty($_REQUEST["address"])) {
		$addErr="Address required";
	}
	else{
		$add=$_REQUEST["address"];
	}

	if (empty($_REQUEST["email"])) {
		$emailErr="Email required";
	}else{
		$em=$_REQUEST["email"];
		if (!filter_var($em,FILTER_VALIDATE_EMAIL)) {
			$emailInvalid="Email Invalid";
		}
	}

	if (empty($_REQUEST["nic"])) {
		$nicErr="NIC required";
	}else{
		$ni=$_REQUEST["nic"];
	}

	if (empty($_REQUEST["dob"])) {
		$doberror="Date of birth required";
	}else{
		$db=$_REQUEST["dob"];
	}

	$fn=$_REQUEST["fname"];
	$tt=$_REQUEST["title"];
	$nation=$_REQUEST["nationality"];
	$permit=$_REQUEST["permits"];
	// $day=[];
	// if(isset($_REQUEST['days'])) {
	// 	$checked_count = count($_REQUEST['days']);
	// 	$day=$_REQUEST['days'];
	// 	echo "You have selected following ".$checked_count." option(s): <br/>";
	// 	foreach($day as $selected) {
	// 		echo "<p>".$selected .in_array($selected, $day)."</p>";
	// 	}
	// }

}


?>
<form action="" method="post">
	<table>
		<tr>
			<td>Forename:</td>
			<td><input type="text" name="fname" value="<?php echo $fn; ?>"></br></td>
		</tr>
		<tr>
			<td>Surname:<span class="error">*</span></td>
			<td><input type="text" name="sname" value="<?php echo $sn; ?>">
				<span class="error"><?php echo $nameErr; ?></span></br></td>
		</tr>
		<tr>
			<td>Title:</td>
			<td><input type="text" name="title" value="<?php echo $tt; ?>"></br></td>
		</tr>
		<tr>
			<td>Address:<span class="error">*</span></td>
			<td><input type="text" name="address" value="<?php echo $add; ?>">
				<span class="error"><?php echo $addErr; ?></span></br></td>
		</tr>
		<tr>
			<td>Email:<span class="error">*</span></td>
			<td><input type="text" name="email" value="<?php echo $em; ?>">
				<span class="error"><?php echo $emailErr." ".$emailInvalid; ?></span></br></td>
		</tr>
		<tr>
			<td>NIC:<span class="error">*</span></td>
			<td><input type="text" name="nic" value="<?php echo $ni; ?>">
				<span class="error"><?php echo $nicErr; ?></span></br></td>
		</tr>
		<tr>
			<td>Date Of Birth:<span class="error">*</span></td>
			<td><input type="Date" name="dob" value="<?php echo $db; ?>">
				<span class="error"><?php echo $doberror; ?></span></br></td>
		</tr>
		<tr>
			<td>Days Available</td>
			<td>
				<input type="checkbox" name="day1" value="1" 
				<?php if(isset($_POST['day1'])) echo "checked='checked'"; ?> >Monday
				<input type="checkbox" name="day2" value="2" 
				<?php if(isset($_POST['day2'])) echo "checked='checked'"; ?> >Tuesday
				<input type="checkbox" name="day3" value="3" 
				<?php if(isset($_POST['day3'])) echo "checked='checked'"; ?> >Wednesday
				
			</td>
		</tr>
		<tr>
			<td>Nationality</td>
			<td>
				<select name="nationality" >
					<option value="1" <?php if($nation==1) echo "selected"; ?> >Sinhala</option>
					<option value="2" <?php if($nation==2) echo "selected"; ?> >Other</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Do you have work permit?</td>
			<td>
				<input type="radio" name="permits" value="1" <?php if($permit==1) echo 'checked'; ?> >Yes
				<input type="radio" name="permits" value="0"  <?php if($permit==0) echo 'checked'; ?> >No
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="submit">
			</td>
		</tr>
	</table>

</form>
	<?php 
	if (isset($_REQUEST["submit"])) {
		
	}
	 ?>
</body>
</html>