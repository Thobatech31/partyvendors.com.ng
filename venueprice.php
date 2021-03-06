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
             background: url("img/venue10.jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            height: 70%;
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
            <div class="collapse navbar-collapse" id="navbarNav1">
                <!--Links-->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php"><b>Home</b> <span class="sr-only">(current)</span></a>
                    </li>
           
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#photographer"><b>Blog</b></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#vediographer"><b>Testimony</b></a>
                    </li>

                     <li class="nav-item">
                        <a class="nav-link" href="#venue"><b>Gallery</b></a>
                    </li>

                     <li class="nav-item">
                        <a class="nav-link" href="#artist"><b>Service</b></a>
                    </li>


                     <li class="nav-item">
                        <a class="nav-link" href="#venue"><b>Gallery</b></a>
                    </li>


                    <li>
                    <p style="margin-top: 9px; color: white;">  08162977243 , 08162977243</p>  
                </li>



                 <li>

                    <form action="vendors.php" method="POST" role="form">

                        <input type="submit" name="logout" style="color: white; background-color: #428bca; height:30px; width: 70px; margin-top: 7px; border-radius: 5px;" value="Logout">
                    </form>
                </li>

                   
                </ul>
            </div>
        </div>
    </nav>      


    
    
    <!--Mask-->
<div class="view hm-black-strong">
    <div class="full-bg-img flex-center">
        <div class="container">
            <div class="row" id="home">

               <!--First column-->
                      
<!--/.First column-->


<!--Second column-->


                          <div class="col-lg-12">
                            <div class="description">
                                <h2 class="h2-responsive wow fadeInLeft">Vendor Venue </h2>
                                <hr class="hr-dark">
                                <p class="wow fadeInLeft" data-wow-delay="0.4s">Professional photographers are experts at capturing those special moments in time that you want to keep forever. With the advanced technologies in digital photography and photo editing today, your photos can be viewed and edited in real-time</p>
                                <br>
                                <div class="row" style="text-align: center;">
                                     
                                     <div class="col-md-3 col-sm-11 col-xs-11">
                                        
                                    </div>

                                     <div class="col-md-2 col-xs-11 col-sm-11">
                                        <a class="btn btn-primary wow fadeInLeft" data-wow-delay="0.7s">GALLERY</a>
                                    </div>


                                    <div class="col-md-2 col-xs-11 col-sm-11">
                                        <a class="btn btn-primary wow fadeInLeft" data-wow-delay="0.7s">VENDORS</a>
                                    </div>

                                    <div class="col-md-2 col-sm-11 col-xs-11">
                                        <a class="btn btn-primary wow fadeInLeft" data-wow-delay="0.7s">SERVICE</a>
                                    </div>

                                     <div class="col-md-3 col-sm-11 col-xs-11">
                                        
                                    </div>

                                </div>
                            </div>
                        </div>
<!--/Second column-->

            </div>
        </div>
    </div>
</div>
<!--/.Mask-->

            
        <div class="container">                    
            <div class="row" >
                <div class="col-md-12 col-sm-12 col-xs-12">    
                    <form class="form-inline" role="form" action="index.php" method="POST">
                            <div class="form"> 
                                   <label for="Country" class="col-md-5 col-sm-5 col-xs-5  control-label" ></label><br/>
                                        <p style="text-align:center">Am Looking For</p>
                                        <select class="form-control"  name="vendors" style="width:300px;">
                                            <option value="choose">Choose Vendor</option> 
                                            <option value="artist">Artist</option>
                                            <option value="Caterers">Caterers</option>
                                            <option value="tuxedos">Tuxedos</option>
                                            <option value="photographer">Photographer</option> 
                                            <option value="vediographer">Vediographers</option>
                                             <option value="entertainer">Entertainer</option>
                                            <option value="entertainer">Entertainer</option>
                                            <option value="Rental">Rental + Photobooth</option>
                                            <option value="weddingmc">Wedding MC</option>
                                            <option value="Jewellery">Jewellery + Accessories</option>
                                            <option value="reception">Reception Venue</option>
                                            <option value="">Invitation + Print</option>
                                            <option value="">Cakes + Confectionaries</option>
                                            <option value="">Attire + Aso Ebi</option>
                                            <option>See More</option>
                                        </select> 
                                </div>
                                    
                                <div class="form" > 
                                   <label for="Country" class="col-md-5 col-sm-5 col-xs-5  control-label"></label><br/>
                                    <p style="text-align:center">In What Location</p>
                                        <select class="form-control" style="width:300px;" name="location">
                                            <option>Choose a Location</option> 
                                            <option value="lagos">Lagos</option>
                                        </select>
                                </div>
                        
                         
                       
        
 
                       
                          <div class="form-group"> 
                                <div class="col-sm-offset-2 col-sm-2"> 
                                         <button type="submit" class="btn btn-primary" name="submit" style="margin-top: 50px;">Search</button>
                                </div> 
                        </div> 
                    </form>    
                </div>
            </div>
        </div> 
          
          <br/><br/>
          <div class="container">
                    <div class="row">
                         <div class="col-md-4 col-sm-8 col-xs-8">
                                     <div  id="sideimagewrapper"> 
                                    <i class=" fa fa-group" id="sideimage"></i>
                                </div>
                        </div>
                        
                         <div class="col-md-8 col-sm-12 col-xs-12">
                            <br/>
                            <h3>Booking Vendors</h3>
                             <p>With a wide variety of party vendors of every kind, partyvendors makes it easy to find and hire the life of your party. From photographers to party buses , dunk tanks to bounce houses - partyvendors has hundreds of party vendors available nationwide. Hire a partyvendors party vendor for your next event and create memories that will last a lifetime.</p>
                        </div>
                    </div>
          </div>
                       
             <div class="divider-new">
                <h2 class="h2-responsive" id="venue">Venues</h2>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/event10.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">Wedding Venue <Hr/> VICTORIAL ISLAND</h4>
                                            <!--Text-->
                                            <p class="card-text">Lagos, Nigeria</p>

                                              <!--Title-->
                                            <h4 class="card-title">Seating:500 | Price:300k</h4>
                                            <!--Text-->
                                
                                    </div>
                                        <!--/.Card content-->
                            <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/dj.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">Wedding Venue <Hr/> VICTORIAL ISLAND</h4>
                                            <!--Text-->
                                            <p class="card-text">Lagos, Nigeria</p>

                                              <!--Title-->
                                            <h4 class="card-title">Seating:500 | Price:300k</h4>
                                            <!--Text-->
                                
                                    </div>
                                        <!--/.Card content-->
                                    <br/>
                        </div>
                        <!--/.Card-->

                    </div>


                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/light4.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">Wedding Venue <Hr/> VICTORIAL ISLAND</h4>
                                            <!--Text-->
                                            <p class="card-text">Lagos, Nigeria</p>

                                              <!--Title-->
                                            <h4 class="card-title">Seating:500 | Price:300k</h4>
                                            <!--Text-->
                                
                                    </div>
                                        <!--/.Card content-->
                                    <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/design2.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">Wedding Venue <Hr/> VICTORIAL ISLAND</h4>
                                            <!--Text-->
                                            <p class="card-text">Lagos, Nigeria</p>

                                              <!--Title-->
                                            <h4 class="card-title">Seating:500 | Price:300k</h4>
                                            <!--Text-->
                                
                                    </div>
                                        <!--/.Card content-->
                                <br/>
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
                                <img src="img/event10.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">Wedding Venue <Hr/> VICTORIAL ISLAND</h4>
                                            <!--Text-->
                                            <p class="card-text">Lagos, Nigeria</p>

                                              <!--Title-->
                                            <h4 class="card-title">Seating:500 | Price:300k</h4>
                                            <!--Text-->
                                
                                    </div>
                                        <!--/.Card content-->
                            <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/dj.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">Wedding Venue <Hr/> VICTORIAL ISLAND</h4>
                                            <!--Text-->
                                            <p class="card-text">Lagos, Nigeria</p>

                                              <!--Title-->
                                            <h4 class="card-title">Seating:500 | Price:300k</h4>
                                            <!--Text-->
                                
                                    </div>
                                        <!--/.Card content-->
                                    <br/>
                        </div>
                        <!--/.Card-->

                    </div>


                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/light4.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">Wedding Venue <Hr/> VICTORIAL ISLAND</h4>
                                            <!--Text-->
                                            <p class="card-text">Lagos, Nigeria</p>

                                              <!--Title-->
                                            <h4 class="card-title">Seating:500 | Price:300k</h4>
                                            <!--Text-->
                                
                                    </div>
                                        <!--/.Card content-->
                                    <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/design2.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">Wedding Venue <Hr/> VICTORIAL ISLAND</h4>
                                            <!--Text-->
                                            <p class="card-text">Lagos, Nigeria</p>

                                              <!--Title-->
                                            <h4 class="card-title">Seating:500 | Price:300k</h4>
                                            <!--Text-->
                                
                                    </div>
                                        <!--/.Card content-->
                                <br/>
                        </div>
                        <!--/.Card-->

                    </div>
            </div>
            </div>
            <br>
             <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/event10.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">Wedding Venue <Hr/> VICTORIAL ISLAND</h4>
                                            <!--Text-->
                                            <p class="card-text">Lagos, Nigeria</p>

                                              <!--Title-->
                                            <h4 class="card-title">Seating:500 | Price:300k</h4>
                                            <!--Text-->
                                
                                    </div>
                                        <!--/.Card content-->
                            <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/dj.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">Wedding Venue <Hr/> VICTORIAL ISLAND</h4>
                                            <!--Text-->
                                            <p class="card-text">Lagos, Nigeria</p>

                                              <!--Title-->
                                            <h4 class="card-title">Seating:500 | Price:300k</h4>
                                            <!--Text-->
                                
                                    </div>
                                        <!--/.Card content-->
                                    <br/>
                        </div>
                        <!--/.Card-->

                    </div>


                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/light4.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">Wedding Venue <Hr/> VICTORIAL ISLAND</h4>
                                            <!--Text-->
                                            <p class="card-text">Lagos, Nigeria</p>

                                              <!--Title-->
                                            <h4 class="card-title">Seating:500 | Price:300k</h4>
                                            <!--Text-->
                                
                                    </div>
                                        <!--/.Card content-->
                                    <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/design2.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">Wedding Venue <Hr/> VICTORIAL ISLAND</h4>
                                            <!--Text-->
                                            <p class="card-text">Lagos, Nigeria</p>

                                              <!--Title-->
                                            <h4 class="card-title">Seating:500 | Price:300k</h4>
                                            <!--Text-->
                                
                                    </div>
                                        <!--/.Card content-->
                                <br/>
                        </div>
                        <!--/.Card-->

                    </div>
            </div>
            </div>

            <br>
             <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/event10.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">Wedding Venue <Hr/> VICTORIAL ISLAND</h4>
                                            <!--Text-->
                                            <p class="card-text">Lagos, Nigeria</p>

                                              <!--Title-->
                                            <h4 class="card-title">Seating:500 | Price:300k</h4>
                                            <!--Text-->
                                
                                    </div>
                                        <!--/.Card content-->
                            <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/dj.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">Wedding Venue <Hr/> VICTORIAL ISLAND</h4>
                                            <!--Text-->
                                            <p class="card-text">Lagos, Nigeria</p>

                                              <!--Title-->
                                            <h4 class="card-title">Seating:500 | Price:300k</h4>
                                            <!--Text-->
                                
                                    </div>
                                        <!--/.Card content-->
                                    <br/>
                        </div>
                        <!--/.Card-->

                    </div>


                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/light4.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">Wedding Venue <Hr/> VICTORIAL ISLAND</h4>
                                            <!--Text-->
                                            <p class="card-text">Lagos, Nigeria</p>

                                              <!--Title-->
                                            <h4 class="card-title">Seating:500 | Price:300k</h4>
                                            <!--Text-->
                                
                                    </div>
                                        <!--/.Card content-->
                                    <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-3 col-sm-11 col-xs-11">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/design2.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                             <!--Card content-->
                                     <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">Wedding Venue <Hr/> VICTORIAL ISLAND</h4>
                                            <!--Text-->
                                            <p class="card-text">Lagos, Nigeria</p>

                                              <!--Title-->
                                            <h4 class="card-title">Seating:500 | Price:300k</h4>
                                            <!--Text-->
                                
                                    </div>
                                        <!--/.Card content-->
                                <br/>
                        </div>
                        <!--/.Card-->

                    </div>
            </div>
            </div>
          
<div class="divider-new">
        <h2 class="h2-responsive" id="Category">Vendor By Category</h2>
    </div> 

    <div class="container">
        <div class="row" style="text-align: center;">
            <div class="col-md-3 col-sm-3 col-xs-3">
                <a href="photogra.php"> <h6>Photographer</h6></a>
            </div>
            

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="Vediographer.php"> <h6>Vediographer</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="Caterers.php"> <h6>Caterer</h6></a>
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
                 <a href="artist.php"> <h6>Artist + Djs</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Service + Security </h6></a>
            </div>
        </div>

    
               

             
            <div class="divider-new">
        <h2 class="h2-responsive" id="Locations">Vendor By Key Locations</h2>
    </div> 

    <div class="container">
        <div class="row" style="text-align: center;">
            <div class="col-md-3 col-sm-3 col-xs-3">
                <a href="#"> <h6>Abuja, Nigeria</h6></a>
            </div>
            

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Lagos, Nigeria</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Abia, Nigeria</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Ado, Nigeria</h6></a>
            </div>
        </div>
<hr/>

        <div class="row" style="text-align: center;">
            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Akure, Nigeria</h6></a>
            </div>
            

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Anambra, Nigeria</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Ilorin, Nigeria</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Kogi, Nigeria</h6></a>
            </div>
        </div>
<hr/>


        <div class="row" style="text-align: center;">
            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Port-Harcourt, Nigeria</h6></a>
            </div>
            

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Imo, Nigeria</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Kaduna, Nigeria</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>River, Nigeria</h6></a>
            </div>
        </div>

<hr/>
        <div class="row" style="text-align: center;">
            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Lokoja, Nigeria</h6></a>
            </div>
            

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Adamawa, Nigeria</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Bauchi, Nigeria</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Lagos, Nigeria</h6></a>
            </div>
        </div>
    </div>   
               



                <div class="divider-new">
                    <h2 class="h2-responsive">Our Partners</h2>
                </div>

                <!--Section: Contact-->
                <section id="contact">
                   <div class="container">
                        <div class="row" style="text-align: center;">
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <img src="img/agitator.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/agitator1.jpg'" onmouseout="this.src='img/agitator.jpg'">
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <img src="img/microsoft.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/microsoft1.jpg'" onmouseout="this.src='img/microsoft.jpg'">
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <img src="img/siso.jpg" class="img-thumbnail" id="partner" onmouseout="this.src='img/siso.jpg'" onmouseover="this.src='img/siso1.jpg'">
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <img src="img/oracle.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/oracle1.jpg'" onmouseout="this.src='img/oracle.jpg'">
                                </div>
                        </div>
                   </div>

                    <br/>

                   <div class="container">
                        <div class="row" style="text-align: center;">
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <img src="img/ibm.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/ibm1.jpg'" onmouseout="this.src='img/ibm.jpg'">
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <img src="img/huawei.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/huawei1.jpg'" onmouseout="this.src='img/huawei.jpg'">
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <img src="img/gov.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/gov1.jpg'" onmouseout="this.src='img/gov.jpg'">
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <img src="img/firs1.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/firs.jpg'" onmouseout="this.src='img/firs1.jpg'">
                                </div>
                        </div>
                   </div>
                </section>
                <!--Section: Contact-->

            </div>
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
