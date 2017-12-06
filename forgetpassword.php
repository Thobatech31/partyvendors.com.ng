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

<body style="background-color: gray;">


    <!--Mask-->
<div class="view hm-black-strong">
    <div class="full-bg-img flex-center">
        <div class="container">
            <div class="row">

               <!--First column-->
                    <div class="col-md-3">
                    </div>
                 
                        <div class="col-lg-6">
                            <form action="forgetpassword.php" method="POST" role="form">
                                <!--Form-->
                                <div class="card wow fadeInRight">
                                    <div class="card-block">
                                        <!--Header-->
                                        <div class="text-center">
                                            <h3><i class="fa fa-user"></i>Forget Password</h3>
                                            <hr/><br/>
                                            


                                            <?php
                                                if (isset($_POST["forgetpass"])) {
                                                  
                                                    
                                                    $email = $mysqli->real_escape_string($_POST["email"]);
                                                    
                                                    $data = $mysqli->query("SELECT customer_id FROM customer WHERE email='$email'");

                                                    if ($data->num_rows > 0) {
                                                        $str = "0123456789qwertzuioplkjhgfdsayxcvbnm";
                                                        $str = str_shuffle($str);
                                                        $str = substr($str, 0, 10);
                                                        $url = "http://partyvendors.com.ng/test/resetpassword.php?com_code=$str&email=$email";

                                                        //mail($email, "Reset password", "To reset your password, please visit this: $url", "From: myanotheremail@domain.com\r\n");

                                                        $mysqli->query("UPDATE customer SET com_code='$str' WHERE email='$email'");

                                                        echo "<script>alert('Please check your email!')</script>";
                                                    } else {
                                                        echo "<script>alert('Please check your inputs email!')</script>";
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
                                            <input type="text" id="email" name="email" value="<?php echo isset($_POST['email'])? $_POST['email']: '';?>" class="form-control" required/>
                                            <label for="email">Email</label>
                                        </div>
                                       

                                        <div class="text-center">
                                            <button type="submit" name="forgetpass"  class="btn btn-default btn-lg">Forget Password</button>

                                            
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

<body style="background-color: gray;">


    <!--Mask-->
<div class="view hm-black-strong">
    <div class="full-bg-img flex-center">
        <div class="container">
            <div class="row">

               <!--First column-->
                    <div class="col-md-3">
                    </div>
                 
                        <div class="col-lg-6">
                            <form action="forgetpassword.php" method="POST" role="form">
                                <!--Form-->
                                <div class="card wow fadeInRight">
                                    <div class="card-block">
                                        <!--Header-->
                                        <div class="text-center">
                                            <h3><i class="fa fa-user"></i>Forget Password</h3>
                                            <hr/><br/>
                                            


                                            <?php
                                                if (isset($_POST["forgetpass"])) {
                                                  
                                                    
                                                    $email = $mysqli->real_escape_string($_POST["email"]);
                                                    
                                                    $data = $mysqli->query("SELECT customer_id FROM customer WHERE email='$email'");

                                                    if ($data->num_rows > 0) {
                                                        $str = "0123456789qwertzuioplkjhgfdsayxcvbnm";
                                                        $str = str_shuffle($str);
                                                        $str = substr($str, 0, 10);
                                                        $url = "http://partyvendors.com.ng/test/resetpassword.php?com_code=$str&email=$email";

                                                        mail($email, "Reset password", "To reset your password, please visit this: $url", "From: partyvendors.com.ng\r\n");

                                                        $mysqli->query("UPDATE customer SET com_code='$str'  WHERE email='$email'");

                                                        echo "<script>alert('Please check your email!')</script>";
                                                    } else {
                                                        echo "<script>alert('Please check your inputs email!')</script>";
                                                    }
                                                }
                                            ?>
                                        </div>


                                    
                                        <!--Body-->
                                        <div class="md-form">
                                            <i class="fa fa-envelope prefix"></i>
                                            <input type="text" id="email" name="email" value="<?php echo isset($_POST['email'])? $_POST['email']: '';?>" class="form-control" required/>
                                            <label for="email">Email</label>
                                        </div>
                                       

                                        <div class="text-center">
                                            <button type="submit" name="forgetpass"  class="btn btn-default btn-lg">Forget Password</button>

                                            
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


