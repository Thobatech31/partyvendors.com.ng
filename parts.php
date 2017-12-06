$message = "Please click the link below to verify and activate your account. rn";
                                                                $message .= "http://www.partyvendors.com.ng/test/confirm.php?passkey=$com_code"; 

                                                       <p"><b style="font-size: 16px;">Are you Registered with the Corporate Affairs Commission (CAC)?</b> <br/>registered vendor have the best chance of being hire</p>
                                                         

#partner{
    height: 150px;
    width: auto;
}

<div class="col-md-12">
                   
                         <?php
                                $query="SELECT advert_image,category,state FROM advert WHERE location='Agege Lagos' AND category='Photographer' AND state='Lagos State' limit 0,1";
                                $result=mysqli_query($mysqli,$query);
                                while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div>
                                         <center><img class="img-fluid" src="img/<?php echo $row["advert_image"]; ?>" id="advertisement_image"  alt="First slide"></center>
                                        
                                    </div>
                               
                                        <?php

                                    }
                                    ?>
                    
                </div>

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
    <title>Partyvendor</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">
  
        <link href="datetimepicker/jquery.datetimepicker.css" rel="stylesheet">

          <script type="text/javascript" src="css/style.css"></script>

            <script type="text/javascript" src="js/slider.js"></script>

    <style>

 

        .view {
           /* background: url("https://mdbootstrap.com/images/regular/city/img%20(6).jpg")no-repeat center center fixed;*/
             background: url("img/pv.jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            height: 40%;
        }


        .dropdown{
            display:none; 
            border:2px solid aliceblue; 
            border-radius: 7px; 
            margin-left: -10px;
        }

        .rating{
            margin-top: 15px;
        }

        .card-text{
            margin-top: 15px;
        }

   #containerimage{
    height:220px;
   }


.pagination li{
    list-style: none;
    float: left;
    width: 30px;
    height: 30px;
    border:1px solid white;
    background-color: blue;
    color:white;
    text-align: center;
    cursor:pointer;

}

.pagination{
    margin-left: 30%;
   
 
}

.pagination ul{
    border:0px;
    padding:0px;

}

.pagination li:hover{
    background-color: white;
    border:1px solid black;
    color: black;
}

.containersimage{
    height: auto;
    width:331px;
    bor

}

