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
        <!--  custom styles (optional) -->
        <link href="css/style.css" rel="stylesheet">
    <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <link href="datetimepicker/jquery.datetimepicker.css" rel="stylesheet">
            <link rel="stylesheet" href="css/homepage.css"> 
    </head>

    <body style="background-color: gray;">
            <div class="container">
                <div class="row">
                   <!--First column-->

                        <div class="col-md-10">
                            <div class="card wow fadeInRight">
                                <div class="card-block">

                                            <div class="text-center">
                                                    <h3><strong>Register as a vendors</strong></h3>                
                                            </div>
                                    <form role="form" action="vendorreg.php" method="POST">
                                         <div class="md-form form-sm">
                                                <i class="fa fa-user prefix"></i>
                                                <input type="text" name="name" id="name" class="form-control validate" value="<?php echo isset($_POST['name'])? $_POST['name']: ''; ?>" required/>
                                                <label for="name" data-error="wrong" data-success="right">Name</label>
                                            </div>

                                            <div class="md-form form-sm">
                                                <i class="fa fa-envelope prefix"></i>
                                                <input type="email" name="email" id="email" class="form-control validate" value="<?php echo isset($_POST['email'])? $_POST
                                                ['email']: ''; ?>" required/>
                                                <label for="email" data-error="wrong" data-success="right">Email Address</label>
                                            </div> 

                                            <div class="md-form form-sm">
                                                <i class="fa fa-phone prefix"></i>
                                                <input type="text" name="phone_no" id="phone_no" class="form-control validate" value="<?php echo isset($_POST['phone_no'])? $_POST['phone_no']: ''; ?>" required/>
                                                <label for="phone_no" data-error="wrong" data-success="right">Phone Number</label>
                                            </div> 

                                           
        <br/>

                                         <div class="form-group">
                                             
                                             <select class="form-control" name="state_name">
                                                 <option value="select">Please select your state</option>
                                                 <option value="Lagos State">Lagos State</option>
                                                 <option value="Ekiti State">Ekiti State</option>
                                                 <option value="Oyo State">Oyo State</option>
                                                <option value="Kwara State">Kwara State</option>
                                                 <option value="River State">River State</option>
                                             </select>
                                             
                                        </div><br/>

                                          <div class="form-group">
                                             
                                             <select class="form-control" name="location_name">
                                                 <option value="select">Please select your location</option>
                                                 <option value="Ikeja Lagos">Ikeja,Lagos</option>
                                                 <option value="Ikoyi Lagos">Ikoyi,Lagos</option>
                                                 <option value="Egbeda Lagos">Egbeda,Lagos</option>
                                                 <option value="Ikoyi Lagos">Ikotu,Lagos</option>
                                                 <option value="Mushin Lagos">Mushin,Lagos</option>

                                             </select>
                                             
                                        </div><br/>

                                           <div class="form-group">
                                             
                                             <select class="form-control" name="country_name">
                                                 <option value="select">Please select your country</option>
                                                 <option value="Nigeria">Nigeria</option>
                                                 <option value="Mali">Mali</option>
                                                 <option value="Uganda">Uganda</option>
                                                 <option value="Russia">Russia</option>
                                                 <option value="Togo">Togo</option>

                                             </select>
                                             
                                        </div>

                                         

                                         <div class="form-group">
                                             <label for="inputfile">Porfolio</label>
                                                <br/>
                                             <input type="file" id="inputfile">
                                             <p class="help-block">samples of your work.</p>
                                         </div>

                                       
                                        <div class="col-md-12">
                                            <div class="md-form form-sm">
                                                <i class="fa fa-lock prefix"></i>
                                                 <input type="password" name="password" id="password" class="form-control validate"  required/>
                                                <label for="password" data-error="wrong" data-success="right"> Password</label>
                                            </div>
                                        </div>        
                                         
                                        <div class="col-md-12">
                                            <div class="md-form form-sm">
                                                <i class="fa fa-lock prefix"></i>
                                                <input type="password" name="confirm_password" id="password" class="form-control validate" required/>
                                                <label for="confirm_password" data-error="wrong" data-success="right"> Confirm_Password</label>
                                            </div>
                                        </div>  
                                            <hr/>
                                        <div class="text-center">
                                                <h3><strong>ACCOUNT DETAILS</strong></h3>                
                                        </div>  

                                        <div class="md-form form-sm">
                                                <i class="fa fa-user prefix"></i>
                                                <input type="text" name="account_name" id="account_name" class="form-control validate" required/>
                                                <label for="account_name" data-error="wrong" data-success="right">Account Name</label>
                                            </div>

                                            <div class="md-form form-sm">
                                                <i class="fa fa-lock prefix"></i>
                                                <input type="text" name="account_number" id="account_number" class="form-control validate" required/>
                                                <label for="account_no" data-error="wrong" data-success="right">Account Number</label>
                                            </div>

                                            <div class="md-form form-sm">
                                                <i class="fa fa-user prefix"></i>
                                                <input type="text" name="bank_name" id="bank_name" class="form-control validate" required/>
                                                <label for="bank_name" data-error="wrong" data-success="right">Bank Name</label>
                                            </div>    
                                           
                                           <div class="text-center">
                                                <button class="btn btn-primary btn-small" type="submit" name="register_vendor" style="width:150px;">Register</button>
                                                               
                                                <a href="index.php"><button type="button" class="btn btn-primary btn-small" style="width:150px;">Login</button></a>
                                                               
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>




                

                </div>
            </div>
                           

   
    <!--/BEGINING OF VENDORS PHP SCRIPT-->

                    <?php
                    //To check wether the form has been submitted when clicking the register button
                        if(isset($_POST['register_vendor'])){
                            $name=$_POST['name'];
                            $email=$_POST['email'];
                            $phone_no=$_POST['phone_no'];
                            $state=$_POST['state_name'];
                            $location=$_POST['location_name'];
                            $country=$_POST['country_name'];
                             $account_name=$_POST['account_name'];
                            $account_number=$_POST['account_number'];
                            $bank_name=$_POST['bank_name'];
                            $password=md5($_POST['password']);
                            $confirm_password=md5($_POST['confirm_password']);
                            $datetime = date("Y-m-d H:i:s");

                             //To check wehteher the all the FORM field is is NOT EMPTY
                                if(!empty($name) && !empty($email) && !empty($phone_no) &&  !empty($state) && !empty($location) && !empty($country) && !empty($password) && !empty($account_name) && !empty($account_number) && !empty($bank_name) && !empty($confirm_password)){

                                    //To check if the type in email format is correct ornoot
                                    if(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]{0,5}+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $_POST['email'])){

                                        //To check if the two password matches
                                            if($password==$confirm_password){

                                                if(isset($_POST['email'])){
                                                    $query="SELECT * FROM vendor WHERE email='$email'";
                                                    $query_run=mysqli_query($mysqli,$query);
                                                    if(mysqli_num_rows($query_run)>0){
                                                        echo "<script>alert('Email Already Exist')</script>";
                                                    }else{

                                                        $query="SELECT * FROM vendor WHERE phone_no='$phone_no'";
                                                        $query_run=mysqli_query($mysqli,$query);
                                                        if(mysqli_num_rows($query_run)){
                                                            echo "<script>alert('Phone Number Already Exist')</script>";
                                                        }else{
                                                            $query="INSERT INTO vendor (name,email,phone_no,state,location,country,password,account_name,account_number,bank_name,datetime) VALUES ('$name','$email','$phone_no','$state','$location','$country','$password','$account_name','$account_number','$bank_name','$datetime')";
                                                            $query_run=mysqli_query($mysqli,$query);

                                                            if($query_run){
                                                                echo "<script>alert('Insertion successful')</script>";
                                                            }else{
                                                                echo "<script>alert('Insert Not succesfual')</script>";
                                                            }

                                                        }

                                                    }

                                                }else{
                                                  // else of email $_POST  
                                                }

                                            }else{
                                                echo "<script>alert('Password Not Match')</script>";
                                            }

                                    }else{
                                        echo "<script>alert('Invalid Email Format')</script>";
                                    }

                                }else{
                                    echo "<script>alert('All Field Are Required to be filled')</script>";
                                }                       
                        }else{
                             echo "<script>alert('nothing press')</script>";
                        }
                    ?>
                   
    <!--/END OF VENDORS PHP SCRIPT-->


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
