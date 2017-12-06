<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Partyvendor</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">




<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



        <link href="datetimepicker/jquery.datetimepicker.css" rel="stylesheet">


    <link rel="stylesheet" href="css/homepage.css">
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
				

					echo '
						<div class="container">
							<div class="row">
								<div class="col-md-4 col-sm-12 col-xs-12">
								</div>

								<div class="col-md-4 col-sm-12 col-xs-12" style="border:2px solid gray; margin-top:200px;">
											<center>
												<h3><i class="fa fa-user"></i>Forget Password</h3>
					                                            <br/>
											</center>
									<form action="resetpassword.php?code=$get_code" method="POST">
										
										<input type="text" name="newpass" placeholder="Enter New Password "><br/>
										<p>

										<input type="text" name="newpass1" placeholder="Re-Enter Your New Password "><br/>
										<p>
										
										<center>
										<input type="hidden" name="email" value="$db_email">
											 <button type="submit"   class="btn btn-primary btn-lg">Update Password</button>
										</center>
									</form>
								</div>

								<div class="col-md-4 col-sm-12 col-xs-12">
								</div>

							</div>
						</div>
									
					';

				}
	}


if(!isset($_GET['code'])){
echo '
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-12 col-xs-12">
			</div>

			<div class="col-md-4 col-sm-12 col-xs-12" style="border:2px solid gray; margin-top:200px;">
						<center>
							<h3><i class="fa fa-user"></i>Forget Password</h3>
                                            <br/>
						</center>
				<form action="forgetpassword.php" method="POST">
					
					<input type="text" name="email" placeholder="Enter Your Email Address"><br/>
					<p>
					
					<center>
						 <button type="submit" name="press"  class="btn btn-primary btn-lg">Forget Password</button>
					</center>
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
                      	$message ="Click the link Beloe or paste it into your browser
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
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script type="text/javascript" src="js/dropdown.js"></script>
</body>
</html>