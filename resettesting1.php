<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

require('configdb.php');

	if(isset($_GET['code'])){
		$get_username=$_GET['username'];
		$get_code=$_GET['code'];
		$query=mysqli_query($mysqli,"SELECT * FROM resettable WHERE username='$get_username'");

			while ($row=mysqli_fetch_assoc($query)) {
				$db_code = $row['passreset'];
				$db_username = $row['username'];

			}

			if ($get_username == $db_username && $get_code == $db_code) {
					echo "
						<form action='pass_reset_complete.php?code=$get_code' method='POST'>
							Enter New Password <br/><input type='password' name='newpass'><br/>
							<br/>
							Re-enter Your Password <br/><input type='password' name='newpass1'><p>
							<input type='hidden' name='username' value='$db_username'>
							<input type='submit' value='Update Password'>
						</form>

					";

				}
	}

echo '
	<form action="resettesting3.php" method="POST">
		Enter Username <br/><input type="text" name="username"><br/>
		<br/>
		Enter Email <br/><input type="text" name="email"><br/>
		<br/>
		<input type="submit" name="press" value="submit">
	</form>
';

if(isset($_POST['press'])){
			$username=$_POST['username'];
			$email=$_POST['email'];

			$query=mysqli_query($mysqli,"SELECT * FROM resettable WHERE username='$username'");
			
			$numrow = mysqli_num_rows($query);

			if($numrow!=0){
						while($row=mysqli_fetch_assoc($query)){
                      		$db_email = $row['email'];
                      }

                      if($email == $db_email){
                      	$code = rand(10000,1000000);
                      	$to = $db_email;
                      	$subject = "Password Reset";
                      	$message ="Click the link Beloe or paste it into your browser
								http://www.partyvendors.com.ng/test/resettesting2.php?code=$code&username=$username";

						$query2=mysqli_query($mysqli,"UPDATE resettable SET passreset = '$code'  WHERE username='$username'");
					
						//mail($to, $subject, $message);
							echo "<script>alert('Check your Email')</script>";
                      }else{
                      	echo "<script>alert('Email Is Incorrect')</script>";
                      }

			}else{
				echo "<script>alert('Username does not exist Exist')</script>";
			}

			
				
	}



?>
</body>
</html>