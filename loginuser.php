

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
    <title>Partyvendors.com.ng</title>
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

.top-nav-collapse .advert{
    color: #428bca;
    font-size: 15px;
    font-weight: bold;
}

.advert{
  color: white;
}


.dropdown-toggle::after{
    display: none;
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

                <li class="nav-item">
                        <a class="nav-link" href="index.php"><b style="font-size: 18px;">Home</b></a>
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
                
              
              <?php include("redirection.php");?>


            <center>
              <form class="form-inline" role="form" action="index.php" method="POST">
                <div class="col-md-3 col-sm-12 col-xs-12" >
                  <div class="form"> 
                       <label for="Country" control-label" ></label><br/>
                        <p id="header">I Am Looking For</p>
                        <select class="form-control"  name="vendors"  id="vendors" >
                          <option value="choose">Choose a Vendor</option> 
                          <option value="caterers">Caterers</option>
                          <option value="entertainer">Entertainer & MC</option>
                          <option value="dj">Disc Jockey(Dj's)</option>
                          <option value="music">Music Bands</option>
                          <option value="markup">Make-Up Artists</option>
                          <option value="photographer">Photographers</option> 
                          <option value="vediographer">Videographers</option>
                          <option value="wineseller">Wine sellers</option>
                          <option value="halldecorators">Hall Decorators</option>

                          
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
                          <option value="Ogun">Ogun State</option>
                          <option value="Ondo">Ondo State </option>
                          <option value="Osun">Osun State</option>
                          <option value="Oyo">Oyo State</option>
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
                          <option data-value="Anambra" value="aguata-anambra">Aguata</option>
                          <option data-value="Anambra" value="anambra">Anambra</option>
                          <option data-value="Anambra" value="anaocha-anambra">Anaocha</option>
                          <option data-value="Anambra" value="awka-anambra">Awka</option>
                          <option data-value="Anambra" value="ogbaru-anambra">Ogbaru</option>
                          <option data-value="Anambra" value="onitsha-anambra">Onitsha</option>
                          <option data-value="Anambra" value="orumba-anambra">Orumba</option>
                          <option data-value="Anambra" value="oyi">Oyi</option>
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
                          <option data-value="Bayelsa" value="brass">Brass</option>
                          <option data-value="Bayelsa" value="ekeremor">Ekeremor</option>
                          <option data-value="Bayelsa" value="kolok-opokuma">Kolok/Opokuma</option>
                          <option data-value="Bayelsa" value="nembe">Nembe</option>
                          <option data-value="Bayelsa" value="ogbia">Ogbia</option>
                          <option data-value="Bayelsa" value="sagbama">Sagbama</option>
                          <option data-value="Bayelsa" value="southern-ijaw">Southern Ijaw</option>
                          <option data-value="Bayelsa" value="yenagoa">Yenagoa</option>
                          <option data-value="Bayelsa" value="membe">Membe</option>
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
                             <option data-value="Edo" value="akoko-edo">Akoko</option>
                          <option data-value="Edo" value="egor-edo">Egor</option>
                          <option data-value="Edo" value="esan-edo">Esan</option>
                          <option data-value="Edo" value="etsako-edo">Etsako</option>
                          <option data-value="Edo" value="ivia-edo">Ivia</option>
                          <option data-value="Edo" value="orhionwon-edo">Orhionwon</option>
                          <option data-value="Edo" value="ovia-edo">Ovia</option>
                          <option data-value="Edo" value="owan-edo">Owan</option>
                          <option data-value="Edo" value="uhunwonde-edo">Uhunwonde</option>
                          <!--END OF EDO STATE LOCAL GOVERNMENT-->



                          <!--BEGINING OF EKITI LOCAL GOVERNMENT-->
                          <option data-value="Ekiti" value="ado-ekiti">Ado Ekiti</option>
                          <option data-value="Ekiti" value="effon-alaye-ekiti">Effon Alaye</option>
                          <option data-value="Ekiti" value="emure-ise-ekiti">Emure/ise</option>
                          <option data-value="Ekiti" value="ido-ekiti">Ido Ekiti</option>
                          <option data-value="Ekiti" value="ijero-ekiti"> Ijero Ekiti</option>
                          <option data-value="Ekiti" value="ikere-ekiti">Ikere Ekiti</option>
                          <option data-value="Ekiti" value="ikole-ekiti">Ikole Ekiti</option>
                          <option data-value="Ekiti" value="ilejemeje-ekiti">Ilejemeje Ekiti</option>
                          <option data-value="Ekiti" value="ise-orun-ekiti">Ise/Orun</option>
                          <option data-value="Ekiti" value="moba-ekiti">Moba Ekiti</option>
                          <option data-value="Ekiti" value="osi-ekiti">Osi Ekiti</option>
                          <option data-value="Ekiti" value="oye-ekiti">Oye Ekiti</option>
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
                          <option data-value="Kwara" value="asa-kwara">Asa</option>
                          <option data-value="Kwara" value="baruten">Baruten</option>
                          <option data-value="Kwara-State" value="ede-kwara">Ede Kwara State</option>

                          <option data-value="Kwara" value="ekiti-kwara">Ekiti Kwara state</option>
                          <option data-value="Kwara" value="ifelodun-kwara">Ifelodun Kwara State</option>
                          <option data-value="Kwara" value="ilorin">Ilorin south</option>
                          <option data-value="Kwara" value="irepodun-kwara">Irepodun Kwara State</option>
                          <option data-value="Kwara" value="isin">Isin</option>
                          <option data-value="Kwara" value="kaiama"> Kaiama</option>
                          <option data-value="Kwara" value="moro">Moro</option>
                          <option data-value="Kwara" value="offa">Offa</option>
                          <option data-value="Kwara" value="oke-ero">Oke ero</option>
                          <option data-value="Kwara" value="oyun">Oyun</option>
                          <option data-value="Kwara" value="pategi">Pategi</option>
                          <!--END OF  KWARA STATE LOCAL GOVERNMENT-->


                          <!--BEGINING OF LAGOS LOCAL GOVERNMENT-->
                          <option data-value="Lagos" value="agege">Agege  Lagos</option>
                          <option data-value="Lagos" value="apapa">Apapa  Lagos</option>
                          <option data-value="Lagos" value="abuleegba">Abule-Egba  Lagos</option>
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
                          <option data-value="Lagos" value="berger">Ojodu Berger  Lagos
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
                          <option data-value="Ogun" value="abeokuta">Abeokuta</option>
                          <option data-value="Ogun" value="ado-odo-otta">Ado-odo/otta</option>
                          <option data-value="Ogun" value="agbado-ogun">Agbado</option>
                          <option data-value="Ogun" value="ewekoro">Ewekoro</option>
                          <option data-value="Ogun" value="idarapo">Idarapo</option>
                          <option data-value="Ogun" value="ijebu">Ijebu</option>
                          <option data-value="Ogun" value="ikenne"> Ikenne</option>
                          <option data-value="Ogun" value="ilugun-alaro">Ilugun Alaro</option>
                          <option data-value="Ogun" value="imeko-afon">Imeko afon</option>
                          <option data-value="Ogun" value="ipokia">Ipokia</option>
                          <option data-value="Ogun" value="obafemi-owode">Obafemi/owode</option>
                          <option data-value="Ogun" value="odeda">Odeda</option>
                          <option data-value="Ogun" value="odogbolu">Odogbolu</option>
                          <option data-value="Ogun" value="ogun-waterside">Ogun waterside</option>
                          <option data-value="Ogun" value="sagamu">Sagamu</option>
                          <!--END OF OGUN STATE LOCAL GOVERNMENT-->


                          <!--BEGINING OF ONDO LOCAL GOVERNMENT-->
                          <option data-value="Ondo" value="akure">Akure</option>
                          <option data-value="Ondo" value="idanre">Idanre</option>
                          <option data-value="Ondo" value="ifedore">Ifedore</option>
                          <option data-value="Ondo" value="ilaje">Ilaje</option>
                          <option data-value="Ondo" value="ilaje-oke-igbo"> Ilaje oke-igbo</option>
                          <option data-value="Ondo" value="irele">Irele</option>
                          <option data-value="Ondo" value="ese-odo">Ese odo</option>
                          <option data-value="Ondo" value="odigbo">Odigbo</option>
                          <option data-value="Ondo" value="okitipupa">Okitipupa</option>
                          <option data-value="Ondo" value="ondo">Ondo</option>
                          <option data-value="Ondo" value="ose">Ose</option>
                          <option data-value="Ondo" value="owo">Owo</option>
                          <!--END OF ONDO LOCAL GOVERNMENT-->


                          <!--BEGINGING OF OSUN STATE LOCAL GOVERNMENT-->
                          <option data-value="Osun" value="atakumosa">Atakumosa</option>
                          <option data-value="Osun" value="ayeda-ade">Ayeda-ade</option>
                          <option data-value="Osun" value="ayedire">Ayedire</option>
                          <option data-value="Osun" value="boluwaduro">Boluwaduro</option>
                          <option data-value="Osun" value="boripe">Boripe</option>
                          <option data-value="Osun" value="ede">Ede</option>
                          <option data-value="Osun" value="egbedore">Egbedore</option>
                          <option data-value="Osun" value="ejigbo">Ejigbo</option>
                          <option data-value="Osun" value=" ife"> Ile Ife</option>
                          <option data-value="Osun" value="ifedayo">Ifedayo</option>
                          <option data-value="Osun" value="ifelodun">Ifelodun Osun State</option>
                          <option data-value="Osun" value="ilesha">Ilesha</option>
                          <option data-value="Osun" value="ila-orangun">Ila-orangun</option>
                          <option data-value="Osun" value="irepodun">Irepodun Osun State</option>
                          <option data-value="Osun" value="irewole">Irewole</option>
                          <option data-value="Osun" value="isokan">Isokan</option>
                          <option data-value="Osun" value="iwo">Iwo</option>
                          <option data-value="Osun" value="obokun">Obokun</option>
                          <option data-value="Osun" value="odo-otin">Odo-otin</option>
                          <option data-value="Osun" value="ola-oluwa">ola oluwa</option>
                          <option data-value="Osun" value="olorunda">olorunda</option>
                          <option data-value="Osun" value="oriade">Oriade</option>
                          <option data-value="Osun" value="orolu">Orolu</option>
                          <option data-value="Osun" value="osogbo">Osogbo</option>
                          <!--END OF OSUN STATE LOCAL GOVERNMENT-->


                           <!--BEGININ OF OYO STATE LOCAL GOVERNMENT-->
                          <option data-value="Oyo" value="afijio">Afijio</option>
                          <option data-value="Oyo" value="akinyele">Akinyele</option>
                          <option data-value="Oyo" value="atiba">Atiba</option>
                          <option data-value="Oyo" value="atigbo">Atigbo</option>
                          <option data-value="Oyo" value="egbeda-oyo-state">Egbeda Oyo State</option>
                          <option data-value="Oyo" value="ibadan">Ibadan</option>
                          <option data-value="Oyo" value=" ibarapa"> Ibarapa east</option>
                          <option data-value="Oyo" value="ido">Ido</option>
                          <option data-value="Oyo" value="ifedapo">Ifedapo</option>
                          <option data-value="Oyo" value="ifeloju">Ifeloju</option>
                          <option data-value="Oyo" value="irepo">Irepo</option>
                          <option data-value="Oyo" value="iseyin">Iseyin</option>
                          <option data-value="Oyo" value="itesiwaju">Itesiwaju</option>
                          <option data-value="Oyo" value="iwajowa">Iwajowa</option>
                          <option data-value="Oyo" value="iwajowa-olorunshogo">Iwajowa olorunshogo</option>
                          <option data-value="Oyo" value="kajola">Kajola</option>
                          <option data-value="Oyo" value="lagelu">Lagelu</option>
                          <option data-value="Oyo" value="ogbomosho">Ogbomosho</option>
                          <option data-value="Oyo" value="ogo-oluwa">Ogo oluwa</option>
                          <option data-value="Oyo" value="oluyole">Oluyole</option>
                          <option data-value="Oyo" value="ona-ara">Ona ara</option>
                          <option data-value="Oyo" value="ore-lope">Ore lope</option>
                          <option data-value="Oyo" value="orire">Orire</option>
                          <option data-value="Oyo" value="oyo">Oyo</option>
                          <option data-value="Oyo" value="saki">Saki</option>
                          <option data-value="Oyo" value="surulere-oyo">Surulere Oyo State</option>
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
                                <img class="img-fluid" src="img/design2.jpg" id="carousel_image" alt="Second slide">
                                <div class="carousel-caption">
                                 
                                    <h4>Event Venues</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/background6.jpg" id="carousel_image" alt="Third slide">
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
          <h4>Partyvendors.com.ng is the best event marketplace where you find professionals vendors to help you celebrate all of life's special moments </h4>
        </center>
      </div>

      <div class="col-md-3 col-sm-12 col-xs-12">
        
        <center>
          <li><a href="signupone.php" target="_blank"  class="btn btn-primary">Join For FREE</a></li>
        </center>
      </div>
    </div>
  </div>



       

     
      <!--/Main container-->


  
  
      <!--Footer-->
    
<?php include("footer.php");?>


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
