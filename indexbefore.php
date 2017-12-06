

<?php
  ob_start(); // it is use to cancel any other OUTPUT that might cause HEADER() not to display
  
  session_start();
  require('configdb.php');
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
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



          .view {                
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
         /* background: url("https://mdbootstrap.com/images/regular/city/img%20(6).jpg")no-repeat center center fixed;*/
         background: url("img/background2.jpg")no-repeat center center fixed;
         height: 75%;
      }

      
   @media (max-width: 768px) {
    .full-bg-img,
    .view {
        height: auto;
        position: relative;
    }
}

#header{
  font-family: sans-serif;
}

h3{
  font-family: sans-serif;
}

b{
  font-family: sans-serif;
}

p{
  font-family: sans-serif;
}

h3{
  font-family: sans-serif;
}

h4{
  font-family: sans-serif;
}

h5{
  font-family: sans-serif;
}

#partner{
  height: 150px;
  width: auto;
}

 #select2{
         width:220px;
        border:1px solid white; 
        background-color: white;
      }

      #select3{
         width:220px;
        border:1px solid white; 
        background-color: white;
      }

    </style>
  </head>
<body><!-- Navbar -->
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

            
          
            <li><a href="signupone2.php" class="btn btn-primary">Become A Vendor</a></li>
            <li><a href="signupone.php" class="btn btn-primary">Become A User</a></li>
            <li><a href="login.php" class="btn btn-default">Login</a></li>
          

           
        </ul>
      </div>
    </div>
  </nav>    



  <!--Mask-->
  <div class="view hm-black-strong">
    <div class="full-bg-img flex-center">
      <div class="container-fluid">

        <center style="margin-top: 0px;">   
                  


                  <h2 style="color:white; font-weight: bold; margin-top: 60px; font-family: sans-serif;">Find and book your choice vendors in Nigeria.</h2>
                  <h6 style="color:white;font-family: sans-serif;">Search through thousands of available vendors and service providers </h6> 
                </center>

                <br/>


              
        <div class="row">
           <!--First column-->
        <div class="col-md-9 col-sm-12 col-xs-12">
          <div class="container">
            <div class="row">
                
              


                <?php
                  if (isset($_POST['submit'])) {
                    $vendors=$_POST['vendors'];
                    $location=$_POST['location'];
                    $city=$_POST['city'];
                    switch ($vendors . $location . $city) {

                      case 'choose':
                      header("location:index.php");
                        break;

                      # BEGINING PHOTGRAPHER LOCATION
                      case 'photographer'.'ikeja'.'Lagos':
                      header("location:ikejaphotogra.php");
                        break;
                        
                         case 'photographer'.'epe'.'Lagos':
                      header("location:epephotogra.php");
                        break;
                        
                        case 'photographer'.'badagry'.'Lagos':
                      header("location:badagryphotogra.php");
                        break;
                        
                         case 'photographer'.'mushin'.'Lagos':
                      header("location:mushinphotogra.php");
                        break;

                        case 'photographer'.'lekki'.'Lagos':                
                      header("location:lekkiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'ikorodu'.'Lagos':                
                      header("location:ikoroduphotogra.php");                     
                        break;
                        
                          case 'photographer'.'oshodi'.'Lagos':                
                      header("location:oshodiphotogra.php");                     
                        break;
                        
                          case 'photographer'.'shomolu'.'Lagos':                
                      header("location:shomoluphotogra.php");                     
                        break;
                        
                          case 'photographer'.'surulere'.'Lagos':                
                      header("location:surulerephotogra.php");                     
                        break;
                        
                        case 'photographer'.'ijaye'.'Lagos':                
                      header("location:ijayephotogra.php");                     
                        break;
                        
                          case 'photographer'.'abuleegba'.'Lagos':                
                      header("location:abuleegbaphotogra.php");                     
                        break;

                        case 'photographer'.'maryland'.'Lagos':
                      header("location:marylandphotogra.php");                    break;

                        case 'photographer'.'victoria'.'Lagos':
                      header("location:victoriaphotogra.php");                        break;

                        case 'photographer'.'apapa'.'Lagos':
                      header("location:apapaphotogra.php");                       break;

                        case 'photographer'.'ikotun'.'Lagos':
                      header("location:ikotunphotogra.php");                        break;

                        case 'photographer'.'agege'.'Lagos':
                      header("location:agegephotogra.php");                       break;

                        case 'photographer'.'iyanaipaja'.'Lagos':
                      header("location:iyanaipajaphotogra.php");                        break;

                        case 'photographer'.'berger'.'Lagos':
                      header("location:bergerphotogra.php");                        break;

                        case 'photographer'.'egbeda'.'Lagos':
                      header("location:egbedaphotogra.php");                        break;

                        #END PHOTGRAPHER LOCATION



                        #BEGINING VEDIOGRAPHERS LOCATION
                        case 'vediographer'.'ikeja'.'Lagos':
                      header("location:ikejavediographer.php");
                        break;
                        
                        
                         case 'vediographer'.'mushin'.'Lagos':
                      header("location:mushinvediographer.php");
                        break;
                        
                        case 'vediographer'.'ikorodu'.'Lagos':
                      header("location:ikoroduvediographer.php");
                        break;
                        
                        case 'vediographer'.'oshodi'.'Lagos':
                      header("location:oshodivediographer.php");
                        break;
                        
                        case 'vediographer'.'shomolu'.'Lagos':
                      header("location:shomoluvediographer.php");
                        break;
                        
                        case 'vediographer'.'surulere'.'Lagos':
                      header("location:surulerevediographer.php");
                        break;
                        
                         case 'vediographer'.'epe'.'Lagos':
                      header("location:epevediographer.php");
                        break;
                        
                         case 'vediographer'.'badagry'.'Lagos':
                      header("location:badagryvediographer.php");
                        break;

                          case 'vediographer'.'lekki'.'Lagos':                
                      header("location:lekkivediographer.php");                   
                        break;
                        
                          case 'vediographer'.'abuleegba'.'Lagos':                
                      header("location:abuleegbavediographer.php");                   
                        break;
                        
                          case 'vediographer'.'ijaye'.'Lagos':                
                      header("location:ijayevediographer.php");                   
                        break;

                        case 'vediographer'.'maryland'.'Lagos':
                      header("location:marylandvediographer.php");                    break;

                        case 'vediographer'.'victoria'.'Lagos':
                      header("location:victoriavediographer.php");                        break;

                        case 'vediographer'.'apapa'.'Lagos':
                      header("location:apapavediographer.php");                       break;

                        case 'vediographer'.'ikotun'.'Lagos':
                      header("location:ikotunvediographer.php");                        break;

                        case 'vediographer'.'agege'.'Lagos':
                      header("location:agegevediographer.php");                       break;

                        case 'vediographer'.'iyanaipaja'.'Lagos':
                      header("location:iyanaipajavediographer.php");                        break;

                        case 'vediographer'.'berger'.'Lagos':
                      header("location:bergervediographer.php");                        break;

                        case 'vediographer'.'egbeda'.'Lagos':
                      header("location:egbedavediographer.php");                        break;

                        #END VEDIOGRAPHERS LOCATION


                        #BEGINING CATERERS LOCATION
                        case 'caterers'.'ikeja'.'Lagos':
                      header("location:ikejacaterers.php");
                        break;
                        
                         case 'caterers'.'mushin'.'Lagos':
                      header("location:mushincaterers.php");
                        break;
                        
                         case 'caterers'.'ikorodu'.'Lagos':
                      header("location:ikoroducaterers.php");
                        break;
                        
                          case 'caterers'.'abuleegba'.'Lagos':
                      header("location:abuleegbacaterers.php");
                        break;
                        
                          case 'caterers'.'ijaye'.'Lagos':
                      header("location:ijayecaterers.php");
                        break;
                        
                         case 'caterers'.'oshodi'.'Lagos':
                      header("location:oshodicaterers.php");
                        break;
                        
                         case 'caterers'.'shomolu'.'Lagos':
                      header("location:shomolucaterers.php");
                        break;
                        
                         case 'caterers'.'surulere'.'Lagos':
                      header("location:surulerecaterers.php");
                        break;
                        
                          case 'caterers'.'badagry'.'Lagos':
                      header("location:badagrycaterers.php");
                        break;
                        
                           case 'caterers'.'epe'.'Lagos':
                      header("location:epecaterers.php");
                        break;

                          case 'caterers'.'lekki'.'Lagos':                
                      header("location:lekkicaterers.php");                   
                        break;

                        case 'caterers'.'maryland'.'Lagos':
                      header("location:marylandcaterers.php");                    break;

                        case 'caterers'.'victoria'.'Lagos':
                      header("location:victoriacaterers.php");                        break;

                        case 'caterers'.'apapa'.'Lagos':
                      header("location:apapacaterers.php");                       break;

                        case 'caterers'.'ikotun'.'Lagos':
                      header("location:ikotuncaterers.php");                        break;

                        case 'caterers'.'agege'.'Lagos':
                      header("location:agegecaterers.php");                       break;
                     

                        case 'caterers'.'iyanaipaja'.'Lagos':
                      header("location:iyanaipajacaterers.php");                        break;

                        case 'caterers'.'berger'.'Lagos':
                      header("location:bergercaterers.php");                        break;

                        case 'caterers'.'egbeda'.'Lagos':
                      header("location:egbedacaterers.php");                        break;

                        #END CATERERS LOCATION


                        #BEGINING WINESELLER LOCATION
                        case 'wineseller'.'ikeja'.'Lagos':
                      header("location:ikejawineseller.php");
                        break;
                        
                        case 'wineseller'.'mushin'.'Lagos':
                      header("location:mushinwineseller.php");
                        break;
                        
                         case 'wineseller'.'ikorodu'.'Lagos':
                      header("location:ikoroduwineseller.php");
                        break;
                        
                         case 'wineseller'.'oshodi'.'Lagos':
                      header("location:oshodiwineseller.php");
                        break;
                        
                         case 'wineseller'.'shomolu'.'Lagos':
                      header("location:shomoluwineseller.php");
                        break;
                        
                           case 'wineseller'.'abuleegba'.'Lagos':
                      header("location:abuleegbawineseller.php");
                        break;
                        
                           case 'wineseller'.'ijaye'.'Lagos':
                      header("location:ijayewineseller.php");
                        break;
                        
                         case 'wineseller'.'surulere'.'Lagos':
                      header("location:surulerewineseller.php");
                        break;
                        
                         case 'wineseller'.'badagry'.'Lagos':
                      header("location:badagrywineseller.php");
                        break;
                        
                         case 'wineseller'.'epe'.'Lagos':
                      header("location:epewineseller.php");
                        break;

                            case 'wineseller'.'lekki'.'Lagos':                
                      header("location:lekkiwineseller.php");                   
                        break;

                        case 'wineseller'.'maryland'.'Lagos':
                      header("location:marylandwineseller.php");                    break;

                        case 'wineseller'.'victoria'.'Lagos':
                      header("location:victoriawineseller.php");                        break;

                        case 'wineseller'.'apapa'.'Lagos':
                      header("location:apapawineseller.php");                       break;

                        case 'wineseller'.'ikotun'.'Lagos':
                      header("location:ikotunwineseller.php");                        break;

                        case 'wineseller'.'agege'.'Lagos':
                      header("location:agegewineseller.php");                       break;

                        case 'wineseller'.'iyanaipaja'.'Lagos':
                      header("location:iyanaipajawineseller.php");                        break;

                        case 'wineseller'.'berger'.'Lagos':
                      header("location:bergerwineseller.php");                        break;

                        case 'wineseller'.'egbeda'.'Lagos':
                      header("location:egbedawineseller.php");                        break;

                        #END WINESELLER LOCATION


                      #BEGINING OF ENTERTAINER LOCATION
                        case 'entertainer'.'ikeja'.'Lagos':
                        header("location:ikejaentertainer.php");
                        break;
                        
                        case 'entertainer'.'mushin'.'Lagos':
                        header("location:mushinentertainer.php");
                        break;
                        
                        case 'entertainer'.'ikorodu'.'Lagos':
                        header("location:ikoroduentertainer.php");
                        break;
                        
                        case 'entertainer'.'oshodi'.'Lagos':
                        header("location:oshodientertainer.php");
                        break;
                        
                        case 'entertainer'.'shomolu'.'Lagos':
                        header("location:shomoluentertainer.php");
                        break;
                        
                        case 'entertainer'.'surulere'.'Lagos':
                        header("location:surulereentertainer.php");
                        break;
                        
                        case 'entertainer'.'abuleegba'.'Lagos':
                        header("location:abuleegbaentertainer.php");
                        break;
                        
                        
                        case 'entertainer'.'ijaye'.'Lagos':
                        header("location:ijayeentertainer.php");
                        break;
                        
                        case 'entertainer'.'badagry'.'Lagos':
                        header("location:badagryentertainer.php");
                        break;
                        
                        case 'entertainer'.'epe'.'Lagos':
                        header("location:epeentertainer.php");
                        break;

                            case 'entertainer'.'lekki'.'Lagos':               
                      header("location:lekkientertainer.php");                    
                        break;

                        case 'entertainer'.'maryland'.'Lagos':
                      header("location:marylandentertainer.php");                   break;

                        case 'entertainer'.'victoria'.'Lagos':
                      header("location:victoriaentertainer.php");                       break;

                        case 'entertainer'.'apapa'.'Lagos':
                      header("location:apapaentertainer.php");                        break;

                        case 'entertainer'.'ikotun'.'Lagos':
                      header("location:ikotunentertainer.php");                       break;

                        case 'entertainer'.'agege'.'Lagos':
                      header("location:agegeentertainer.php");                        break;

                        case 'entertainer'.'iyanaipaja'.'Lagos':
                      header("location:iyanaipajaentertainer.php");                       break;

                        case 'entertainer'.'berger'.'Lagos':
                      header("location:bergerentertainer.php");                       break;

                        case 'entertainer'.'egbeda'.'Lagos':
                      header("location:egbedaentertainer.php");                       break;
                        #END ENTERTAINER / MC LOCATION


                        #BEGINING MUSIC ARTIST LOCATION
                        case 'music'.'ikeja'.'Lagos':
                      header("location:ikejamusicband.php");
                        break;
                        
                        case 'music'.'mushin'.'Lagos':
                      header("location:mushinmusicband.php");
                        break;
                        
                        case 'music'.'ikorodu'.'Lagos':
                      header("location:ikorodumusicband.php");
                        break;
                        
                        case 'music'.'oshodi'.'Lagos':
                      header("location:oshodimusicband.php");
                        break;
                        
                        case 'music'.'abuleegba'.'Lagos':
                      header("location:abuleegbamusicband.php");
                        break;
                        
                        case 'music'.'ijaye'.'Lagos':
                      header("location:ijayemusicband.php");
                        break;
                        
                        
                        case 'music'.'shomolu'.'Lagos':
                      header("location:shomolumusicband.php");
                        break;
                        
                        case 'music'.'surulere'.'Lagos':
                      header("location:suruleremusicband.php");
                        break;
                        
                          case 'music'.'badagry'.'Lagos':
                      header("location:badagrymusicband.php");
                        break;
                        
                           case 'music'.'epe'.'Lagos':
                      header("location:epemusicband.php");
                        break;

                        case 'music'.'lekki'.'Lagos':               
                      header("location:lekkimusicband.php");                    
                        break;

                        case 'music'.'maryland'.'Lagos':
                      header("location:marylandmusicband.php");                   break;

                        case 'music'.'victoria'.'Lagos':
                      header("location:victoriamusicband.php");                       break;

                        case 'music'.'apapa'.'Lagos':
                      header("location:apapamusicband.php");                        break;

                        case 'music'.'ikotun'.'Lagos':
                      header("location:ikotunmusicband.php");                       break;

                        case 'music'.'agege'.'Lagos':
                      header("location:agegemusicband.php");                        break;

                        case 'music'.'iyanaipaja'.'Lagos':
                      header("location:iyanaipajamusicband.php");                       break;

                        case 'music'.'berger'.'Lagos':
                      header("location:bergermusicband.php");                       break;

                        case 'music'.'egbeda'.'Lagos':
                      header("location:egbedamusicband.php");                       break;
                        #END MUSIC ARTIST LOCATION


                      #BEGINING HALL DECORATORS LOCATION
                        case 'halldecorators'.'ikeja'.'Lagos':
                      header("location:ikejahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'mushin'.'Lagos':
                      header("location:mushinhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ikorodu'.'Lagos':
                      header("location:ikoroduhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'abuleegba'.'Lagos':
                      header("location:abuleegbahalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'ijaye'.'Lagos':
                      header("location:ijayehalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'oshodi'.'Lagos':
                      header("location:oshodihalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'shomolu'.'Lagos':
                      header("location:shomoluhalldecorators.php");
                        break;
                        
                        case 'halldecorators'.'surulere'.'Lagos':
                      header("location:surulerehalldecorators.php");
                        break;
                        
                         case 'halldecorators'.'badagry'.'Lagos':
                      header("location:badagryhalldecorators.php");
                        break;
                        
                          case 'halldecorators'.'epe'.'Lagos':
                      header("location:epehalldecorators.php");
                        break;

                          case 'halldecorators'.'lekki'.'Lagos':                
                      header("location:lekkihalldecorators.php");                   
                        break;

                        case 'halldecorators'.'maryland'.'Lagos':
                      header("location:marylandhalldecorators.php");                    break;

                        case 'halldecorators'.'victoria'.'Lagos':
                      header("location:victoriahalldecorators.php");                        break;

                        case 'halldecorators'.'apapa'.'Lagos':
                      header("location:apapahalldecorators.php");                       break;

                        case 'halldecorators'.'ikotun'.'Lagos':
                      header("location:ikotunhalldecorators.php");                        break;

                        case 'halldecorators'.'agege'.'Lagos':
                      header("location:agegehalldecorators.php");                       break;

                        case 'halldecorators'.'iyanaipaja'.'Lagos':
                      header("location:iyanaipajahalldecorators.php");                        break;

                        case 'halldecorators'.'berger'.'Lagos':
                      header("location:bergerhalldecorators.php");                        break;

                        case 'halldecorators'.'egbeda'.'Lagos':
                      header("location:egbedahalldecorators.php");                        break;
                        #END HALL DECORATORS LOCATION


                        #BEGINING Djs LOCATION
                        case 'dj'.'ikeja'.'Lagos':
                      header("location:ikejadj.php");
                        break;
                        
                         case 'dj'.'mushin'.'Lagos':
                      header("location:mushindj.php");
                        break;
                        
                        case 'dj'.'ikorodu'.'Lagos':
                      header("location:ikorodudj.php");
                        break;
                        
                        case 'dj'.'oshodi'.'Lagos':
                      header("location:oshodidj.php");
                        break;
                        
                        case 'dj'.'abuleegba'.'Lagos':
                      header("location:abuleegbadj.php");
                        break;
                        
                        case 'dj'.'ijaye'.'Lagos':
                      header("location:ijayedj.php");
                        break;
                        
                        case 'dj'.'shomolu'.'Lagos':
                      header("location:shomoludj.php");
                        break;
                        
                        case 'dj'.'surulere'.'Lagos':
                      header("location:suruleredj.php");
                        break;
                        
                        case 'dj'.'badagry'.'Lagos':
                      header("location:badagrydj.php");
                        break;
                        
                        case 'dj'.'epe'.'Lagos':
                      header("location:epedj.php");
                        break;

                            case 'dj'.'lekki'.'Lagos':                
                      header("location:lekkidj.php");                   
                        break;

                        case 'dj'.'maryland'.'Lagos':
                      header("location:marylanddj.php");                    
                        break;

                        case 'dj'.'victoria'.'Lagos':
                      header("location:victoriadj.php");                        break;

                        case 'dj'.'apapa'.'Lagos':
                      header("location:apapadj.php");                       break;

                        case 'dj'.'ikotun'.'Lagos':
                      header("location:ikotundj.php");                        break;

                        case 'dj'.'agege'.'Lagos':
                      header("location:agegedj.php");                       
                      break;

                        case 'dj'.'iyanaipaja'.'Lagos':
                      header("location:iyanaipajadj.php");                        break;

                        case 'dj'.'berger'.'Lagos':
                      header("location:bergerdj.php");                        break;

                        case 'dj'.'egbeda'.'Lagos':
                      header("location:egbedadj.php");                        break;
                        #END Djs LOCATION
                      

                        #BEGINING MARKUP LOCATION
                        case 'markup'.'ikeja'.'Lagos':
                      header("location:ikejamarkup.php");
                        break;
                        
                         case 'markup'.'mushin'.'Lagos':
                      header("location:mushinmarkup.php");
                        break;
                        
                        case 'markup'.'abuleegba'.'Lagos':
                      header("location:abuleegbamarkup.php");
                        break;
                        
                        case 'markup'.'ijaye'.'Lagos':
                      header("location:ijayemarkup.php");
                        break;
                        
                          case 'markup'.'ikorodu'.'Lagos':
                      header("location:ikorodumarkup.php");
                        break;
                        
                          case 'markup'.'oshodi'.'Lagos':
                      header("location:oshodimarkup.php");
                        break;
                        
                          case 'markup'.'shomolu'.'Lagos':
                      header("location:shomolumarkup.php");
                        break;
                        
                          case 'markup'.'surulere'.'Lagos':
                      header("location:suruleremarkup.php");
                        break;
                        
                        
                        case 'markup'.'badagry'.'Lagos':
                      header("location:badagrymarkup.php");
                        break;
                        
                        case 'markup'.'epe'.'Lagos':
                      header("location:epemarkup.php");
                        break;


                        case 'markup'.'lekki'.'Lagos':                
                      header("location:lekkimarkup.php");                   
                        break;

                        case 'markup'.'maryland'.'Lagos':
                      header("location:marylandmarkup.php");                    
                      break;

                        case 'markup'.'victoria'.'Lagos':
                      header("location:victoriamarkup.php");                        break;

                        case 'markup'.'apapa'.'Lagos':
                      header("location:apapamarkup.php");                       break;

                        case 'markup'.'ikotun'.'Lagos':
                      header("location:ikotunmarkup.php");                        break;

                        case 'markup'.'agege'.'Lagos':
                      header("location:agegemarkup.php");                       break;

                        case 'markup'.'iyanaipaja'.'Lagos':
                      header("location:iyanaipajamarkup.php");                        break;

                        case 'markup'.'berger'.'Lagos':
                      header("location:bergermarkup.php");                        break;

                        case 'markup'.'egbeda'.'Lagos':
                      header("location:egbedamarkup.php");                        break;
                        #END MARKUP LOCATION

                      default:
                        
                        break;
                    }
                    # code...
                  }
                  
                ?>
            <center>
              <form class="form-inline" role="form" action="index.php" method="POST">
                <div class="col-md-3 col-sm-12 col-xs-12" >
                  <div class="form"> 
                       <label for="Country" control-label" ></label><br/>
                        <p id="header">I Am Looking For</p>
                        <select class="form-control"  name="vendors"  id="vendors" >
                          <option value="choose">Choose a Vendor</option> 
                          <option value="music">Music Band</option>
                          <option value="caterers">Caterers</option>
                          <option value="photographer">Photographer</option> 
                          <option value="vediographer">Vediographers</option>
                           <option value="entertainer">Entertainer/MC</option>
                          <option value="wineseller">Wine sellers</option>
                          <option value="halldecorators">Hall decorators</option>
                          <option value="dj">Dj</option>
                          <option value="markup">Make-up artists</option>

                          
                        </select> 
                    </div>
                </div>

                <div class="col-md-3 col-sm-12 col-xs-12" >
                     <div class="form"> 
                       <label for="Country"  control-label" ></label><br/>
                        <p id="header">In What City</p>
                        <select class="form-control" name="city"  id="select2">
                          <option value="choose">Choose a City</option> 
                          <option value="Abia">Abia State</option>
                          <option value="Adamawa">Adamawa State </option>
                          <option value="Anambra">Anambra State</option>
                          <option value="AkwaIbom">Akwa Ibom State</option>
                          <option value="Bauchi">Bauchi State </option>
                          <option value="Bayelsa">Bayelsa State</option>
                          <option value="Benue">Benue State</option>
                          <option value="Borno"> Borno State </option>
                          <option value="CrossRiver">Cross River state </option>
                          <option value="Delta"> Delta State</option>
                          <option value="Ebonyi">Ebonyi State </option>
                          <option value="Edo"> Edo State</option>
                          <option value="Ekiti">Ekiti State</option>
                          <option value="Enugu"> Enugu State </option>
                          <option value="Gombe">Gombe State</option>
                          <option value="Imo">Imo State</option>
                          <option value="Jigawa">Jigawa State </option>
                          <option value="Kaduna">Kaduna State</option>
                          <option value="Abuja">Abuja (F.C.T)</option>
                          <option value="Kano"> Kano State </option>
                          <option value="Katsina">Katsina state </option>
                          <option value="Kebbi"> Kebbi State</option>
                          <option value="Kogi">Kogi State </option>
                          <option value="Kwara"> Kwara State</option>
                          <option value="Lagos">Lagos State</option>
                          <option value="Nasarawa">Nasarawa State </option>
                          <option value="Niger"> Niger State</option>
                          <option value="Ogun"> Ogun State</option>
                          <option value="Ondo">Ondo State </option>
                          <option value="Osun"> Osun State</option>
                          <option value="Oyo"> Oyo State</option>
                          <option value="Plateau">Plateau State </option>
                          <option value="Rivers"> Rivers State</option>
                          <option value="Sokoto"> Sokoto State</option>
                          <option value="Taraba">Taraba State </option>
                          <option value="Yobe"> Yobe State</option>
                          <option value="Zamfara"> Zamfara State</option>
                        </select> 
                    </div>
                </div>

                <div class="col-md-3 col-sm-12 col-xs-12">
                      
                    <div class="form" > 
                       <label for="Country" class="col-md-2 col-sm-12 col-xs-12  control-label"></label><br/>
                      <p id="header">In What Location</p>
                        <select class="form-control" id="select3" name="location">
                          <option>Choose a Location</option> 
                           <!--BEGINING OF ABIA LOCAL GOVERNMENT-->
                          <option data-value="Abia" value="Aba North">Aba North</option>
                          <option data-value="Abia" value="Aba South">Aba South</option>
                          <option data-value="Abia" value="Arochukwu">Arochukwu</option>
                          <option data-value="Abia" value="Aiyekire">Aiyekire</option>
                            <option data-value="Abia" value="Anka">Anka</option>
                          <option data-value="Abia" value="Bende">Bende</option>
                          <option data-value="Abia" value="Isiala Ngwa South">Isiala Ngwa South</option>
                          <option data-value="Abia" value="Ikwuano">Ikwuano</option>
                          <option data-value="Abia" value="Isiala">Isiala</option>
                          <option data-value="Abia" value="Ngwa North">Ngwa North</option>
                          <option data-value="Abia" value="Isukwuato">Isukwuato</option>
                          <option data-value="Abia" value="Ukwa West">Ukwa West</option>
                          <option data-value="Abia" value="Ukwa East">Ukwa East</option>
                          <option data-value="Abia" value="Umuahia">Umuahia</option>
                          <option data-value="Abia" value="Umuahia South">Umuahia South</option>
                           <!--END OF ABIA LOCAL GOVERNMENT-->


                           <!--BEGINING OF ADAMAWA LOCAL GOVERNMENT-->
                          <option data-value="Adamawa" value="Demsa">Demsa</option>
                          <option data-value="Adamawa" value="Fufore">Fufore</option>
                          <option data-value="Adamawa" value="Ganye">Ganye</option>
                          <option data-value="Adamawa" value="Ganye">Ganye</option>
                          <option data-value="Adamawa" value="Gombi">Gombi</option>
                          <option data-value="Adamawa" value="Jada">Jada</option>
                          <option data-value="Adamawa" value="Yola North">Yola North</option>
                          <option data-value="Adamawa" value="Lamurde">Lamurde</option>
                          <option data-value="Adamawa" value="Madagali">Madagali</option>
                          <option data-value="Adamawa" value="Maiha">Maiha</option>
                          <option data-value="Adamawa" value="Mayo-Belwa">Mayo-Belwa</option>
                          <option data-value="Adamawa" value="Michika">Michika</option>
                          <option data-value="Adamawa" value="Mubi South">Mubi South</option>
                          <option data-value="Adamawa" value="Numna">Numna</option>
                          <option data-value="Adamawa" value="Shelleng">Shelleng</option>
                          <option data-value="Adamawa" value="Song">Song</option>
                          <option data-value="Adamawa" value="Toungo">Toungo</option>
                          <option data-value="Adamawa" value="Jimeta">Jimeta</option>
                          <option data-value="Adamawa" value="Yola South">Yola South</option>
                          <option data-value="Adamawa" value="Hung">Hung</option>
                           <!--END OF ADAMAWA LOCAL GOVERNMENT-->


                           <!--BEGINING OF ANAMBRA LOCAL GOVERNMENT-->
                          <option data-value="Anambra" value="Aguata">Aguata</option>
                          <option data-value="Anambra" value="Anambra">Anambra</option>
                          <option data-value="Anambra" value="Anambra West">Anambra West</option>
                          <option data-value="Anambra" value="Anaocha">Anaocha</option>
                          <option data-value="Anambra" value="Awka South">Awka South</option>
                          <option data-value="Anambra" value="Awka North">Awka North</option>
                          <option data-value="Anambra" value="Ogbaru">Ogbaru</option>
                          <option data-value="Anambra" value="Onitsha South">Onitsha South</option>
                          <option data-value="Anambra" value="Onitsha North">Onitsha North</option>
                          <option data-value="Anambra" value="Orumba North">Orumba North</option>
                          <option data-value="Anambra" value="Orumba South">Orumba South</option>
                          <option data-value="Anambra" value="Oyi">Oyi</option>
                           <!--ENDLOCAL GOVERNMENT-->

                           <!--BEGINING OF AKWA IBOM LOCAL GOVERNMENT-->
                           <optio data-value="AkwaIbom"n value="Abak">Abak</option>
                          <option data-value="AkwaIbom" value="Eastern Obolo">Eastern Obolo</option>
                          <option data-value="AkwaIbom" value="Eket">Eket</option>
                          <option data-value="AkwaIbom" value="Essien Udim">Essien Udim</option>
                          <option data-value="AkwaIbom" value="Etimekpo">Etimekpo</option>
                          <option data-value="AkwaIbom" value="Etinan">Etinan</option>
                          <option data-value="AkwaIbom" value="Ibeno">Ibeno</option>
                          <option data-value="AkwaIbom" value="Ibesikpo Asutan">Ibesikpo Asutan</option>
                          <option data-value="AkwaIbom" value="Ibiono Ibom">Ibiono Ibom</option>
                          <option data-value="AkwaIbom" value="Ika">Ika</option>
                          <option data-value="AkwaIbom" value="Ikono">Ikono</option>
                          <option data-value="AkwaIbom" value="Ikot Abasi">Ikot Abasi</option>
                          <option data-value="AkwaIbom" value="Ikot Ekpene">Ikot Ekpene</option>
                          <option data-value="AkwaIbom" value="Ini">Ini</option>
                          <option data-value="AkwaIbom" value="Itu">Itu</option>
                          <option data-value="AkwaIbom" value="Mbo">Mbo</option>
                          <option data-value="AkwaIbom" value="Mkpat Enin">Mkpat Enin</option>
                          <option data-value="AkwaIbom" value="Nsit Ibom">Nsit Ibom</option>
                          <option data-value="AkwaIbom" value="Nsit Ubium">Nsit Ubium</option>
                          <option data-value="AkwaIbom" value="Obot Akara">Obot Akara</option>
                          <option data-value="AkwaIbom" value="Okobo">Okobo</option>
                          <option data-value="AkwaIbom" value="Onna">Onna</option>
                          <option data-value="AkwaIbom" value="Orukanam">Orukanam</option>
                          <option data-value="AkwaIbom" value="Oron">Oron</option>
                          <option data-value="AkwaIbom" value="Udung Uko">Udung Uko</option>
                          <option data-value="AkwaIbom" value="Ukanafun">Ukanafun</option>
                          <option data-value="AkwaIbom" value="Esit Eket">Esit Eket</option>
                          <option data-value="AkwaIbom" value="Uruan">Uruan</option>
                          <option data-value="AkwaIbom" value="Urue Offoung">Urue Offoung</option>
                          <option data-value="AkwaIbom" value="Oruko Ete">Oruko Ete</option>
                          <option data-value="AkwaIbom" value="Uyo">Uyo</option>
                          <!--END OF AKWA IBOM LOCAL GOVERNMENT-->



                          <!--BEGINING OF BAUCHI LOCAL GOVERNMENT-->
                          <option data-value="Bauchi" value="Alkaleri">Alkaleri</option>
                          <option data-value="Bauchi" value="Bauchi">Bauchi</option>
                          <option data-value="Bauchi" value="Bogoro">Bogoro</option>
                          <option data-value="Bauchi" value=" Darazo"> Darazo</option>
                          <option data-value="Bauchi" value="Dass">Dass</option>
                          <option data-value="Bauchi" value="Gamawa">Gamawa</option>
                          <option data-value="Bauchi" value="Ganjuwa">Ganjuwa</option>
                          <option data-value="Bauchi" value="Giade">Giade</option>
                          <option data-value="Bauchi" value="Jama`are">Jama`are</option>
                          <option data-value="Bauchi" value="Katagum">Katagum</option>
                          <option data-value="Bauchi" value="Kirfi">Kirfi</option>
                          <option data-value="Bauchi" value=" Misau"> Misau</option>
                          <option data-value="Bauchi" value="Ningi">Ningi</option>
                          <option data-value="Bauchi" value="hira">hira</option>
                          <option data-value="Bauchi" value="Tafawa Balewa">Tafawa Balewa</option>
                          <option data-value="Bauchi" value="Itas gadau">Itas gadau</option>
                          <option data-value="Bauchi" value="Toro">Toro</option>
                          <option data-value="Bauchi" value="Warji">Warji</option>
                          <option data-value="Bauchi" value="Zaki">Zaki</option>
                          <option data-value="Bauchi" value="Dambam">Dambam</option>
                          <!--END Of BAUCHI LOCAL GOVERNMENT-->


                          <!--BEGINING OF BAYELSA LOCAL GOVERNMENT-->
                          <option data-value="Bayelsa" value="Brass">Brass</option>
                          <option data-value="Bayelsa" value="Ekeremor">Ekeremor</option>
                          <option data-value="Bayelsa" value="Kolok/Opokuma">Kolok/Opokuma</option>
                          <option data-value="Bayelsa" value="Nembe">Nembe</option>
                          <option data-value="Bayelsa" value="Ogbia">Ogbia</option>
                          <option data-value="Bayelsa" value="Sagbama">Sagbama</option>
                          <option data-value="Bayelsa" value="Southern Ijaw">Southern Ijaw</option>
                          <option data-value="Bayelsa" value="Yenagoa">Yenagoa</option>
                          <option data-value="Bayelsa" value="Membe">Membe</option>
                           <!--END OF BAYELSA LOCAL GOVERNMENT-->



                            <!--BEGINING OF BENUE LOCAL GOVERNMENT-->
                            <option data-value="Benue" value="Ador">Ador</option>
                          <option data-value="Benue" value="Agatu">Agatu</option>
                          <option data-value="Benue" value="Apa">Apa</option>
                          <option data-value="Benue" value="Buruku">Buruku</option>
                          <option data-value="Benue" value="Gboko">Gboko</option>
                          <option data-value="Benue" value="Guma">Guma</option>
                          <option data-value="Benue" value="Gwer east">Gwer east</option>
                          <option data-value="Benue" value="Kastina,-ala">Kastina,-ala</option>
                          <option data-value="Benue" value="Kwande">Kwande</option>
                          <option data-value="Benue" value="Logo">Logo</option>
                          <option data-value="Benue" value="Makurdii">Makurdii</option>
                          <option data-value="Benue" value="Obi">Obi</option>
                          <option data-value="Benue" value="Ogbadibo">Ogbadibo</option>
                          <option data-value="Benue" value="Ohimini">Ohimini</option>
                          <option data-value="Benue" value="Oju">Oju</option>
                          <option data-value="Benue" value=" Okpokwu">Okpokwu</option>
                          <option data-value="Benue" value="Oturkpo">Oturkpo</option>
                          <option data-value="Benue" value="Tarka">Tarka</option>
                          <option data-value="Benue" value="Ukum">Ukum</option>
                          <option data-value="Benue" value="Vandekya">Vandekya</option>
                           <!--END OF BENUE LOCAL GOVERNMENT-->


                           <!--END OF BORNO LOCAL GOVERNMENT-->
                          <option data-value="Borno" value="Abadan">Abadan</option>
                          <option data-value="Borno" value="Askira/Uba">Askira/Uba</option>
                          <option data-value="Borno" value="Bama">Bama</option>
                          <option data-value="Borno" value="Biu">Biu</option>
                          <option data-value="Borno" value="Chibok">Chibok</option>
                          <option data-value="Borno" value="Damboa">Damboa</option>
                          <option data-value="Borno" value="Dikwagubio">Dikwagubio</option>
                          <option data-value="Borno" value="Guzamala">Guzamala</option>
                          <option data-value="Borno" value="Gwoza">Gwoza</option>
                          <option data-value="Borno" value="Hawul">Hawul</option>
                          <option data-value="Borno" value="Jere">Jere</option>
                          <option data-value="Borno" value="Kaga">Kaga</option>
                          <option data-value="Borno" value="Kalka/Balge">Kalka/Balge</option>
                          <option data-value="Borno" value="Konduga">Konduga</option>
                          <option data-value="Borno" value="Kukawa">Kukawa</option>
                          <option data-value="Borno" value="Kwaya-ku">Kwaya-ku</option>
                          <option data-value="Borno" value="Mafa">Mafa</option>
                          <option data-value="Borno" value="Magumeri">Magumeri</option>
                          <option data-value="Borno" value="Maiduguri">Maiduguri</option>
                          <option data-value="Borno" value="Marte">Marte</option>
                          <option data-value="Borno" value="Mobbar">Mobbar</option>
                          <option data-value="Borno" value="Monguno">Monguno</option>
                          <option data-value="Borno" value="Ngala">Ngala</option>
                          <option data-value="Borno" value="Nganzai">Nganzai</option>
                          <option data-value="Borno" value="Shani">Shani</option>
                          <!--END OF BORNO LOCAL GOVERNMENT-->


                          <!--BEGINING OF CROSS RIVER LOCAL GOVERNMENT-->
                          <option data-value="CrossRiver" value="Abia">Abia</option>
                          <option data-value="CrossRiver" value="Akampa">Akampa</option>
                          <option data-value="CrossRiver" value="Akpabuyo">Akpabuyo</option>
                          <option data-value="CrossRiver" value="Bakassi">Bakassi</option>
                          <option data-value="CrossRiver" value="Bekwara">Bekwara</option>
                          <option data-value="CrossRiver" value="Biase">Biase</option>
                          <option data-value="CrossRiver" value="Boki">Boki</option>
                          <option data-value="CrossRiver" value="Calabar south">Calabar south</option>
                          <option data-value="CrossRiver" value="Etung">Etung</option>
                          <option data-value="CrossRiver" value="Ikom">Ikom</option>
                          <option data-value="CrossRiver" value="Obanliku">Obanliku</option>
                          <option data-value="CrossRiver" value="Obubra">Obubra</option>
                          <option data-value="CrossRiver" value="Odukpani">Odukpani</option>
                          <option data-value="CrossRiver" value="Ogoja">Ogoja</option>
                          <option data-value="CrossRiver" value="Ugep north">Ugep north</option>
                          <option data-value="CrossRiver" value=" Yala">Yala</option>
                          <option data-value="CrossRiver" value="Yarkur">Yarkur</option>
                          <!--END OF CROSS RIVER LOCAL GOVERNMENT-->



                          <!--BEGINING OF DELTA LOCAL GOVERNMENT-->
                          <option data-value="Delta" value="Aniocha south">Aniocha south</option>
                          <option data-value="Delta" value="Anioha">Anioha</option>
                          <option data-value="Delta" value="Bomadi">Bomadi</option>
                          <option data-value="Delta" value="Burutu">Burutu</option>
                          <option data-value="Delta" value="Ethiope west">Ethiope west</option>
                          <option data-value="Delta" value="Ethiope east">Ethiope east</option>
                          <option data-value="Delta" value="Ika south">Ika south</option>
                          <option data-value="Delta" value="Ika north east">Ika north east</option>
                          <option data-value="Delta" value="Isoko south">Isoko south</option>
                          <option data-value="Delta" value="Isoko north">Isoko north</option>
                          <option data-value="Delta" value="Ndokwa east">Ndokwa east</option>
                          <option data-value="Delta" value="Ndokwa west">Ndokwa west</option>
                          <option data-value="Delta" value="Okpe">Okpe</option>
                          <option data-value="Delta" value="Oshimili north">Oshimili north</option>
                          <option data-value="Delta" value="Oshimili south">Oshimili south</option>
                          <option data-value="Delta" value="Patani">Patani</option>
                          <option data-value="Delta" value="Sapele">Sapele</option>
                          <option data-value="Delta" value="Udu">Udu</option>
                          <option data-value="Delta" value="Ughelli south">Ughelli south</option>
                          <option data-value="Delta" value="Ughelli north">Ughelli north</option>
                          <option data-value="Delta" value="Ukwuani">Ukwuani</option>
                          <option data-value="Delta" value="Uviwie">Uviwie</option>
                          <option data-value="Delta" value="Warri central">Warri central</option>
                          <option data-value="Delta" value="Warri north">Warri north</option>
                          <option data-value="Delta" value="Warri south">Warri south</option>
                          <!--END OF DELTA LOCAL GOVERNMENT-->

                          
                          <!--BEGINING OF EBONYI STATE LOCAL GOVERNMENT-->
                          <option data-value="Ebonyi" value="Abakaliki">Abakaliki</option>
                          <option data-value="Ebonyi" value="Afikpo south">Afikpo south</option>
                          <option data-value="Ebonyi" value="Afikpo north">Afikpo north</option>
                          <option data-value="Ebonyi" value="Ebonyi">Ebonyi</option>
                          <option data-value="Ebonyi" value="Ezza">Ezza</option>
                          <option data-value="Ebonyi" value="Ezza south">Ezza south</option>
                          <option data-value="Ebonyi" value="Ikwo">Ikwo</option>
                          <option data-value="Ebonyi" value="Ishielu">Ishielu</option>
                          <option data-value="Ebonyi" value="Ivo">Ivo</option>
                          <option data-value="Ebonyi" value="Ohaozara">Ohaozara</option>
                          <option data-value="Ebonyi" value="Ohaukwu">Ohaukwu</option>
                          <option data-value="Ebonyi" value="Onicha">Onicha</option>
                          <option data-value="Ebonyi" value="Izzi">Izzi</option>
                          <!--END OF EBONYI STATE LOCAL GOVERNMENT-->


                          <!--BEGINING OF EDO STATE LOCAL GOVERNMENT-->
                             <option data-value="Edo" value="Akoko-Edo">Akoko-Edo</option>
                          <option data-value="Edo" value="Egor">Egor</option>
                          <option data-value="Edo" value="Essann east">Essann east</option>
                          <option data-value="Edo" value="Esan south east">Esan south east</option>
                          <option data-value="Edo" value="Esan central">Esan central</option>
                          <option data-value="Edo" value="Esan west">Esan west</option>
                          <option data-value="Edo" value="Etsako central">Etsako central</option>
                          <option data-value="Edo" value="Etsako east">Etsako east</option>
                          <option data-value="Edo" value="Etsako">Etsako</option>
                          <option data-value="Edo" value="Orhionwon">Orhionwon</option>
                          <option data-value="Edo" value="Ivia north">Ivia north</option>
                          <option data-value="Edo" value="Ovia south west">Ovia south west</option>
                          <option data-value="Edo" value="Owan west">Owan west</option>
                          <option data-value="Edo" value="Owan south">Owan south</option>
                          <option data-value="Edo" value="Uhunwonde">Uhunwonde</option>
                          <!--END OF EDO STATE LOCAL GOVERNMENT-->



                          <!--BEGINING OF EKITI LOCAL GOVERNMENT-->
                          <option data-value="Ekiti" value="Ado Ekiti">Ado Ekiti</option>
                          <option data-value="Ekiti" value="Effon Alaiye">Effon Alaiye</option>
                          <option data-value="Ekiti" value="Ekiti south west">Ekiti south west</option>
                          <option data-value="Ekiti" value="Ekiti west">Ekiti west</option>
                          <option data-value="Ekiti" value="Ekiti east">Ekiti east</option>
                          <option data-value="Ekiti" value="Emure/ise">Emure/ise</option>
                          <option data-value="Ekiti" value="Orun">Orun</option>
                          <option data-value="Ekiti" value="Ido">Ido</option>
                          <option data-value="Ekiti" value="Osi">Osi</option>
                          <option data-value="Ekiti" value=" Ijero"> Ijero</option>
                          <option data-value="Ekiti" value="Ikere">Ikere</option>
                          <option data-value="Ekiti" value="Ikole">Ikole</option>
                          <option data-value="Ekiti" value="Ilejemeje">Ilejemeje</option>
                          <option data-value="Ekiti" value="Irepodun">Irepodun</option>
                          <option data-value="Ekiti" value="Ise/Orun">Ise/Orun</option>
                          <option data-value="Ekiti" value="Moba">Moba</option>
                          <option data-value="Ekiti" value="Oye Ekiti">Oye Ekiti</option>
                          <!--END OF EKITI LOCAL GOVERNMENT-->


                           <!--BEGINING OF ENUGU STATE LOCAL GOVERNMENT-->
                           <option data-value="Enugu" value="Awgu">Awgu</option>
                          <option data-value="Enugu" value="Aninri">Aninri</option>
                          <option data-value="Enugu" value="Enugu east">Enugu east</option>
                          <option data-value="Enugu" value="Enugu south">Enugu south</option>
                          <option data-value="Enugu" value="Enugu north">Enugu north</option>
                          <option data-value="Enugu" value="Ezeagu">Ezeagu</option>
                          <option data-value="Enugu" value="Igbo Eze north">Igbo Eze north</option>
                          <option data-value="Enugu" value="Igbi etiti">Igbi etiti</option>
                          <option data-value="Enugu" value="Nsukka">Nsukka</option>
                          <option data-value="Enugu" value="Oji river">Oji river</option>
                          <option data-value="Enugu" value=" Undenu"> Undenu</option>
                          <option data-value="Enugu" value="Uzo Uwani">Uzo Uwani</option>
                          <option data-value="Enugu" value="Udi">Udi</option>
                           <!--END OF ENUGU STATE LOCAL GOVERNMENT-->
                          
                          
                        
                          
                          <!--BEGINING OF GOMBE STATE LOCAL GOVERNMENT-->
                          <option  data-value="Gombe" value="Akko">Akko</option>
                          <option  data-value="Gombe" value="Balanga">Balanga</option>
                          <option  data-value="Gombe" value="Billiri">Billiri</option>
                          <option  data-value="Gombe" value="Dukku">Dukku</option>
                          <option  data-value="Gombe" value="Dunakaye">Dunakaye</option>
                          <option  data-value="Gombe" value="Gombe">Gombe</option>
                          <option  data-value="Gombe" value="Kaltungo">Kaltungo</option>
                          <option  data-value="Gombe" value="Kwami">Kwami</option>
                          <option  data-value="Gombe" value="Nafada/Bajoga">Nafada/Bajoga</option>
                          <option  data-value="Gombe" value="Shomgom">Shomgom</option>
                          <option  data-value="Gombe" value=" Yamaltu/Deba"> Yamaltu/Deba</option>
                           <!--END OF GOMBE STATE LO  data-value="Benue"CAL GOVERNMENT-->


                           <!--BEGINING OF IMO STATE LOCAL GOVERNMENT-->
                          <option data-value="Imo" value="Aboh-mbaise">Aboh-mbaise</option>
                          <option data-value="Imo" value="Ahiazu-Mbaise">Ahiazu-Mbaise</option>
                          <option data-value="Imo" value="Ehime-Mbaino">Ehime-Mbaino</option>
                          <option data-value="Imo" value="Ezinhite">Ezinhite</option>
                          <option data-value="Imo" value="Ideato North">Ideato North</option>
                          <option data-value="Imo" value="Ideato south">Ideato south</option>
                          <option data-value="Imo" value="Ihitte/Uboma">Ihitte/Uboma</option>
                          <option data-value="Imo" value="Ikeduru">Ikeduru</option>
                          <option data-value="Imo" value="Isiala">Isiala</option>
                          <option data-value="Imo" value="Isu">Isu</option>
                          <option data-value="Imo" value=" Mbaitoli"> Mbaitoli</option>
                          <option data-value="Imo" value="Ngor Okpala">Ngor Okpala</option>
                          <option data-value="Imo" value="Njaba">Njaba</option>
                          <option data-value="Imo" value="Nwangele">Nwangele</option>
                          <option data-value="Imo" value=" Nkwere"> Nkwere</option>
                          <option data-value="Imo" value="Obowo">Obowo</option>
                          <option data-value="Imo" value="Aguta">Aguta</option>
                          <option data-value="Imo" value="Ohaji Egbema">Ohaji Egbema</option>
                          <option data-value="Imo" value="Ogkiwe">Ogkiwe</option>
                          <option data-value="Imo" value="Onuimo">Onuimo</option>
                          <option data-value="Imo" value="Orlu">Orlu</option>
                          <option data-value="Imo" value="Orsu">Orsu</option>
                          <option data-value="Imo" value="Oru west">Oru west</option>
                          <option data-value="Imo" value="Oru">Oru</option>
                          <option data-value="Imo" value="Owerri">Owerri</option>
                          <option data-value="Imo" value="Owerri North">Owerri North</option>
                          <option data-value="Imo" value="Owerri south">Owerri south</option>
                          <!--END OF IMO STATE LOCAL GOVERNMENT-->




                          <!--BEGINING OF JIGAWA STATE LOCAL GOVERNMENT-->
                            <option data-value="Jigawa"  value="Auyo">Auyo</option>
                          <option  data-value="Jigawa" value="Babura">Babura</option>
                          <option  data-value="Jigawa" value="Birnin- Kudu">Birnin- Kudu</option>
                          <option  data-value="Jigawa" value="Birniwa">Birniwa</option>
                          <option  data-value="Jigawa" value="Buji">Buji</option>
                          <option  data-value="Jigawa" value="Dute">Dute</option>
                          <option  data-value="Jigawa" value="Garki">Garki</option>
                          <option  data-value="Jigawa" value="Gagarawa">Gagarawa</option>
                          <option  data-value="Jigawa" value="Gumel">Gumel</option>
                          <option  data-value="Jigawa" value="Guri">Guri</option>
                          <option  data-value="Jigawa" value=" Gwaram"> Gwaram</option>
                          <option  data-value="Jigawa" value="Gwiwa">Gwiwa</option>
                          <option  data-value="Jigawa" value="Hadeji">Hadeji</option>
                          <option  data-value="Jigawa" value="Jahun">Jahun</option>
                          <option  data-value="Jigawa" value="Kafin-Hausa">Kafin-Hausa</option>
                          <option  data-value="Jigawa" value="kaugama">kaugama</option>
                          <option  data-value="Jigawa" value="Kazaure">Kazaure</option>
                          <option  data-value="Jigawa" value="Kirikisamma">Kirikisamma</option>
                          <option  data-value="Jigawa" value="Birnin-magaji">Birnin-magaji</option>
                          <option  data-value="Jigawa" value="Maigatari">Maigatari</option>
                          <option  data-value="Jigawa" value="Malamaduri">Malamaduri</option>
                          <option  data-value="Jigawa" value="Miga">Miga</option>
                          <option  data-value="Jigawa" value="Ringim">Ringim</option>
                          <option  data-value="Jigawa" value="Roni">Roni</option>
                          <option  data-value="Jigawa" value="Sule Tankarka">Sule Tankarka</option>
                          <option  data-value="Jigawa" value="Taura">Taura</option>
                          <option  data-value="Jigawa" value="Yankwasi">Yankwasi</option>
                            <!--END OF JIGAWA STATE LOCAL GOVERNMENT-->



                            <!--BEGINING OF KADUNA STATE LOCAL GOVERNMENT-->
                          <option data-value="Kaduna" value="Brnin Gwari">Brnin Gwari</option>
                          <option data-value="Kaduna" value="Chukun">Chukun</option>
                          <option data-value="Kaduna" value="Giwa">Giwa</option>
                          <option data-value="Kaduna" value="Kajuru">Kajuru</option>
                          <option data-value="Kaduna" value="Igabi">Igabi</option>
                          <option data-value="Kaduna" value="Ikara">Ikara</option>
                          <option data-value="Kaduna" value="Jaba">Jaba</option>
                          <option data-value="Kaduna" value="Jema`a">Jema`a</option>
                          <option data-value="Kaduna" value="Kachia">Kachia</option>
                          <option data-value="Kaduna" value="Kaduna North">Kaduna North</option>
                          <option data-value="Kaduna" value=" Kaduna south"> Kaduna south</option>
                          <option data-value="Kaduna" value="Kagarok">Kagarok</option>
                          <option data-value="Kaduna" value="Kauru">Kauru</option>
                          <option data-value="Kaduna" value="Kabau">Kabau</option>
                          <option data-value="Kaduna" value="Kudan">Kudan</option>
                          <option data-value="Kaduna" value="Kere">Kere</option>
                          <option data-value="Kaduna" value="Makarfi">Makarfi</option>
                          <option data-value="Kaduna" value="Sabongari">Sabongari</option>
                          <option data-value="Kaduna" value="Sanga">Sanga</option>
                          <option data-value="Kaduna" value="Soba">Soba</option>
                          <option data-value="Kaduna" value="Zangon-Kataf">Zangon-Kataf</option>
                          <option data-value="Kaduna" value="Zaria">Zaria</option>
                          <!--END OF KADUNA STATE LOCAL GOVERNMENT-->


                          <!--END OF  FEDERAL CAPITAL TERRITORY (F.C.T) LOCAL GOVERNMENT-->
                          <option data-value="Abuja" value="Abaji">Abaji</option>
                          <option data-value="Abuja" value="Abuja Municipal. Bwari">Abuja Municipal. Bwari</option>
                          <option data-value="Abuja" value="Gwagwalada">Gwagwalada</option>
                          <option data-value="Abuja" value="Kuje">Kuje</option>
                          <option data-value="Abuja" value="Kwali">Kwali</option>
                          <!--END OF  FEDERAL CAPITAL TERRITORY (F.C.T) LOCAL GOVERNMENT-->

 
                          <!--BEGINING  KANO LOCAL GOVERNMENT-->
                          <option data-value="Kano" value="Ajigi">Ajigi</option>
                          <option data-value="Kano" value="Albasu">Albasu</option>
                          <option data-value="Kano" value="Bagwai">Bagwai</option>
                          <option data-value="Kano" value="Bebeji">Bebeji</option>
                          <option data-value="Kano" value="Bichi">Bichi</option>
                          <option data-value="Kano" value="Bunkure">Bunkure</option>
                          <option data-value="Kano" value="Dala">Dala</option>
                          <option data-value="Kano" value="Dambatta">Dambatta</option>
                          <option data-value="Kano" value="Dawakin kudu">Dawakin kudu</option>
                          <option data-value="Kano" value="Dawakin tofa">Dawakin tofa</option>
                          <option data-value="Kano" value=" doguwa"> doguwa</option>
                          <option data-value="Kano" value="Fagge">Fagge</option>
                          <option data-value="Kano" value="Gabasawa">Gabasawa</option>
                          <option data-value="Kano" value="Garko">Garko</option>
                          <option data-value="Kano" value="Garun mallam">Garun mallam</option>
                          <option data-value="Kano" value="Gaya">Gaya</option>
                          <option data-value="Kano" value="Gezawa">Gezawa</option>
                          <option data-value="Kano" value="Gwale">Gwale</option>
                          <option data-value="Kano" value="Gwarzo">Gwarzo</option>
                          <option data-value="Kano" value="Kano">Kano</option>
                          <option data-value="Kano" value="Karay">Karay</option>
                          <option data-value="Kano" value="Kibiya">Kibiya</option>
                          <option data-value="Kano" value="Kiru">Kiru</option>
                          <option data-value="Kano" value="Kumbtso">Kumbtso</option>
                          <option data-value="Kano" value="Kunch">Kunch</option>
                          <option data-value="Kano" value="Kura">Kura</option>
                          <option data-value="Kano" value="Maidobi">Maidobi</option>
                          <option data-value="Kano" value="Makoda">Makoda</option>
                          <option data-value="Kano" value=" MInjibir Nassarawa"> MInjibir Nassarawa</option>
                          <option data-value="Kano" value="Rano">Rano</option>
                          <option data-value="Kano" value="Rimin gado">Rimin gado</option>
                          <option data-value="Kano" value="Rogo">Rogo</option>
                          <option data-value="Kano" value="Shanono">Shanono</option>
                          <option data-value="Kano" value="Sumaila">Sumaila</option>
                          <option data-value="Kano" value="Tarauni">Tarauni</option>
                          <option data-value="Kano" value="Tofa">Tofa</option>
                          <option data-value="Kano" value="Tsanyawa">Tsanyawa</option>
                          <option data-value="Kano" value="Tudunwada">Tudunwada</option>
                          <option data-value="Kano" value="Ungogo">Ungogo</option>
                          <option data-value="Kano" value="Warawa">Warawa</option>
                          <option data-value="Kano" value="Wudil">Wudil</option>
                          <!--END OF  KANO LOCAL GOVERNMENT-->



                          <!--BEGINING  KATSINA LOCAL GOVERNMENT-->
                          <option data-value="Katsina" value="Bakori">Bakori</option>
                          <option data-value="Katsina" value="Batagarawa">Batagarawa</option>
                          <option data-value="Katsina" value="Batsari">Batsari</option>
                          <option data-value="Katsina" value="Baure">Baure</option>
                          <option data-value="Katsina" value="Bindawa">Bindawa</option>
                          <option data-value="Katsina" value="Charanchi">Charanchi</option>
                          <option data-value="Katsina" value="Dan- Musa">Dan- Musa</option>
                          <option data-value="Katsina" value="Dandume">Dandume</option>
                          <option data-value="Katsina" value="Danja">Danja</option>
                          <option data-value="Katsina" value="Daura">Daura</option>
                          <option data-value="Katsina" value=" Dutsi"> Dutsi</option>
                          <option data-value="Katsina" value="Dutsin `ma">Dutsin `ma</option>
                          <option data-value="Katsina" value="Faskar">Faskar</option>
                          <option data-value="Katsina" value="Funtua">Funtua</option>
                          <option data-value="Katsina" value="Ingawa">Ingawa</option>
                          <option data-value="Katsina" value="Jibiya">Jibiya</option>
                          <option data-value="Katsina" value="Kafur">Kafur</option>
                          <option data-value="Katsina" value="Kaita">Kaita</option>
                          <option data-value="Katsina" value="Kankara">Kankara</option>
                          <option data-value="Katsina" value="Kankiya">Kankiya</option>
                          <option data-value="Katsina" value="Katsina">Katsina</option>
                          <option data-value="Katsina" value="Furfi">Furfi</option>
                          <option data-value="Katsina" value="Kusada.Mai aduwa">Kusada.Mai aduwa</option>
                          <option data-value="Katsina" value="Malumfashi">Malumfashi</option>
                          <option data-value="Katsina" value="Mani">Mani</option>
                          <option data-value="Katsina" value="Mash">Mash</option>
                          <option data-value="Katsina" value="Matazu">Matazu</option>
                          <option data-value="Katsina" value="Musawa">Musawa</option>
                          <option data-value="Katsina" value="Rimi">Rimi</option>
                          <option value="Sabuwa">Sabuwa</option>
                          <option data-value="Katsina" value="Safana">Safana</option>
                          <option data-value="Katsina" value="Sandamu">Sandamu</option>
                          <option data-value="Katsina" value="Zango">Zango</option>
                          <!--END data-value="Kastina" OF  KATSINA LOCAL GOVERNMENT-->
          


                      
                          <!--BEGINING OF  KEBBI STATE LOCAL GOVERNMENT-->
                           <option data-value="Kebbi" value="Aliero">Aliero</option>
                          <option data-value="Kebbi" value="Arewa Dandi">Arewa Dandi</option>
                          <option data-value="Kebbi" value="Argungu">Argungu</option>
                          <option data-value="Kebbi" value="Augie">Augie</option>
                          <option data-value="Kebbi" value="Bagudo">Bagudo</option>
                          <option data-value="Kebbi" value="Birnin Kebbi">Birnin Kebbi</option>
                          <option data-value="Kebbi" value="Bunza">Bunza</option>
                          <option data-value="Kebbi" value="Dandi">Dandi</option>
                          <option data-value="Kebbi" value="Danko">Danko</option>
                          <option data-value="Kebbi" value="Fakai">Fakai</option>
                          <option data-value="Kebbi" value=" Gwandu"> Gwandu</option>
                          <option data-value="Kebbi" value="Jeda">Jeda</option>
                          <option data-value="Kebbi" value="Kalgo">Kalgo</option>
                          <option data-value="Kebbi" value="Koko-besse">Koko-besse</option>
                          <option data-value="Kebbi" value="Maiyaama">Maiyaama</option>
                          <option data-value="Kebbi" value="Ngaski">Ngaski</option>
                          <option data-value="Kebbi" value="Sakaba">Sakaba</option>
                          <option data-value="Kebbi" value="Shanga">Shanga</option>
                          <option data-value="Kebbi" value="Suru">Suru</option>
                          <option data-value="Kebbi" value="Wasugu">Wasugu</option>
                          <option data-value="Kebbi" value="Yauri">Yauri</option>
                          <option data-value="Kebbi" value="Zuru">Zuru</option>
                          <!--END OF  KEBBI STATE LOCAL GOVERNMENT-->

                        

                          <!--BEGINING OF  KOGI STATE LOCAL GOVERNMENT-->
                          <option data-value="Kogi" value="Adavi">Adavi</option>
                          <option data-value="Kogi" value="Ajaokuta">Ajaokuta</option>
                          <option data-value="Kogi" value="Ankpa">Ankpa</option>
                          <option data-value="Kogi" value="Bassa">Bassa</option>
                          <option data-value="Kogi" value="Dekina">Dekina</option>
                          <option data-value="Kogi" value="Yagba east">Yagba east</option>
                          <option data-value="Kogi" value="Ibaji">Ibaji</option>
                          <option data-value="Kogi" value="Idah">Idah</option>
                          <option data-value="Kogi" value="Igalamela">Igalamela</option>
                          <option data-value="Kogi" value="Ijumu">Ijumu</option>
                          <option data-value="Kogi" value="Lokoja">Lokoja</option>
                          <option data-value="Kogi" value=" Kabba bunu"> Kabba bunu</option>
                          <option data-value="Kogi" value="Kogi">Kogi</option>
                          <option data-value="Kogi" value="Mopa muro">Mopa muro</option>
                          <option data-value="Kogi" value="Ofu">Ofu</option>
                          <option data-value="Kogi" value="Ogori magongo">Ogori magongo</option>
                          <option data-value="Kogi" value="Okehi">Okehi</option>
                          <option data-value="Kogi" value="Okene">Okene</option>
                          <option data-value="Kogi" value="Olamaboro">Olamaboro</option>
                          <option data-value="Kogi" value="Omala">Omala</option>
                          <option data-value="Kogi" value="Yagba west">Yagba west</option>
                          <!--END OF  KOGI STATE LOCAL GOVERNMENT-->






                          <!--BEGINING OF KWARA LOCAL GOVERNMENT-->
                          <option data-value="Kwara" value="Asa">Asa</option>
                          <option data-value="Kwara" value="Baruten">Baruten</option>
                          <option data-value="Kwara" value="Ede">Ede</option>
                          <option data-value="Kwara" value="Ekiti Kwara state">Ekiti Kwara state</option>
                          <option data-value="Kwara" value="Ifelodun Kwara State">Ifelodun Kwara State</option>
                          <option data-value="Kwara" value="Ilorin south">Ilorin south</option>
                          <option data-value="Kwara" value="Ilorin west">Ilorin west</option>
                          <option data-value="Kwara" value="Ilorin east">Ilorin east</option>
                          <option data-value="Kwara" value="Irepodun Kwara State">Irepodun Kwara State</option>
                          <option data-value="Kwara" value="Isin">Isin</option>
                          <option data-value="Kwara" value=" Kaiama"> Kaiama</option>
                          <option data-value="Kwara" value="Moro">Moro</option>
                          <option data-value="Kwara" value="Offa">Offa</option>
                          <option data-value="Kwara" value="Oke ero">Oke ero</option>
                          <option data-value="Kwara" value="Oyun">Oyun</option>
                          <option data-value="Kwara" value="Pategi">Pategi</option>
                          <!--END OF  KWARA STATE LOCAL GOVERNMENT-->


                          <!--BEGINING OF LAGOS LOCAL GOVERNMENT-->
                          <option data-value="Lagos" value="agege">Agege  Lagos</option>
                          <option data-value="Lagos" value="apapa">Apapa  Lagos</option>
                          <option data-value="Lagos" value="abuleegba">Apapa  Lagos</option>
                          <option data-value="Lagos" value="badagry">Badagry  Lagos</option>
                          <option data-value="Lagos" value="egbeda">Egbeda  Lagos</option>
                          <option data-value="Lagos" value="epe">Epe  Lagos</option>
                          <option data-value="Lagos" value="lekki">Lekki Lagos</option>
                          <option data-value="Lagos" value="maryland">Maryland  Lagos</option>
                          <option data-value="Lagos" value="ikeja">Ikeja Lagos</option>
                          <option data-value="Lagos" value="victoria">Victoria Island  Lagos</option>
                          <option data-value="Lagos" value="iyanaipaja">Iyana Ipaja  Lagos</option>
                          <option data-value="Lagos" value="ikotun">Ikotun  Lagos</option>
                          <option data-value="Lagos" value="ijaye">Ifako/Ijaye  Lagos</option>
                          <option data-value="Lagos" value="berger">Ojodu Berger  Lagos /option>
                          <option data-value="Lagos" value="mushin">Mushin  Lagos</option>
                          <option data-value="Lagos" value="ikorodu">Ikorodu  Lagos</option>
                          <option data-value="Lagos" value="oshodi">Oshodi  Lagos</option>
                          <option data-value="Lagos" value="shomolu">shomolu  Lagos</option>
                          <option data-value="Lagos" value="surulere">Surulere  Lagos</option>
                          <!--END OF LAGOS LOCAL GOVERNMENT-->


                           <!--BEGINING OF NASSARAWA STATE LOCAL GOVERNMENT-->
                           <option data-value="Nassarawa" value="Akwanga">Akwanga</option>
                          <option data-value="Nassarawa" value="Awe">Awe</option>
                          <option data-value="Nassarawa" value="Doma">Doma</option>
                          <option data-value="Nassarawa" value="Karu">Karu</option>
                          <option data-value="Nassarawa" value="Keana">Keana</option>
                          <option data-value="Nassarawa" value="Keffi">Keffi</option>
                          <option data-value="Nassarawa" value="Kokona">Kokona</option>
                          <option data-value="Nassarawa" value="Lafia">Lafia</option>
                          <option data-value="Nassarawa" value="Nassarawa">Nassarawa</option>
                          <option data-value="Nassarawa" value="Nassarawa/Eggon">Nassarawa/Eggon</option>
                          <option data-value="Nassarawa" value=" Obi"> Obi</option>
                          <option data-value="Nassarawa" value="Toto">Toto</option>
                          <option data-value="Nassarawa" value="Wamba">Wamba</option>
                           <!--END OF NASSARAWA STATE LOCAL GOVERNMENT-->
                          



                          <!--BEGINING OF NIGER STATE LOCAL GOVERNMENT-->

                          <option data-value="Niger" value="Agaie">Agaie</option>
                          <option data-value="Niger" value="Agwara">Agwara</option>
                          <option data-value="Niger" value="Bida">Bida</option>
                          <option data-value="Niger" value="Borgu">Borgu</option>
                          <option data-value="Niger" value="Bosso">Bosso</option>
                          <option data-value="Niger" value="Chanchanga">Chanchanga</option>
                          <option data-value="Niger" value="Edati">Edati</option>
                          <option data-value="Niger" value="Gbako">Gbako</option>
                          <option data-value="Niger" value="Gurara">Gurara</option>
                          <option data-value="Niger" value="Kitcha">Kitcha</option>
                          <option data-value="Niger" value=" Kontagora"> Kontagora</option>
                          <option data-value="Niger" value="Lapai">Lapai</option>
                          <option data-value="Niger" value="Lavun">Lavun</option>
                          <option data-value="Niger" value="Magama">Magama</option>
                          <option data-value="Niger" value="Mariga">Mariga</option>
                          <option data-value="Niger" value="Mokwa">Mokwa</option>
                          <option data-value="Niger" value="Moshegu">Moshegu</option>
                          <option data-value="Niger" value="Muya">Muya</option>
                          <option data-value="Niger" value="Paiko">Paiko</option>
                          <option data-value="Niger" value="Rafi">Rafi</option>
                          <option data-value="Niger" value="Shiroro">Shiroro</option>
                          <option data-value="Niger" value="Suleija">Suleija</option>
                          <option data-value="Niger" value="Tawa-Wushishi">Tawa-Wushishi</option>
                          <!--END OF NIGER STATE LOCAL GOVERNMENT-->



                          <!--BEGINING OF OGUN STATE LOCAL GOVERNMENT-->
                          <option data-value="Ogun" value="Abeokuta south">Abeokuta south</option>
                          <option data-value="Ogun" value="Abeokuta north">Abeokuta north</option>
                          <option data-value="Ogun" value="Ado-odo/otta">Ado-odo/otta</option>
                          <option data-value="Ogun" value="Agbado south">Agbado south</option>
                          <option data-value="Ogun" value="Agbado north">Agbado north</option>
                          <option data-value="Ogun" value="Ewekoro">Ewekoro</option>
                          <option data-value="Ogun" value="Idarapo">Idarapo</option>
                          <option data-value="Ogun" value="Ijebu east">Ijebu east</option>
                          <option data-value="Ogun" value="Ijebu north">Ijebu north</option>
                          <option data-value="Ogun" value=" Ikenne"> Ikenne</option>
                          <option data-value="Ogun" value="Ilugun Alaro">Ilugun Alaro</option>
                          <option data-value="Ogun" value="Imeko afon">Imeko afon</option>
                          <option data-value="Ogun" value="Ipokia">Ipokia</option>
                          <option data-value="Ogun" value="Obafemi/owode">Obafemi/owode</option>
                          <option data-value="Ogun" value="Odeda">Odeda</option>
                          <option data-value="Ogun" value="Odogbolu">Odogbolu</option>
                          <option data-value="Ogun" value="Ogun waterside">Ogun waterside</option>
                          <option data-value="Ogun" value="Sagamu">Sagamu</option>
                          <!--END OF OGUN STATE LOCAL GOVERNMENT-->


                          <!--BEGINING OF ONDO LOCAL GOVERNMENT-->
                          <option data-value="Ondo" value="Akoko north">Akoko north</option>
                          <option data-value="Ondo" value="Akoko south east">Akoko south east</option>
                          <option data-value="Ondo" value="Akoko south">Akoko south</option>
                          <option data-value="Ondo" value="Akure north">Akure north</option>
                          <option data-value="Ondo" value="Akure">Akure</option>
                          <option data-value="Ondo" value="Idanre">Idanre</option>
                          <option data-value="Ondo" value="Ifedore">Ifedore</option>
                          <option data-value="Ondo" value="Ese odo">Ese odo</option>
                          <option data-value="Ondo" value="Ilaje">Ilaje</option>
                          <option data-value="Ondo" value=" Ilaje oke-igbo"> Ilaje oke-igbo</option>
                          <option data-value="Ondo" value="Irele">Irele</option>
                          <option data-value="Ondo" value="Odigbo">Odigbo</option>
                          <option data-value="Ondo" value="Okitipupa">Okitipupa</option>
                          <option data-value="Ondo" value="Ondo">Ondo</option>
                          <option data-value="Ondo" value="Ondo east">Ondo east</option>
                          <option data-value="Ondo" value="Ose">Ose</option>
                          <option data-value="Ondo" value="Owo">Owo</option>
                          <!--END OF ONDO LOCAL GOVERNMENT-->


                          <!--BEGINGING OF OSUN STATE LOCAL GOVERNMENT-->
                          <option data-value="Osun" value="Atakumosa west">Atakumosa west</option>
                          <option data-value="Osun" value="Atakumosa east">Atakumosa east</option>
                          <option data-value="Osun" value="Ayeda-ade">Ayeda-ade</option>
                          <option data-value="Osun" value="Ayedire">Ayedire</option>
                          <option data-value="Osun" value="Bolawaduro">Bolawaduro</option>
                          <option data-value="Osun" value="Boripe">Boripe</option>
                          <option data-value="Osun" value="Ede">Ede</option>
                          <option data-value="Osun" value="Ede north">Ede north</option>
                          <option data-value="Osun" value="Egbedore">Egbedore</option>
                          <option data-value="Osun" value="Ejigbo">Ejigbo</option>
                          <option data-value="Osun" value=" Ife north"> Ife north</option>
                          <option data-value="Osun" value="Ife central">Ife central</option>
                          <option data-value="Osun" value="Ife south">Ife south</option>
                          <option data-value="Osun" value="Ife east">Ife east</option>
                          <option data-value="Osun" value="Ifedayo">Ifedayo</option>
                          <option data-value="Osun" value="Ifelodun Osun State">Ifelodun Osun State</option>
                          <option data-value="Osun" value="Ilesha west">Ilesha west</option>
                          <option data-value="Osun" value="Ila- orangun">Ila- orangun</option>
                          <option data-value="Osun" value="Ilesah east">Ilesah east</option>
                          <option data-value="Osun" value="Irepodun Osun State">Irepodun Osun State</option>
                          <option data-value="Osun" value="Irewole">Irewole</option>
                          <option data-value="Osun" value="Isokan">Isokan</option>
                          <option data-value="Osun" value="Iwo">Iwo</option>
                          <option data-value="Osun" value="Obokun">Obokun</option>
                          <option data-value="Osun" value="Odo-otin">Odo-otin</option>
                          <option data-value="Osun" value="ola oluwa">ola oluwa</option>
                          <option data-value="Osun" value="olorunda">olorunda</option>
                          <option data-value="Osun" value="Oriade">Oriade</option>
                          <option data-value="Osun" value="Orolu">Orolu</option>
                          <option data-value="Osun" value="Osogbo">Osogbo</option>
                          <!--END OF OSUN STATE LOCAL GOVERNMENT-->


                           <!--BEGININ OF OYO STATE LOCAL GOVERNMENT-->
                          <option data-value="Oyo" value="Afijio">Afijio</option>
                          <option data-value="Oyo" value="Akinyele">Akinyele</option>
                          <option data-value="Oyo" value="Attba">Attba</option>
                          <option data-value="Oyo" value="Atigbo">Atigbo</option>
                          <option data-value="Oyo" value="Egbeda Oyo State">Egbeda Oyo State</option>
                          <option data-value="Oyo" value="Ibadan">Ibadan</option>
                          <option data-value="Oyo" value="Ibadan central">Ibadan central</option>
                          <option data-value="Oyo" value="Ibadan north east">Ibadan north east</option>
                          <option data-value="Oyo" value="Ibadan south east">Ibadan south east</option>
                          <option data-value="Oyo" value="Ibadan west south">Ibadan west south</option>
                          <option data-value="Oyo" value=" Ibarapa east"> Ibarapa east</option>
                          <option data-value="Oyo" value="Ibarapa north">Ibarapa north</option>
                          <option data-value="Oyo" value="Ido">Ido</option>
                          <option data-value="Oyo" value="Ifedapo">Ifedapo</option>
                          <option data-value="Oyo" value="Ifeloju">Ifeloju</option>
                          <option data-value="Oyo" value="Irepo">Irepo</option>
                          <option data-value="Oyo" value="Iseyin">Iseyin</option>
                          <option data-value="Oyo" value="Itesiwaju">Itesiwaju</option>
                          <option data-value="Oyo" value="Iwajowa">Iwajowa</option>
                          <option data-value="Oyo" value="Iwajowa olorunshogo">Iwajowa olorunshogo</option>
                          <option data-value="Oyo" value="Kajola">Kajola</option>
                          <option data-value="Oyo" value="Lagelu">Lagelu</option>
                          <option data-value="Oyo" value="Ogbomosho north">Ogbomosho north</option>
                          <option data-value="Oyo" value="Ogbomosho south">Ogbomosho south</option>
                          <option data-value="Oyo" value="Ogo oluwa">Ogo oluwa</option>
                          <option data-value="Oyo" value="Oluyole">Oluyole</option>
                          <option data-value="Oyo" value="Ona ara">Ona ara</option>
                          <option data-value="Oyo" value="Ore lope">Ore lope</option>
                          <option data-value="Oyo" value="Orire">Orire</option>
                          <option data-value="Oyo" value="Oyo east"></option>
                          <option data-value="Oyo" value="Oyo west">Oyo west</option>
                          <option data-value="Oyo" value="Saki east">Saki east</option>
                          <option data-value="Oyo" value="Saki west">Saki west</option>
                          <option data-value="Oyo" value="Surulere Oyo State">Surulere Oyo</option>
                           <!--END OF OYO STATE LOCAL GOVERNMENT-->



                           <!--END OF  PLATEAU STATE LOCAL GOVERNMENT-->
                          <option data-value="Plateau" value="Barkin/ladi">Barkin/ladi</option>
                          <option data-value="Plateau" value="Bassa">Bassa</option>
                          <option data-value="Plateau" value="Bokkos">Bokkos</option>
                          <option data-value="Plateau" value="Jos">Jos</option>
                          <option data-value="Plateau" value="Jos north">Jos north</option>
                          <option data-value="Plateau" value="Jos east">Jos east</option>
                          <option data-value="Plateau" value="Jos south">Jos south</option>
                          <option data-value="Plateau" value="Kanam">Kanam</option>
                          <option data-value="Plateau" value="kiyom">kiyom</option>
                          <option data-value="Plateau" value="Langtang north">Langtang north</option>
                          <option data-value="Plateau" value="Langtang south">Langtang south</option>
                          <option data-value="Plateau" value="Mangu">Mangu</option>
                          <option data-value="Plateau" value="Mikang">Mikang</option>
                          <option data-value="Plateau" value="Pankshin">Pankshin</option>
                          <option data-value="Plateau" value="Qua`an pan">Qua`an pan</option>
                          <option data-value="Plateau" value="Shendam">Shendam</option>
                          <option data-value="Plateau" value="Wase">Wase</option>
                          <!--END OF  PLATEAU STATE LOCAL GOVERNMENT-->


                          <!--BEGINING OF  RIVERS STATE LOCAL GOVERNMENT-->
                          <option data-value="Rivers" value="Abua/Odial">Abua/Odial</option>
                          <option data-value="Rivers" value="Ahoada west">Ahoada west</option>
                          <option data-value="Rivers" value="Akuku toru">Akuku toru</option>
                          <option data-value="Rivers" value="Andoni">Andoni</option>
                          <option data-value="Rivers" value="Asari toru">Asari toru</option>
                          <option data-value="Rivers" value="Bonny">Bonny</option>
                          <option data-value="Rivers" value="Degema">Degema</option>
                          <option data-value="Rivers" value="Eleme">Eleme</option>
                          <option data-value="Rivers" value="Emohua">Emohua</option>
                          <option data-value="Rivers" value="Etche">Etche</option>
                          <option data-value="Rivers" value="Gokana">Gokana</option>
                          <option data-value="Rivers" value="Ikwerre">Ikwerre</option>
                          <option data-value="Rivers" value="Oyigbo">Oyigbo</option>
                          <option data-value="Rivers" value="Khana">Khana</option>
                          <option data-value="Rivers" value="Obio/Akpor">Obio/Akpor</option>
                          <option data-value="Rivers" value="Ogba east/Edoni">Ogba east/Edoni</option>
                          <option data-value="Rivers" value="Ogu/bolo">Ogu/bolo</option>
                          <option data-value="Rivers" value="Okrika">Okrika</option>
                          <option data-value="Rivers" value="Omumma">Omumma</option>
                          <option data-value="Rivers" value="Portharcourt">Portharcourt</option>
                          <option data-value="Rivers" value="Tai">Tai</option>
                          <!--END OF  RIVERS STATE LOCAL GOVERNMENT-->


                          <!--BEGINING OF  SOKOTO STATE LOCAL GOVERNMENT-->
                          <option data-value="Sokoto" value="Binji">Binji</option>
                          <option data-value="Sokoto" value="Bodinga">Bodinga</option>
                          <option data-value="Sokoto" value="Dange/shuni">Dange/shuni</option>
                          <option data-value="Sokoto" value="Gada">Gada</option>
                          <option data-value="Sokoto" value="Goronyo">Goronyo</option>
                          <option data-value="Sokoto" value="Gudu">Gudu</option>
                          <option data-value="Sokoto" value="Gwadabawa">Gwadabawa</option>
                          <option data-value="Sokoto" value="Illella">Illella</option>
                          <option data-value="Sokoto" value="Kebbe">Kebbe</option>
                          <option data-value="Sokoto" value="Kware">Kware</option>
                          <option data-value="Sokoto" value="Rabah">Rabah</option>
                          <option data-value="Sokoto" value="Sabon -Birni">Sabon -Birni</option>
                          <option data-value="Sokoto" value="Shagari">Shagari</option>
                          <option data-value="Sokoto" value="Silame">Silame</option>
                          <option data-value="Sokoto" value="Sokoto south">Sokoto south</option>
                          <option data-value="Sokoto" value="Sokoto north">Sokoto north</option>
                          <option data-value="Sokoto" value="Tambuwal">Tambuwal</option>
                          <option data-value="Sokoto" value="Tangaza">Tangaza</option>
                          <option data-value="Sokoto" value="Tureta">Tureta</option>
                          <option data-value="Sokoto" value="Wamakko">Wamakko</option>
                          <option data-value="Sokoto" value="Wurno">Wurno</option>
                          <option data-value="Sokoto" value="Yabo">Yabo</option>
                          <!--END OF  SOKOTO STATE LOCAL GOVERNMENT-->


                           <!--BEGINING OF  TARABA STATE LOCAL GOVERNMENT-->
                          <option data-value="Taraba" value="Akdo -kola">Akdo -kola</option>
                          <option data-value="Taraba" value="Bali">Bali</option>
                          <option data-value="Taraba" value="Donga">Donga</option>
                          <option data-value="Taraba" value=" Gashaka"> Gashaka</option>
                          <option data-value="Taraba" value="Gassol">Gassol</option>
                          <option data-value="Taraba" value="Ibi">Ibi</option>
                          <option data-value="Taraba" value="K/Lamido">K/Lamido</option>
                          <option data-value="Taraba" value="Kurmi">Kurmi</option>
                          <option data-value="Taraba" value="lan">lan</option>
                          <option data-value="Taraba" value="Sardauna">Sardauna</option>
                          <option data-value="Taraba" value="Tarum">Tarum</option>
                          <option data-value="Taraba" value="Ussa">Ussa</option>
                          <option data-value="Taraba" value="Wukari">Wukari</option>
                          <option data-value="Taraba" value="Yorro">Yorro</option>
                          <option data-value="Taraba" value="Zing">Zing</option>
                           <!--END OF  TARABA STATE LOCAL GOVERNMENT-->


                            <!--END OF  Yobe STATE LOCAL GOVERNMENT-->
                            <option  data-value="Yobe" value="Borsari">Borsari</option>
                          <option  data-value="Yobe" value="Damaturu">Damaturu</option>
                          <option  data-value="Yobe" value="Fune">Fune</option>
                          <option  data-value="Yobe" value="Geidam">Geidam</option>
                          <option  data-value="Yobe" value="Gogaram">Gogaram</option>
                          <option  data-value="Yobe" value="Gujba">Gujba</option>
                          <option  data-value="Yobe" value="Gulani">Gulani</option>
                          <option  data-value="Yobe" value="Jakusko">Jakusko</option>
                          <option  data-value="Yobe" value="Karasuwa">Karasuwa</option>
                          <option  data-value="Yobe" value="Machina">Machina</option>
                          <option  data-value="Yobe" value="Nagere">Nagere</option>
                          <option  data-value="Yobe" value="Nguru">Nguru</option>
                          <option  data-value="Yobe" value="Potiskum">Potiskum</option>
                          <option  data-value="Yobe" value="Tarmua">Tarmua</option>
                          <option  data-value="Yobe" value="Yunusari">Yunusari</option>
                          <option  data-value="Yobe" value="Yusufari">Yusufari</option>
                          <option  data-value="Yobe" value="G ashua">G ashua</option>
                           <!--END OF  Yobe STATE LOCAL GOVERNMENT-->

                            <!--END OF  ZAMFARA STATE LOCAL GOVERNMENT-->
                          <option data-value="Zamfara" value="bukkuyum">bukkuyum</option>
                          <option data-value="Zamfara" value="Dungudu">Dungudu</option>
                          <option data-value="Zamfara" value="Chafe">Chafe</option>
                          <option data-value="Zamfara" value="Gummi">Gummi</option>
                          <option data-value="Zamfara" value="Gusau">Gusau</option>
                          <option data-value="Zamfara" value="Isa">Isa</option>
                          <option data-value="Zamfara" value="Kaura/Namoda">Kaura/Namoda</option>
                          <option data-value="Zamfara" value="Mradun">Mradun</option>
                          <option data-value="Zamfara" value="Maru">Maru</option>
                          <option data-value="Zamfara" value="Shinkafi">Shinkafi</option>
                          <option data-value="Zamfara" value="Talata/Mafara">Talata/Mafara</option>
                          <option data-value="Zamfara" value="Zumi">Zumi</option>
                           <!--END OF  ZAMFARA STATE LOCAL GOVERNMENT-->
                          
                      
                        </select>
                    </div>
                </div>
                
                 
                 
        
                 <div class="col-md-2 col-sm-12 col-xs-12">
                    <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-2"> 
                         <button type="submit" class="btn btn-primary" name="submit" style="margin-top: 40px; margin-left: 40px;">Search</button>
                    </div> 
                  </div> 
                </div>
              </form>
              </center> 
            </div>
          </div>   
        </div>


          <div class="col-md-3 col-xs-12 col-sm-12" >
                            <!--Form-->
                            <div class="card wow fadeInRight" >
                                <div class="card-block">
 <!--Body-->
                                    
                                        <h3>Advertisement</h3>
                                        <p>place your advert with us</p>
                                        

                                </div>
                            </div>
                         </div>
       

          

        </div>
      </div>
    </div>
  </div>
  <!--/.Mask-->
   
  <!--Main container-->
  
    

        <br/><br/><br/>
        
    
    <div class="container-fluid">
       <div class="row">
        
          
            
            <div class="col-md-12 col-sm-12 col-xs-12">
                 <center>    
                  <h2 class="h2-responsive wow fadeInDown" style="font-weight: bold;">Top Vendors</h2>
                  <p style="font-size: 18px;">The Best Vendors and The Most Juicy Prices.</p> 
                </center>
         
             </div>
          
          
      </div>   
    </div>
     
  
  <br/>
  
                     <!--Start your project here-->                            
    <div class="container-fluid">

            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <!--Carousel Wrapper--><br/>
                    <div id="carousel-example-2"  class="carousel slide carousel-fade no-flex wow fadeIn" data-pause="4.5s" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="img/photographer2.jpg" id="carousel_image"  alt="First slide">
                                <div class="carousel-caption">
                                    <h4>Photograhers/Videographers</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/vediographer301.jpg" id="carousel_image" alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Photograhers/Videographers</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/photographer3.jpg" id="carousel_image" alt="Third slide">
                                <div class="carousel-caption">
                                   
                                    <h4>Photograhers/Videographers</h4>
                                </div>
                            </div>

                              <div class="carousel-item">
                                <img class="img-fluid" src="img/photographer4.jpg" id="carousel_image" alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Photograhers/Videographers</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/pv.jpg" id="carousel_image" alt="Third slide">
                                <div class="carousel-caption">
                                   
                                    <h4>Photograhers/Videographers</h4>
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


                <div class="col-md-3 col-sm-12 col-xs-12">
                    <!--Carousel Wrapper--><br/>
                    <div id="carousel-example-2"  class="carousel slide carousel-fade no-flex wow fadeIn" data-pause="4.5s" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="img/wedcatering3.jpg" id="carousel_image"  alt="First slide">
                                <div class="carousel-caption">
                                    <h4>Caterers</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/wedcatering6.jpg" id="carousel_image" alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Caterers</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/wedcatering4.jpg" id="carousel_image" alt="Third slide">
                                <div class="carousel-caption"> 
                                    <h4>Caterers</h4>
                                </div>
                            </div>

                              <div class="carousel-item">
                                <img class="img-fluid" src="img/wedcatering101.jpg" id="carousel_image" alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Caterers</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/caters2.jpg" id="carousel_image" alt="Third slide">
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

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <!--Carousel Wrapper--><br/>
                    <div id="carousel-example-2"  class="carousel slide carousel-fade no-flex wow fadeIn" data-pause="4.5s" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                           <img class="img-fluid" src="img/markup.jpg" id="carousel_image"  alt="First slide">
                                <div class="carousel-caption">
                                    <h4>Markup Artists</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/markup3.jpg" id="carousel_image" alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Markup Artists</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/markup4.jpg" id="carousel_image" alt="Third slide">
                                <div class="carousel-caption">
                                   
                                    <h4>Markup Artists</h4>
                                </div>
                            </div>

                              <div class="carousel-item">
                                <img class="img-fluid" src="img/markup5.jpg" id="carousel_image" alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Markup Artists</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/traditionalphoto101.jpg" id="carousel_image" alt="Third slide">
                                <div class="carousel-caption">
                                   
                                    <h4>Markup Artists</h4>
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

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <!--Carousel Wrapper--><br/>
                    <div id="carousel-example-2"  class="carousel slide carousel-fade no-flex wow fadeIn" data-pause="4.5s" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="img/fl4.jpg" id="carousel_image"  alt="First slide">
                                <div class="carousel-caption">
                                    <h4>Decorators</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/fl.jpg" id="carousel_image" alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Decorators</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/fl2.jpg" id="carousel_image" alt="Third slide">
                                <div class="carousel-caption">
                                   
                                    <h4>Decorators</h4>
                                </div>
                            </div>

                              <div class="carousel-item">
                                <img class="img-fluid" src="img/fl3.jpg" id="carousel_image" alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Decorators</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/fl4.jpg" id="carousel_image" alt="Third slide">
                                <div class="carousel-caption">
                                   
                                    <h4>Decorators</h4>
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
          
    <br/>




    <div class="container-fluid">

            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <!--Carousel Wrapper--><br/>
                    <div id="carousel-example-2"  class="carousel slide carousel-fade no-flex wow fadeIn" data-pause="4.5s" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="img/comedian.png" id="carousel_image"  alt="First slide">
                                <div class="carousel-caption">
                                    <h4>Mc's/Comedians</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/comedian2.jpg" id="carousel_image" alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Mc's/Comedians</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/comedian3.jpg" id="carousel_image" alt="Third slide">
                                <div class="carousel-caption">
                                   
                                    <h4>Mc's/Comedians</h4>
                                </div>
                            </div>

                              <div class="carousel-item">
                                <img class="img-fluid" src="img/comedian4.jpg" id="carousel_image" alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Mc's/Comedians</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/comedian5.jpg" id="carousel_image" alt="Third slide">
                                <div class="carousel-caption">
                                   
                                    <h4>Mc's/Comedians</h4>
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


                <div class="col-md-3 col-sm-12 col-xs-12">
                    <!--Carousel Wrapper--><br/>
                    <div id="carousel-example-2"  class="carousel slide carousel-fade no-flex wow fadeIn" data-pause="4.5s" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="img/ushers.jpg" id="carousel_image"  alt="First slide">
                                <div class="carousel-caption">
                                    <h4>Ushering/Security Groups</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/gaurd1.jpg" id="carousel_image" alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Ushering/Security Groups</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/ushering2.jpg" id="carousel_image" alt="Third slide">
                                <div class="carousel-caption">
                                   
                                    <h4>Ushering/Security Groups</h4>
                                </div>
                            </div>

                              <div class="carousel-item">
                                <img class="img-fluid" src="img/gaurd3.jpg" id="carousel_image" alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Ushering/Security Groups</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/gaurd1.jpg" id="carousel_image" alt="Third slide">
                                <div class="carousel-caption">
                                   
                                    <h4>Ushering/Security Groups</h4>
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

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <!--Carousel Wrapper--><br/>
                    <div id="carousel-example-2"  class="carousel slide carousel-fade no-flex wow fadeIn" data-pause="4.5s" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                           <img class="img-fluid" src="img/invitation.jpg" id="carousel_image"  alt="First slide">
                                <div class="carousel-caption">
                                    <h4>Invitation Cards/Printing</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/invitation3.jpg" id="carousel_image" alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Invitation Cards/Printing</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/invitation1.jpg" id="carousel_image" alt="Third slide">
                                <div class="carousel-caption">
                                   
                                    <h4>Invitation Cards/Printing</h4>
                                </div>
                            </div>

                              <div class="carousel-item">
                                <img class="img-fluid" src="img/invitation2.jpg" id="carousel_image" alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Invitation Cards/Printing</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/invitation4.jpg" id="carousel_image" alt="Third slide">
                                <div class="carousel-caption">
                                   
                                    <h4>Invitation Cards/Printing</h4>
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

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <!--Carousel Wrapper--><br/>
                    <div id="carousel-example-2"  class="carousel slide carousel-fade no-flex wow fadeIn" data-pause="4.5s" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="img/resturant8.jpg" id="carousel_image"  alt="First slide">
                                <div class="carousel-caption">
                                    <h4>Wine Sellers</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/resturant7.jpg" id="carousel_image" alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Wine Sellers</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/resturant89.jpg" id="carousel_image" alt="Third slide">
                                <div class="carousel-caption">
                                   
                                    <h4>Wine Sellers</h4>
                                </div>
                            </div>

                              <div class="carousel-item">
                                <img class="img-fluid" src="img/resturant6.jpg" id="carousel_image" alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Wine Sellers</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/resturant5.jpg" id="carousel_image" alt="Third slide">
                                <div class="carousel-caption">
                                   
                                    <h4>Wine Sellers</h4>
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

        <br/>

    <div class="container-fluid">

            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <!--Carousel Wrapper--><br/>
                    <div id="carousel-example-2"  class="carousel slide carousel-fade no-flex wow fadeIn" data-pause="4.5s" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="img/chair1.jpg" id="carousel_image"  alt="First slide">
                                <div class="carousel-caption">
                                    <h4>Event Venues</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/chair5.jpg" id="carousel_image" alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Event Venues</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/chair4.jpg" id="carousel_image" alt="Third slide">
                                <div class="carousel-caption">
                                   
                                    <h4>Event Venues</h4>
                                </div>
                            </div>

                              <div class="carousel-item">
                                <img class="img-fluid" src="img/chair5.jpg" id="carousel_image" alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Event Venues</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/chair6.jpg" id="carousel_image" alt="Third slide">
                                <div class="carousel-caption">
                                   
                                    <h4>Event Venues</h4>
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


                <div class="col-md-3 col-sm-12 col-xs-12">
                    <!--Carousel Wrapper--><br/>
                    <div id="carousel-example-2"  class="carousel slide carousel-fade no-flex wow fadeIn" data-pause="4.5s" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                   <img class="img-fluid" src="img/dj.jpg" id="carousel_image"  alt="First slide">
                                <div class="carousel-caption">
                                    <h4>Disc Jockeys (DJ)</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/dj.jpg" id="carousel_image" alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Disc Jockeys (DJ)</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/dj1.jpg" id="carousel_image" alt="Third slide">
                                <div class="carousel-caption">
                                   
                                    <h4>Disc Jockeys (DJ)</h4>
                                </div>
                            </div>

                              <div class="carousel-item">
                                <img class="img-fluid" src="img/dj2.jpg" id="carousel_image" alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Disc Jockeys (DJ)</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/dj.jpg" id="carousel_image" alt="Third slide">
                                <div class="carousel-caption">
                                   
                                    <h4>Disc Jockeys (DJ)</h4>
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

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <!--Carousel Wrapper--><br/>
                    <div id="carousel-example-2"  class="carousel slide carousel-fade no-flex wow fadeIn" data-pause="4.5s" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                           <img class="img-fluid" src="img/music_band.jpg" id="carousel_image"  alt="First slide">
                                <div class="carousel-caption">
                                    <h4>Music Bands</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/music_band.jpg" id="carousel_image" alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Music Bands</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/music_band.jpg" id="carousel_image" alt="Third slide">
                                <div class="carousel-caption">
                                   
                                    <h4>Music Bands</h4>
                                </div>
                            </div>

                              <div class="carousel-item">
                                <img class="img-fluid" src="img/music_band.jpg" id="carousel_image" alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Music Bands</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/music_band.jpg" id="carousel_image" alt="Third slide">
                                <div class="carousel-caption">
                                   
                                    <h4>Music Bands</h4>
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

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <!--Carousel Wrapper--><br/>
                    <div id="carousel-example-2"  class="carousel slide carousel-fade no-flex wow fadeIn" data-pause="4.5s" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="img/dmc.jpg" id="carousel_image"  alt="First slide">
                                <div class="carousel-caption">
                                    <h4>Event Planners</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/dmc.jpg" id="carousel_image" alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Event Planners</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/dmc.jpg" id="carousel_image" alt="Third slide">
                                <div class="carousel-caption">
                                   
                                    <h4>Event Planners</h4>
                                </div>
                            </div>

                              <div class="carousel-item">
                                <img class="img-fluid" src="img/dmc.jpg" id="carousel_image" alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Event Planners</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/dmc.jpg" id="carousel_image" alt="Third slide">
                                <div class="carousel-caption">
                                   
                                    <h4>Event Planners</h4>
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







  
<br/><br/><br/>
    
        <center>
          <h2 id="testimonials" class="h2-responsive wow fadeInDown" style="font-weight: bold; font-family: sans-serif;">Featured Vendors</h2>
        </center>
        <br/>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">

             <!--Carousel Wrapper-->
          <div id="multi-item-example" class="carousel slide carousel-multi-item wow fadeIn" data-ride="carousel" data-pause="4.5s">


            <!--Indicators-->
            <ol class="carousel-indicators">
              <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
              <li data-target="#multi-item-example" data-slide-to="1"></li>
              <li data-target="#multi-item-example" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->

            <!--Slides-->
            <div class="carousel-inner" role="listbox">

              <!--First slide-->
              <div class="carousel-item active">

                <div class="col-md-3 col-xs-12 col-sm-12">
                  <!--Card-->
                  <div class="card testimonial-card">



                    <!---->
                      <center><div class=""><img src="img/venue5.jpg" id="testimonialsimage">
                      </div></center>

                    <div class="card-block">
                      <!--Name-->
                      <center><h4 class="card-title">Event Hall</h4></center>
                      <hr>
                      <!--Quotation-->
                      <p class="testimonials"><i class="fa fa-quote-left"></i>We provides you best event hall for all kind of events you want. </p>
                    </div>

                  </div>
                  <!--/.Card-->
                </div>

                <div class="col-md-3 col-xs-12 col-sm-12 hidden-sm-down">
                  <!--Card-->
                  <div class="card testimonial-card">

                    <!--Bacground color-->
                    <div class="card-up green darken-2">
                    </div>

                    <!---->
                    <center><div class=""><img src="img/vediographer301.jpg" id="testimonialsimage" >
                    </div></center>

                    <div class="card-block">
                      <!--Name-->
                      <center><h4 class="card-title">Videogpaher</h4></center>
                      <hr>
                      <!--Quotation-->
                      <p class="testimonials"><i class="fa fa-quote-left"></i>We provides you best Videographers for all kind of events you want.</p>
                    </div>

                  </div>
                  <!--/.Card-->
                </div>

                <div class="col-md-3 col-xs-12 col-sm-12 hidden-sm-down">
                  <!--Card-->
                  <div class="card testimonial-card">

                    <!--Bacground color-->
                    <div class="card-up green darken-2">
                    </div>

                    <!---->
                    <center><div class=""><img src="img/wss.jpg" id="testimonialsimage" >
                    </div></center>

                    <div class="card-block">
                      <!--Name-->
                      <center><h4 class="card-title">Wine Seller</h4></center>
                      <hr>
                      <!--Quotation-->
                      <p class="testimonials"><i class="fa fa-quote-left"></i>We provides you best Wine Sellers for all kind of events you want.</p>
                    </div>

                  </div>
                  <!--/.Card-->
                </div>

                <div class="col-md-3 col-xs-12 col-sm-12 hidden-sm-down">
                  <!--Card-->
                  <div class="card testimonial-card">

                    <!--Bacground color-->
                    <div class="card-up  green darken-4">
                    </div>

                    <!---->
                    <center><div class=""><img src="img/comedian.png" id="testimonialsimage" >
                    </div></center>

                    <div class="card-block">
                      <!--Name-->
                      <center><h4 class="card-title">Entertainer/Mc's</h4></center>
                      <hr>
                      <!--Quotation-->
                      <p class="testimonials"><i class="fa fa-quote-left"></i>We provides you best Entertainers and Mc's for all kind of events you want. </p>
                    </div>

                  </div>
                  <!--/.Card-->
                </div>

              </div>
              <!--/.First slide-->

              <!--Second slide-->
              <div class="carousel-item">

                <div class="col-md-3 col-xs-12 col-sm-12 ">
                  <!--Card-->
                  <div class="card testimonial-card">

                    <!--Bacground color-->
                    <div class="card-up green darken-2">
                    </div>

                    <!---->
                    <center><div class=""><img src="img/pv.jpg" id="testimonialsimage" >
                    </div></center>

                    <div class="card-block">
                      <!--Name-->
                      <center><h4 class="card-title">Photographer</h4></center>
                      <hr>
                      <!--Quotation-->
                      <p class="testimonials"><i class="fa fa-quote-left"></i>We provides you best Photographers for all kind of events you want.</p>
                    </div>

                  </div>
                  <!--/.Card-->
                </div>

                <div class="col-md-3 col-xs-12 col-sm-12 hidden-sm-down">
                  <!--Card-->
                  <div class="card testimonial-card">

                    <!--Bacground color-->
                    <div class="card-up blue darken-2">
                    </div>

                    <!---->
                    <center><div class=""><img src="img/dj.jpg" id="testimonialsimage">
                    </div></center>

                    <div class="card-block">
                      <!--Name-->
                      <center><h4 class="card-title">Disc Jockey (DJ)</h4></center>
                      <hr>
                      <!--Quotation-->
                      <p class="testimonials"><i class="fa fa-quote-left"></i>We provides you best Disc Jockey's for all kind of events you want.. </p>
                    </div>

                  </div>
                  <!--/.Card-->
                </div>

                <div class="col-md-3 col-xs-12 col-sm-12 hidden-sm-down">
                  <!--Card-->
                  <div class="card testimonial-card">

                    <!--Bacground color-->
                    <div class="card-up blue darken-2">
                    </div>

                    <!---->
                    <center><div class=""><img src="img/fl2.jpg" id="testimonialsimage">
                    </div></center>

                    <div class="card-block">
                      <!--Name-->
                      <center><h4 class="card-title">Event Decorator</h4></center>
                      <hr>
                      <!--Quotation-->
                      <p class="testimonials"><i class="fa fa-quote-left"></i>We provides you Event Decorators for all kind of events you want.. </p>
                    </div>

                  </div>
                  <!--/.Card-->
                </div>

                <div class="col-md-3 col-xs-12 col-sm-12 hidden-sm-down">
                  <!--Card-->
                  <div class="card testimonial-card">

                    <!--Bacground color-->
                    <div class="card-up blue darken-2">
                    </div>

                    <!---->
                    <center><div class=""><img src="img/music_band.jpg" id="testimonialsimage">
                    </div></center>

                    <div class="card-block">
                      <!--Name-->
                      <center><h4 class="card-title">Music Band</h4></center>
                      <hr>
                      <!--Quotation-->
                      <p class="testimonials"><i class="fa fa-quote-left"></i>We provides you Music Bands for all kind of events you want.. </p>
                    </div>

                  </div>
                  <!--/.Card-->
                </div>

              </div>
              <!--/.Second slide-->

              <!--Third slide-->
              <div class="carousel-item">

                <div class="col-md-3 col-xs-12 col-sm-12 ">
                  <!--Card-->
                  <div class="card testimonial-card">

                    <!--Bacground color-->
                    <div class="card-up green darken-2">
                    </div>

                    <!---->
                    <center><div class=""><img src="img/ushering.jpg" id="testimonialsimage" >
                    </div></center>

                    <div class="card-block">
                      <!--Name-->

                      <center><h4 class="card-title">Catering/Ushering</h4></center>
                      <hr>
                      <!--Quotation-->
                      <p class="testimonials"><i class="fa fa-quote-left"></i>We provides you best Catering Service for all kind of events you want.</p>
                    </div>

                  </div>
                  <!--/.Card-->
                </div>

                <div class="col-md-3 col-xs-12 col-sm-12 hidden-sm-down">
                  <!--Card-->
                  <div class="card testimonial-card">

                    <!--Bacground color-->
                    <div class="card-up blue darken-2">
                    </div>

                    <!---->
                    <div class=""><img src="img/dj.jpg" id="testimonialsimage">
                    </div>

                    <div class="card-block">
                      <!--Name-->
                      <center><h4 class="card-title">Disc Jockey (DJ)</h4></center>
                      
                      <hr>
                      <!--Quotation-->
                      <p class="testimonials"><i class="fa fa-quote-left"></i>We provides you best Disc Jockey's for all kind of events you want.. </p>
                    </div>

                  </div>
                  <!--/.Card-->
                </div>

                <div class="col-md-3 col-xs-12 col-sm-12 hidden-sm-down">
                  <!--Card-->
                  <div class="card testimonial-card">

                    <!--Bacground color-->
                    <div class="card-up blue darken-2">
                    </div>

                    <!---->
                    <div class=""><img src="img/markup2.jpg" id="testimonialsimage">
                    </div>

                    <div class="card-block">
                      <!--Name-->
                      <center><h4 class="card-title">Markup Artist</h4></center>
                      <hr>
                      <!--Quotation-->
                      <p class="testimonials"><i class="fa fa-quote-left"></i>We provides you best Markup Artists for all kind of events you want.. </p>
                    </div>

                  </div>
                  <!--/.Card-->
                </div>

                <div class="col-md-3 col-xs-12 col-sm-12 hidden-sm-down">
                  <!--Card-->
                  <div class="card testimonial-card">

                    <!--Bacground color-->
                    <div class="card-up blue darken-2">
                    </div>

                    <!---->
                    <div class=""><img src="img/cvb.jpg" id="testimonialsimage">
                    </div>

                    <div class="card-block">
                      <!--Name-->
                      <center><h4 class="card-title">Event Planner</h4></center>
                      <hr>
                      <!--Quotation-->
                      <p class="testimonials"><i class="fa fa-quote-left"></i>We provides you best Event Planners for all kind of events you want.. </p>
                    </div>

                  </div>
                  <!--/.Card-->
                </div>

              </div>
              <!--/.Third slide-->

            </div>
            <!--/.Slides-->

         </div>


      </div>
     </div>           <!--/.Carousel Wrapper-->
  </div>

<br/><br/><br/><br/>
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-sm-12 col-xs-12">
        <center>
          <h4>Partyvendors.com.ng is the best event marketplace to find a professionals to help you celebrate all of life's special moments </h4>
        </center>
      </div>

      <div class="col-md-3 col-sm-12 col-xs-12">
        
        <center>
          <li><a href="signupone.php" target="_blank"  class="btn btn-primary">Join For FREE</a></li>
        </center>
      </div>
    </div>
  </div>


    <br/><br/>
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
          <h2 class="h2-responsive wow fadeInDown" style="font-weight: bold; font-family: sans-serif;">Our Partners</h2>
        </center>
        <br/>

        <!--Section: Contact-->
        <section id="contact">
           <div class="container">
            <div class="row" style="text-align: center;">
                <div class="col-md-4 col-sm-12 col-xs-12">
                  <img src="img/coven1.png" class="img-thumbnail" id="partner" onmouseover="this.src='img/coven1.png'" onmouseout="this.src='img/coven1.png'">
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12" style="margin-top: 5px;">
                  <img src="img/successlinks.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/successlinks.jpg'" onmouseout="this.src='img/successlinks.jpg'">
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12" style="margin-top: 5px;">
                  <img src="img/curatorss.jpg" class="img-thumbnail" id="partner" onmouseout="this.src='img/curatorss.jpg'" onmouseover="this.src='img/curatorss.jpg'">
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
            <center>
               <h3 id="stay">Stay Connected</h3>
              <h5 id="stay">Stay with us || Connect with us || Help and Support</h5>
            </center>
        <hr/>
        <div class="row">

          <!--First column-->
          <div class="col-md-3 offset-md-1">
            <h5 class="title">Partyvendors Event Solutions</h5>
        <li>  <a href="terms_conditions.php" class="btn btn-primary"> Terms and Conditions</a></li>
            
            
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
            <p>No 18 Kayode Anifowoshe River Vally Estate Ojodu Berger, Lagos</p>
          </div>

          <div class="col-md-3 col-sm-12 col-xs-12">
            <h4>Email Address</h4>
            <p>partyvendorsng@gmail.com</p>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
