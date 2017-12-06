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
    width: auto;
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
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="border:1px solid black;">
                                                <h2>advertisement</h2>
                                                <p>adverticement</p>
                                                <p>adverticement</p>
                                                <p>adverticement</p>
                                                <p>adverticement</p>
                                                <p>adverticement</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top: 20%;">
                                        <div class="col-md-12">
                                            <div style="border:1px solid black;">
                                                <h2>advertisement</h2>
                                                <p>adverticement</p>
                                                <p>adverticement</p>
                                                <p>adverticement</p>
                                                <p>adverticement</p>
                                                <p>adverticement</p>
                                            </div>
                                        </div>
                                    </div>
                                 
                            </div>

                            

                       
                        <div class="col-md-9 col-sm-12 col-xs-12">
                            
                             

                                 
                                  <!--BEGINING OF THE SECOND PAGINATION-->
                                 <div class="row" >
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">


                               

                                                        <?php
                                                            $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer'  limit 0,1";
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

                                                                         <input type="button" value="View Details" class="inputstyle"  id="toggle_message">   

                                                                          <h6 id="message" class="dropdown"><br/>
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
                                                            $query="SELECT cover_image,service_price,service_description,service_name FROM service WHERE location='Agege Lagos' AND service_name='Photographer' limit 1,1";
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

                                                                         <input type="button" value="View Details" class="inputstyle"  id="toggle_bus">   

                                                                          <h6 id="messa" class="dropdown"><br/>
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
                                                            $query="SELECT cover_image,service_price,service_description,service_name FROM service  limit 2,1";
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

                                                                         <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy">   

                                                                          <h6 id="mess" class="dropdown"><br/>
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
                                                            
                                                        </div>


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


                                                         <?php
                                                            $query="SELECT cover_image,service_price,service_description,service_name FROM service limit 4,1";
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

                                                                         <input type="button" value="View Details" class="inputstyle"  id="toggle_message2">   

                                                                          <h6 id="message2" class="dropdown"><br/>
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
                                                            $query="SELECT cover_image,service_price,service_description,service_name FROM service limit 5,1";
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

                                                                         <input type="button" value="View Details" class="inputstyle"  id="toggle_bus1">   

                                                                          <h6 id="messa1" class="dropdown"><br/>
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
                                                        <!--/.Carousel Wrapper-->
                                        </div>
                                    </div>
                                </div>
                                 <!--END OF THE SECOND PAGINATION-->


                                 
                                  <!--BEGINING OF THE THIRD PAGINATION-->
                               <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">


                               

                                                        <?php
                                                            $query="SELECT cover_image,service_price,service_description,service_name FROM service  limit 0,1";
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

                                                                         <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy1">   

                                                                          <h6 id="mess1" class="dropdown"><br/>
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
                                                            $query="SELECT cover_image,service_price,service_description,service_name FROM service limit 1,1";
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

                                                                         <input type="button" value="View Details" class="inputstyle"  id="toggle_bus2">   

                                                                          <h6 id="messa2" class="dropdown"><br/>
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
                                                            $query="SELECT cover_image,service_price,service_description,service_name FROM service  limit 2,1";
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

                                                                         <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy2">   

                                                                          <h6 id="mess2" class="dropdown"><br/>
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
                                                            
                                                        </div>


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
                                                                    <div class="post">
                                                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">
                                                                        <div class="carousel-caption">

                                                                        </div>

                                                                        <br/>

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
                                                            $query="SELECT cover_image,service_price,service_description,service_name FROM service limit 4,1";
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

                                                                         <input type="button" value="View Details" class="inputstyle"  id="toggle_bus3">   

                                                                          <h6 id="messa3" class="dropdown"><br/>
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
                                                            $query="SELECT cover_image,service_price,service_description,service_name FROM service limit 5,1";
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

                                                                         <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy3">   

                                                                          <h6 id="mess3" class="dropdown"><br/>
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
                                                        <!--/.Carousel Wrapper-->
                                        </div>
                                    </div>
                                </div>
                                   <!--END OF THE THIRD PAGINATION-->

                                 
                                   <!--Begining OF THE fourth PAGINATION-->
                                <div class="row" >
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">


                               

                                                        <?php
                                                            $query="SELECT cover_image,service_price,service_description,service_name FROM service  limit 0,1";
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

                                                                         <input type="button" value="View Details" class="inputstyle"  id="toggle_message4">   

                                                                          <h6 id="message4" class="dropdown"><br/>
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
                                                            $query="SELECT cover_image,service_price,service_description,service_name FROM service limit 1,1";
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

                                                                         <input type="button" value="View Details" class="inputstyle"  id="toggle_bus4">   

                                                                          <h6 id="messa4" class="dropdown"><br/>
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
                                                            $query="SELECT cover_image,service_price,service_description,service_name FROM service  limit 2,1";
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

                                                                         <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy4">   

                                                                          <h6 id="mess4" class="dropdown"><br/>
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
                                                            
                                                        </div>


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
                                                                    <div class="post">
                                                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">
                                                                        <div class="carousel-caption">

                                                                        </div>

                                                                        <br/>

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
                                                            $query="SELECT cover_image,service_price,service_description,service_name FROM service limit 4,1";
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

                                                                         <input type="button" value="View Details" class="inputstyle"  id="toggle_bus5">   

                                                                          <h6 id="messa5" class="dropdown"><br/>
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
                                                            $query="SELECT cover_image,service_price,service_description,service_name FROM service limit 5,1";
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

                                                                         <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy5">   

                                                                          <h6 id="mess5" class="dropdown"><br/>
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
                                                        <!--/.Carousel Wrapper-->
                                        </div>
                                    </div>
                                </div>
                                <!--END OF THE fourth PAGINATION-->

                                
                                <!--END OF THE FIFFTH PAGINATION-->  
                                 <div class="row" >
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">


                               

                                                        <?php
                                                            $query="SELECT cover_image,service_price,service_description,service_name FROM service  limit 0,1";
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

                                                                         <input type="button" value="View Details" class="inputstyle"  id="toggle_message6">   

                                                                          <h6 id="message6" class="dropdown"><br/>
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
                                                            $query="SELECT cover_image,service_price,service_description,service_name FROM service limit 1,1";
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

                                                                         <input type="button" value="View Details" class="inputstyle"  id="toggle_bus6">   

                                                                          <h6 id="messa6" class="dropdown"><br/>
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
                                                            $query="SELECT cover_image,service_price,service_description,service_name FROM service  limit 2,1";
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

                                                                         <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy6">   

                                                                          <h6 id="mess6" class="dropdown"><br/>
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
                                                            
                                                        </div>


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
                                                                    <div class="post">
                                                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">
                                                                        <div class="carousel-caption">

                                                                        </div>

                                                                        <br/>

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
                                                            $query="SELECT cover_image,service_price,service_description,service_name FROM service limit 4,1";
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

                                                                         <input type="button" value="View Details" class="inputstyle"  id="toggle_bus7">   

                                                                          <h6 id="messa7" class="dropdown"><br/>
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
                                                            $query="SELECT cover_image,service_price,service_description,service_name FROM service limit 5,1";
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

                                                                         <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy7">   

                                                                          <h6 id="mess7" class="dropdown"><br/>
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
                                                        <!--/.Carousel Wrapper-->
                                        </div>
                                    </div>
                                </div>
                                <!--END OF THE FIFFTH PAGINATION-->

                            
                                <!--END OF THE FIFFTH PAGINATION--> 
                            <div class="container"> 
                                 <div class="row" >
                                    <div class="col-md-12 col-sm-12 col-xs-12" >
                                        <div class="row">


                               

                                                        <?php
                                                            $query="SELECT cover_image,service_price,service_description,service_name FROM service  limit 0,1";
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

                                                                         <input type="button" value="View Details" class="inputstyle"  id="toggle_message8">   

                                                                          <h6 id="message8" class="dropdown"><br/>
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
                                                            $query="SELECT cover_image,service_price,service_description,service_name FROM service limit 1,1";
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

                                                                         <input type="button" value="View Details" class="inputstyle"  id="toggle_bus8">   

                                                                          <h6 id="messa8" class="dropdown"><br/>
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
                                                            $query="SELECT cover_image,service_price,service_description,service_name FROM service  limit 2,1";
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

                                                                         <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy8">   

                                                                          <h6 id="mess8" class="dropdown"><br/>
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
                                                            
                                                        </div>


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
                                                                    <div class="post">
                                                                        <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerimage"  alt="First slide">
                                                                        <div class="carousel-caption">

                                                                        </div>

                                                                        <br/>

                                                                             <center>
                                                                                   
                                                                        <p><?php echo $row["service_name"]; ?> &nbsp; <span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span><span id="star">☆</span> 
                                                                                 </p>

                                                                         <input type="button" value="View Details" class="inputstyle"  id="toggle_message9">   

                                                                          <h6 id="message9" class="dropdown"><br/>
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
                                                            $query="SELECT cover_image,service_price,service_description,service_name FROM service limit 4,1";
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

                                                                         <input type="button" value="View Details" class="inputstyle"  id="toggle_bus9">   

                                                                          <h6 id="messa9" class="dropdown"><br/>
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
                                                            $query="SELECT cover_image,service_price,service_description,service_name FROM service limit 5,1";
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

                                                                         <input type="button" value="View Details" class="inputstyle"  id="toggle_bussy9">   

                                                                          <h6 id="mess9" class="dropdown"><br/>
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
                                                        <!--/.Carousel Wrapper-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <!--END OF THE FIFFTH PAGINATION-->

                            
    <div class="pagination"></div>

                             
                        </div>


                
                <!--/Second column-->
                    

            </div>

        </div>



              
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



  



    <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
        
        <script type="text/javascript" src="js/custom.js"></script>
        <script type="text/javascript" src="js/pagina.js"></script>

    <script type="text/javascript" src="js/jquery.js"></script>
    <!-- SCRIPTS -->
    <!-- JQuery -->
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








