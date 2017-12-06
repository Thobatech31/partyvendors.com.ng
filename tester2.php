

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

                        <?php
                            $query="SELECT * FROM vendor limit 1";
                             $result=mysqli_query($mysqli,$query);
                                while($row=mysqli_fetch_array($result)){

                              ?>
                              
                              <a href="index.php"> <div class="col-md-4 col-xs-12 col-sm-12">
                            <div class="post">
                                
                                  <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" style="height: auto;
    width:331px;"  alt="First slide">
                            </div>
                        </div></a>

                        <?php

            }
            ?>


                        <?php
                            $query="SELECT * FROM vendor limit 1,1";
                             $result=mysqli_query($mysqli,$query);
                                while($row=mysqli_fetch_array($result)){

                              ?>
                              
                              <a href="index.php"> <div class="col-md-4 col-xs-12 col-sm-12">
                            <div class="post">
                                
                                  <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" style="height: 120px;
    width:331px;"  alt="First slide">
                            </div>
                        </div></a>

                        <?php

            }
            ?>

                          <?php
                            $query="SELECT * FROM vendor limit 2,1";
                             $result=mysqli_query($mysqli,$query);
                                while($row=mysqli_fetch_array($result)){

                              ?>
                              
                              <a href="index.php"> <div class="col-md-4 col-xs-12 col-sm-12">
                            <div class="post">
                                
                                  <img class="img-fluid" src="img/<?php echo $row["cover_image"]; ?>" id="containerssimage"  alt="First slide">
                            </div>
                        </div></a>

                        <?php

            }
            ?>
                       
                       <a href="index.php"> <div class="col-md-4 col-xs-12 col-sm-12">
                            <div class="post">
                                <img id="slider" src="img/fl4.jpg" alt="" class="containersimage">
                            </div>
                        </div></a>

                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <div class="post">
                                <img id="slider" src="img/fl4.jpg" alt="" class="containersimage">
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <div class="post">
                                <img id="slider" src="img/fl4.jpg" alt="" class="containersimage">
                            </div>
                        </div>

                         <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <div class="post">
                                <img id="slider" src="img/fl4.jpg" alt="" class="containersimage">
                                
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <div class="post">
                                <img id="slider" src="img/fl4.jpg" alt="" class="containersimage">
                                
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <div class="post">
                                <img id="slider" src="img/fl4.jpg" alt="" class="containersimage">
                                
                            </div>
                        </div>


                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <div class="post">
                                <img id="slider" src="img/fl2.jpg" alt="" class="containersimage">
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <div class="post">
                                <img id="slider" src="img/fl2.jpg" alt="" class="containersimage">
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <div class="post">
                                <img id="slider" src="img/fl2.jpg" alt="" class="containersimage">
                            </div>
                        </div>

                         <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <div class="post">
                                <img id="slider" src="img/fl2.jpg" alt="" class="containersimage">
                                
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <div class="post">
                                <img id="slider" src="img/fl2.jpg" alt="" class="containersimage">
                                
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <div class="post">
                                <img id="slider" src="img/fl2.jpg" alt="" class="containersimage">
                                
                            </div>
                        </div>


                    </div>
                </div>
            </div>



             <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <div class="post">
                                <img id="slider" src="img/background5.jpg" alt="" class="containersimage">
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <div class="post">
                                <img id="slider" src="img/background5.jpg" alt="" class="containersimage">
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <div class="post">
                                <img id="slider" src="img/background5.jpg" alt="" class="containersimage">
                            </div>
                        </div>

                         <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <div class="post">
                                <img id="slider" src="img/background5.jpg" alt="" class="containersimage">
                                
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <div class="post">
                                <img id="slider" src="img/background5.jpg" alt="" class="containersimage">
                                
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <div class="post">
                                <img id="slider" src="img/background5.jpg" alt="" class="containersimage">
                                
                            </div>
                        </div>


                    </div>
                </div>
            </div>


             <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <div class="post">
                                <img id="slider" src="img/background3.jpg" alt="" class="containersimage">
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <div class="post">
                                <img id="slider" src="img/background3.jpg" alt="" class="containersimage">
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <div class="post">
                                <img id="slider" src="img/background3.jpg" alt="" class="containersimage">
                            </div>
                        </div>

                         <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <div class="post">
                                <img id="slider" src="img/background3.jpg" alt="" class="containersimage">
                                
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <div class="post">
                                <img id="slider" src="img/background3.jpg" alt="" class="containersimage">
                                
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <div class="post">
                                <img id="slider" src="img/background3.jpg" alt="" class="containersimage">
                                
                            </div>
                        </div>


                    </div>
                </div>
            </div>

             <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <div class="post">
                                <img id="slider" src="img/back3.jpg" alt="" class="containersimage">
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <div class="post">
                                <img id="slider" src="img/back3.jpg" alt="" class="containersimage">
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <div class="post">
                                <img id="slider" src="img/back3.jpg" alt="" class="containersimage">
                            </div>
                        </div>

                         <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <div class="post">
                                <img id="slider" src="img/back3.jpg" alt="" class="containersimage">
                                
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <div class="post">
                                <img id="slider" src="img/back3.jpg" alt="" class="containersimage">
                                
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-12 col-sm-12" id="line2">
                            <div class="post">
                                <img id="slider" src="img/back3.jpg" alt="" class="containersimage">
                                
                            </div>
                        </div>


                    </div>
                </div>
            </div>



           
          <div class="pagination"></div> 
        </div> 
    
    </div>
</div>


       
          
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










