<?php
ob_start();
session_start();
require('configdb.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
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
    
    <style>
      

        
    </style>

 
</head>

<body>


    <!--Mask-->
<div class="view hm-black-strong">
    <div class="full-bg-img flex-center">
        <div class="container">
            <div class="row">

               <!--First column-->
                    <div class="col-md-3">
                    </div>
                 


                         <div class="col-lg-6">
                            <form action="resetpassword.php" method="POST" role="form">
                                <!--Form-->
                                <div class="card wow fadeInRight">
                                    <div class="card-block">
                                        <!--Header-->
                                        <div class="text-center">
                                            <h3><i class="fa fa-user"></i>Reset Password</h3>
                                            <hr/><br/>
                                            


                                                    <?php
                                                    if(isset($_POST['resetpass'])){
                                                        

                                                            $email = $mysqli->real_escape_string($_GET["email"]);
                                                            $com_code = $mysqli->real_escape_string($_GET["com_code"]);

                                                            $data = $mysqli->query("SELECT * FROM customer WHERE email='$email' AND com_code='$com_code' ");

                                                            if ($data->num_rows > 0) {
                                                               
                                                                $str = $_POST['passwordone'];
                                                                $password = sha1($str);

                                                                $mysqli->query("UPDATE customer SET password = '$password', com_code = '' WHERE email='$email'");

                                                                echo "Your new password is: $str";
                                                            } else {
                                                                echo "Please check your link!";
                                                            }
                                                        }

                                                    }
                                                       
                                                    ?>
                                        </div>


                                    <div class="row">
                                        <div class="col-md-3">
                                        </div>

                                        <div class="col-md-6" style="text-align: center;">
                                        
                                        </div>
                                        <div class="col-md-3">
                                        </div>
                                    </div>

                                        <!--Body-->
                                        <div class="md-form">
                                            <i class="fa fa-envelope prefix"></i>
                                            <input type="text" id="password" name="passwordone" class="form-control" required/>
                                            <label for="email">New Password</label>
                                        </div>

                                        <div class="md-form">
                                            <i class="fa fa-envelope prefix"></i>
                                            <input type="text" id="password" name="passwordtwo" class="form-control" required/>
                                            <label for="email"> Confirm New Password</label>
                                        </div>
                                       

                                        <div class="text-center">
                                            <button type="submit" name="resetpass"  class="btn btn-default btn-lg">Reset Password</button>

                                            
                                        </div>

                                    </div>
                                </div>
                                <!--/.Form-->
                            </form>

                            
                        </div>

                    
                    <div class="col-md-3">
                    </div>


            </div>
        </div>
    </div>
</div>
<!--/.Mask-->

             
  




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


