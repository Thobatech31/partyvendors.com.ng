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
                            <?php
                                if (isset($_GET["com_code"]) && isset($_GET["email"])) {
                                    $email = $mysqli->real_escape_string($_GET["email"]);
                                    $com_code = $mysqli->real_escape_string($_GET["com_code"]);

                                    $data = $mysqli->query("SELECT * FROM customer WHERE email='$email' AND com_code='$com_code' ");

                                    if ($data->num_rows > 0) {
                                        $str = "0123456789qwertzuioplkjhgfdsayxcvbnm";
                                        $str = str_shuffle($str);
                                        $str = substr($str, 0, 15);
                                        $password = sha1($str);

                                        $mysqli->query("UPDATE customer SET password = '$password', com_code = '' WHERE email='$email'");

                                        echo "Your new password is: $str";
                                    } else {
                                        echo "Please check your link!";
                                    }
                                } else {
                                    header("Location: login.php");
                                    exit();
                                }
                            ?>

                            
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


