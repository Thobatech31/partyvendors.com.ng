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
                            <form action="login.php" method="POST" role="form">
                                <!--Form-->
                                <div class="card wow fadeInRight">
                                    <div class="card-block">
                                        <!--Header-->
                                        <div class="text-center">
                                            <h3><i class="fa fa-user"></i> Login with Us:</h3>
                                            <hr/><br/>
                                            

                                            <?php
                                                if (isset($_POST['login_button'])) {
                                                    $email=$_POST['email'];
                                                    $password=md5($_POST['password']);


                                                    $query="SELECT * FROM customer WHERE email='$email'";
                                                    $query_run=mysqli_query($mysqli,$query);
                                                        if(mysqli_num_rows($query_run)==0){

                                                            echo "<strong style='color:red;'>Wrong email</strong>";
                                                                
                                                        }else{

                                                        }

                                                    $query="SELECT * FROM customer WHERE password='$password'";
                                                    $query_run=mysqli_query($mysqli,$query);

                                                        if(mysqli_num_rows($query_run)==0){
                                                            echo "<strong style='color:red;'>Wrong Password</strong>";

                                                        }else{
                                                                $query="SELECT * FROM customer WHERE email='$email' AND password='$password'";
                                                                    $query_run=mysqli_query($mysqli,$query);
                                                                        if(mysqli_num_rows($query_run)>0){
                                                                            $_SESSION['email']=$email;
                                                                             header("Location:loginuser.php");
                                                        }else{

                                                        }
                                                        }
                                                    # code...
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

                                        <div class="md-form">
                                            <i class="fa fa-lock prefix"></i>
                                            <input type="password" id="password"  name="password" class="form-control" required/>
                                            <label for="password">Password</label>
                                        </div>

                                       

                                        <div class="text-center">
                                            <button type="submit" name="login_button"  class="btn btn-default btn-lg">Login</button>

                                            <a href="signupone.php"><button type="button" class="btn btn-primary btn-small" style="width:150px;">Register</button></a>
                                            <hr>

                                            <fieldset class="form-group">
                                                <a href="forgetpassword.php"><label>Forget Password</label></a>
                                            </fieldset>
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