#line2{
    margin-top: 5px;
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
                            <a class="nav-link" href="#testimonials"><b>About us</b></a>
                        </li>

                    
                        <li><a target="_blank" href="signupone2.php" class="btn btn-primary">Become A Vendor</a></li>
                        <li><a target="_blank" href="signupone.php" class="btn btn-primary">Become A User</a></li>
                        <li><a target="_blank" href="login.php" class="btn btn-default">Login</a></li>
                    

                   
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
                                    <h3 style="color:white; font-weight: bold;">We have amazing Photographers in Agege Lagos for your event.</h3>
                                    
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
                                    <h3 style=" font-weight: bold; ">Agege Lagos state Photographers.</h3>
                                    
                                </center>

 <div class="container-fluid">
  <div class="row">
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12">
                    <div style="border:1px solid black;">
                        <h2>advertisement</h2>
                        <p>adverticement</p>
                        <p>adverticement</p>
                        <p>adverticement</p>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 10px;">
                <div class="col-md-12">
                    <div style="border:1px solid black;">
                        <h2>advertisement</h2>
                        <p>adverticement</p>
                        <p>adverticement</p>
                        <p>adverticement</p>
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
                                $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 0,1";
                                $result=mysqli_query($mysqli,$query);
                                while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">
                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                            <input type="button" value="View Details" class="inputstyle"  id="toggle_message">   

                                            <h6 id="message" class="dropdown"><br/>
                                            <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                <hr/>

                                            <button type="submit" name="option"></h6>
                                        </center>
                                    </div>
                               
                                        <?php

                                    }
                                    ?>
                        </div>
                       




                        <div class="col-md-4 col-xs-12 col-sm-12">

                            <?php
                                $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 1,1";
                                $result=mysqli_query($mysqli,$query);
                                 while($row=mysqli_fetch_array($result)){
                                                                    
                            ?>
                                <div class="post">
                                    <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">



                                     <center>
                                                                                   
                                        <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                            <input type="button" value="View Details" class="inputstyle"  id="toggle_bus">   

                                            <h6 id="messa" class="dropdown"><br/>
                                            <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                <hr/>

                                                <button type="submit" name="options" >Book us</button>

                                                </h6>
                                        </center>
                                </div>

                                 <?php

                            }
                            ?>
                        </div>




                        <div class="col-md-4 col-xs-12 col-sm-12">
                             <?php
                                $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer'limit 2,1";
                                $result=mysqli_query($mysqli,$query);
                                while($row=mysqli_fetch_array($result)){
                                                                    
                            ?>

                                 <div class="post">
                                       <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">


                                       <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy">   

                                                <h6 id="mess" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                </h6>
                                        </center>
                                    </div>
                            <?php

                            }
                            ?>
                                   
                        </div>




                         <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                               <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 3,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">
                                        

                                            <center>              
                                                <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                    <input type="button" value="View Details" class="inputstyle"  id="toggle_message1">   

                                                    <h6 id="message1" class="dropdown"><br/>
                                                        <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                            <hr/>

                                                            <button type="submit" name="options" >Book us</button>

                                                            </h6>
                                            </center>
                                    </div>
                                <?php

                                }
                                ?>
                        </div>




                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                                 <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 4,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">
                                            <center>
                                                                                   
                                                <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> </p>

                                                    <input type="button" value="View Details" class="inputstyle"  id="toggle_message2">   

                                                    <h6 id="message2" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                            </center>
                                    </div>
                               <?php

                                }
                                ?>
                        </div>





                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                                <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 5,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                         <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">
                                            <center>
                                                                                   
                                                <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span>  </p>
                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bus1">   

                                                <h6 id="messa1" class="dropdown"><br/>
                                                <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                    <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                    <hr/>

                                                    <button type="submit" name="options" >Book us</button>

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
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 0,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy1">   

                                                <h6 id="mess1" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>



                        <div class="col-md-4 col-xs-12 col-sm-12">
                             <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 1,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bus2">   

                                                <h6 id="messa2" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>



                        <div class="col-md-4 col-xs-12 col-sm-12">
                             <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 2,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy2">   

                                                <h6 id="mess2" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                         <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                             <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 3,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_message3">   

                                                <h6 id="message3" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 4,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bus3">   

                                                <h6 id="messa3" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>



                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                           <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 5,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy3">   

                                                <h6 id="mess3" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

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
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 0,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_message4">   

                                                <h6 id="message4" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>



                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 1,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bus4">   

                                                <h6 id="messa4" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>



                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 2,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy4">   

                                                <h6 id="mess4" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>



                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 3,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_message5">   

                                                <h6 id="message5" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 4,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bus5">   

                                                <h6 id="messa5" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 5,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy5">   

                                                <h6 id="mess5" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

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
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 0,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_message6">   

                                                <h6 id="message6" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                        <div class="col-md-4 col-xs-12 col-sm-12">
                           <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 1,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bus6">   

                                                <h6 id="messa6" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 2,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy6">   

                                                <h6 id="mess6" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>



                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                           <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 3,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_message7">   

                                                <h6 id="message7" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 4,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bus7">   

                                                <h6 id="messa7" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>



                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 5,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy7">   

                                                <h6 id="mess7" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

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
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 0,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_message8">   

                                                <h6 id="message8" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                        <div class="col-md-4 col-xs-12 col-sm-12">
                           <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 1,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bus8">   

                                                <h6 id="messa8" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 2,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy9">   

                                                <h6 id="mess9" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>



                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                           <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 3,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_message10">   

                                                <h6 id="message10" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>


                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 4,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bus10">   

                                                <h6 id="messa10" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                        </center>

                                    </div>
                             <?php

                                }
                                ?>
                        </div>



                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <?php
                                    $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 5,1";
                                    $result=mysqli_query($mysqli,$query);
                                    while($row=mysqli_fetch_array($result)){
                                                                    
                                ?>
                                    <div class="post">
                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">

                                        <center>
                                                                                   
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy10">   

                                                <h6 id="mess10" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                                                        
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                                                       
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

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
    <div class="pagination"></div>
    </div>
</div>


       
          
<br/>
              
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                         <div style="border:1px solid black;">
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                
                             </div>
                        </div>

                          <div class="col-md-4 col-sm-12 col-xs-12">
                           <div style="border:1px solid black;">
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                
                             </div>
                        </div>

                          <div class="col-md-4 col-sm-12 col-xs-12">
                            <div style="border:1px solid black;">
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                
                             </div>
                        </div>

                          
                    </div>
                </div>               

<br/><br/><br/>        
              <center>
                    <h2 class="h2-responsive wow fadeInDown" style="font-weight: bold;">Vendors by key Location</h2>
                </center>
                <br/>
        <div class="container-fluid">
        <div class="row" style="text-align: center;">
            <div class="col-md-2 col-sm-3 col-xs-3">
                <a href="#"> <h6>Abia Nigeria</h6></a>
            </div>
            

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Adamawa Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Anambra Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Akwa Ibom Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Bauchi Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Bayelsa Nigeria</h6></a>
            </div>
        </div>

    <hr/>



        <div class="row" style="text-align: center;">

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Benue Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Borno Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Cross River Nigeria</h6></a>
            </div>
            

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Delta Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Ebonyi Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Edo Nigeria</h6></a>
            </div>
        </div>

    <hr/>
        <div class="row" style="text-align: center;">
            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Enugu Nigeria</h6></a>
            </div>
            

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Gombe Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Imo Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Jigawa Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Kaduna Nigeria</h6></a>
            </div>
            

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>F.C.T Nigeria</h6></a>
            </div>
        </div>

        <hr/>



        <div class="row" style="text-align: center;">

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Kano Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Katsina Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Kebbi Nigeria</h6></a>
            </div>
            

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Kogi Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Kwara Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Lagos Nigeria</h6></a>
            </div>
        </div>

    <hr/>
        <div class="row" style="text-align: center;">
            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Nassarawa Nigeria</h6></a>
            </div>
            

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Niger Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Ogun Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Ondo Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Osun Nigeria</h6></a>
            </div>
            

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Oyo Nigeria</h6></a>
            </div>
        </div>


    <hr/>
        <div class="row" style="text-align: center;">
            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Plateau Nigeria</h6></a>
            </div>
            

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Rivers Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Sokoto Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Taraba Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Yobe Nigeria</h6></a>
            </div>
            

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Zamfara Nigeria</h6></a>
            </div>
        </div>
    </div>   


                  <br/><br/>
                <center>
                    <h2 class="h2-responsive wow fadeInDown" style="font-weight: bold;">Our Partners</h2>
                </center>
                <br/>

                <!--Section: Contact-->
                <section id="contact">
                   <div class="container">
                        <div class="row" style="text-align: center;">
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                    <img src="img/agitator.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/agitator1.jpg'" onmouseout="this.src='img/agitator.jpg'">
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                    <img src="img/microsoft.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/microsoft1.jpg'" onmouseout="this.src='img/microsoft.jpg'">
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                    <img src="img/siso.jpg" class="img-thumbnail" id="partner" onmouseout="this.src='img/siso.jpg'" onmouseover="this.src='img/siso1.jpg'">
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                    <img src="img/oracle.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/oracle1.jpg'" onmouseout="this.src='img/oracle.jpg'">
                                </div>

                                 <div class="col-md-2 col-sm-12 col-xs-12">
                                    <img src="img/huawei.jpg" class="img-thumbnail" id="partner" onmouseout="this.src='img/huawei1.jpg'" onmouseover="this.src='img/siso1.jpg'">
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                    <img src="img/ibm.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/ibm1.jpg'" onmouseout="this.src='img/oracle.jpg'">
                                </div>
                        </div>
                   </div>

                    <br/>

                 
                </section>
                <!--Section: Contact-->

         
            <!--/Main container-->


    
  
            <!--Footer-->
        <footer class="page-footer center-on-small-only">

            <!--Footer Links-->
            <div class="container-fluid">
                             <h3 id="stay">Stay Connected</h3>
                            <h5 id="stay">Stay with us || Connect with us || Help and Support</h5>
                <hr/>
                <div class="row">

                    <!--First column-->
                    <div class="col-md-3 offset-md-1">
                        <h5 class="title">Partyvendors Event Solutions</h5>
                        <li><a target="_blank" href="terms_conditions.php" class="btn btn-primary">Terms and Conditions</a></li>
                        
                        
                    </div>
                    <!--/.First column-->

                    <hr class="hidden-md-up">

                    <!--Second column-->
                    <div class="col-md-2 offset-md-1">
                        <h5 class="title">Get Started</h5>
                        <ul>
                            <li><a href="#!">Features</a></li>
                            <li><a href="#!">How it works</a></li>
                        </ul>
                    </div>
                    <!--/.Second column-->





                    <hr class="hidden-md-up">

                    <!--Third column-->
                    <div class="col-md-2">
                        <h5 class="title">Company</h5>
                        <ul>
                            <li><a href="#!"></a>Security</li>
                            <li><a href="#!"></a>Tell Us</li>
                        </ul>
                    </div>
                    <!--/.Third column-->

                    <hr class="hidden-md-up">

                    <!--Fourth column-->
                    <div class="col-md-2">
                        <h5 class="title">Support</h5>
                        <ul>
                            <li><a href="#!">Call Us</a></li>
                            <li><a href="#!">Help Center</a></li>
                        </ul>
                    </div>
                    <!--/.Fourth column-->

                </div>
            </div>
            <!--/.Footer Links-->

            <hr>

            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <center><h4>Office Address</h4></center>
                        <p>No 18 Kayode Anifowoshe River Vally Estate Ojodu Berger, Lagos State</p>
                    </div>

                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <h4>Email Address</h4>
                        <p>solaamusan@gmail.com</p>
                    </div>
                

                    <div class="col-md-3 col-sm-12 col-xs-12">

                        <h4>Phone Number</h4>
                        <p>08132157517 , 08068997372</p>
                    </div>
                </div>
            </div>

            

            <!--Copyright-->
            <div class="footer-copyright">
                <div class="container-fluid">
                    © 2017 Copyright: <a href="https://mdbootstrap.com"> partyvendors.com.ng </a>

                </div>
            </div>
            <!--/.Copyright-->

        </footer>
        <!--/.Footer-->



  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/59ef639ec28eca75e4627e99/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->




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













//echo "<pre>";
var_dump($a);exit;

foreach ($a as $valu) {
    foreach ($valu as $key => $value) {       
    echo '<img src="img/' .$value['service_image']. '"><br>' ;
}
}

//echo "<pre>";
//var_dump($a);exit;

foreach ($a as $key => $value) {
    //print_r($value);
    echo '<img src="img/' .$value[0]['service_image']. '"><br>' ;
    echo '<img src="img/' .$value[1]['service_image']. '"><br>' ;
    echo '<img src="img/' .$value[2]['service_image']. '"><br>' ;
}

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
    <title>Partyvendor</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">

     <script type="text/javascript" src="js/slider.js"></script>
  
        <link href="datetimepicker/jquery.datetimepicker.css" rel="stylesheet">

    <style>

        .view {
           /* background: url("https://mdbootstrap.com/images/regular/city/img%20(6).jpg")no-repeat center center fixed;*/
             background: url("img/wedcatering3.jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            height: 40%;
        }


        .dropdown{
            display:none; 
            border:2px solid aliceblue; 
            border-radius: 7px; 
            margin-left: -10px;
        }

        .rating{
            margin-top: 15px;
        }

        .card-text{
            margin-top: 15px;
        }

   #containerimage{
    height:220px;
   }


.pagination li{
    list-style: none;
    float: left;
    width: 20px;
    height: 20px;
    border:1px solid white;
    background-color: blue;
    color:white;
    text-align: center;
    cursor:pointer;

}

.pagination ul{
    border:0px;
    padding:0px;
}

.pagination li:hover{
    background-color: white;
    border:1px solid black;
    color: black;
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
            <a class="navbar-brand" href="index.php">
                <h2>PARTYVENDOR</h2>
            </a>
           <div class="collapse navbar-collapse justify-content-end" id="navbarNav1">
                <ul class="nav navbar-nav smooth-scroll">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php"><b>Home</b> <span class="sr-only">(current)</span></a>
                    </li>
           
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#best-features"><b>Blog</b></a>
                    </li>


                     <li class="nav-item">
                        <a class="nav-link" href="#testimonials"><b>Why us</b></a>
                    </li>

                    <li class="nav-item">
                            <a class="nav-link" href="#testimonials"><b>About us</b></a>
                        </li>


                     <li class="dropdown" id="dropdown"> 
                             <a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Find vendors <span class="caret"></span></b> </a> 
                             <ul class="dropdown-menu"> 

                                 <div id="wrapper">
                                    <table>         
                                        <tr>
                                            <td><p class="dropdownoptions">
                                                    <strong>RENTALS AND SHOPS </strong>
                                                    <a href="#">Venue </a>
                                                    <a>Favours + Gifts</a>
                                                    <a>Photobooth</a>
                                                    <a>Service + Security</a>
                                                    <a>Transportation</a>
                                                    <a>Invitation + Print</a>
                                                    <a>Cakes + Confectionaries</a>
                                                    <a>Attire + Aso Ebi</a>
                                                    <a>See More</a>
                                                </p>
                                            </td>
                                    
                                            <td><p class="dropdownoptions">
                                                    <strong>SERVICE PROVIDED </strong> 
                                                    <a href="photogra.php">Photographer </a>
                                                    <a href="vediographer.php">Vediographer</a>
                                                    <a>Decorators</a>
                                                    <a href="photographers.php">photographers</a>
                                                    <a>Chocolatiers</a>
                                                    <a>Wedding MC</a>
                                                    <a href="eventplanner.php">Planners</a>
                                                    <a href="tuxedos.php">Tuxedos</a>
                                                    <a>See More</a>
                                                </p>
                                            </td>
                        

                                            <td><p class="dropdownoptions">
                                                <strong>ENTERTAINMENT </strong>
                                                <a href="#">Djs </a>
                                                    <a>Guitarist</a>
                                                    <a>Mc</a>
                                                    <a>Pianoist</a>
                                                    <a>Guitarist</a>
                                                    <a href="artist.php">Artist</a>
                                                    <a>Musician + Bands</a>
                                
                                                    <a>See More</a>
                                                </p></td>
                        
                                        </tr>
                   
                                    </table>
                                </div>
                              </ul>
                     </li>  

                        
                
                    

                    
                     <li><a href="signupone.php" target="_blank"  class="btn btn-primary">Sign Up</a></li>
                        <li><a target="_blank" href="login.php" class="btn btn-default">Login</a></li>
                    

                   
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
                                    <h3 style="color:white; font-weight: bold;">We have amazing caterers in Agege Lagos for your event.</h3>
                                    
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
                                    <h3 style=" font-weight: bold;">Agege Lagos state Caterers.</h3>
                                    
                                </center>

        <div class="container-fluid">
                 
            <div class="row">


                <div class="col-md-3 col-sm-12">

                        <div style="border:1px solid black;">
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                             </div>
                         
                    </div>

                    <div class="col-md-1 col-sm-12">
                         
                    </div>

                 
                <div class="col-md-8 col-sm-12">
                    <div class="post">
                        <div class="row">
                       

                            <?php
                                $query="SELECT service_image,service_name,service_price,service_description FROM service WHERE location='Agege Lagos' limit 0,1";
                                $result=mysqli_query($mysqli,$query);
                                while($row=mysqli_fetch_array($result)){
                                        
                            ?>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <!--Carousel Wrapper--><br/>
                                <div id="carousel-example-2"  class="carousel slide carousel-fade no-flex wow fadeIn" data-pause="4.5s" data-ride="carousel">
                                    <!--Indicators-->
                                    
                                    <!--/.Indicators-->

                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="img-fluid" src="img/<?php echo $row["service_image"]; ?>" id="containerimage"  alt="First slide">
                                            <div class="carousel-caption">

                                            </div>

                                            <br/>

                                         <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message">   </p>

                                              <h6 id="message" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>

                                        </div>


                                        <div class="carousel-item">
                                            <img class="img-fluid" src="img/chair1.jpg" id="containerimage" alt="Second slide">
                                            <div class="carousel-caption">
                                             
                                                
                                            </div>

                                             <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message">   </p>

                                              <h6 id="message" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>
                                        </div>


                                        <div class="carousel-item">
                                            <img class="img-fluid" src="img/chair1.jpg" id="containerimage" alt="Third slide">
                                            <div class="carousel-caption">
                                              
                                            </div>

                                             <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message">   </p>

                                              <h6 id="message" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>
                                        </div>

                                          <div class="carousel-item">
                                            <img class="img-fluid" src="img/chair1.jpg" id="containerimage" alt="Second slide">
                                            <div class="carousel-caption">
                                             
                                            </div>

                                             <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message">   </p>

                                              <h6 id="message" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="img/chair1.jpg" id="containerimage" alt="Third slide">
                                            <div class="carousel-caption">
                                               
                                               
                                            </div>

                                             <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message">   </p>

                                              <h6 id="message" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>
                                        </div>
                                    </div>
                                    <!--/.Slides-->

                                    <!--Controls-->
                                    <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev">
                                        <span class="icon-prev" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next">
                                        <span class="icon-next" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <!--/.Controls-->

                                       <?php

            }
            ?>
                                </div>
                                <!--/.Carousel Wrapper-->
                            </div>


                            


                            <?php
                                $query="SELECT service_image,service_name,service_price,service_description FROM service WHERE location='Agege Lagos' limit 1,1";
                                $result=mysqli_query($mysqli,$query);
                                while($row=mysqli_fetch_array($result)){
                                        
                            ?>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <!--Carousel Wrapper--><br/>
                                <div id="carousel-example-2"  class="carousel slide carousel-fade no-flex wow fadeIn" data-pause="4.5s" data-ride="carousel">
                                    <!--Indicators-->
                                    
                                    <!--/.Indicators-->

                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="img-fluid" src="img/<?php echo $row["service_image"]; ?>" id="containerimage"  alt="First slide">
                                            <div class="carousel-caption">

                                            </div>

                                            <br/>

                                         <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message1">   </p>

                                              <h6 id="message1" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>

                                        </div>


                                        <div class="carousel-item">
                                            <img class="img-fluid" src="img/chair1.jpg" id="containerimage" alt="Second slide">
                                            <div class="carousel-caption">
                                             
                                            </div>

                                               <br/>

                                         <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message1">   </p>

                                              <h6 id="message1" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="img/chair1.jpg" id="containerimage" alt="Third slide">
                                            <div class="carousel-caption">
                                              
                                            </div>

                                               <br/>

                                         <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message1">   </p>

                                              <h6 id="message1" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>
                                        </div>

                                          <div class="carousel-item">
                                            <img class="img-fluid" src="img/chair1.jpg" id="containerimage" alt="Second slide">
                                            <div class="carousel-caption">
                                             
                                            </div>

                                               <br/>

                                         <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message1">   </p>

                                              <h6 id="message1" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="img/chair1.jpg" id="containerimage" alt="Third slide">
                                            <div class="carousel-caption">
                                               
                                                
                                            </div>

                                               <br/>

                                         <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message1">   </p>

                                              <h6 id="message1" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>
                                        </div>
                                    </div>
                                    <!--/.Slides-->

                                    <!--Controls-->
                                    <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev">
                                        <span class="icon-prev" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next">
                                        <span class="icon-next" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <!--/.Controls-->

                                       <?php

            }
            ?>
                                </div>
                                <!--/.Carousel Wrapper-->
                            </div>

                          

                          <?php
                                $query="SELECT service_image,service_name,service_price,service_description FROM service WHERE location='Agege Lagos' limit 2,1";
                                $result=mysqli_query($mysqli,$query);
                                while($row=mysqli_fetch_array($result)){
                                        
                            ?>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <!--Carousel Wrapper--><br/>
                                <div id="carousel-example-2"  class="carousel slide carousel-fade no-flex wow fadeIn" data-pause="4.5s" data-ride="carousel">
                                    <!--Indicators-->
                                    
                                    <!--/.Indicators-->

                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="img-fluid" src="img/<?php echo $row["service_image"]; ?>" id="containerimage"  alt="First slide">
                                            <div class="carousel-caption">

                                            </div>

                                            <br/>

                                         <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message2">   </p>

                                              <h6 id="message2" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>

                                        </div>


                                        <div class="carousel-item">
                                            <img class="img-fluid" src="img/chair1.jpg" id="containerimage" alt="Second slide">
                                            <div class="carousel-caption">
                                             
                                            </div>

                                             <br/>

                                         <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message2">   </p>

                                              <h6 id="message2" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>

                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="img/chair1.jpg" id="containerimage" alt="Third slide">
                                            <div class="carousel-caption">
                                               
                                            </div>

                                             <br/>

                                         <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message2">   </p>

                                              <h6 id="message2" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>

                                        </div>

                                          <div class="carousel-item">
                                            <img class="img-fluid" src="img/chair1.jpg" id="containerimage" alt="Second slide">
                                            <div class="carousel-caption">
                                             
                                            </div>

                                             <br/>

                                         <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message2">   </p>

                                              <h6 id="message2" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>

                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="img/chair1.jpg" id="containerimage" alt="Third slide">
                                            <div class="carousel-caption">
                                               
                                            </div>

                                             <br/>

                                         <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message2">   </p>

                                              <h6 id="message2" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>

                                        </div>
                                    </div>
                                    <!--/.Slides-->

                                    <!--Controls-->
                                    <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev">
                                        <span class="icon-prev" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next">
                                        <span class="icon-next" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <!--/.Controls-->

                                       <?php

            }
            ?>
                                </div>
                                <!--/.Carousel Wrapper-->
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--/Second column-->
            </div>
        </div>



<br/><br/><br/>

 <div class="container-fluid">

            <div class="row">


                <div class="col-md-3 col-sm-12">

                        <div style="border:1px solid black;">
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                             </div>
                         
                    </div>

                    <div class="col-md-1 col-sm-12">
                         
                    </div>


                
                <div class="col-md-8 col-sm-12">
                     <div class="post">
                        <div class="row">
                       

                            <?php
                                $query="SELECT service_image,service_name,service_price,service_description FROM service WHERE location='Agege Lagos' limit 0,1";
                                $result=mysqli_query($mysqli,$query);
                                while($row=mysqli_fetch_array($result)){
                                        
                            ?>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <!--Carousel Wrapper--><br/>
                                <div id="carousel-example-2"  class="carousel slide carousel-fade no-flex wow fadeIn" data-pause="4.5s" data-ride="carousel">
                                    <!--Indicators-->
                                    
                                    <!--/.Indicators-->

                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="img-fluid" src="img/<?php echo $row["service_image"]; ?>" id="containerimage"  alt="First slide">
                                            <div class="carousel-caption">

                                            </div>

                                            <br/>

                                         <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message">   </p>

                                              <h6 id="message" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>

                                        </div>


                                        <div class="carousel-item">
                                            <img class="img-fluid" src="img/chair1.jpg" id="containerimage" alt="Second slide">
                                            <div class="carousel-caption">
                                             
                                                
                                            </div>

                                             <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message">   </p>

                                              <h6 id="message" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>
                                        </div>


                                        <div class="carousel-item">
                                            <img class="img-fluid" src="img/chair1.jpg" id="containerimage" alt="Third slide">
                                            <div class="carousel-caption">
                                              
                                            </div>

                                             <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message">   </p>

                                              <h6 id="message" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>
                                        </div>

                                          <div class="carousel-item">
                                            <img class="img-fluid" src="img/chair1.jpg" id="containerimage" alt="Second slide">
                                            <div class="carousel-caption">
                                             
                                            </div>

                                             <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message">   </p>

                                              <h6 id="message" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="img/chair1.jpg" id="containerimage" alt="Third slide">
                                            <div class="carousel-caption">
                                               
                                               
                                            </div>

                                             <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message">   </p>

                                              <h6 id="message" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>
                                        </div>
                                    </div>
                                    <!--/.Slides-->

                                    <!--Controls-->
                                    <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev">
                                        <span class="icon-prev" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next">
                                        <span class="icon-next" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <!--/.Controls-->

                                       <?php

            }
            ?>
                                </div>
                                <!--/.Carousel Wrapper-->
                            </div>


                            


                            <?php
                                $query="SELECT service_image,service_name,service_price,service_description FROM service WHERE location='Agege Lagos' limit 1,1";
                                $result=mysqli_query($mysqli,$query);
                                while($row=mysqli_fetch_array($result)){
                                        
                            ?>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <!--Carousel Wrapper--><br/>
                                <div id="carousel-example-2"  class="carousel slide carousel-fade no-flex wow fadeIn" data-pause="4.5s" data-ride="carousel">
                                    <!--Indicators-->
                                    
                                    <!--/.Indicators-->

                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="img-fluid" src="img/<?php echo $row["service_image"]; ?>" id="containerimage"  alt="First slide">
                                            <div class="carousel-caption">

                                            </div>

                                            <br/>

                                         <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message1">   </p>

                                              <h6 id="message1" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>

                                        </div>


                                        <div class="carousel-item">
                                            <img class="img-fluid" src="img/chair1.jpg" id="containerimage" alt="Second slide">
                                            <div class="carousel-caption">
                                             
                                            </div>

                                               <br/>

                                         <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message1">   </p>

                                              <h6 id="message1" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="img/chair1.jpg" id="containerimage" alt="Third slide">
                                            <div class="carousel-caption">
                                              
                                            </div>

                                               <br/>

                                         <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message1">   </p>

                                              <h6 id="message1" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>
                                        </div>

                                          <div class="carousel-item">
                                            <img class="img-fluid" src="img/chair1.jpg" id="containerimage" alt="Second slide">
                                            <div class="carousel-caption">
                                             
                                            </div>

                                               <br/>

                                         <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message1">   </p>

                                              <h6 id="message1" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="img/chair1.jpg" id="containerimage" alt="Third slide">
                                            <div class="carousel-caption">
                                               
                                                
                                            </div>

                                               <br/>

                                         <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message1">   </p>

                                              <h6 id="message1" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>
                                        </div>
                                    </div>
                                    <!--/.Slides-->

                                    <!--Controls-->
                                    <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev">
                                        <span class="icon-prev" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next">
                                        <span class="icon-next" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <!--/.Controls-->

                                       <?php

            }
            ?>
                                </div>
                                <!--/.Carousel Wrapper-->
                            </div>

                          

                          <?php
                                $query="SELECT service_image,service_name,service_price,service_description FROM service WHERE location='Agege Lagos' limit 2,1";
                                $result=mysqli_query($mysqli,$query);
                                while($row=mysqli_fetch_array($result)){
                                        
                            ?>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <!--Carousel Wrapper--><br/>
                                <div id="carousel-example-2"  class="carousel slide carousel-fade no-flex wow fadeIn" data-pause="4.5s" data-ride="carousel">
                                    <!--Indicators-->
                                    
                                    <!--/.Indicators-->

                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="img-fluid" src="img/<?php echo $row["service_image"]; ?>" id="containerimage"  alt="First slide">
                                            <div class="carousel-caption">

                                            </div>

                                            <br/>

                                         <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message2">   </p>

                                              <h6 id="message2" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>

                                        </div>


                                        <div class="carousel-item">
                                            <img class="img-fluid" src="img/chair1.jpg" id="containerimage" alt="Second slide">
                                            <div class="carousel-caption">
                                             
                                            </div>

                                             <br/>

                                         <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message2">   </p>

                                              <h6 id="message2" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>

                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="img/chair1.jpg" id="containerimage" alt="Third slide">
                                            <div class="carousel-caption">
                                               
                                            </div>

                                             <br/>

                                         <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message2">   </p>

                                              <h6 id="message2" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>

                                        </div>

                                          <div class="carousel-item">
                                            <img class="img-fluid" src="img/chair1.jpg" id="containerimage" alt="Second slide">
                                            <div class="carousel-caption">
                                             
                                            </div>

                                             <br/>

                                         <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message2">   </p>

                                              <h6 id="message2" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>

                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="img/chair1.jpg" id="containerimage" alt="Third slide">
                                            <div class="carousel-caption">
                                               
                                            </div>

                                             <br/>

                                         <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                            <p>Our Price: $<?php echo $row["service_price"]; ?> &nbsp;&nbsp;<input type="button" value="View Details" class="inputstyle"  id="toggle_message2">   </p>

                                              <h6 id="message2" class="dropdown">
                                                            <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>

                                        </div>
                                    </div>
                                    <!--/.Slides-->

                                    <!--Controls-->
                                    <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev">
                                        <span class="icon-prev" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next">
                                        <span class="icon-next" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <!--/.Controls-->

                                       <?php

            }
            ?>
                                </div>
                                <!--/.Carousel Wrapper-->
                            </div>
                        </div>
                    </div>
                </div>

                
                
                <!--/Second column-->
            </div>
        </div>

        
      

<br/><br/>
       <div class="pagination">
           
       </div>   
          
<br/><br/><br/>
              
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                         <div style="border:1px solid black;">
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                             </div>
                        </div>

                          <div class="col-md-4 col-sm-12 col-xs-12">
                           <div style="border:1px solid black;">
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                             </div>
                        </div>

                          <div class="col-md-4 col-sm-12 col-xs-12">
                            <div style="border:1px solid black;">
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                             </div>
                        </div>

                          
                    </div>
                </div>               

<br/><br/><br/>        
              <center>
                    <h2 class="h2-responsive wow fadeInDown" style="font-weight: bold;">Vendors by key Location</h2>
                </center>
                <br/>
        <div class="container-fluid">
        <div class="row" style="text-align: center;">
            <div class="col-md-2 col-sm-3 col-xs-3">
                <a href="#"> <h6>Abia Nigeria</h6></a>
            </div>
            

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Adamawa Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Anambra Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Akwa Ibom Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Bauchi Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Bayelsa Nigeria</h6></a>
            </div>
        </div>

    <hr/>



        <div class="row" style="text-align: center;">

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Benue Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Borno Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Cross River Nigeria</h6></a>
            </div>
            

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Delta Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Ebonyi Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Edo Nigeria</h6></a>
            </div>
        </div>

    <hr/>
        <div class="row" style="text-align: center;">
            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Enugu Nigeria</h6></a>
            </div>
            

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Gombe Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Imo Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Jigawa Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Kaduna Nigeria</h6></a>
            </div>
            

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>F.C.T Nigeria</h6></a>
            </div>
        </div>

        <hr/>



        <div class="row" style="text-align: center;">

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Kano Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Katsina Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Kebbi Nigeria</h6></a>
            </div>
            

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Kogi Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Kwara Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Lagos Nigeria</h6></a>
            </div>
        </div>

    <hr/>
        <div class="row" style="text-align: center;">
            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Nassarawa Nigeria</h6></a>
            </div>
            

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Niger Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Ogun Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Ondo Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Osun Nigeria</h6></a>
            </div>
            

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Oyo Nigeria</h6></a>
            </div>
        </div>


    <hr/>
        <div class="row" style="text-align: center;">
            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Plateau Nigeria</h6></a>
            </div>
            

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Rivers Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Sokoto Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Taraba Nigeria</h6></a>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Yobe Nigeria</h6></a>
            </div>
            

            <div class="col-md-2 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Zamfara Nigeria</h6></a>
            </div>
        </div>
    </div>   


                  <br/><br/>
                <center>
                    <h2 class="h2-responsive wow fadeInDown" style="font-weight: bold;">Our Partners</h2>
                </center>
                <br/>

                <!--Section: Contact-->
                <section id="contact">
                   <div class="container">
                        <div class="row" style="text-align: center;">
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                    <img src="img/agitator.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/agitator1.jpg'" onmouseout="this.src='img/agitator.jpg'">
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                    <img src="img/microsoft.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/microsoft1.jpg'" onmouseout="this.src='img/microsoft.jpg'">
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                    <img src="img/siso.jpg" class="img-thumbnail" id="partner" onmouseout="this.src='img/siso.jpg'" onmouseover="this.src='img/siso1.jpg'">
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                    <img src="img/oracle.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/oracle1.jpg'" onmouseout="this.src='img/oracle.jpg'">
                                </div>

                                 <div class="col-md-2 col-sm-12 col-xs-12">
                                    <img src="img/huawei.jpg" class="img-thumbnail" id="partner" onmouseout="this.src='img/huawei1.jpg'" onmouseover="this.src='img/siso1.jpg'">
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                    <img src="img/ibm.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/ibm1.jpg'" onmouseout="this.src='img/oracle.jpg'">
                                </div>
                        </div>
                   </div>

                    <br/>

                 
                </section>
                <!--Section: Contact-->

         
            <!--/Main container-->


    
  
            <!--Footer-->
        <footer class="page-footer center-on-small-only">

            <!--Footer Links-->
            <div class="container-fluid">
                             <h3 id="stay">Stay Connected</h3>
                            <h5 id="stay">Stay with us || Connect with us || Help and Support</h5>
                <hr/>
                <div class="row">

                    <!--First column-->
                    <div class="col-md-3 offset-md-1">
                        <h5 class="title">Partyvendors Event Solutions</h5>
                        <li><a target="_blank" href="terms_conditions.php" class="btn btn-primary">Terms and Conditions</a></li>
                        
                        
                    </div>
                    <!--/.First column-->

                    <hr class="hidden-md-up">

                    <!--Second column-->
                    <div class="col-md-2 offset-md-1">
                        <h5 class="title">Get Started</h5>
                        <ul>
                            <li><a href="#!">Features</a></li>
                            <li><a href="#!">How it works</a></li>
                        </ul>
                    </div>
                    <!--/.Second column-->





                    <hr class="hidden-md-up">

                    <!--Third column-->
                    <div class="col-md-2">
                        <h5 class="title">Company</h5>
                        <ul>
                            <li><a href="#!"></a>Security</li>
                            <li><a href="#!"></a>Tell Us</li>
                        </ul>
                    </div>
                    <!--/.Third column-->

                    <hr class="hidden-md-up">

                    <!--Fourth column-->
                    <div class="col-md-2">
                        <h5 class="title">Support</h5>
                        <ul>
                            <li><a href="#!">Call Us</a></li>
                            <li><a href="#!">Help Center</a></li>
                        </ul>
                    </div>
                    <!--/.Fourth column-->

                </div>
            </div>
            <!--/.Footer Links-->

            <hr>

            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <center><h4>Office Address</h4></center>
                        <p>No 18 Kayode Anifowoshe River Vally Estate Ojodu Berger, Lagos State</p>
                    </div>

                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <h4>Email Address</h4>
                        <p>solaamusan@gmail.com</p>
                    </div>
                

                    <div class="col-md-3 col-sm-12 col-xs-12">

                        <h4>Phone Number</h4>
                        <p>08132157517 , 08068997372</p>
                    </div>
                </div>
            </div>

            

            <!--Copyright-->
            <div class="footer-copyright">
                <div class="container-fluid">
                    © 2017 Copyright: <a href="https://mdbootstrap.com"> partyvendors.com.ng </a>

                </div>
            </div>
            <!--/.Copyright-->

        </footer>
        <!--/.Footer-->



  




    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery.js"></script>
                                <script type="text/javascript" src="js/toggle.js"></script>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script type="text/javascript" src="js/dropdown.js"></script>


            


    <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
        
        <script type="text/javascript" src="js/custom.js"></script>
        <script type="text/javascript" src="js/paginate.js"></script>

                    <script src="datetimepicker/jquery.datetimepicker.full.js"></script>
        <script>
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
</body>

</html>






















                     <li class="dropdown" id="dropdown"> 
                             <a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Find vendors <span class="caret"></span></b> </a> 
                             <ul class="dropdown-menu"> 

                                 <div id="wrapper">
                                    <table>         
                                        <tr>
                                            <td><p class="dropdownoptions">
                                                    <strong>RENTALS AND SHOPS </strong><br/>
                                                    <a href="#">Venue </a><br/>
                                                    <a>Favours + Gifts</a><br/>
                                                    <a>Photobooth</a><br/>
                                                    <a>Service + Security</a><br/>
                                                    <a>Transportation</a><br/>
                                                    <a>Invitation + Print</a><br/>
                                                    <a>Cakes + Confectionaries</a><br/>
                                                    <a>Attire + Aso Ebi</a><br/>
                                                    <a>See More</a><br/>
                                                </p>
                                            </td>
                                    
                                            <td><p class="dropdownoptions">
                                                    <strong>SERVICE PROVIDED </strong><br/> 
                                                    <a href="photogra.php">Photographer </a><br/>
                                                    <a href="vediographer.php">Vediographer</a><br/>
                                                    <a>Decorators</a><br/>
                                                    <a href="caterers.php">Caterers</a><br/>
                                                    <a>Chocolatiers</a><br/>
                                                    <a>Wedding MC</a><br/>
                                                    <a href="eventplanner.php">Planners</a><br/>
                                                    <a href="tuxedos.php">Tuxedos</a><br/>
                                                    <a>See More</a><br/>
                                                </p>
                                            </td>
                        

                                            <td><p class="dropdownoptions">
                                                <strong>ENTERTAINMENT </strong><br/>
                                                <a href="#">Djs </a><br/>
                                                    <a>Guitarist</a><br/>
                                                    <a>Mc</a><br/>
                                                    <a>Pianoist</a><br/>
                                                    <a>Guitarist</a><br/>
                                                    <a href="artist.php">Artist</a><br/>
                                                    <a>Musician + Bands</a><br/>
                                
                                                    <a>See More</a><br/>
                                                </p></td>
                        
                                        </tr>
                   
                                    </table>
                                </div>
                              </ul>
                     </li>  

                        


 //To check wehteher the all the FORM field is is NOT EMPTY
                                if(!empty($name) && !empty($email) && !empty($phone_no) &&  !empty($state) && !empty($location) && !empty($country) && !empty($password) && !empty($confirm_password)){
                                
                                //To check if the type in email format is correct ornoot
                                    if(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]{0,5}+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $_POST['email'])){
                                        
                                    //To check if the two password matches
                                            if($password==$confirm_password){

                                                if(isset($_POST['email'])){
                                                    $query="SELECT * FROM customer_table WHERE email='$email'";
                                                    $query_run=mysqli_query($mysqli,$query);
                                                        if(mysqli_num_rows($query_run)>0){
                                                            echo "<script type='text/javascript'>alert('email Already Taken')</script>";

                                                                }else{
                                                                $query="SELECT * FROM customer_table WHERE phone_no='$phone_no'";
                                                                $query_run=mysqli_query($mysqli,$query);

                                                                    if(mysqli_num_rows($query_run)>0){
                                                                        echo "<script type='text/javascript'>alert('Phone Already Taken')</script>";
                                                                    }else{

                                                                            $query="INSERT INTO customer_table (name,email,phone_no,state,location,country,password,datetime) VALUES ('$name','$email','$phone_no','$state','$location','$country','$password','$datetime')";
                                                                            $query_run=mysqli_query($mysqli,$query);

                                                                                if($query_run){

                                                                                    $to=$email;
                                                                                    $subject=" Account Confirmation and Verification";
                                                                                    
                                                                                    $message="please click the link below to verify  account ";
                                                                                    $message .="http://www.paryvendor.com";
                                                                                    

                                                                                    $sentmail = mail($to, $subject, $message);

                                                                                        if($sentmail == true){
                                                                                            echo "<script>alert('verification send to  email address')</script>";
                                                                                        }else{
                                                                                            echo "<script>alert('nothing send to  email addres')</script>";
                                                                                        }
                                                                                }else{

                                                                                }
                                                                            }
                                                                }                                    
                                                }else{
                                                    // text here.........................
                                                    }

                                            }else{
                                                echo "<script type='text/javascript'>alert('Password Does Not Match')</script>";
                                            }
                                    }else{
                                      echo "<script type='text/javascript'>alert('Email not Correct')</script>";  
                                    }

                                }else{
                                    echo "<script type='text/javascript'>alert('All Field Are Required')</script>";
                                }
                            }else{ 




<!--/.First column-->
                <div class="col-md-6">
                    <div class="card wow fadeInRight">
                        <div class="card-block">

                                    <div class="text-center">
                                            <h3><strong>Register as a vendors</strong></h3>                
                                    </div>
                            <form role="form">
                                 <div class="md-form form-sm">
                                        <i class="fa fa-user prefix"></i>
                                        <input type="text" name="name" id="name" class="form-control validate" required/>
                                        <label for="name" data-error="wrong" data-success="right">Name</label>
                                    </div>

                                    <div class="md-form form-sm">
                                        <i class="fa fa-envelope prefix"></i>
                                        <input type="email" name="email" id="email" class="form-control validate" required/>
                                        <label for="email" data-error="wrong" data-success="right">Email Address</label>
                                    </div> 

                                    <div class="md-form form-sm">
                                        <i class="fa fa-phone prefix"></i>
                                        <input type="text" name="phone_no" id="phone_no" class="form-control validate" required/>
                                        <label for="phone_no" data-error="wrong" data-success="right">Phone Number</label>
                                    </div> 

                                    <div class="md-form form-sm">
                                        <i class="fa fa-user prefix"></i>
                                        <input type="text" name="service" id="service" class="form-control validate" required/>
                                        <label for="service" data-error="wrong" data-success="right">Type of Service</label>
                                    </div>  

                                   

<br/>

                                 <div class="form-group">
                                     
                                     <select class="form-control">
                                         <option>Please select your state</option>
                                         <option>Lagos State</option>
                                         <option>Ekiti State</option>
                                         <option>Oyo State</option>
                                        <option>Kwara State</option>
                                         <option>River State</option>
                                     </select>
                                     
                                </div><br/>

                                  <div class="form-group">
                                     
                                     <select class="form-control">
                                         <option>Please select your location</option>
                                         <option>Ikeja,Lagos</option>
                                         <option>Ikoyi,Lagos</option>
                                         <option>Egbeda,Lagos</option>
                                         <option>Ikotu,Lagos</option>
                                         <option>Mushin,Lagos</option>

                                     </select>
                                     
                                </div><br/>

                                   <div class="form-group">
                                     
                                     <select class="form-control">
                                         <option>Please select your country</option>
                                         <option>Nigeria</option>
                                         <option>Mali</option>
                                         <option>Uganda</option>
                                         <option>Russia</option>
                                         <option>Togo</option>

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
                                         <input type="password" name="password" id="password" class="form-control validate" required/>
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
                                        <input type="text" name="account_no" id="account_no" class="form-control validate" required/>
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



  <div class="divider-new">
            <h2 class="h2-responsive wow fadeInDown">Why is it so great?</h2>
        </div>
    
    
    <section id="examples-of-use">
        <div class="container">

            <div class="row">
                   
                    <p class="testimonials">Partyvendors is your every event marketplace. We're here to help you celebrate all of life's special moments.Partyvendors is your every event marketplace. We're here to help you celebrate all of life's special moments.</p>
                <div class="col-md-12">
                    <!--Carousel Wrapper--><br/>
                    <div id="carousel-example-2" class="carousel slide carousel-fade no-flex wow fadeIn" data-pause="4.5s" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="img/birthday2.jpg" alt="First slide">
                                <div class="carousel-caption">
                                    <h3>Wedding</h3>
                                    <p>Lekki,Lagos</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/birthday11.jpg" alt="Second slide">
                                <div class="carousel-caption">
                                    <h3>Birthday</h3>
                                    <p>Maryland,Lagos</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/club1.jpg" alt="Third slide">
                                <div class="carousel-caption">
                                    <h3>Engagement</h3>
                                    <p>Ikeja,Lagos</p>
                                </div>
                            </div>
                        </div>
                        <!--/.Slides-->

                        <!--Controls-->
                        <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev">
                            <span class="icon-prev" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next">
                            <span class="icon-next" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                    </div>
                    <!--/.Carousel Wrapper-->
                </div>
                <!--/Second column-->
            </div>
        </div>
    </section>



     <!--First column-->
                        <div class="col-lg-6">
                                <div class="description">
                                    <h2 class="h2-responsive wow fadeInLeft">PartyVendor </h2>
                                    <hr class="hr-dark">
                                    <p class="wow fadeInLeft" data-wow-delay="0.4s">Partyvendors is your every event marketplace. We're here to help you celebrate all of life's special moments.</p>
                                    <br>
                                    <a class="btn btn-primary wow fadeInLeft" data-wow-delay="0.7s">Learn more</a>
                                </div>
                            </div>
    <!--/.First column-->


    
    <div class="divider-new">
            <h2 class="h2-responsive">Vendor By Category</h2>
    </div> 

    <div class="container">
        <div class="row" style="text-align: center;">
            <div class="col-md-3 col-sm-3 col-xs-3">
                <a href="photographer.php"> <h6>Photographer</h6></a>
            </div>
            

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="Vediographer.php"> <h6>Vediographer</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="Caterers.html"> <h6>Caterer</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="venues.php"> <h6>Venue</h6></a>
            </div>
        </div>
    <hr/>

        <div class="row" style="text-align: center;">
            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="tuxedos.php"> <h6>Tuxedos</h6></a>
            </div>
            

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Entertainers</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="partyrental.php"> <h6>Partyrental</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="eventplanner.php"> <h6>Eventplanner</h6></a>
            </div>
        </div>
    <hr/>


        <div class="row" style="text-align: center;">
            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Decorators</h6></a>
            </div>
            

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Musical + Bands</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="artist.html"> <h6>Artist + Djs</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Service + Security </h6></a>
            </div>
        </div>
    </div>




      <div class="container">
                    <br/><br/>
                <center>
                    <h2 class="h2-responsive wow fadeInDown" style="font-weight: bold;">Vendor By Category</h2>
                </center>
                <br/>
        <div class="container" >
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12" >
                     <!--Card-->
                        <div class="card" >

                            <!--Card image-->
                            <div class="view overlay hm-white-slight" >
                                
                              <center>
                                    <a href="photographer.html">
                                        <span class="fa-stack fa-lg" id="categoryicons">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-camera fa-stack-1x fa-inverse" id="coloricons"></i>
                                        </span>
                                    </a>
                                </center>
                                      
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-block">
                                <!--Title-->
                                
                                <p class="card-text">
                                    A few clicks and you'll find great wedding,birthday and party photography now!
                                </p>

                                <center>
                                    <a class="btn btn-primary"  href="photogra.php" id="categoryicon">Photographer</a>
                                </center>
                            </div>
                            <!--/.Card content-->
                        </div>
                        <!--/.Card-->
                </div>



                 <div class="col-md-3 col-sm-12 col-xs-12" >
                     <!--Card-->
                        <div class="card" >

                            <!--Card image-->
                            <div class="view overlay hm-white-slight" >
                                
                                <center>
                                     <a href="caterer.html">
                                        <span class="fa-stack fa-lg" id="categoryicons">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-group fa-stack-1x fa-inverse" id="coloricons"></i>
                                        </span>
                                    </a>

                                </center>
                                      
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-block">
                                <!--Title-->
                                
                                <p class="card-text">
                                    A few clicks and you'll find great any kinds of event caterer now!
                                </p>

                                <center>
                                    <a class="btn btn-primary"  href="caterers.php" id="categoryicon">Caterer</a>
                                </center>
                              
                            </div>
                            <!--/.Card content-->
                        </div>
                        <!--/.Card-->  
                </div>


                 <div class="col-md-3 col-sm-12 col-xs-12" >
                     <!--Card-->
                        <div class="card" >

                            <!--Card image-->
                            <div class="view overlay hm-white-slight" >
                                
                                 <center>         
                                     <a href="photographer.html">
                                        <span class="fa-stack fa-lg" id="categoryicons">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-lock fa-stack-1x fa-inverse" id="coloricons"></i>
                                        </span>
                                    </a>
                                </center>

                                      
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-block">
                                <!--Title-->
                                
                                <p class="card-text">
                                    A few clicks and you'll find great any kinds of event Vediographers now!
                                </p>

                            <center>
                                <a class="btn btn-primary" href="vediographer.php" id="categoryicon">Vediographer</a>

                            </center>
                              
                            </div>
                            <!--/.Card content-->
                        </div>
                        <!--/.Card-->     
            </div>

             <div class="col-md-3 col-sm-12 col-xs-12" >
                     <!--Card-->
                        <div class="card" >

                            <!--Card image-->
                            <div class="view overlay hm-white-slight" >
                                
                                <center>
                                     <a href="partyrental.html">
                                        <span class="fa-stack fa-lg" id="categoryicons">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-ship fa-stack-1x fa-inverse" id="coloricons"></i>
                                        </span>
                                    </a>
                                </center>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-block">
                                <!--Title-->
                                
                                <p class="card-text">
                                    A few clicks and you'll find great any kinds of event Party Rentals now!
                                </p>

                                <center>
                                    <a class="btn btn-primary"  href="partyrental.php" id="categoryicon">Party Rentals</a>

                               </center>     
                              
                            </div>
                            <!--/.Card content-->
                        </div>
                        <!--/.Card-->
            </div>
            </div>
        </div>



  


        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-11 col-xs-11">
                    <div class="card">
                        <div class="view overlay hm-white-slight">

                            <center>
                                <a href="venue.html">
                                    <span class="fa-stack fa-lg" id="categoryicons">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-sitemap fa-stack-1x fa-inverse" id="coloricons"></i>
                                    </span>
                                </a>
                            </center>
                        </div>

                        <div class="card-block">
                            <p class="card-text">A few clicks and you'll find great any kinds of event Venue now!</p>
                            <center>
                                <a class="btn btn-primary" id="categoryicon" href="venues.php">Venues</a>
                            </center>
                        </div>
                    </div>
                </div> 



                <div class="col-md-3 col-sm-11 col-xs-11">
                    <div class="card">
                        <div class="view overlay hm-white-slight">

                            <center>
                                <a href="Entertainer.html">
                                    <span class="fa-stack fa-lg" id="categoryicons">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-microphone fa-stack-1x fa-inverse" id="coloricons"></i>
                                    </span>
                                </a>
                            </center>

                        </div>

                        <div class="card-block">
                            <p class="card-text">A few clicks and you'll find great any kinds of event Entertainers now!</p>

                            <center>
                                <a class="btn btn-primary" id="categoryicon" href="artist.php">Artists</a>
                            </center>
                        </div>
                    </div>
                </div>



                <div class="col-md-3 col-sm-11 col-xs-11">
                    <div class="card">
                        <div class="card">
                            <div class="view overlay hm-white-slight">

                                <center>
                                    <a href="tuxedos.html">
                                        <span class="fa-stack fa-lg" id="categoryicons">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-male fa-stack-1x fa-inverse" id="coloricons"></i>
                                        </span>
                                    </a>
                                </center>
                            </div>

                            <div class="card-block">
                                <p class="card-text">A few clicks and you'll find great any kinds of event Tuxedos now!</p>
                                <center>
                                    <a class="btn btn-primary" id="categoryicon" href="tuxephpphp">Tuxedos</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>


                 <div class="col-md-3 col-sm-11 col-xs-11">
                    <div class="card">
                        <div class="card">
                            <div class="view overlay hm-white-slight">
                                <center>
                                    <a href="eventplanner.html">
                                        <span class="fa-stack fa-lg" id="categoryicons">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-cogs  fa-stack-1x fa-inverse" id="coloricons"></i>
                                        </span>
                                    </a>
                                </center>
                            </div>

                            <div class="card-block">
                                <p class="card-text">A few clicks and you'll find great any kinds of event Event Planner now!</p>

                                <center>
                                    <a class="btn btn-primary" id="categoryicon" href="eventplanner.php">Event Planner</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>


      <p style="font-size: 18px;">Partyvendors is your every event marketplace. We're here to help you celebrate all of life's special moments.</p>




           <br/><br/>
                <center>
                    <h2 id="Gallery" class="h2-responsive wow fadeInDown" style="font-weight: bold;">Galleries</h2>
                </center>
                <br/>
    <div class="container">
            <div class="row">
                    <div class="col-md-2 col-sm-12 col-xs-12">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">

                                <img src="img/wedcatering33.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>

                            </div>
                            <!--/.Card image-->

                              
                                    <p id="gallery">Lekki Hall</p>
                          
                            <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-2 col-sm-12 col-xs-12">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/vediographer5.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                           <p id="gallery">Ikeja Hall</p>
                                    <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-2 col-sm-12 col-xs-12">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/venue101.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <p id="gallery">Egbeda Hall</p>
                                <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                         <div class="col-md-2 col-sm-12 col-xs-12">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/venue101.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <p id="gallery">Banana Island Hall</p>
                                <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                         <div class="col-md-2 col-sm-12 col-xs-12">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/venue101.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                                <p id="gallery">Agege Hall</p>
                                <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                         <div class="col-md-2">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/venue101.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <p id="gallery">Ojuelegba  Hall</p>
                                <br/>
                        </div>
                        <!--/.Card-->

                    </div>
            </div>
    </div>

    <div class="container">
            <div class="row">
                    <div class="col-md-2 col-sm-12 col-xs-12">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/wedcatering33.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->
                                <p id="gallery">Ojodu Berger Hall</p>
                            
                            <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-2 col-sm-12 col-xs-12">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/vediographer5.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <p id="gallery">Ikorodu Hall</p>
                                    <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-2 col-sm-12 col-xs-12">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/venue101.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <p id="gallery">Ikotun Hall</p>
                                <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                         <div class="col-md-2 col-sm-12 col-xs-12">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/venue101.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->
                                    <p id="gallery">Ketu Hall</p>
                           
                                <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                         <div class="col-md-2 col-sm-12 col-xs-12">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/venue101.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                                <p id="gallery">Mushin Hall</p>
                                <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                         <div class="col-md-2 col-sm-12 col-xs-12">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/venue101.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->
                                <p id="gallery">Ikoyi Hall</p>
                           
                                <br/>
                        </div>
                        <!--/.Card-->

                    </div>
            </div>
    </div

     <hr>
                                                        <fieldset class="form-group">
                                                            <input type="checkbox" id="checkbox1">
                                                            <label for="checkbox1">Subscribe me to the newsletter</label>
                                                        </fieldset>




                                                        <nav class="navbar fixed-top navbar-expand-md navbar-dark double-nav scrolling-navbar">
 
    

    <!--Navigation icons-->
    <ul class="nav navbar-nav nav-flex-icons ml-auto">
                
        <!-- Dynamic content wrapper -->
        <li id="dynamicContentWrapper-mainNavbar" class="nav-item">
        </li>
        
                    <!--bigb-->
                    <li id="navbar-static-bigb" class="nav-item ml-2">
                        <a href="https://mdbootstrap.com/product/mdb-big-bundle/" class="nav-link"><span class="badge red z-depth-1 mr-1 clearfix d-none d-sm-inline-block">NEW</span><i class="fa fa-gift mr-1"></i><span class="clearfix d-none d-sm-inline-block">Big Bundle</span></a>
                    </li>
                <!--bigb-->
            
        <!-- Contact -->
        <li class="nav-item ">
            <a id="navbar-static-contact" href="#" class="nav-link" data-toggle="modal" data-target="#contactForm"> <i class="fa fa-envelope-o mr-1"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
        </li>

        <!-- Support -->
        <li id="navbar-static-support" class="nav-item ">
            <a href="https://mdbootstrap.com/support/" class="nav-link"><i class="fa fa-comments-o mr-1"></i><span class="clearfix d-none d-sm-inline-block">Support</span></a>
        </li>

        <!-- Login / register -->
                <li class="nav-item "><a href="#" id="navbar-static-login" class="nav-link"><i class="fa fa-sign-in mr-1"></i><span class="clearfix d-none d-sm-inline-block">Log In</span></a></li>
            </ul>
</nav>


 <li class="nav-item">
                  <a class="nav-link"><b style="font-size: 18px;">Hi: <?php echo $_SESSION['username']?></b></a>

                            

                            <?php
                                    if(isset($_POST['logout'])){
                                        session_destroy();
                                        header("location:index.php");
                                }
                            ?>  
                </li>




                  <div class="container">
                    <div class="row">
                         <div class="col-md-4 col-sm-112 col-xs-12">
                                <center>
                                     <div  id="sideimagewrapper"> 
                                        <i class=" fa fa-group" id="sideimage"></i>
                                    </div>
                                </center>
                        </div>
                        


                         <div class="col-md-8 col-sm-112 col-xs-112">
                            <br/>
                            <center>
                            <h3>Booking Vendors</h3>
                             <p>With a wide variety of party vendors of every kind, partyvendors makes it easy to find and hire the life of your party. From photographers to party buses , dunk tanks to bounce houses - partyvendors has hundreds of party vendors available nationwide. Hire a partyvendors party vendor for your next event and create memories that will last a lifetime.</p></center>
                        </div>
                    </div>
                    <p id="photo"></p>
          </div>


          <h4 class="card-title">Price:300k</h4>



          
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
    <title>Partyvendor</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/homepage.css">
  
        <link href="datetimepicker/jquery.datetimepicker.css" rel="stylesheet">

    <style>

        .view {
           /* background: url("https://mdbootstrap.com/images/regular/city/img%20(6).jpg")no-repeat center center fixed;*/
             background: url("img/spcatering3.jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            height: 55%;
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
            <a class="navbar-brand" href="index.php">
                <h2>PARTYVENDOR</h2>
            </a>
           <div class="collapse navbar-collapse justify-content-end" id="navbarNav1">
                <ul class="nav navbar-nav smooth-scroll">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php"><b>Home</b> <span class="sr-only">(current)</span></a>
                    </li>
           
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#best-features"><b>Blog</b></a>
                    </li>


                     <li class="nav-item">
                        <a class="nav-link" href="#testimonials"><b>Testimony</b></a>
                    </li>

                    <li class="nav-item">
                            <a class="nav-link" href="#testimonials"><b>About us</b></a>
                        </li>


                     <li class="dropdown" id="dropdown"> 
                             <a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Find vendors <span class="caret"></span></b> </a> 
                             <ul class="dropdown-menu"> 

                                 <div id="wrapper">
                                    <table>         
                                        <tr>
                                            <td><p class="dropdownoptions">
                                                    <strong>RENTALS AND SHOPS </strong>
                                                    <a href="#">Venue </a>
                                                    <a>Favours + Gifts</a>
                                                    <a>Photobooth</a>
                                                    <a>Service + Security</a>
                                                    <a>Transportation</a>
                                                    <a>Invitation + Print</a>
                                                    <a>Cakes + Confectionaries</a>
                                                    <a>Attire + Aso Ebi</a>
                                                    <a>See More</a>
                                                </p>
                                            </td>
                                    
                                            <td><p class="dropdownoptions">
                                                    <strong>SERVICE PROVIDED </strong> 
                                                    <a href="photogra.php">Photographer </a>
                                                    <a href="vediographer.php">Vediographer</a>
                                                    <a>Decorators</a>
                                                    <a href="caterers.php">Caterers</a>
                                                    <a>Chocolatiers</a>
                                                    <a>Wedding MC</a>
                                                    <a href="eventplanner.php">Planners</a>
                                                    <a href="tuxedos.php">Tuxedos</a>
                                                    <a>See More</a>
                                                </p>
                                            </td>
                        

                                            <td><p class="dropdownoptions">
                                                <strong>ENTERTAINMENT </strong>
                                                <a href="#">Djs </a>
                                                    <a>Guitarist</a>
                                                    <a>Mc</a>
                                                    <a>Pianoist</a>
                                                    <a>Guitarist</a>
                                                    <a href="artist.php">Artist</a>
                                                    <a>Musician + Bands</a>
                                
                                                    <a>See More</a>
                                                </p></td>
                        
                                        </tr>
                   
                                    </table>
                                </div>
                              </ul>
                     </li>  

                        
                
                    

                    
                     <li><a href="signupone.php" target="_blank"  class="btn btn-primary">Sign Up</a></li>
                        <li><a target="_blank" href="login.php" class="btn btn-default">Login</a></li>
                    

                   
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
                                    <h2 style="color:white; font-weight: bold;">We have over 5,000 Eventplanners to make your event for you.</h2>
                                    
                                </center>
                                


                </div>
    <!--/Second column-->

                </div>
            </div>
        </div>
    </div>
    <!--/.Mask-->

          <br/><br/>
              
                  <div class="container">
                    <div class="row">
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <center>
                                     
                                        <i class=" fa fa-group" id="sideimage"></i>
                                    
                                </center>
                            </div>
                        


                         <div class="col-md-9 col-sm-112 col-xs-112">
                            
                            
                            <center><h4>Booking Vendors</h4></center>
                             <p>With a wide variety of party vendors of every kind, partyvendors makes it easy to find and hire the life of your party. From photographers to party buses , dunk tanks to bounce houses - partyvendors has hundreds of party vendors available nationwide. Hire a partyvendors party vendor for your next event and create memories that will last a lifetime.</p>
                        </div>
                    </div>
                    
          </div>
          <br/><br/>

            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/suit3.jpg" id="containerimage" class="img-fluid" alt="">
                                

                                <div class="mask flex-center">
                                    <h4 class="white-text" style="font-weight: bold;">Ikeja,Lagos</h4>       
                                </div>
                            </div>
                            <!--/.Card image-->
                            <?php

                                //BEGINING OF WEDDING SUIT

                                if(isset($_POST['weddingsuit'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$300','Wedding Suit')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }


                                if(isset($_POST['weddingsuit2'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$250','Wedding Suit')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }

                                 if(isset($_POST['weddingsuit3'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$200','Wedding Suit')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }


                                 if(isset($_POST['weddingsuit4'])){
                                    $query="INSERT INTO vendorselect(price,type) VALUES ('$150','Wedding Suit')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }
                                //ENDING OF WEDDING SUIT

                                 //BEGINING OF WEDDING WEDDING GOWN

                                if(isset($_POST['weddinggown'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$300','Wedding Gown')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }


                                 if(isset($_POST['weddinggown2'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$250','Wedding Gown')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }


                                 if(isset($_POST['weddinggown3'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$200','Wedding Gown')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }


                                 if(isset($_POST['weddinggown4'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$150','Wedding Gown')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }

                                //ENDING OF WEDDING GOWN

                                //BEGINING OF WEDDING RING
                                if(isset($_POST['weddingring'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$300',Wedding Ring)";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }


                                 if(isset($_POST['weddingring2'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$250','Wedding Ring')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }


                                 if(isset($_POST['weddingring3'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$200','Wedding Ring')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }


                                 if(isset($_POST['weddingring4'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$150','Wedding Ring')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }
                                //ENDING OF WEDDING RING


                                //BEGINING OF WEDDING NECKLACE

                                if(isset($_POST['weddingnecklace'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$300','Wedding Necklace')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }


                                 if(isset($_POST['weddingnecklace2'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$250','Wedding Necklace')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }


                                 if(isset($_POST['weddingnecklace3'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$200','Wedding Necklace')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }


                                 if(isset($_POST['weddingnecklace4'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$150','Wedding Necklace')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }
                                //ENDING OF WEDDING NECKLACE
                            ?>

                            
                                
                            
                             <!--Card content-->
                             <form action="tuxedosprice.php" method="POST">
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title"> 

                                                <div class="rating">Wedding Suit  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Ikeja - Lagos, Nigeria</p>

                                              <!--Title-->
                                       
                                            <!--Text-->

                                            <center>
                                            <button type="submit" name="weddingsuit"  class="btn btn-primary">SELECT</button>
                                            </center>
                                
                                    </div>
                                        <!--/.Card content-->

                            
                           
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/suit3.jpg" id="containerimage" class="img-fluid" alt="">
                                <div class="mask flex-center">
                                    <h4 class="white-text" style="font-weight: bold;">Lekki,Lagos</h4>       
                                </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Suit  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="starrate">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Lekki - Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                                
                                                <center>
                                            <button type="submit" name="weddingsuit2"  class="btn btn-primary">SELECT</button>
                                            </center>
                                    </div>
                                        <!--/.Card content-->

                               
                                    
                        </div>
                        <!--/.Card-->

                    </div>


                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/suit3.jpg" id="containerimage" class="img-fluid" alt="">
                                <div class="mask flex-center">
                                    <h4 class="white-text" style="font-weight: bold;">Victoria Island</h4>       
                                </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Suit  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="starrate">☆</span><span id="starrate">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text--> 
                                            <p class="card-text">VI - Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                <center>
                                            <button type="submit" name="weddingsuit3"  class="btn btn-primary">SELECT</button>
                                            </center>
                                    </div>
                                        <!--/.Card content-->
                                    
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/suit3.jpg" id="containerimage" class="img-fluid" alt="">
                                        <div class="mask flex-center">
                                             <h4 class="white-text" style="font-weight: bold;">Egbeda,Lagos</h4>       
                                        </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Suit  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="starrate">☆</span><span id="starrate">☆</span><span id="starrate">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Egbeda - Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                             <center>
                                                <button type="submit" name="weddingsuit4"  class="btn btn-primary">SELECT</button>
                                            </center>
                                    </div>
                                        <!--/.Card content-->
                                
                        </div>
                        <!--/.Card-->

                    </div>
            </div>
            </div>

            
<br/>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/gown6.jpg" id="containerimage" class="img-fluid" alt="">
                                <div class="mask flex-center">
                                    <h4 class="white-text" style="font-weight: bold;">Festac,Lagos</h4>       
                                </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Gown  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Festac - Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                            <center>
                                                <button type="submit" name="weddinggown"  class="btn btn-primary">SELECT</button>
                                            </center>
                                    </div>
                                        <!--/.Card content-->
                            
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/gown6.jpg" id="containerimage" class="img-fluid" alt="">
                                <div class="mask flex-center">
                                    <h4 class="white-text" style="font-weight: bold;">Gbagada,Lagos</h4>       
                                </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Gown  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="starrate">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Gbagada - Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                <center>
                                                <button type="submit" name="weddinggown2"  class="btn btn-primary">SELECT</button>
                                            </center>
                                    </div>
                                        <!--/.Card content-->
                                    
                        </div>
                        <!--/.Card-->

                    </div>


                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/gown6.jpg" id="containerimage" class="img-fluid" alt="">
                                <div class="mask flex-center">
                                    <h4 class="white-text" style="font-weight: bold;">Iyana ipaja,Lagos</h4>       
                                </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Gown  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="starrate">☆</span><span id="starrate">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Iyana ipaja Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                            <center>
                                                <button type="submit" name="weddinggown3"  class="btn btn-primary">SELECT</button>
                                            </center>
                                    </div>
                                        <!--/.Card content-->
                                    
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/gown6.jpg" id="containerimage" class="img-fluid" alt="">
                                        <div class="mask flex-center">
                                            <h4 class="white-text" style="font-weight: bold;">Abule egba,Lagos</h4>       
                                        </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Gown  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="starrate">☆</span><span id="starrate">☆</span><span id="starrate">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Abule egba - Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                            <center>
                                                <button type="submit" name="weddinggown4"  class="btn btn-primary">SELECT</button>
                                            </center>
                                    </div>
                                        <!--/.Card content-->
                                
                        </div>
                        <!--/.Card-->

                    </div>
            </div>
            </div>
<br/>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/jwe7.jpg" id="containerimage" class="img-fluid" alt="">
                                <div class="mask flex-center">
                                    <h4 class="white-text" style="font-weight: bold;">Apapa,Lagos</h4>       
                                </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Ring  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Apapa - Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                            <center>
                                                <button type="submit" name="weddingring"  class="btn btn-primary">SELECT</button>
                                            </center>
                                    </div>
                                        <!--/.Card content-->
                            
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/jwe1.jpg" id="containerimage" class="img-fluid" alt="">
                                <div class="mask flex-center">
                                    <h4 class="white-text" style="font-weight: bold;">Ikorodu,Lagos</h4>       
                                </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Ring  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="starrate">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Ikorodu - Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                            
                                            <center>
                                                <button type="submit" name="weddingring2"  class="btn btn-primary">SELECT</button>
                                            </center>                                    
                                    </div>
                                        <!--/.Card content-->
                                    
                        </div>
                        <!--/.Card-->

                    </div>


                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/jwe9.jpg" id="containerimage" class="img-fluid" alt="">
                                <div class="mask flex-center">
                                    <h4 class="white-text" style="font-weight: bold;">Ojodu Berger,Lagos</h4>       
                                </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Ring  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="starrate">☆</span><span id="starrate">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Ojodu - Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                

                                            <center>
                                                <button type="submit" name="weddingring3"  class="btn btn-primary">SELECT</button>
                                            </center>

                                    </div>
                                        <!--/.Card content-->
                                    
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/jwe8.jpg" id="containerimage" class="img-fluid" alt="">
                                        <div class="mask flex-center">
                                            <h4 class="white-text" style="font-weight: bold;">Agege,Lagos</h4>       
                                        </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Ring  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="starrate">☆</span><span id="starrate">☆</span><span id="starrate">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Agege - Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                

                                            <center>
                                                <button type="submit" name="weddingring4"  class="btn btn-primary">SELECT</button>
                                            </center>
                                    </div>
                                        <!--/.Card content-->
                                
                        </div>
                        <!--/.Card-->

                    </div>
            </div>
            </div>

            <br/>

            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/jwe6.jpg" id="containerimage" class="img-fluid" alt="">
                                <div class="mask flex-center">
                                    <h4 class="white-text" style="font-weight: bold;">Mushin,Lagos</h4>       
                                </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Necklace  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Mushin - Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                        

                                            <center>
                                                <button type="submit" name="weddingnecklace"  class="btn btn-primary">SELECT</button>
                                            </center>

                                    </div>
                                        <!--/.Card content-->
                            
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/jwe6.jpg" id="containerimage" class="img-fluid" alt="">
                                <div class="mask flex-center">
                                    <h4 class="white-text" style="font-weight: bold;">Banana Island</h4>       
                                </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Necklace 
                                                    <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="starrate">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Banana island Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                

                                            <center>
                                                <button type="submit" name="weddingnecklace2"  class="btn btn-primary">SELECT</button>
                                            </center>

                                    </div>
                                        <!--/.Card content-->
                                    
                        </div>
                        <!--/.Card-->

                    </div>


                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/jwe11.jpg" id="containerimage" class="img-fluid" alt="">
                                <div class="mask flex-center">
                                    <h4 class="white-text" style="font-weight: bold;">Ikotun,Lagos</h4>       
                                </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Necklace  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="starrate">☆</span><span id="starrate">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Ikotun - Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                            

                                            <center>
                                                <button type="submit" name="weddingnecklace3"  class="btn btn-primary">SELECT</button>
                                            </center>

                                    </div>
                                        <!--/.Card content-->
                                    
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/jwe2.jpg" id="containerimage" class="img-fluid" alt="">
                                        <div class="mask flex-center">
                                            <h4 class="white-text" style="font-weight: bold;">Ayobo,Lagos</h4>       
                                        </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Necklace  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="starrate">☆</span><span id="starrate">☆</span><span id="starrate">☆</span>
                                                </div>
                                            </h4>

                                            <!--Text-->
                                            <p class="card-text">Ayobo - Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                            

                                            <center>
                                                <button type="submit" name="weddingnecklace4"  class="btn btn-primary">SELECT</button>
                                            </center>

                                    </div>
                                        <!--/.Card content-->
                                 </form>
                                
                        </div>
                        <!--/.Card-->

                    </div>
            </div>
            </div>

               
<br/><br/>
                  
                <center>
                    <h2 class="h2-responsive wow fadeInDown" style="font-weight: bold;">Our Partners</h2>
                </center>
                

                <!--Section: Contact-->
                <section id="contact">
                   <div class="container">
                        <div class="row" style="text-align: center;">
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                    <img src="img/agitator.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/agitator1.jpg'" onmouseout="this.src='img/agitator.jpg'">
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                    <img src="img/microsoft.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/microsoft1.jpg'" onmouseout="this.src='img/microsoft.jpg'">
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                    <img src="img/siso.jpg" class="img-thumbnail" id="partner" onmouseout="this.src='img/siso.jpg'" onmouseover="this.src='img/siso1.jpg'">
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                    <img src="img/oracle.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/oracle1.jpg'" onmouseout="this.src='img/oracle.jpg'">
                                </div>

                                 <div class="col-md-2 col-sm-12 col-xs-12">
                                    <img src="img/huawei.jpg" class="img-thumbnail" id="partner" onmouseout="this.src='img/huawei1.jpg'" onmouseover="this.src='img/siso1.jpg'">
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                    <img src="img/ibm.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/ibm1.jpg'" onmouseout="this.src='img/oracle.jpg'">
                                </div>
                        </div>
                   </div>

                    

                 
                </section>
                <!--Section: Contact-->

<br/>
    
    <!--Footer-->
<footer class="page-footer center-on-small-only">

    <!--Footer Links-->
    <div class="container-fluid">
                     <h4 id="stay">Stay Connected</h4>
                    <h5 id="stay">Stay with us || Connect with us || Help and Support</h5>
        <hr/>
        <div class="row">

            <!--First column-->
            <div class="col-md-3 offset-md-1">
                <h5 class="title">Partyvendor Event Center</h5>
                <p>Partyvendor Event CenterPartyvendor Event CenterPartyvendor Event CenterPartyvendor Event Center </p>

                <a target="_blank" href="https://mdbootsrap.com/material-design-for-bootsrap/" class="btn btn-default">Link Up With us</a>
            </div>
            <!--/.First column-->

            <hr class="hidden-md-up">

            <!--Second column-->
            <div class="col-md-2 offset-md-1">
                <h5 class="title">Get Started</h5>
                <ul>
                    <li><a href="#!">Login</a></li>
                    <li><a href="#!">Sign Up</a></li>
                    <li><a href="#!">Features</a></li>
                    <li><a href="#!">How it works</a></li>
                </ul>
            </div>
            <!--/.Second column-->





            <hr class="hidden-md-up">

            <!--Third column-->
            <div class="col-md-2">
                <h5 class="title">Company</h5>
                <ul>
                    <li><a href="#!">About Us</a></li>
                    <li><a href="#!"></a>Contact Us</li>
                    <li><a href="#!"></a>Security</li>
                    <li><a href="#!"></a>Tell Us</li>
                </ul>
            </div>
            <!--/.Third column-->

            <hr class="hidden-md-up">

            <!--Fourth column-->
            <div class="col-md-2">
                <h5 class="title">Support</h5>
                <ul>
                    <li><a href="#!">Live</a></li>
                    <li><a href="#!">Chat</a></li>
                    <li><a href="#!">Call Us</a></li>
                    <li><a href="#!">Help Center</a></li>
                </ul>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <hr>

    <!--Call to action-->
    <div class="call-to-action">
        <h4>Partyvendor Best Event Center</h4>
        <ul>
            <li>
                <li><a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">FACEBOOK</a>
                <li><a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">TWITTER</a>
                <li><a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">INTAGRAM</a>
                 <li><a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">YAHOO</a>
                <li><a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">GMAIL</a>
                 <li><a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">YOUTUBE</a>
            </li>
        </ul>
    </div>
    <!--/.Call to action-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2017 Copyright: <a href="https://mdbootstrap.com"> partyvendor.com </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

  




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


            

                    <script src="datetimepicker/jquery.datetimepicker.full.js"></script>
        <script>
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
</body>

</html>

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
    <title>Partyvendor</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/homepage.css">
  
        <link href="datetimepicker/jquery.datetimepicker.css" rel="stylesheet">

    <style>

        .view {
           /* background: url("https://mdbootstrap.com/images/regular/city/img%20(6).jpg")no-repeat center center fixed;*/
             background: url("img/suit1.jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            height: 55%;
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
            <a class="navbar-brand" href="index.php">
                <h2>PARTYVENDOR</h2>
            </a>
           <div class="collapse navbar-collapse justify-content-end" id="navbarNav1">
                <ul class="nav navbar-nav smooth-scroll">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php"><b>Home</b> <span class="sr-only">(current)</span></a>
                    </li>
           
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#best-features"><b>Blog</b></a>
                    </li>


                     <li class="nav-item">
                        <a class="nav-link" href="#testimonials"><b>Testimony</b></a>
                    </li>

                    <li class="nav-item">
                            <a class="nav-link" href="#testimonials"><b>About us</b></a>
                        </li>


                     <li class="dropdown" id="dropdown"> 
                             <a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Find vendors <span class="caret"></span></b> </a> 
                             <ul class="dropdown-menu"> 

                                 <div id="wrapper">
                                    <table>         
                                        <tr>
                                            <td><p class="dropdownoptions">
                                                    <strong>RENTALS AND SHOPS </strong>
                                                    <a href="#">Venue </a>
                                                    <a>Favours + Gifts</a>
                                                    <a>Photobooth</a>
                                                    <a>Service + Security</a>
                                                    <a>Transportation</a>
                                                    <a>Invitation + Print</a>
                                                    <a>Cakes + Confectionaries</a>
                                                    <a>Attire + Aso Ebi</a>
                                                    <a>See More</a>
                                                </p>
                                            </td>
                                    
                                            <td><p class="dropdownoptions">
                                                    <strong>SERVICE PROVIDED </strong> 
                                                    <a href="photogra.php">Photographer </a>
                                                    <a href="vediographer.php">Vediographer</a>
                                                    <a>Decorators</a>
                                                    <a href="caterers.php">Caterers</a>
                                                    <a>Chocolatiers</a>
                                                    <a>Wedding MC</a>
                                                    <a href="eventplanner.php">Planners</a>
                                                    <a href="tuxedos.php">Tuxedos</a>
                                                    <a>See More</a>
                                                </p>
                                            </td>
                        

                                            <td><p class="dropdownoptions">
                                                <strong>ENTERTAINMENT </strong>
                                                <a href="#">Djs </a>
                                                    <a>Guitarist</a>
                                                    <a>Mc</a>
                                                    <a>Pianoist</a>
                                                    <a>Guitarist</a>
                                                    <a href="artist.php">Artist</a>
                                                    <a>Musician + Bands</a>
                                
                                                    <a>See More</a>
                                                </p></td>
                        
                                        </tr>
                   
                                    </table>
                                </div>
                              </ul>
                     </li>  

                        
                
                    

                    
                     <li><a href="signupone.php" target="_blank"  class="btn btn-primary">Sign Up</a></li>
                        <li><a target="_blank" href="login.php" class="btn btn-default">Login</a></li>
                    

                   
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
                                    <h2 style="color:white; font-weight: bold;">We have over 3,000 Artists to make your event for you.</h2>
                                    
                                </center>
                                


                </div>
    <!--/Second column-->

                </div>
            </div>
        </div>
    </div>
    <!--/.Mask-->

          <br/><br/>
              
                  <div class="container">
                    <div class="row">
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <center>
                                     
                                        <i class=" fa fa-group" id="sideimage"></i>
                                    
                                </center>
                            </div>
                        


                         <div class="col-md-9 col-sm-112 col-xs-112">
                            
                            
                            <center><h4>Booking Vendors</h4></center>
                             <p>With a wide variety of party vendors of every kind, partyvendors makes it easy to find and hire the life of your party. From photographers to party buses , dunk tanks to bounce houses - partyvendors has hundreds of party vendors available nationwide. Hire a partyvendors party vendor for your next event and create memories that will last a lifetime.</p>
                        </div>
                    </div>
                    
          </div>
          <br/><br/>

            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/suit3.jpg" id="containerimage" class="img-fluid" alt="">
                                

                                <div class="mask flex-center">
                                    <h4 class="white-text" style="font-weight: bold;">Ikeja,Lagos</h4>       
                                </div>
                            </div>
                            <!--/.Card image-->
                            <?php

                                //BEGINING OF WEDDING SUIT

                                if(isset($_POST['weddingsuit'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$300','Wedding Suit')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }


                                if(isset($_POST['weddingsuit2'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$250','Wedding Suit')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }

                                 if(isset($_POST['weddingsuit3'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$200','Wedding Suit')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }


                                 if(isset($_POST['weddingsuit4'])){
                                    $query="INSERT INTO vendorselect(price,type) VALUES ('$150','Wedding Suit')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }
                                //ENDING OF WEDDING SUIT

                                 //BEGINING OF WEDDING WEDDING GOWN

                                if(isset($_POST['weddinggown'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$300','Wedding Gown')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }


                                 if(isset($_POST['weddinggown2'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$250','Wedding Gown')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }


                                 if(isset($_POST['weddinggown3'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$200','Wedding Gown')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }


                                 if(isset($_POST['weddinggown4'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$150','Wedding Gown')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }

                                //ENDING OF WEDDING GOWN

                                //BEGINING OF WEDDING RING
                                if(isset($_POST['weddingring'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$300',Wedding Ring)";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }


                                 if(isset($_POST['weddingring2'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$250','Wedding Ring')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }


                                 if(isset($_POST['weddingring3'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$200','Wedding Ring')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }


                                 if(isset($_POST['weddingring4'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$150','Wedding Ring')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }
                                //ENDING OF WEDDING RING


                                //BEGINING OF WEDDING NECKLACE

                                if(isset($_POST['weddingnecklace'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$300','Wedding Necklace')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }


                                 if(isset($_POST['weddingnecklace2'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$250','Wedding Necklace')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }


                                 if(isset($_POST['weddingnecklace3'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$200','Wedding Necklace')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }


                                 if(isset($_POST['weddingnecklace4'])){
                                    $query="INSERT INTO vendorselect (price,type) VALUES ('$150','Wedding Necklace')";
                                    $query_run=mysqli_query($mysqli,$query);
                                    if ($query_run) {
                                         echo "<script type='text/javascript'>alert('The Location,Vendor,Price Succesfully Inserted')</script>";
                                    }else{
                                        echo "<script type='text/javascript'>alert('Not Succesful')</script>";
                                    }
                                    
                                }
                                //ENDING OF WEDDING NECKLACE
                            ?>

                            
                                
                            
                             <!--Card content-->
                             <form action="tuxedosprice.php" method="POST">
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title"> 

                                                <div class="rating">Wedding Suit  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Ikeja - Lagos, Nigeria</p>

                                              <!--Title-->
                                       
                                            <!--Text-->

                                            <center>
                                            <button type="submit" name="weddingsuit"  class="btn btn-primary">SELECT</button>
                                            </center>
                                
                                    </div>
                                        <!--/.Card content-->

                            
                           
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/suit3.jpg" id="containerimage" class="img-fluid" alt="">
                                <div class="mask flex-center">
                                    <h4 class="white-text" style="font-weight: bold;">Lekki,Lagos</h4>       
                                </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Suit  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="starrate">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Lekki - Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                                
                                                <center>
                                            <button type="submit" name="weddingsuit2"  class="btn btn-primary">SELECT</button>
                                            </center>
                                    </div>
                                        <!--/.Card content-->

                               
                                    
                        </div>
                        <!--/.Card-->

                    </div>


                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/suit3.jpg" id="containerimage" class="img-fluid" alt="">
                                <div class="mask flex-center">
                                    <h4 class="white-text" style="font-weight: bold;">Victoria Island</h4>       
                                </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Suit  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="starrate">☆</span><span id="starrate">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text--> 
                                            <p class="card-text">VI - Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                <center>
                                            <button type="submit" name="weddingsuit3"  class="btn btn-primary">SELECT</button>
                                            </center>
                                    </div>
                                        <!--/.Card content-->
                                    
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/suit3.jpg" id="containerimage" class="img-fluid" alt="">
                                        <div class="mask flex-center">
                                             <h4 class="white-text" style="font-weight: bold;">Egbeda,Lagos</h4>       
                                        </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Suit  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="starrate">☆</span><span id="starrate">☆</span><span id="starrate">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Egbeda - Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                             <center>
                                                <button type="submit" name="weddingsuit4"  class="btn btn-primary">SELECT</button>
                                            </center>
                                    </div>
                                        <!--/.Card content-->
                                
                        </div>
                        <!--/.Card-->

                    </div>
            </div>
            </div>

            
<br/>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/gown6.jpg" id="containerimage" class="img-fluid" alt="">
                                <div class="mask flex-center">
                                    <h4 class="white-text" style="font-weight: bold;">Festac,Lagos</h4>       
                                </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Gown  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Festac - Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                            <center>
                                                <button type="submit" name="weddinggown"  class="btn btn-primary">SELECT</button>
                                            </center>
                                    </div>
                                        <!--/.Card content-->
                            
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/gown6.jpg" id="containerimage" class="img-fluid" alt="">
                                <div class="mask flex-center">
                                    <h4 class="white-text" style="font-weight: bold;">Gbagada,Lagos</h4>       
                                </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Gown  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="starrate">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Gbagada - Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                <center>
                                                <button type="submit" name="weddinggown2"  class="btn btn-primary">SELECT</button>
                                            </center>
                                    </div>
                                        <!--/.Card content-->
                                    
                        </div>
                        <!--/.Card-->

                    </div>


                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/gown6.jpg" id="containerimage" class="img-fluid" alt="">
                                <div class="mask flex-center">
                                    <h4 class="white-text" style="font-weight: bold;">Iyana ipaja,Lagos</h4>       
                                </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Gown  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="starrate">☆</span><span id="starrate">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Iyana ipaja Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                            <center>
                                                <button type="submit" name="weddinggown3"  class="btn btn-primary">SELECT</button>
                                            </center>
                                    </div>
                                        <!--/.Card content-->
                                    
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/gown6.jpg" id="containerimage" class="img-fluid" alt="">
                                        <div class="mask flex-center">
                                            <h4 class="white-text" style="font-weight: bold;">Abule egba,Lagos</h4>       
                                        </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Gown  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="starrate">☆</span><span id="starrate">☆</span><span id="starrate">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Abule egba - Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                            <center>
                                                <button type="submit" name="weddinggown4"  class="btn btn-primary">SELECT</button>
                                            </center>
                                    </div>
                                        <!--/.Card content-->
                                
                        </div>
                        <!--/.Card-->

                    </div>
            </div>
            </div>
<br/>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/jwe7.jpg" id="containerimage" class="img-fluid" alt="">
                                <div class="mask flex-center">
                                    <h4 class="white-text" style="font-weight: bold;">Apapa,Lagos</h4>       
                                </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Ring  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Apapa - Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                            <center>
                                                <button type="submit" name="weddingring"  class="btn btn-primary">SELECT</button>
                                            </center>
                                    </div>
                                        <!--/.Card content-->
                            
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/jwe1.jpg" id="containerimage" class="img-fluid" alt="">
                                <div class="mask flex-center">
                                    <h4 class="white-text" style="font-weight: bold;">Ikorodu,Lagos</h4>       
                                </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Ring  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="starrate">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Ikorodu - Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                            
                                            <center>
                                                <button type="submit" name="weddingring2"  class="btn btn-primary">SELECT</button>
                                            </center>                                    
                                    </div>
                                        <!--/.Card content-->
                                    
                        </div>
                        <!--/.Card-->

                    </div>


                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/jwe9.jpg" id="containerimage" class="img-fluid" alt="">
                                <div class="mask flex-center">
                                    <h4 class="white-text" style="font-weight: bold;">Ojodu Berger,Lagos</h4>       
                                </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Ring  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="starrate">☆</span><span id="starrate">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Ojodu - Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                

                                            <center>
                                                <button type="submit" name="weddingring3"  class="btn btn-primary">SELECT</button>
                                            </center>

                                    </div>
                                        <!--/.Card content-->
                                    
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/jwe8.jpg" id="containerimage" class="img-fluid" alt="">
                                        <div class="mask flex-center">
                                            <h4 class="white-text" style="font-weight: bold;">Agege,Lagos</h4>       
                                        </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Ring  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="starrate">☆</span><span id="starrate">☆</span><span id="starrate">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Agege - Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                

                                            <center>
                                                <button type="submit" name="weddingring4"  class="btn btn-primary">SELECT</button>
                                            </center>
                                    </div>
                                        <!--/.Card content-->
                                
                        </div>
                        <!--/.Card-->

                    </div>
            </div>
            </div>

            <br/>

            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/jwe6.jpg" id="containerimage" class="img-fluid" alt="">
                                <div class="mask flex-center">
                                    <h4 class="white-text" style="font-weight: bold;">Mushin,Lagos</h4>       
                                </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Necklace  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Mushin - Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                        

                                            <center>
                                                <button type="submit" name="weddingnecklace"  class="btn btn-primary">SELECT</button>
                                            </center>

                                    </div>
                                        <!--/.Card content-->
                            
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/jwe6.jpg" id="containerimage" class="img-fluid" alt="">
                                <div class="mask flex-center">
                                    <h4 class="white-text" style="font-weight: bold;">Banana Island</h4>       
                                </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Necklace 
                                                    <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="starrate">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Banana island Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                

                                            <center>
                                                <button type="submit" name="weddingnecklace2"  class="btn btn-primary">SELECT</button>
                                            </center>

                                    </div>
                                        <!--/.Card content-->
                                    
                        </div>
                        <!--/.Card-->

                    </div>


                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/jwe11.jpg" id="containerimage" class="img-fluid" alt="">
                                <div class="mask flex-center">
                                    <h4 class="white-text" style="font-weight: bold;">Ikotun,Lagos</h4>       
                                </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Necklace  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="starrate">☆</span><span id="starrate">☆</span>
                                                </div>
                                            </h4>
                                            <!--Text-->
                                            <p class="card-text">Ikotun - Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                            

                                            <center>
                                                <button type="submit" name="weddingnecklace3"  class="btn btn-primary">SELECT</button>
                                            </center>

                                    </div>
                                        <!--/.Card content-->
                                    
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/jwe2.jpg" id="containerimage" class="img-fluid" alt="">
                                        <div class="mask flex-center">
                                            <h4 class="white-text" style="font-weight: bold;">Ayobo,Lagos</h4>       
                                        </div>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">  
                                                <div class="rating">Wedding Necklace  
                                                    <span id="star">☆</span><span id="star">☆</span><span id="starrate">☆</span><span id="starrate">☆</span><span id="starrate">☆</span>
                                                </div>
                                            </h4>

                                            <!--Text-->
                                            <p class="card-text">Ayobo - Lagos, Nigeria</p>

                                              <!--Title-->
                                            
                                            <!--Text-->
                                            

                                            <center>
                                                <button type="submit" name="weddingnecklace4"  class="btn btn-primary">SELECT</button>
                                            </center>

                                    </div>
                                        <!--/.Card content-->
                                 </form>
                                
                        </div>
                        <!--/.Card-->

                    </div>
            </div>
            </div>

               
<br/><br/>
                  
                <center>
                    <h2 class="h2-responsive wow fadeInDown" style="font-weight: bold;">Our Partners</h2>
                </center>
                

                <!--Section: Contact-->
                <section id="contact">
                   <div class="container">
                        <div class="row" style="text-align: center;">
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                    <img src="img/agitator.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/agitator1.jpg'" onmouseout="this.src='img/agitator.jpg'">
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                    <img src="img/microsoft.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/microsoft1.jpg'" onmouseout="this.src='img/microsoft.jpg'">
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                    <img src="img/siso.jpg" class="img-thumbnail" id="partner" onmouseout="this.src='img/siso.jpg'" onmouseover="this.src='img/siso1.jpg'">
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                    <img src="img/oracle.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/oracle1.jpg'" onmouseout="this.src='img/oracle.jpg'">
                                </div>

                                 <div class="col-md-2 col-sm-12 col-xs-12">
                                    <img src="img/huawei.jpg" class="img-thumbnail" id="partner" onmouseout="this.src='img/huawei1.jpg'" onmouseover="this.src='img/siso1.jpg'">
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                    <img src="img/ibm.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/ibm1.jpg'" onmouseout="this.src='img/oracle.jpg'">
                                </div>
                        </div>
                   </div>

                    

                 
                </section>
                <!--Section: Contact-->

<br/>
    
    <!--Footer-->
<footer class="page-footer center-on-small-only">

    <!--Footer Links-->
    <div class="container-fluid">
                     <h4 id="stay">Stay Connected</h4>
                    <h5 id="stay">Stay with us || Connect with us || Help and Support</h5>
        <hr/>
        <div class="row">

            <!--First column-->
            <div class="col-md-3 offset-md-1">
                <h5 class="title">Partyvendor Event Center</h5>
                <p>Partyvendor Event CenterPartyvendor Event CenterPartyvendor Event CenterPartyvendor Event Center </p>

                <a target="_blank" href="https://mdbootsrap.com/material-design-for-bootsrap/" class="btn btn-default">Link Up With us</a>
            </div>
            <!--/.First column-->

            <hr class="hidden-md-up">

            <!--Second column-->
            <div class="col-md-2 offset-md-1">
                <h5 class="title">Get Started</h5>
                <ul>
                    <li><a href="#!">Login</a></li>
                    <li><a href="#!">Sign Up</a></li>
                    <li><a href="#!">Features</a></li>
                    <li><a href="#!">How it works</a></li>
                </ul>
            </div>
            <!--/.Second column-->





            <hr class="hidden-md-up">

            <!--Third column-->
            <div class="col-md-2">
                <h5 class="title">Company</h5>
                <ul>
                    <li><a href="#!">About Us</a></li>
                    <li><a href="#!"></a>Contact Us</li>
                    <li><a href="#!"></a>Security</li>
                    <li><a href="#!"></a>Tell Us</li>
                </ul>
            </div>
            <!--/.Third column-->

            <hr class="hidden-md-up">

            <!--Fourth column-->
            <div class="col-md-2">
                <h5 class="title">Support</h5>
                <ul>
                    <li><a href="#!">Live</a></li>
                    <li><a href="#!">Chat</a></li>
                    <li><a href="#!">Call Us</a></li>
                    <li><a href="#!">Help Center</a></li>
                </ul>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <hr>

    <!--Call to action-->
    <div class="call-to-action">
        <h4>Partyvendor Best Event Center</h4>
        <ul>
            <li>
                <li><a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">FACEBOOK</a>
                <li><a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">TWITTER</a>
                <li><a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">INTAGRAM</a>
                 <li><a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">YAHOO</a>
                <li><a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">GMAIL</a>
                 <li><a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">YOUTUBE</a>
            </li>
        </ul>
    </div>
    <!--/.Call to action-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2017 Copyright: <a href="https://mdbootstrap.com"> partyvendor.com </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

  




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


            

                    <script src="datetimepicker/jquery.datetimepicker.full.js"></script>
        <script>
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
</body>

</html>




                                 <form action="signupone.php" method="POST">

                                    <div class="card wow fadeInRight">
                                        <div class="card-block">
                                                 
                                                <div class="text-center">
                                                        <h3>Register as a users</h3>
                                                       
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
                                                            <input type="text" name="phone_no" maxlength="11" id="phone_no" class="form-control validate" value="<?php echo isset($_POST['phone_no'])? $_POST['phone_no']: ''; ?>" required/>
                                                            <label for="phoneno" data-error="wrong" data-success="right"> Phone Number</label>
                                                        </div>
                                                    </div>        
                                                </div>

                                                  <div class="row">
                                                    
                                                    <div class="col-md-12">
                                                        <div class="md-form form-sm">
                                                            <i class="fa fa-phone prefix"></i>
                                                            <input type="text" name="state" maxlength="11" id="state" class="form-control validate" value="<?php echo isset($_POST['state'])? $_POST['state']: ''; ?>" required/>
                                                            <label for=state" data-error="wrong" data-success="right"> State</label>
                                                        </div>
                                                    </div>        
                                                </div>

                                                  <div class="row">
                                                    
                                                    <div class="col-md-12">
                                                        <div class="md-form form-sm">
                                                            <i class="fa fa-phone prefix"></i>
                                                            <input type="text" name="country" maxlength="11" id="country" class="form-control validate" value="<?php echo isset($_POST['country'])? $_POST['country']: ''; ?>" required/>
                                                            <label for=country" data-error="wrong" data-success="right"> Country</label>
                                                        </div>
                                                    </div>        
                                                </div>

                                                                             <!--/.First row-->

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

                                                    <div class="text-center">
                                                        <button class="btn btn-primary btn-small" type="submit" name="register_button" style="width:150px;">Register</button>
                                                       
                                                        <a href="index.php"><button type="button" class="btn btn-primary btn-small" style="width:150px;">Login</button></a>
                                                       
                                                    </div>

                                            </div>
                                        </div>
                                                <!--/.Third row-->
                                </form>








                        <div class="col-md-3 col-xs-12 col-sm-12">
                            <!--Form-->
                            <div class="card wow fadeInRight">
                                <div class="card-block">
                                    <!--Header-->
                                    

                                    <!--Body-->
                                    <div class="md-form">
                                        <i class="fa fa-envelope prefix"></i>
                                        <input type="text" id="form2" class="form-control">
                                        <label for="form2">Your Username</label>
                                    </div>

                                    <div class="md-form">
                                        <i class="fa fa-lock prefix"></i>
                                        <input type="password" id="form4" class="form-control">
                                        <label for="form4">Password</label>
                                    </div>

                                   

                                    <div class="text-center">
                                        <button class="btn btn-primary btn-lg">Login in</button>
                                        <hr>
                                        <fieldset class="form-group">
                                            <input type="checkbox" id="checkbox1">
                                            <label for="checkbox1">Subscribe me to the newsletter</label>
                                        </fieldset>
                                    </div>

                                </div>
                            </div>




                            <!--Call to action-->
      <div class="call-to-action">
        <h4>Partyvendor Best Event Center</h4>
        <ul>
          <li>
            <a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">FACEBOOK</a>
            <a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">TWITTER</a>
            <a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">INTAGRAM</a>
             <a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">YAHOO</a>
            <a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">GMAIL</a>
             <a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">YOUTUBE</a>
          </li>
        </ul>
      </div>
      <!--/.Call to action-->




        
      <div class="container-fluid">
        <div class="row">
           <div class="col-md-12 col-sm-12 col-xs-12">
                    <!--Carousel Wrapper--><br/>
                    <div id="carousel-example-2"  class="carousel slide carousel-fade no-flex wow fadeIn" data-pause="4.5s" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="img/background2.jpg" id="carousel_top"   alt="First slide">
                                <div class="carousel-caption">
                                    <h4>Caterers</h4>
                                </div>
                            </div>
                            
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/background3.jpg" id="carousel_top"  alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Caterers</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/background2.jpg" id="carousel_top"   alt="Third slide">
                                <div class="carousel-caption">
                                   
                                    <h4>Caterers</h4>
                                </div>
                            </div>

                              <div class="carousel-item">
                                <img class="img-fluid" src="img/background3.jpg" id="carousel_top"   alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Caterers</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/background2.jpg" id="carousel_top"  alt="Third slide">
                                <div class="carousel-caption">
                                   
                                    <h4>Caterers</h4>
                                </div>
                            </div>
                        </div>
                        <!--/.Slides-->

                        <!--Controls-->
                        <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev">
                            <span class="icon-prev" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next">
                            <span class="icon-next" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                    </div>
                    <!--/.Carousel Wrapper-->
                </div>

        </div>
      </div>




 <div class="container-fluid">

            <div class="row">


                <div class="col-md-3 col-sm-12">

                        <div style="border:1px solid black;">
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                                <h3>Adverticement!!!!</h3>
                             </div>
                         
                    </div>

                    <div class="col-md-1 col-sm-12">
                         
                    </div>


                
                <div class="col-md-8 col-sm-12">
                     <div class="post">
                        <div class="row">
                       

                            <?php
                                $query="SELECT cover_image,service_price,service_description,service_name FROM service limit 3,1";
                                $result=mysqli_query($mysqli,$query);
                                while($row=mysqli_fetch_array($result)){
                                        
                            ?>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <!--Carousel Wrapper--><br/>
                                <div id="carousel-example-2"  class="carousel slide carousel-fade no-flex wow fadeIn" data-pause="4.5s" data-ride="carousel">
                                    <!--Indicators-->
                                    
                                    <!--/.Indicators-->

                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                        <div >
                                            <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">
                                            <div class="carousel-caption">

                                            </div>

                                            <br/>

                                            <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                             <input type="button" value="View Details" class="inputstyle"  id="toggle_message1">   

                                              <h6 id="message1" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                            
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>

                                        </div>


                                        
                                    </div>
                                    <!--/.Slides-->



                                    <!--Controls-->
                                    <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev">
                                        <span class="icon-prev" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next">
                                        <span class="icon-next" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <!--/.Controls-->

                                       <?php

            }
            ?>
                                </div>
                                <!--/.Carousel Wrapper-->
                            </div>


                            


                            <?php
                                $query="SELECT cover_image,service_price,service_description,service_name FROM service  limit 4,1";
                                $result=mysqli_query($mysqli,$query);
                                while($row=mysqli_fetch_array($result)){
                                        
                            ?>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <!--Carousel Wrapper--><br/>
                                <div id="carousel-example-2"  class="carousel slide carousel-fade no-flex wow fadeIn" data-pause="4.5s" data-ride="carousel">
                                    <!--Indicators-->
                                    
                                    <!--/.Indicators-->

                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                        <div >
                                            <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">
                                            <div class="carousel-caption">

                                            </div>

                                            <br/>

                                            <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                             <input type="button" value="View Details" class="inputstyle"  id="toggle_message1">   

                                              <h6 id="message1" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                            
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>

                                        </div>


                                        
                                    </div>
                                    <!--/.Slides-->

                                    <!--Controls-->
                                    <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev">
                                        <span class="icon-prev" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next">
                                        <span class="icon-next" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <!--/.Controls-->

                                       <?php

            }
            ?>
                                </div>
                                <!--/.Carousel Wrapper-->
                            </div>

                          

                          <?php
                                $query="SELECT cover_image,service_price,service_description,service_name FROM service   limit 5,1";
                                $result=mysqli_query($mysqli,$query);
                                while($row=mysqli_fetch_array($result)){
                                        
                            ?>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <!--Carousel Wrapper--><br/>
                                <div id="carousel-example-2"  class="carousel slide carousel-fade no-flex wow fadeIn" data-pause="4.5s" data-ride="carousel">
                                    <!--Indicators-->
                                    
                                    <!--/.Indicators-->

                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="post">
                                            <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">
                                            <div class="carousel-caption">

                                            </div>

                                            <br/>

                                         <center>
                                                       
                                            <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                     </p>

                                             <input type="button" value="View Details" class="inputstyle"  id="toggle_message1">   

                                              <h6 id="message1" class="dropdown"><br/>
                                                    <p>Price: $<?php echo $row["service_price"]; ?></p>
                                                            
                                                        <p style="border:0.5px solid gray;"><?php echo $row["service_description"]; ?></p>
                                                           
                                                        <hr/>

                                                        <button type="submit" name="options" >Book us</button>

                                                        </h6>
                                                </center>

                                        </div>


                                       
                                    </div>
                                    <!--/.Slides-->

                                    <!--Controls-->
                                    <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev">
                                        <span class="icon-prev" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next">
                                        <span class="icon-next" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <!--/.Controls-->

                                       <?php

            }
            ?>
                                </div>
                                <!--/.Carousel Wrapper-->

                               
                            </div>
                        </div>
                    </div>
                </div>

                 
                
                <!--/Second column-->
            </div>
        </div>