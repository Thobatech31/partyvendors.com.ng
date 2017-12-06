
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

                                                <div class="rating">Eventplanner  
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
                                                <div class="rating">Eventplanner  
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
                                                <div class="rating">Eventplanner  
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
                                                <div class="rating">Eventplanner  
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
                                                <div class="rating">Eventplanner  
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
                                                <div class="rating">Eventplanner  
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
                                                <div class="rating">Eventplanner  
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
                                                <div class="rating">Eventplanner  
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
                                                <div class="rating">Eventplanner  
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
                                                <div class="rating">Eventplanner  
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
                                                <div class="rating">Eventplanner  
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
                                                <div class="rating">Eventplanner  
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
                                                <div class="rating">Eventplanner  
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
                                                <div class="rating">Eventplanner 
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
                                                <div class="rating">Eventplanner  
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
                                                <div class="rating">Eventplanner  
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
