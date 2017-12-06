<!DOCTYPE html>
<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--BOOTSRAP-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
	<title></title>
</head>
<body>
<?php

require('configdb.php');

	if(isset($_GET['code'])){
		$get_email=$_GET['email'];
		$get_code=$_GET['code'];
		$query=mysqli_query($mysqli,"SELECT * FROM customer WHERE email='$get_email'");

			while ($row=mysqli_fetch_assoc($query)) {
				$db_code = $row['passreset'];
				$db_email = $row['email'];

			}

			if ($get_email == $db_email && $get_code == $db_code) {

					echo "
						<div class='container'>
								<div class='row'>
									<div class='col-md-4 col-sm-12 col-xs-12'>
									</div>

									<div class='col-md-4 col-sm-12 col-xs-12'>
											<form action='resetpassword.php?code=$get_code' method='POST'>
												Enter New Password <br/><input type='password' name='newpass'><br/>
												<br/>
												Re-enter Your Password <br/><input type='password' name='newpass1'><p>
												<input type='hidden' name='email' value='$db_email'>
												<input type='submit' value='Update Password'>
											</form>
									</div>

									<div class='col-md-4 col-sm-12 col-xs-12'>
									</div>
												
                        	</div>
						</div>
						";

				}
	}


if(!isset($_GET['code'])){
echo '
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-12 col-xs-12">
			</div>

			<div class="col-md-4 col-sm-12 col-xs-12">
					<form action="forgetpassword.php" method="POST">
							
							Enter Email <br/><input type="text" name="email"><br/>
							<br/>
							<input type="submit" name="press" value="submit">
						</form>
			</div>

			<div class="col-md-4 col-sm-12 col-xs-12">
			</div>
						

    	</div>
	</div>	
';


if(isset($_POST['press'])){
			
			$email=$_POST['email'];

			$query=mysqli_query($mysqli,"SELECT * FROM customer WHERE email='$email'");
			
			$numrow = mysqli_num_rows($query);

			if($numrow!=0){
						while($row=mysqli_fetch_assoc($query)){
                      		$db_email = $row['email'];
                      }

                      if($email == $db_email){
                      	$code = rand(10000,1000000);
                      	$to = $db_email;
                      	$subject = "Password Reset";
                      	$message ="Click the link Below or paste it into your browser
								http://www.partyvendors.com.ng/test/forgetpassword.php?code=$code&email=$email";

						$query2=mysqli_query($mysqli,"UPDATE customer SET passreset = '$code'  WHERE email='$email'");
					
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
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.2.min.js"></script>
      <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
						<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"> </script>
</body>
</html>


