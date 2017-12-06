

<?php
    ob_start(); // it is use to cancel any other OUTPUT that might cause HEADER() not to display
    session_start();
    require('configdb.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Partyvendors.com.ng</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/newcategorycss.css">
  
        <link href="datetimepicker/jquery.datetimepicker.css" rel="stylesheet">

          

            <script type="text/javascript" src="js/slider.js"></script>

    <style>

 

        .view {
           /* background: url("https://mdbootstrap.com/images/regular/city/img%20(6).jpg")no-repeat center center fixed;*/
             background: url("img/vediographer301.jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            height: 40%;
        }

      @media (max-width: 568px) {
    .full-bg-img,
    .view {
        height: 200px;
        position: relative;
    }
}

    </style>

</head>

<body>


<!-- Navbar -->
<nav class="navbar navbar-toggleable-md navbar-dark scrolling-navbar fixed-top">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand " href="index.php">
                <h3>PARTYVENDORS</h3>
            </a>
           <div class="collapse navbar-collapse justify-content-end" id="navbarNav1">
                <ul class="nav navbar-nav smooth-scroll">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php"><b>Home</b> <span class="sr-only">(current)</span></a>
                    </li>


                     <li class="nav-item">
                        <a class="nav-link" href=""><b>Event Blog</b></a>
                    </li>

                    <li class="nav-item">
                            <a class="nav-link" href="about_us.php"><b>About us</b></a>
                        </li>

                    
                     <li class="nav-item">
                      <a class="nav-link"><b style="font-size: 18px;"><?php if(isset($_SESSION['email'])){
                            echo $_SESSION['email'];
                            echo '<li>
                                    <form action="jere-bornovediographer.php" method="POST" role="form">
                                        <button type="submit" name="logoutcat" class="btn btn-primary btn-small" style="width:150px;">logout</button>
                                    </form>
                                </li>';
                                if(isset($_POST['logoutcat'])){
                                        session_destroy();
                                        header("location:jere-bornovediographer.php");
       
                                }else{
                                    
                                }
                            
                      }else{
                        echo '<li><a href="signupone2.php" class="btn btn-primary">Become A Vendor</a></li>
                                <li><a href="signupone.php" class="btn btn-primary">Become A User</a><a href="login.php" class="btn btn-default">Login</a></li>';
                      }?></b></a>

                              
                    </li>
                    

                   
                </ul>
            </div>
        </div>
    </nav>    

    
    <!--Mask-->
    <div class="view hm-black-strong">
        <div class="full-bg-img flex-center">
            <div class="container">
                <div class="row">

                   <!--First column-->

                <div class="col-md-12 col-sm-12 col-xs-12">
                            
                                <center>   
                                    <h3 style="color:white; font-weight: bold; margin-top: 20px;">We have amazing Videographers in Jere Borno State for your event.</h3>
                                    
                                </center>
                                


                </div>
    <!--/Second column-->

                </div>
            </div>
        </div>
    </div>
    <!--/.Mask-->

          <br/><br/>
         



<center>   
                                    <h3 style=" font-weight: bold; ">Jere Borno State Videographers.</h3>
                                    
                                </center>

 <div class="container-fluid">
    <form role="form" action="jere-bornovediographer.php" method="POST">
  <div class="row">
        <div class="col-md-3">
             <center><h4 style=" font-weight: bold; ">Place Your Advert Here</h4></center>
            <div class="row">
                <div class="col-md-12">
                    <div>
                        
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 30px;">
                <div class="col-md-12">
                    <div>
                       
                    </div>
                </div>
            </div>
        </div>


       <div class="col-md-9">
 
             <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">


                        <div class="col-md-4 col-xs-12 col-sm-12">
                                 <?php
                                $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 0,1";
                                $result=mysqli_query($mysqli,$query);
                                while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>
                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                            <input type="button" value="View Details" class="inputstyle"  id="toggle_message">   

                                            <h6 id="message" class="dropdown"><br/>
                                            <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                <hr/>

                                            <button type="submit" name="booking" >Book us</button>
                                        </center>
                                    </div>
                               
                                        <?php

                                    }
                                    ?>
                        </div>
                       




                        <div class="col-md-4 col-xs-12 col-sm-12">

                            <?php
                                $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 1,1";
                                $result=mysqli_query($mysqli,$query);
                                 while($row=mysqli_fetch_array($result)){
                                                                    
                            ?>
                                <div class="post" >
                                    
                                    <center> <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center></center>


                                     <center>
                                                                                   
                                        <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                            <input type="button" value="View Details" class="inputstyle"  id="toggle_bus">   

                                            <h6 id="messa" class="dropdown"><br/>
                                            <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                <hr/>

                                                <button type="submit" name="booking" >Book us</button>

                                                </h6>
                                        </center>
                                </div>

                                 <?php

                            }
                            ?>
                        </div>




                        <div class="col-md-4 col-xs-12 col-sm-12">
                             <?php
                                $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State'limit 2,1";
                                $result=mysqli_query($mysqli,$query);
                                while($row=mysqli_fetch_array($result)){
                                                                    
                            ?>

                                 <div class="post">
                                        <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>


                                       <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy">   

                                                <h6 id="mess" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                </h6>
                                        </center>
                                    </div>
                            <?php

                            }
                            ?>
                                   
                        </div>




                         <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                               <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 3,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>
                                        

                                            <center>              
                                                <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                    <input type="button" value="View Details" class="inputstyle"  id="toggle_message1">   

                                                    <h6 id="message1" class="dropdown"><br/>
                                                        <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                            <hr/>

                                                            <button type="submit" name="booking" >Book us</button>

                                                            </h6>
                                            </center>
                                    </div>
                                <?php

                                }
                                ?>
                        </div>




                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                                 <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 4,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>
                                            <center>
                                                                                   
                                                <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> </p>

                                                    <input type="button" value="View Details" class="inputstyle"  id="toggle_message2">   

                                                    <h6 id="message2" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                            </center>
                                    </div>
                               <?php

                                }
                                ?>
                        </div>





                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                                <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 5,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                          <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>
                                            <center>
                                                                                   
                                                <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span>  </p>
                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bus1">   

                                                <h6 id="messa1" class="dropdown"><br/>
                                                <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                    <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                    <hr/>

                                                    <button type="submit" name="booking" >Book us</button>

                                                    </h6>
                                            </center>
                                    </div>
                                <?php

                                }
                                ?>
                        </div>


                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">


                        <div class="col-md-4 col-xs-12 col-sm-12">
                              <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 6,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy1">   

                                                <h6 id="mess1" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>



                        <div class="col-md-4 col-xs-12 col-sm-12">
                             <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 7,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bus2">   

                                                <h6 id="messa2" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>



                        <div class="col-md-4 col-xs-12 col-sm-12">
                             <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 8,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy2">   

                                                <h6 id="mess2" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                         <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                             <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 9,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_message3">   

                                                <h6 id="message3" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 10,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bus3">   

                                                <h6 id="messa3" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>



                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                           <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 11,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy3">   

                                                <h6 id="mess3" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>


                    </div>

                </div>
            </div>



            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">

                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 12,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_message4">   

                                                <h6 id="message4" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>



                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 13,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bus4">   

                                                <h6 id="messa4" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>



                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 14,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy4">   

                                                <h6 id="mess4" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>



                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 15,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_message5">   

                                                <h6 id="message5" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 16,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bus5">   

                                                <h6 id="messa5" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 17,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy5">   

                                                <h6 id="mess5" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">


                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 18,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_message6">   

                                                <h6 id="message6" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                        <div class="col-md-4 col-xs-12 col-sm-12">
                           <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 19,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bus6">   

                                                <h6 id="messa6" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 20,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy6">   

                                                <h6 id="mess6" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>



                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                           <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 21,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_message7">   

                                                <h6 id="message7" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 22,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bus7">   

                                                <h6 id="messa7" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>



                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 23,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy7">   

                                                <h6 id="mess7" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">


                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 24,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_message8">   

                                                <h6 id="message8" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                        <div class="col-md-4 col-xs-12 col-sm-12">
                           <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 25,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bus8">   

                                                <h6 id="messa8" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 26,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy9">   

                                                <h6 id="mess9" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>



                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                           <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 27,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_message10">   

                                                <h6 id="message10" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 28,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bus10">   

                                                <h6 id="messa10" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>



                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 29,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy10">   

                                                <h6 id="mess10" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">


                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 30,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_message9">   

                                                <h6 id="message9" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                        <div class="col-md-4 col-xs-12 col-sm-12">
                           <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 31,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bus9">   

                                                <h6 id="messa9" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 32,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy10">   

                                                <h6 id="mess10" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>



                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                           <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 33,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_message11">   

                                                <h6 id="message11" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 34,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bus11">   

                                                <h6 id="messa11" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>



                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name,state FROM service WHERE location='Jere Borno' AND service_name='Videographer' AND state='Borno-State' limit 35,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <center><img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide"></center>

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy11">   

                                                <h6 id="mess11" class="dropdown"><br/>
                                                    <p>Price: #<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="booking" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                    </div>
                </div>
            </div>

            



           
           
        </div> 
    </form>
    <div class="pagination"></div>
    </div>
</div>


 
  <?php include("footer.php");?>


    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
        
        <script type="text/javascript" src="js/custom.js"></script>
        <script type="text/javascript" src="js/pagina.js"></script>

    <script type="text/javascript" src="js/jquery.js"></script>

    <script type="text/javascript" src="js/toggle.js"></script>
                                <script type="text/javascript" src="js/toggle2.js"></script>


    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script type="text/javascript" src="js/dropdown.js"></script>


            


    

                    <script src="datetimepicker/jquery.datetimepicker.full.js"></script>
        <script>
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
</body>

</html>










