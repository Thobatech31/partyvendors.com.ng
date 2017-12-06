<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
ob_start();
session_start();
require('configdb.php');

	$newpass=$_POST['newpass'];
	$newpass1=$_POST['newpass1'];
	$post_username=$_POST['username'];
	$code=$_GET['code'];

		if ($newpass == $newpass1) {
			$enc_password=md5($newpass);

			mysqli_query($mysqli,"UPDATE resettable SET password='$newpass' WHERE username='$post_username'");
			

			mysqli_query($mysqli,"UPDATE resettable SET passrest='0' WHERE username='$post_username'");
			

			echo "Your Password Has Been Updated<> <a href='http://www.partyvendors.com.ng/test/resettesting3.php?code=$code&username=$post_username'>Click here to go back</a>";
		}else{
			echo "Password must match <a href='pass_reset_complete.php?code=$code&username=$post_username'>Click here to go back</a>";
		}

?>
</body>
</html><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
ob_start();
session_start();
require('configdb.php');

	$newpass=$_POST['newpass'];
	$newpass1=$_POST['newpass1'];
	$post_username=$_POST['username'];
	$code=$_GET['code'];

		if ($newpass == $newpass1) {
			$enc_password=md5($newpass);

			mysqli_query($mysqli,"UPDATE resettable SET password='$newpass' WHERE username='$post_username'");
			

			mysqli_query($mysqli,"UPDATE resettable SET passrest='0' WHERE username='$post_username'");
			

			echo "Your Password Has Been Updated<> <a href='http://www.partyvendors.com.ng/test/resettesting3.php?code=$code&username=$post_username'>Click here to go back</a>";
		}else{
			echo "Password must match <a href='pass_reset_complete.php?code=$code&username=$post_username'>Click here to go back</a>";
		}

?>
</body>
</html>