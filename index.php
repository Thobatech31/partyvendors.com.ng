

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
                <a class="nav-link" href="about_us.php"><b>About us</b></a>
            </li>


             <li class="dropdown" style="margin-top: 8px; padding-left: 5px;"> 
                <a class="dropdown-toggle" data-toggle="dropdown"><b class="advert">Advert enquiry</b> </a> 
                <ul class="dropdown-menu" style="margin-left: -10px; width:400px;"> 
                    <li style="font-weight: bold; font-size: 20px;">Contact Us</li><hr/>
                                                   
                    <li><strong style="font-size: 17px;">Contact us via Email: partyvendorsng@gmail.com</strong></li> 

                    <li><strong style="font-size: 17px;">Contact us via Phone: 08132157517 , 08068997372</strong></li> 
                                                        
                </ul> 
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
                          <option value="CrossRiver">CrossRiver state </option>
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
                          <option value="Nassarawa">Nassarawa State </option>
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
                          <option data-value="Abia" value="aba-abia">Aba</option>
                          <option data-value="Abia" value="arochukwu-abia">Arochukwu</option>
                          <option data-value="Abia" value="aiyekire-abia">Aiyekire</option>
                            <option data-value="Abia" value="anka-abia">Anka</option>
                          <option data-value="Abia" value="bende-abia">Bende</option>
                          <option data-value="Abia" value="ngwa-abia">Ngwa</option>
                          <option data-value="Abia" value="ikwuano-abia">Ikwuano</option>
                          <option data-value="Abia" value="isiala-abia">Isiala</option>
                          <option data-value="Abia" value="isukwuato-abia">Isukwuato</option>
                          <option data-value="Abia" value="ukwa-abia">Ukwa</option>
                          <option data-value="Abia" value="umuahia-abia">Umuahia</option>
                           <!--END OF ABIA LOCAL GOVERNMENT-->


                           <!--BEGINING OF ADAMAWA LOCAL GOVERNMENT-->
                          <option data-value="Adamawa" value="demsa-adamawa">Demsa</option>
                          <option data-value="Adamawa" value="fufore-adamawa">Fufore</option>
                          <option data-value="Adamawa" value="ganye-adamawa">Ganye</option>
                          <option data-value="Adamawa" value="gombi-adamawa">Gombi</option>
                          <option data-value="Adamawa" value="yola-adamawa">Yola</option>
                          <option data-value="Adamawa" value="lamurde-adamawa">Lamurde</option>
                          <option data-value="Adamawa" value="madagali-adamawa">Madagali</option>
                          <option data-value="Adamawa" value="maiha-adamawa">Maiha</option>
                          <option data-value="Adamawa" value="mayo-belwa-adamawa">Mayo-Belwa</option>
                          <option data-value="Adamawa" value="michika-adamawa">Michika</option>
                          <option data-value="Adamawa" value="mubi-adamawa">Mubi South</option>
                          <option data-value="Adamawa" value="numna-adamawa">Numna</option>
                          <option data-value="Adamawa" value="shelleng-adamawa">Shelleng</option>
                          <option data-value="Adamawa" value="song-adamawa">Song</option>
                          <option data-value="Adamawa" value="toungo-adamawa">Toungo</option>
                          <option data-value="Adamawa" value="jimeta-adamawa">Jimeta</option>
                          <option data-value="Adamawa" value="jada-adamawa">Jada</option>
                          <option data-value="Adamawa" value="hung-adamawa">Hung</option>
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
                          <option data-value="Bauchi" value="alkaleri-bauchi">Alkaleri</option>
                          <option data-value="Bauchi" value="bauchi-bauchi">Bauchi</option>
                          <option data-value="Bauchi" value="bogoro-bauchi">Bogoro</option>
                          <option data-value="Bauchi" value="darazo-bauchi"> Darazo</option>
                          <option data-value="Bauchi" value="dass-bauchi">Dass</option>
                          <option data-value="Bauchi" value="dambam-bauchi">Dambam</option>
                          <option data-value="Bauchi" value="gamawa-bauchi">Gamawa</option>
                          <option data-value="Bauchi" value="ganjuwa-bauchi">Ganjuwa</option>
                          <option data-value="Bauchi" value="giade-bauchi">Giade</option>
                          <option data-value="Bauchi" value="jamaare-bauchi">Jama`are</option>
                          <option data-value="Bauchi" value="katagum-bauchi">Katagum</option>
                          <option data-value="Bauchi" value="kirfi-bauchi">Kirfi</option>
                          <option data-value="Bauchi" value="misau-bauchi"> Misau</option>
                          <option data-value="Bauchi" value="ningi-bauchi">Ningi</option>
                          <option data-value="Bauchi" value="hira-bauchi">hira</option>
                          <option data-value="Bauchi" value="tafawa-balewa-bauchi">Tafawa Balewa</option>
                          <option data-value="Bauchi" value="itas-gadau-bauchi">Itas gadau</option>
                          <option data-value="Bauchi" value="toro-bauchi">Toro</option>
                          <option data-value="Bauchi" value="warji-bauchi">Warji</option>
                          <option data-value="Bauchi" value="zaki-bauchi">Zaki</option>
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
                            <option data-value="Benue" value="ador-benue">Ador</option>
                          <option data-value="Benue" value="agatu-benue">Agatu</option>
                          <option data-value="Benue" value="apa-benue">Apa</option>
                          <option data-value="Benue" value="guruku-benue">Buruku</option>
                          <option data-value="Benue" value="gboko-benue">Gboko</option>
                          <option data-value="Benue" value="guma-benue">Guma</option>
                          <option data-value="Benue" value="gwer-benue">Gwer</option>
                          <option data-value="Benue" value="kastina-ala-benue">Kastina-ala</option>
                          <option data-value="Benue" value="kwande-benue">Kwande</option>
                          <option data-value="Benue" value="logo-benue">Logo</option>
                          <option data-value="Benue" value="makurdii-benue">Makurdii</option>
                          <option data-value="Benue" value="obi-benue">Obi</option>
                          <option data-value="Benue" value="ogbadibo-benue">Ogbadibo</option>
                          <option data-value="Benue" value="ohimini-benue">Ohimini</option>
                          <option data-value="Benue" value="oju-benue">Oju</option>
                          <option data-value="Benue" value="okpokwu-benue">Okpokwu</option>
                          <option data-value="Benue" value="oturkpo-benue">Oturkpo</option>
                          <option data-value="Benue" value="tarka-benue">Tarka</option>
                          <option data-value="Benue" value="ukum-benue">Ukum</option>
                          <option data-value="Benue" value="vandekya-benue">Vandekya</option>
                           <!--END OF BENUE LOCAL GOVERNMENT-->


                           <!--END OF BORNO LOCAL GOVERNMENT-->
                          <option data-value="Borno" value="abadan-borno">Abadan</option>
                          <option data-value="Borno" value="askira-uba-borno">Askira/Uba</option>
                          <option data-value="Borno" value="bama-borno">Bama</option>
                          <option data-value="Borno" value="biu-borno">Biu</option>
                          <option data-value="Borno" value="chibok-borno">Chibok</option>
                          <option data-value="Borno" value="damboa-borno">Damboa</option>
                          <option data-value="Borno" value="dikwagubio-borno">Dikwagubio</option>
                          <option data-value="Borno" value="guzamala-borno">Guzamala</option>
                          <option data-value="Borno" value="gwoza-borno">Gwoza</option>
                          <option data-value="Borno" value="hawul-borno">Hawul</option>
                          <option data-value="Borno" value="jere-borno">Jere</option>
                          <option data-value="Borno" value="kaga-borno">Kaga</option>
                          <option data-value="Borno" value="kalka-balge-borno">Kalka/Balge</option>
                          <option data-value="Borno" value="konduga-borno">Konduga</option>
                          <option data-value="Borno" value="kukawa-borno">Kukawa</option>
                          <option data-value="Borno" value="kwaya-ku-borno">Kwaya-ku</option>
                          <option data-value="Borno" value="mafa-borno">Mafa</option>
                          <option data-value="Borno" value="magumeri-borno">Magumeri</option>
                          <option data-value="Borno" value="maiduguri-borno">Maiduguri</option>
                          <option data-value="Borno" value="marte-borno">Marte</option>
                          <option data-value="Borno" value="mobbar-borno">Mobbar</option>
                          <option data-value="Borno" value="monguno-borno">Monguno</option>
                          <option data-value="Borno" value="ngala-borno">Ngala</option>
                          <option data-value="Borno" value="nganzai-borno">Nganzai</option>
                          <option data-value="Borno" value="shani-borno">Shani</option>
                          <!--END OF BORNO LOCAL GOVERNMENT-->


                          <!--BEGINING OF CROSS RIVER LOCAL GOVERNMENT-->
                          <option data-value="CrossRiver" value="abi-crossriver">Abi</option>
                          <option data-value="CrossRiver" value="akampa-crossriver">Akampa</option>
                          <option data-value="CrossRiver" value="akpabuyo-crossriver">Akpabuyo</option>
                          <option data-value="CrossRiver" value="bakassi-crossriver">Bakassi</option>
                          <option data-value="CrossRiver" value="bekwara-crossriver">Bekwara</option>
                          <option data-value="CrossRiver" value="biase-crossriver">Biase</option>
                          <option data-value="CrossRiver" value="boki-crossriver">Boki</option>
                          <option data-value="CrossRiver" value="calabar-crossriver">Calabar</option>
                          <option data-value="CrossRiver" value="etung-crossriver">Etung</option>
                          <option data-value="CrossRiver" value="ikom-crossriver">Ikom</option>
                          <option data-value="CrossRiver" value="obanliku-crossriver">Obanliku</option>
                          <option data-value="CrossRiver" value="obubra-crossriver">Obubra</option>
                          <option data-value="CrossRiver" value="odukpani-crossriver">Odukpani</option>
                          <option data-value="CrossRiver" value="ogoja-crossriver">Ogoja</option>
                          <option data-value="CrossRiver" value="ugep-crossriver">Ugep</option>
                          <option data-value="CrossRiver" value="yala-crossriver">Yala</option>
                          <option data-value="CrossRiver" value="yarkur-crossriver">Yarkur</option>
                          <!--END OF CROSS RIVER LOCAL GOVERNMENT-->



                          <!--BEGINING OF DELTA LOCAL GOVERNMENT-->
                          <option data-value="Delta" value="aniocha-delta">Aniocha</option>
                          <option data-value="Delta" value="anioha-delta">Anioha</option>
                          <option data-value="Delta" value="bomadi-delta">Bomadi</option>
                          <option data-value="Delta" value="burutu-delta">Burutu</option>
                          <option data-value="Delta" value="ethiope-delta">Ethiope</option>
                          <option data-value="Delta" value="ika-delta">Ika</option>
                          <option data-value="Delta" value="isoko-delta">Isoko</option>
                          <option data-value="Delta" value="ndokwa-delta">Ndokwa</option>
                          <option data-value="Delta" value="okpe-delta">Okpe</option>
                          <option data-value="Delta" value="oshimili-delta">Oshimili</option>
                          <option data-value="Delta" value="patani-delta">Patani</option>
                          <option data-value="Delta" value="sapele-delta">Sapele</option>
                          <option data-value="Delta" value="udu-delta">Udu</option>
                          <option data-value="Delta" value="ughelli-delta">Ughelli</option>
                          <option data-value="Delta" value="ukwuani-delta">Ukwuani</option>
                          <option data-value="Delta" value="uviwie-delta">Uviwie</option>
                          <option data-value="Delta" value="warri-delta">Warri</option>
                          <!--END OF DELTA LOCAL GOVERNMENT-->

                          
                          <!--BEGINING OF EBONYI STATE LOCAL GOVERNMENT-->
                          <option data-value="Ebonyi" value="abakaliki-ebonyi">Abakaliki</option>
                          <option data-value="Ebonyi" value="afikpo-ebonyi">Afikpo</option>
                          <option data-value="Ebonyi" value="ebonyi">Ebonyi</option>
                          <option data-value="Ebonyi" value="ezza-ebonyi">Ezza</option>
                          <option data-value="Ebonyi" value="ikwo-ebonyi">Ikwo</option>
                          <option data-value="Ebonyi" value="ishielu-ebonyi">Ishielu</option>
                          <option data-value="Ebonyi" value="ivo-ebonyi">Ivo</option>
                          <option data-value="Ebonyi" value="ohaozara-ebonyi">Ohaozara</option>
                          <option data-value="Ebonyi" value="ohaukwu-ebonyi">Ohaukwu</option>
                          <option data-value="Ebonyi" value="onicha-ebonyi">Onicha</option>
                          <option data-value="Ebonyi" value="izzi-ebonyi">Izzi</option>
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
                           <option data-value="Enugu" value="awgu-enugu">Awgu</option>
                          <option data-value="Enugu" value="aninri-enugu">Aninri</option>
                          <option data-value="Enugu" value="enugu">Enugu</option>
                          <option data-value="Enugu" value="ezeagu-enugu">Ezeagu</option>
                          <option data-value="Enugu" value="igbo-eze-enugu">Igbo Eze</option>
                          <option data-value="Enugu" value="igbi-etiti-enugu">Igbi etiti</option>
                          <option data-value="Enugu" value="nsukka-enugu">Nsukka</option>
                          <option data-value="Enugu" value="oji-river-enugu">Oji river</option>
                          <option data-value="Enugu" value="undenu-enugu"> Undenu</option>
                          <option data-value="Enugu" value="uzo-uwani-enugu">Uzo Uwani</option>
                          <option data-value="Enugu" value="udi-enugu">Udi</option>
                           <!--END OF ENUGU STATE LOCAL GOVERNMENT-->
                          
                          
                        
                          
                          <!--BEGINING OF GOMBE STATE LOCAL GOVERNMENT-->
                          <option  data-value="Gombe" value="akko-gombe">Akko</option>
                          <option  data-value="Gombe" value="balanga-gombe">Balanga</option>
                          <option  data-value="Gombe" value="billiri-gombe">Billiri</option>
                          <option  data-value="Gombe" value="dukku-gombe">Dukku</option>
                          <option  data-value="Gombe" value="dunakaye-gombe">Dunakaye</option>
                          <option  data-value="Gombe" value="gombe">Gombe</option>
                          <option  data-value="Gombe" value="kaltungo-gombe">Kaltungo</option>
                          <option  data-value="Gombe" value="kwami-gombe">Kwami</option>
                          <option  data-value="Gombe" value="nafada-bajoga-gombe">Nafada/Bajoga</option>
                          <option  data-value="Gombe" value="shomgom-gombe">Shomgom</option>
                          <option  data-value="Gombe" value="yamaltu-deba-gombe">Yamaltu/Deba</option>
                           <!--END OF GOMBE STATE LO  data-value="Benue"CAL GOVERNMENT-->


                           <!--BEGINING OF IMO STATE LOCAL GOVERNMENT-->
                          <option data-value="Imo" value="Aboh-mbaise">Aboh-mbaise</option>
                          <option data-value="Imo" value="Ahiazu-mbaise">Ahiazu-Mbaise</option>
                          <option data-value="Imo" value="Ehime-mbaino">Ehime-Mbaino</option>
                          <option data-value="Imo" value="Ezinhite">Ezinhite</option>
                          <option data-value="Imo" value="Ideato">Ideato</option>
                          <option data-value="Imo" value="Ihitte-uboma">Ihitte/Uboma</option>
                          <option data-value="Imo" value="Ikeduru">Ikeduru</option>
                          <option data-value="Imo" value="Isiala">Isiala</option>
                          <option data-value="Imo" value="Isu">Isu</option>
                          <option data-value="Imo" value="Mbaitoli"> Mbaitoli</option>
                          <option data-value="Imo" value="Ngor-okpala">Ngor Okpala</option>
                          <option data-value="Imo" value="Njaba">Njaba</option>
                          <option data-value="Imo" value="Nwangele">Nwangele</option>
                          <option data-value="Imo" value="Nkwere"> Nkwere</option>
                          <option data-value="Imo" value="Obowo">Obowo</option>
                          <option data-value="Imo" value="Aguta">Aguta</option>
                          <option data-value="Imo" value="Ohaji-egbema">Ohaji Egbema</option>
                          <option data-value="Imo" value="Ogkiwe">Ogkiwe</option>
                          <option data-value="Imo" value="Onuimo">Onuimo</option>
                          <option data-value="Imo" value="Orlu">Orlu</option>
                          <option data-value="Imo" value="Orsu">Orsu</option>
                          <option data-value="Imo" value="Oru">Oru</option>
                          <option data-value="Imo" value="Owerri">Owerri</option>
                          <!--END OF IMO STATE LOCAL GOVERNMENT-->




                          <!--BEGINING OF JIGAWA STATE LOCAL GOVERNMENT-->
                            <option data-value="Jigawa"  value="auyo-jigawa">Auyo</option>
                          <option  data-value="Jigawa" value="babura-jigawa">Babura</option>
                          <option  data-value="Jigawa" value="birnin-kudu-jigawa">Birnin-Kudu</option>
                          <option  data-value="Jigawa" value="birniwa-jigawa">Birniwa</option>
                          <option  data-value="Jigawa" value="buji-jigawa">Buji</option>
                          <option  data-value="Jigawa" value="dute-jigawa">Dute</option>
                          <option  data-value="Jigawa" value="garki-jigawa">Garki</option>
                          <option  data-value="Jigawa" value="gagarawa-jigawa">Gagarawa</option>
                          <option  data-value="Jigawa" value="gumel-jigawa">Gumel</option>
                          <option  data-value="Jigawa" value="guri-jigawa">Guri</option>
                          <option  data-value="Jigawa" value="gwaram-jigawa"> Gwaram</option>
                          <option  data-value="Jigawa" value="gwiwa-jigawa">Gwiwa</option>
                          <option  data-value="Jigawa" value="hadeji-jigawa">Hadeji</option>
                          <option  data-value="Jigawa" value="jahun-jigawa">Jahun</option>
                          <option  data-value="Jigawa" value="kafin-hausa-jigawa">Kafin-Hausa</option>
                          <option  data-value="Jigawa" value="kaugama-jigawa">kaugama</option>
                          <option  data-value="Jigawa" value="kazaure-jigawa">Kazaure</option>
                          <option  data-value="Jigawa" value="kirikisamma-jigawa">Kirikisamma</option>
                          <option  data-value="Jigawa" value="birnin-magaji-jigawa">Birnin-magaji</option>
                          <option  data-value="Jigawa" value="maigatari-jigawa">Maigatari</option>
                          <option  data-value="Jigawa" value="malamaduri-jigawa">Malamaduri</option>
                          <option  data-value="Jigawa" value="miga-jigawa">Miga</option>
                          <option  data-value="Jigawa" value="ringim-jigawa">Ringim</option>
                          <option  data-value="Jigawa" value="roni-jigawa">Roni</option>
                          <option  data-value="Jigawa" value="sule-tankarka-jigawa">Sule Tankarka</option>
                          <option  data-value="Jigawa" value="taura-jigawa">Taura</option>
                          <option  data-value="Jigawa" value="yankwasi-jigawa">Yankwasi</option>
                            <!--END OF JIGAWA STATE LOCAL GOVERNMENT-->



                            <!--BEGINING OF KADUNA STATE LOCAL GOVERNMENT-->
                          <option data-value="Kaduna" value="brnin-gwari-kaduna">Brnin Gwari</option>
                          <option data-value="Kaduna" value="chukun-kaduna">Chukun</option>
                          <option data-value="Kaduna" value="giwa-kaduna">Giwa</option>
                          <option data-value="Kaduna" value="igabi-kaduna">Igabi</option>
                          <option data-value="Kaduna" value="ikara-kaduna">Ikara</option>
                          <option data-value="Kaduna" value="jaba-kaduna">Jaba</option>
                          <option data-value="Kaduna" value="jemaa-kaduna">Jema`a</option>
                          <option data-value="Kaduna" value="kajuru-kaduna">Kajuru</option>
                          <option data-value="Kaduna" value="kachia-kaduna">Kachia</option>
                          <option data-value="Kaduna" value="kaduna-kaduna">Kaduna</option>
                          <option data-value="Kaduna" value="kagarok-kaduna">Kagarok</option>
                          <option data-value="Kaduna" value="kauru-kaduna">Kauru</option>
                          <option data-value="Kaduna" value="kabau-kaduna">Kabau</option>
                          <option data-value="Kaduna" value="kudan-kaduna">Kudan</option>
                          <option data-value="Kaduna" value="kere-kaduna">Kere</option>
                          <option data-value="Kaduna" value="makarfi-kaduna">Makarfi</option>
                          <option data-value="Kaduna" value="sabongari-kaduna">Sabongari</option>
                          <option data-value="Kaduna" value="sanga-kaduna">Sanga</option>
                          <option data-value="Kaduna" value="soba-kaduna">Soba</option>
                          <option data-value="Kaduna" value="zangon-kataf-kaduna">Zangon-Kataf</option>
                          <option data-value="Kaduna" value="zaria-kaduna">Zaria</option>
                          <!--END OF KADUNA STATE LOCAL GOVERNMENT-->


                          <!--END OF  FEDERAL CAPITAL TERRITORY (F.C.T) LOCAL GOVERNMENT-->
                          <option data-value="Abuja" value="abaji-abuja">Abaji</option>
                          <option data-value="Abuja" value="abuja-municipal">Abuja Municipal. Bwari</option>
                          <option data-value="Abuja" value="gwagwalada-abuja">Gwagwalada</option>
                          <option data-value="Abuja" value="kuje-abuja">Kuje</option>
                          <option data-value="Abuja" value="kwali-abuja">Kwali</option>
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
                           <option data-value="Kebbi" value="aliero-kebbi">Aliero</option>
                          <option data-value="Kebbi" value="arewa-dandi-kebbi">Arewa Dandi</option>
                          <option data-value="Kebbi" value="argungu-kebbi">Argungu</option>
                          <option data-value="Kebbi" value="augie-kebbi">Augie</option>
                          <option data-value="Kebbi" value="bagudo-kebbi">Bagudo</option>
                          <option data-value="Kebbi" value="birnin-kebbi">Birnin Kebbi</option>
                          <option data-value="Kebbi" value="bunza-kebbi">Bunza</option>
                          <option data-value="Kebbi" value="dandi-kebbi">Dandi</option>
                          <option data-value="Kebbi" value="danko-kebbi">Danko</option>
                          <option data-value="Kebbi" value="fakai-kebbi">Fakai</option>
                          <option data-value="Kebbi" value="gwandu-kebbi"> Gwandu</option>
                          <option data-value="Kebbi" value="jeda-kebbi">Jeda</option>
                          <option data-value="Kebbi" value="kalgo-kebbi">Kalgo</option>
                          <option data-value="Kebbi" value="koko-besse-kebbi">Koko-besse</option>
                          <option data-value="Kebbi" value="maiyaama-kebbi">Maiyaama</option>
                          <option data-value="Kebbi" value="ngaski-kebbi">Ngaski</option>
                          <option data-value="Kebbi" value="sakaba-kebbi">Sakaba</option>
                          <option data-value="Kebbi" value="shanga-kebbi">Shanga</option>
                          <option data-value="Kebbi" value="suru-kebbi">Suru</option>
                          <option data-value="Kebbi" value="wasugu-kebbi">Wasugu</option>
                          <option data-value="Kebbi" value="yauri-kebbi">Yauri</option>
                          <option data-value="Kebbi" value="zuru-kebbi">Zuru</option>
                          <!--END OF  KEBBI STATE LOCAL GOVERNMENT-->

                        

                          <!--BEGINING OF  KOGI STATE LOCAL GOVERNMENT-->
                          <option data-value="Kogi" value="adavi-kogi">Adavi</option>
                          <option data-value="Kogi" value="ajaokuta-kogi">Ajaokuta</option>
                          <option data-value="Kogi" value="ankpa-kogi">Ankpa</option>
                          <option data-value="Kogi" value="bassa-kogi">Bassa</option>
                          <option data-value="Kogi" value="dekina-kogi">Dekina</option>
                          <option data-value="Kogi" value="yagba-kogi">Yagba</option>
                          <option data-value="Kogi" value="ibaji-kogi">Ibaji</option>
                          <option data-value="Kogi" value="idah-kogi">Idah</option>
                          <option data-value="Kogi" value="igalamela-kogi">Igalamela</option>
                          <option data-value="Kogi" value="ijumu-kogi">Ijumu</option>
                          <option data-value="Kogi" value="lokoja-kogi">Lokoja</option>
                          <option data-value="Kogi" value="kabba-bunu-kogi"> Kabba bunu</option>
                          <option data-value="Kogi" value="kogi-kogi">Kogi</option>
                          <option data-value="Kogi" value="mopa-muro-kogi">Mopa muro</option>
                          <option data-value="Kogi" value="ofu-kogi">Ofu</option>
                          <option data-value="Kogi" value="ogori-magongo-kogi">Ogori magongo</option>
                          <option data-value="Kogi" value="okehi-kogi">Okehi</option>
                          <option data-value="Kogi" value="okene-kogi">Okene</option>
                          <option data-value="Kogi" value="olamaboro-kogi">Olamaboro</option>
                          <option data-value="Kogi" value="omala-kogi">Omala</option>
                          <!--END OF  KOGI STATE LOCAL GOVERNMENT-->






                          <!--BEGINING OF KWARA LOCAL GOVERNMENT-->
                          <option data-value="Kwara" value="asa-kwara">Asa</option>
                          <option data-value="Kwara" value="baruten">Baruten</option>
                          <option data-value="Kwara" value="ede-kwara">Ede Kwara State</option>

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
                           <option data-value="Nassarawa" value="akwanga-nassarawa">Akwanga</option>
                          <option data-value="Nassarawa" value="awe-nassarawa">Awe</option>
                          <option data-value="Nassarawa" value="doma-nassarawa">Doma</option>
                          <option data-value="Nassarawa" value="karu-nassarawa">Karu</option>
                          <option data-value="Nassarawa" value="keana-nassarawa">Keana</option>
                          <option data-value="Nassarawa" value="keffi-nassarawa">Keffi</option>
                          <option data-value="Nassarawa" value="kokona-nassarawa">Kokona</option>
                          <option data-value="Nassarawa" value="lafia-nassarawa">Lafia</option>
                          <option data-value="Nassarawa" value="nassarawa-nassarawa">Nassarawa</option>
                          <option data-value="Nassarawa" value="obi-nassarawa"> Obi</option>
                          <option data-value="Nassarawa" value="toto-nassarawa">Toto</option>
                          <option data-value="Nassarawa" value="wamba-nassarawa">Wamba</option>
                           <!--END OF NASSARAWA STATE LOCAL GOVERNMENT-->
                          



                          <!--BEGINING OF NIGER STATE LOCAL GOVERNMENT-->

                          <option data-value="Niger" value="agaie-niger">Agaie</option>
                          <option data-value="Niger" value="agwara-niger">Agwara</option>
                          <option data-value="Niger" value="bida-niger">Bida</option>
                          <option data-value="Niger" value="borgu-niger">Borgu</option>
                          <option data-value="Niger" value="bosso-niger">Bosso</option>
                          <option data-value="Niger" value="chanchanga-niger">Chanchanga</option>
                          <option data-value="Niger" value="edati-niger">Edati</option>
                          <option data-value="Niger" value="gbako-niger">Gbako</option>
                          <option data-value="Niger" value="gurara-niger">Gurara</option>
                          <option data-value="Niger" value="kitcha-niger">Kitcha</option>
                          <option data-value="Niger" value="kontagora-niger"> Kontagora</option>
                          <option data-value="Niger" value="lapai-niger">Lapai</option>
                          <option data-value="Niger" value="lavun-niger">Lavun</option>
                          <option data-value="Niger" value="magama-niger">Magama</option>
                          <option data-value="Niger" value="mariga-niger">Mariga</option>
                          <option data-value="Niger" value="mokwa-niger">Mokwa</option>
                          <option data-value="Niger" value="moshegu-niger">Moshegu</option>
                          <option data-value="Niger" value="muya-niger">Muya</option>
                          <option data-value="Niger" value="paiko-niger">Paiko</option>
                          <option data-value="Niger" value="rafi-niger">Rafi</option>
                          <option data-value="Niger" value="shiroro-niger">Shiroro</option>
                          <option data-value="Niger" value="suleija-niger">Suleija</option>
                          <option data-value="Niger" value="tawa-wushishi-niger">Tawa-Wushishi</option>
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
                          <option data-value="Plateau" value="barkin-ladi-plateau">Barkin/ladi</option>
                          <option data-value="Plateau" value="bassa-plateau">Bassa</option>
                          <option data-value="Plateau" value="bokkos-plateau">Bokkos</option>
                          <option data-value="Plateau" value="jos-plateau">Jos</option>
                          <option data-value="Plateau" value="kanam-plateau">Kanam</option>
                          <option data-value="Plateau" value="kiyom-plateau">kiyom</option>
                          <option data-value="Plateau" value="langtang-plateau">Langtang</option>
                          <option data-value="Plateau" value="mangu-plateau">Mangu</option>
                          <option data-value="Plateau" value="mikang-plateau">Mikang</option>
                          <option data-value="Plateau" value="pankshin-plateau">Pankshin</option>
                          <option data-value="Plateau" value="shendam-plateau">Shendam</option>
                          <option data-value="Plateau" value="wase-plateau">Wase</option>
                          <!--END OF  PLATEAU STATE LOCAL GOVERNMENT-->


                          <!--BEGINING OF  RIVERS STATE LOCAL GOVERNMENT-->
                          <option data-value="Rivers" value="abua-odial-rivers">Abua/Odial</option>
                          <option data-value="Rivers" value="ahoada-west-rivers">Ahoada west</option>
                          <option data-value="Rivers" value="akuku-toru-rivers">Akuku toru</option>
                          <option data-value="Rivers" value="andoni-rivers">Andoni</option>
                          <option data-value="Rivers" value="asari-toru-rivers">Asari toru</option>
                          <option data-value="Rivers" value="bonny-rivers">Bonny</option>
                          <option data-value="Rivers" value="degema-rivers">Degema</option>
                          <option data-value="Rivers" value="eleme-rivers">Eleme</option>
                          <option data-value="Rivers" value="emohua-rivers">Emohua</option>
                          <option data-value="Rivers" value="etche-rivers">Etche</option>
                          <option data-value="Rivers" value="gokana-rivers">Gokana</option>
                          <option data-value="Rivers" value="ikwerre-rivers">Ikwerre</option>
                          <option data-value="Rivers" value="oyigbo-rivers">Oyigbo</option>
                          <option data-value="Rivers" value="khana-rivers">Khana</option>
                          <option data-value="Rivers" value="obio-akpor-rivers">Obio/Akpor</option>
                          <option data-value="Rivers" value="ogba-east-edoni-rivers">Ogba east/Edoni</option>
                          <option data-value="Rivers" value="ogu-bolo-rivers">Ogu/bolo</option>
                          <option data-value="Rivers" value="okrika-rivers">Okrika</option>
                          <option data-value="Rivers" value="omumma-rivers">Omumma</option>
                          <option data-value="Rivers" value="portharcourt-rivers">Portharcourt</option>
                          <option data-value="Rivers" value="tai-rivers">Tai</option>
                          <!--END OF  RIVERS STATE LOCAL GOVERNMENT-->


                          <!--BEGINING OF  SOKOTO STATE LOCAL GOVERNMENT-->
                          <option data-value="Sokoto" value="binji-sokoto">Binji</option>
                          <option data-value="Sokoto" value="bodinga-sokoto">Bodinga</option>
                          <option data-value="Sokoto" value="dange-shuni-sokoto">Dange/shuni</option>
                          <option data-value="Sokoto" value="gada-sokoto">Gada</option>
                          <option data-value="Sokoto" value="goronyo-sokoto">Goronyo</option>
                          <option data-value="Sokoto" value="gudu-sokoto">Gudu</option>
                          <option data-value="Sokoto" value="gwadabawa-sokoto">Gwadabawa</option>
                          <option data-value="Sokoto" value="illella-sokoto">Illella</option>
                          <option data-value="Sokoto" value="kebbe-sokoto">Kebbe</option>
                          <option data-value="Sokoto" value="kware-sokoto">Kware</option>
                          <option data-value="Sokoto" value="rabah-sokoto">Rabah</option>
                          <option data-value="Sokoto" value="sabon-birni-sokoto">Sabon -Birni</option>
                          <option data-value="Sokoto" value="shagari-sokoto">Shagari</option>
                          <option data-value="Sokoto" value="silame-sokoto">Silame</option>
                          <option data-value="Sokoto" value="sokoto-sokoto">Sokoto</option>
                          <option data-value="Sokoto" value="tambuwal-sokoto">Tambuwal</option>
                          <option data-value="Sokoto" value="tangaza-sokoto">Tangaza</option>
                          <option data-value="Sokoto" value="tureta-sokoto">Tureta</option>
                          <option data-value="Sokoto" value="wamakko-sokoto">Wamakko</option>
                          <option data-value="Sokoto" value="wurno-sokoto">Wurno</option>
                          <option data-value="Sokoto" value="yabo-sokoto">Yabo</option>
                          <!--END OF  SOKOTO STATE LOCAL GOVERNMENT-->


                           <!--BEGINING OF  TARABA STATE LOCAL GOVERNMENT-->
                          <option data-value="Taraba" value="akdo-kola-taraba">Akdo-kola</option>
                          <option data-value="Taraba" value="bali-taraba">Bali</option>
                          <option data-value="Taraba" value="donga-taraba">Donga</option>
                          <option data-value="Taraba" value="gashaka-taraba"> Gashaka</option>
                          <option data-value="Taraba" value="gassol-taraba">Gassol</option>
                          <option data-value="Taraba" value="ibi-taraba">Ibi</option>
                          <option data-value="Taraba" value="lamido-taraba">K/Lamido</option>
                          <option data-value="Taraba" value="kurmi-taraba">Kurmi</option>
                          <option data-value="Taraba" value="lan-taraba">Lan</option>
                          <option data-value="Taraba" value="sarduana-taraba">Sardauna</option>
                          <option data-value="Taraba" value="tarum-taraba">Tarum</option>
                          <option data-value="Taraba" value="ussa-taraba">Ussa</option>
                          <option data-value="Taraba" value="wukari-taraba">Wukari</option>
                          <option data-value="Taraba" value="yorro-taraba">Yorro</option>
                          <option data-value="Taraba" value="zing-taraba">Zing</option>
                           <!--END OF  TARABA STATE LOCAL GOVERNMENT-->


                            <!--END OF  Yobe STATE LOCAL GOVERNMENT-->
                            <option  data-value="Yobe" value="borsari-yobe">Borsari</option>
                          <option  data-value="Yobe" value="damaturu-yobe">Damaturu</option>
                          <option  data-value="Yobe" value="fune-yobe">Fune</option>
                          <option  data-value="Yobe" value="geidam-yobe">Geidam</option>
                          <option  data-value="Yobe" value="gujba-yobe">Gujba</option>
                          <option  data-value="Yobe" value="gulani-yobe">Gulani</option>
                          <option  data-value="Yobe" value="jakusko-yobe">Jakusko</option>
                          <option  data-value="Yobe" value="karasuwa-yobe">Karasuwa</option>
                          <option  data-value="Yobe" value="machina-yobe">Machina</option>
                          <option  data-value="Yobe" value="nagere-yobe">Nagere</option>
                          <option  data-value="Yobe" value="nguru-yobe">Nguru</option>
                          <option  data-value="Yobe" value="potiskum-yobe">Potiskum</option>
                          <option  data-value="Yobe" value="tarmua-yobe">Tarmua</option>
                          <option  data-value="Yobe" value="yunusari-yobe">Yunusari</option>
                          <option  data-value="Yobe" value="yusufari-yobe">Yusufari</option>
                          <option  data-value="Yobe" value="gashua-yobe">G ashua</option>
                            <option  data-value="Yobe" value="gogaram-yobe">Gogaram</option>
                           <!--END OF  Yobe STATE LOCAL GOVERNMENT-->

                            <!--END OF  ZAMFARA STATE LOCAL GOVERNMENT-->
                          <option data-value="Zamfara" value="bukkuyum-zamfara">bukkuyum</option>
                          <option data-value="Zamfara" value="dungudu-zamfara">Dungudu</option>
                          <option data-value="Zamfara" value="chafe-zamfara">Chafe</option>
                          <option data-value="Zamfara" value="gummi-zamfara">Gummi</option>
                          <option data-value="Zamfara" value="gusau-zamfara">Gusau</option>
                          <option data-value="Zamfara" value="isa-zamfara">Isa</option>
                          <option data-value="Zamfara" value="kaura-namoda-zamfara">Kaura/Namoda</option>
                          <option data-value="Zamfara" value="mradun-zamfara">Mradun</option>
                          <option data-value="Zamfara" value="maru-zamfara">Maru</option>
                          <option data-value="Zamfara" value="shinkafi-zamfara">Shinkafi</option>
                          <option data-value="Zamfara" value="talata-mafara-zamfara">Talata/Mafara</option>
                          <option data-value="Zamfara" value="zumi-zamfara">Zumi</option>
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
                                    <center><b>ADVERT SPACE</b></center>
                                        <p>You can place your advert here</p>
                                        <p>send an E-mail to:<br/><b>partyvendorsng@gmail.com</b></p>
                                        

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
