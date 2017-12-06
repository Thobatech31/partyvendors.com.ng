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

    <body style="background-color:grey;">
            <div class="container">
                <div class="row">
                   <!--First column-->

                    <div class="col-md-3 col-xs-12 col-sm-12">
                    </div>

                            <div class="col-md-6">
                                    <form action="signupone.php" method="POST">
                                        <div class="card wow fadeInRight">
                                                <div class="card-block">                                 
                                                    <div class="text-center">
                                                        <h3><strong>Register as a user</strong>                  
                                                    </div>  
                                                     <div class="row"> 
                                                        <div class="col-md-12">
                                                            <div class="md-form form-sm">
                                                                <i class="fa fa-user prefix"></i>
                                                                <input type="text" name="name" id="name" class="form-control validate" value="<?php echo isset($_POST['name'])? $_POST['name']:''; ?>" required/>
                                                                <label for="name" data-error="wrong" data-success="right"> Name</label>
                                                            </div>
                                                        </div>        
                                                    </div>

                                                    <div class="row">          
                                                        <div class="col-md-12">
                                                            <div class="md-form form-sm">
                                                                <i class="fa fa-envelope prefix"></i>
                                                                <input type="email" name="email" id="email" class="form-control validate" value="<?php echo isset($_POST['email'])? $_POST['email']:''; ?>" required/>
                                                                <label for="email" data-error="wrong" data-success="right"> Email Address</label>
                                                            </div>
                                                        </div>        
                                                    </div>

                                                    
                                                    <div class="row">     
                                                        <div class="col-md-12">
                                                            <div class="md-form form-sm">
                                                                <i class="fa fa-phone prefix"></i>
                                                                <input type="text" name="phone_no" maxlength="11" id="phone_no" class="form-control validate" maxlength="11" value="<?php echo isset($_POST['phone_no'])? $_POST['phone_no']: ''; ?>" required/>
                                                                <label for="phoneno" data-error="wrong" data-success="right"> Phone Number</label>
                                                            </div>
                                                        </div>        
                                                    </div>

                                                      <br/>

                                                     <div class="form-group">       
                                                         <select class="form-control" name="state_id" id="select2">
                                                             <option  value="select">Please select your state</option>
                                                             <option value="Abia State">Abia State</option>
                                                    <option value="Adamawa State ">Adamawa State </option>
                                                    <option value="Anambra State">Anambra State</option>
                                                    <option value="Akwa Ibom State">Akwa Ibom State</option>
                                                    <option value="Bauchi State ">Bauchi State </option>
                                                    <option value="Bayelsa State">Bayelsa State</option>
                                                    <option value="Benue State">Benue State</option>
                                                    <option value="Borno State"> Borno State </option>
                                                    <option value="Cross River state ">Cross River state </option>
                                                    <option value=" Delta State"> Delta State</option>
                                                    <option value="Ebonyi State ">Ebonyi State </option>
                                                    <option value=" Edo State"> Edo State</option>
                                                    <option value="Ekiti State">Ekiti State</option>
                                                    <option value=" Enugu State "> Enugu State </option>
                                                    <option value="Gombe State">Gombe State</option>
                                                    <option value="Imo State">Imo State</option>
                                                    <option value="Jigawa State ">Jigawa State </option>
                                                    <option value="Kaduna State">Kaduna State</option>
                                                    <option value="Abuja (F.C.T)">Abuja (F.C.T)</option>
                                                    <option value=" Kano State "> Kano State </option>
                                                    <option value="Katsina state ">Katsina state </option>
                                                    <option value=" Kebbi State"> Kebbi State</option>
                                                    <option value="Kogi State ">Kogi State </option>
                                                    <option value=" Kwara State"> Kwara State</option>

                                                    <option value="Lagos"> Lagos State </option>
                                                    <option value="Nasarawa State ">Nasarawa State </option>
                                                    <option value=" Niger State"> Niger State</option>
                                                    <option value=" Ogun State"> Ogun State</option>
                                                    <option value="Ondo State ">Ondo State </option>
                                                    <option value=" Osun State"> Osun State</option>

                                                    <option value=" Oyo State"> Oyo State</option>
                                                    <option value="Plateau State ">Plateau State </option>
                                                    <option value=" Rivers State"> Rivers State</option>
                                                    <option value=" Sokoto State"> Sokoto State</option>
                                                    <option value="Taraba State ">Taraba State </option>
                                                    <option value=" Yobe State"> Yobe State</option>
                                                    <option value=" Zamfara State"> Zamfara State</option>
                                                         </select>       
                                                    </div>

                                                    <br/>

                                                      <div class="form-group">  
                                                         <select class="form-control" name="location_id" id="select3">
                                                             <option value="select">Please select your location</option>
                                                             <option data-value="Lagos" value="Agege Lagos">Agege Lagos</option>
                                                             <option data-value="Lagos" value="Apapa Lagos">Apapa Lagos</option>
                                                             <option data-value="Lagos" value="Abuleegba Lagos">Abule-Egba Lagos</option>
                                                            
                                                             <option data-value="Lagos" value="Badagry Lagos">Badagry Lagos</option>
                                                             <option data-value="Lagos" value="Epe Lagos">Epe Lagos</option>
                                                             <option data-value="Lagos" value="Egbeda Lagos">Egbeda,Lagos</option>
                                                             <option data-value="Lagos" value="Lekki Lagos">Lekki Lagos</option>

                                                             <option data-value="Lagos" value="Maryland Lagos">Maryland Lagos</option>

                                                             <option data-value="Lagos" value="Ikeja Lagos">Ikeja Lagos</option>

                                                             <option data-value="Lagos" value="Ikotun Lagos">Ikotu,Lagos</option>

                                                             <option data-value="Lagos" value="Ikorodu Lagos">Ikorodu Lagos</option>

                                                             <option data-value="Lagos" value="Iyanaipaja Lagos">Iyana-Ipaja Lagos</option>
                                                             <option data-value="Lagos" value="Ijaye Lagos">Ifako-Ijaye Lagos</option>

                                                             <option data-value="Lagos" value="Ojoduberger Lagos">Ojodu-Berger Lagos</option>

                                                             
                                                             <option data-value="Lagos" value="Ikorodu Lagos">Ikorodu Lagos</option>

                                                             <option data-value="Lagos" value="Victoria Lagos">Victoria-Island Lagos</option>
                                                             
                                                             <option data-value="Lagos" value="Mushin Lagos">Mushin Lagos</option>
                                                             <option data-value="Lagos" value="Oshodi Lagos">Oshodi Lagos</option>
                                                             <option data-value="Lagos" value="Shomolu Lagos">Shomolu Lagos</option>
                                                             <option data-value="Lagos" value="Surulere Lagos">Surulere Lagos</option>
                                                         </select>             
                                                    </div>

                                                    <br/>

                                                    <div class="form-group">  
                                                         <select class="form-control" name="country_id" id="country_id">
                                                             <option value="select">Please select your country</option>
                                                             <option value="Nigeria">Nigeria</option>
                                                             
                                                         </select>     
                                                    </div>

                                                    <div class="row">  
                                                        <div class="col-md-12">
                                                            <div class="md-form form-sm">
                                                                <i class="fa fa-lock prefix"></i>
                                                                <input type="password" name="password" id="password" class="form-control validate" required/>
                                                                <label for="password" data-error="wrong" data-success="right"> Password</label>
                                                            </div>
                                                        </div>        
                                                    </div>

                                                     <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="md-form form-sm">
                                                                <i class="fa fa-lock prefix"></i>
                                                                <input type="password" name="confirm_password" id="password" class="form-control validate" required/>
                                                                <label for="confirm_password" data-error="wrong" data-success="right"> Confirm_Password</label>
                                                            </div>
                                                        </div>        
                                                    </div>
                                                    <br/>

                                                             <center>
                                                       <fieldset class="form-group">
                                                  <input type="checkbox" id="checkbox1" name="checkbox" required/>
                                                  <label for="checkbox1"><h5>I Agree To Terms and Conditions</h5></label>
                                                  </fieldset>
                                                  </center> 

                                                    <div class="text-center">
                                                        <button class="btn btn-primary btn-small" type="submit" name="register_button" style="width:150px;">Submit</button>
                                                    
                                                           
                                                    </div>

                                                </div>
                                            </div>  
                                    </form>
                            </div>


                            
                                
                                    <div class="col-md-3 col-xs-12 col-sm-12">
                                    </div>
                              

                </div>
            </div>
                           

    <!--/BEGINING OF USER AND CUSTOMER PHP SCRIPT-->
                    <?php
                    //To check wether the form has been submitted when clicking the register button
                        if(isset($_POST['register_button'])){
                            $name=$_POST['name'];
                            $email=$_POST['email'];
                            $phone_no=$_POST['phone_no'];
                            $state=$_POST['state_id'];
                            $location=$_POST['location_id'];
                            $country=$_POST['country_id'];
                            $password=md5($_POST['password']);
                            $checkbox=$_POST['checkbox'];
                            $confirm_password=md5($_POST['confirm_password']);

                            $com_code = md5(uniqid(rand()));
                            $datetime = date("Y-m-d H:i:s");

                             //To check wehteher the all the FORM field is is NOT EMPTY
                                if(!empty($name) && !empty($email) && !empty($phone_no) &&  !empty($state) && !empty($location) && !empty($country) && !empty($password) && !empty($checkbox) && !empty($confirm_password)){

                                    //To check if the type in email format is correct ornoot
                                   if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $_POST['email'])){

                                        //To check if the two password matches
                                            if($password==$confirm_password){

                                                if(isset($_POST['email'])){
                                                    $query="SELECT * FROM customer WHERE email='$email'";
                                                    $query_run=mysqli_query($mysqli,$query);
                                                    if(mysqli_num_rows($query_run)>0){
                                                        echo "<script>alert('Email Already Exist')</script>";
                                                    }else{

                                                        $query="SELECT * FROM customer WHERE phone_no='$phone_no'";
                                                        $query_run=mysqli_query($mysqli,$query);
                                                        if(mysqli_num_rows($query_run)){
                                                            echo "<script>alert('Phone Number Already Exist')</script>";
                                                        }else{
                                                            $query="INSERT INTO customer(name,email,phone_no,state,location,country,password,datetime) VALUES('$name','$email','$phone_no','$state','$location','$country','$password','$datetime')";
                                                            $query_run=mysqli_query($mysqli,$query);

                                                            if($query_run){
                                                                                 
                                                                 $to = $email;
                                                                $subject = "Confirmation from partyvendors.com.ng to $email";
                                                                
                                                                
                                                                 $message="Thank you for signing up with partyvendors.com.ng. 
                                                                 To provide you the best service possible, we require you to verify your email address. If you are receiving this email and have never signed up with us, please feel free to ignore this email. To finish your verification, please follow the directions below.
                                                                    Please click on the link below or copy and paste it into your browser to proceed with your registration.
                                                                 http://www.partyvendors.com.ng/test/confirm.php?email=$email
                                                                 
                                                                 Best regards,
                                                                 Partyvendors Team
                                                                    
                                                                 ";             

                                                                     $sentmail = mail($to, $subject, $message);

                                                                        if($sentmail == true){
                                                                            echo "<script>alert('Your Confirmation link Has Been Sent To Your Email Address')</script>";

                                                                                           // header("Location:login.php");
                                                                        }else{
                                                                            echo "<script>alert('Cannot send Confirmation link to your e-mail address')</script>";
                                                                         }
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
                            // echo "<script>alert('nothing press')</script>";
                        }
                    ?>
    <!--/END OF USER AND CUSTOMER PHP SCRIPT-->



                    </div>
                </div>          
    <!--/.Mask-->

    <script type="text/javascript">
    $("#select2").change(function() {
      if ($(this).data('options') == undefined) {
        $(this).data('options', $('#select3 option').clone());
      }
      var id = $(this).val();
      var options = $(this).data('options').filter('[data-value=' + id + ']');
      $('#select3').html(options).show();
    });
</script>

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
