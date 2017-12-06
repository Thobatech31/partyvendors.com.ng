<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

require('configdb.php');

	if(isset($_GET['code'])){
		$get_email=$_GET['email'];
		$get_code=$_GET['code'];
		$query=mysqli_query($mysqli,"SELECT * FROM resettable WHERE email='$get_email'");

			while ($row=mysqli_fetch_assoc($query)) {
				$db_code = $row['passreset'];
				$db_email = $row['email'];

			}

			if ($get_email == $db_email && $get_code == $db_code) {
					echo "
					
						<form action='pass_reset_complete.php?code=$get_code' method='POST'>
							Enter New Password <br/><input type='password' name='newpass'><br/>
							<br/>
							Re-enter Your Password <br/><input type='password' name='newpass1'><p>
							<input type='hidden' name='email' value='$db_email'>
							<input type='submit' value='Update Password'>
						</form>

					";

				}
	}


if(!isset($_GET['code'])){
echo '
	<form action="resettesting3.php" method="POST">
		
		Enter Email <br/><input type="text" name="email"><br/>
		<br/>
		<input type="submit" name="press" value="submit">
	</form>
';


if(isset($_POST['press'])){
			
			$email=$_POST['email'];

			$query=mysqli_query($mysqli,"SELECT * FROM resettable WHERE email='$email'");
			
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
								http://www.partyvendors.com.ng/test/resettesting3.php?code=$code&email=$email";

						$query2=mysqli_query($mysqli,"UPDATE resettable SET passreset = '$code'  WHERE email='$email'");
					
						mail($to, $subject, $message);
							echo "<script>alert('Check your Email')</script>";
                      }else{
                      	echo "<script>alert('Email Is Incorrect')</script>";
                      }

			}else{
				echo "<script>alert('email does not exist Exist')</script>";
			}

			
				
	}

}

?>
</body>
</html>