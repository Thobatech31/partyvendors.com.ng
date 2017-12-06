

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

          <script type="text/javascript" src="css/style.css"></script>

            <script type="text/javascript" src="js/slider.js"></script>

    <style>

 

        .view {
           /* background: url("https://mdbootstrap.com/images/regular/city/img%20(6).jpg")no-repeat center center fixed;*/
             background: url("img/wss.jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            height: 40%;
        }


        .dropdown{
            display:none; 
          
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

 .post{
    border: 2px solid aliceblue; 
    border-radius: 25px;
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

                    
                         <li class="nav-item">
                  <a class="nav-link"><b style="font-size: 18px;">Hi: <?php echo $_SESSION['email']?></b></a>

                            

                            <?php
                                    if(isset($_POST['logout'])){
                                        session_destroy();
                                        header("location:index.php");
       
                                }
                            ?>  
                </li>



               

               

                 <li>

                    <form action="loginuser.php" method="POST" role="form">

                       

                        <button type="submit" name="logout" class="btn btn-primary btn-small" style="width:150px;">logout</button>
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
                <div class="row">

                   <!--First column-->

                <div class="col-md-12 col-sm-12 col-xs-12">
                            
                                <center>   
                                    <h3 style="color:white; font-weight: bold;">VENDORS PAYMENT SECTION.</h3>
                                    
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
                                    <h3 style=" font-weight: bold; ">PAYMENT DETAILS</h3>
                                    
                                </center>

 <div class="container-fluid">
   <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <marquee><h1>PAYMENT DETAILS GOES HERE</h1></marquee>
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










