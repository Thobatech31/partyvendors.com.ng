<?php
ob_start();
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
        <!--  custom styles (optional) -->
        
    <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <link href="datetimepicker/jquery.datetimepicker.css" rel="stylesheet">
            <link rel="stylesheet" href="css/homepage.css"> 

            <link rel="stylesheet" href="modal.css">

<style type="text/css">

#modal{
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.6);
    position: absolute;
    top: 100%;
    right: 0;
    bottom: 0;
    left: 25%;
   
    display: none;
}

.modal_view{
    width: 55%;
    height: 150px;
   position: absolute;
    background-color: #fff;
   
    border:2px solid grey;
}

.closesign{
    float: right;
    padding:10px 15px;
    cursor:pointer;
}

</style>
    
    </head>

    <body style="background-color:grey ;">
            <div class="container">
                <div class="row">
                   <!--First column-->   
                                <!--/.Form-->
                                  <div class="col-md-3 col-xs-12 col-sm-12">
                                    </div>


                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="card wow fadeInRight">
                                <div class="card-block">

                                            <div class="text-center">
                                                    <h3><strong>Register as a vendor</strong></h3>                
                                            </div>
                                <form role="form" action="signupone2.php" method="POST" enctype="multipart/form-data">
                                         <div class="md-form form-sm">
                                                <i class="fa fa-user prefix"></i>
                                                <input type="text" name="name" id="name" class="form-control validate" value="<?php echo isset($_POST['name'])? $_POST['name']: ''; ?>" required/>
                                                <label for="name" >Name</label>
                                            </div>

                                            <div class="md-form form-sm">
                                                <i class="fa fa-envelope prefix"></i>
                                                <input type="email" name="email" id="email" class="form-control validate" value="<?php echo isset($_POST['email'])? $_POST
                                                ['email']: ''; ?>" required/>
                                                <label for="email" >Email Address</label>
                                            </div> 

                                            <div class="md-form form-sm">
                                                <i class="fa fa-phone prefix"></i>
                                                <input type="text" name="phone_no" id="phone_no" class="form-control validate" maxlength="11" value="<?php echo isset($_POST['phone_no'])? $_POST['phone_no']: ''; ?>" required/>
                                                <label for="phone_no" >Phone Number</label>
                                            </div> 


                                              <div class="md-form form-sm">
                                                <i class="fa fa-hashtag prefix"></i>
                                                <input type="text" name="service_price" id="service_price" class="form-control validate" value="<?php echo isset($_POST['service_price'])? $_POST['service_price']: ''; ?>" required/>
                                                <label for="phone_no" >Price Range</label>
                                            </div> 

                            



                                         <div class="form-group">
                                             
                                             <select class="form-control" name="service_name">
                                                 <option value="select">Please Select Vendor Category</option>                                         
                                                 <option value="Caterer">Caterers</option>
                                                 <option value="Entertainer">Entertainers</option>
                                                <option value="Dj">Disc Jockey (Dj's)</option>
                                                <option value="Markup">Markup Artists</option>
                                                <option value="Musicband">Music Bands</option>
                                                 <option value="Photographer">Photographers</option>
                                                 <option value="Decorator">Hall Decorators</option>
                                                 <option value="Wineseller">Wine Sellers</option>
                                                 <option value="Videographer">Videographers</option>
                                             </select>
                                             
                                        </div><br/>

                                           
    

                                        <div class="form-group">       
                                                         <select class="form-control" name="state_name" id="select2">
                                                             <option  value="select">Please select your state</option>
                                                             <option value="Abia-State">Abia State</option>
                                                    <option value="Adamawa-State">Adamawa State </option>
                                                    <option value="Anambra-State">Anambra State</option>
                                                    <option value="Akwa Ibom State">Akwa Ibom State</option>
                                                    <option value="Bauchi-State">Bauchi State </option>
                                                    <option value="Bayelsa-State">Bayelsa State</option>
                                                    <option value="Benue-State">Benue State</option>
                                                    <option value="Borno-State"> Borno State </option>
                                                    <option value="CrossRiver-State">Cross River state </option>
                                                    <option value="Delta-State"> Delta State</option>
                                                    <option value="Ebonyi-State">Ebonyi State </option>
                                                    <option value="Edo-State"> Edo State</option>
                                                    <option value="Ekiti-State">Ekiti State</option>
                                                    <option value="Enugu-State"> Enugu State </option>
                                                    <option value="Gombe-State">Gombe State</option>
                                                    <option value="Imo-State">Imo State</option>
                                                    <option value="Jigawa-State">Jigawa State </option>
                                                    <option value="Kaduna-State">Kaduna State</option>
                                                    <option value="Abuja">Abuja (F.C.T)</option>
                                                    <option value="Kano-State"> Kano State </option>
                                                    <option value="Katsina-State">Katsina state </option>
                                                    <option value="Kebbi-State"> Kebbi State</option>
                                                    <option value="Kogi-State">Kogi State </option>
                                                    <option value="Kwara-State"> Kwara State</option>

                                                    <option value="Lagos-State"> Lagos State </option>
                                                    <option value="Nasarawa-State">Nasarawa State </option>
                                                    <option value="Niger-State"> Niger State</option>
                                                    <option value="Ogun-State"> Ogun State</option>
                                                    <option value="Ondo-State">Ondo State</option>
                                                    <option value="Osun-State"> Osun State</option>

                                                    <option value="Oyo-State"> Oyo State</option>
                                                    <option value="Plateau-State">Plateau State </option>
                                                    <option value="Rivers-State"> Rivers State</option>
                                                    <option value="Sokoto-State"> Sokoto State</option>
                                                    <option value="Taraba-State">Taraba State </option>
                                                    <option value="Yobe-State"> Yobe State</option>
                                                    <option value="Zamfara-State"> Zamfara State</option>
                                                         </select>       
                                                    </div>
                                        <br/>

                                           <div class="form-group">  
                                                         <select class="form-control" name="location_name" id="select3">
                                                             <option value="select">Please select your location</option>
                                                             <option data-value="Lagos-State" value="Agege Lagos">Agege Lagos</option>
                                                             <option data-value="Lagos-State" value="Apapa Lagos">Apapa Lagos</option>
                                                             <option data-value="Lagos-State" value="Abuleegba Lagos">Abule-Egba Lagos</option>
                                                            
                                                             <option data-value="Lagos-State" value="Badagry Lagos">Badagry Lagos</option>
                                                             <option data-value="Lagos-State" value="Epe Lagos">Epe Lagos</option>
                                                             <option data-value="Lagos-State" value="Egbeda Lagos">Egbeda,Lagos</option>
                                                             <option data-value="Lagos-State" value="Lekki Lagos">Lekki Lagos</option>

                                                             <option data-value="Lagos-State" value="Maryland Lagos">Maryland Lagos</option>

                                                             <option data-value="Lagos-State" value="Ikeja Lagos">Ikeja Lagos</option>

                                                             <option data-value="Lagos-State" value="Ikotun Lagos">Ikotu Lagos</option>

                                                             <option data-value="Lagos-State" value="Ikorodu Lagos">Ikorodu Lagos</option>

                                                             <option data-value="Lagos-State" value="Iyanaipaja Lagos">Iyana-Ipaja Lagos</option>
                                                             <option data-value="Lagos-State" value="Ijaye Lagos">Ifako-Ijaye Lagos</option>

                                                             <option data-value="Lagos-State" value="Ojoduberger Lagos">Ojodu-Berger Lagos</option>

                                                             
                                                             <option data-value="Lagos" value="Ikorodu Lagos">Ikorodu Lagos</option>

                                                             <option data-value="Lagos" value="Victoria Lagos">Victoria-Island Lagos</option>
                                                             
                                                             <option data-value="Lagos" value="Mushin Lagos">Mushin Lagos</option>
                                                             <option data-value="Lagos" value="Oshodi Lagos">Oshodi Lagos</option>
                                                             <option data-value="Lagos" value="Shomolu Lagos">Shomolu Lagos</option>
                                                             <option data-value="Lagos" value="Surulere Lagos">Surulere Lagos</option>


                                                               <!--BEGINGING OF Osun-State STATE LOCAL GOVERNMENT-->
                                                      <option data-value="Osun-State" value="Atakumosa Osun">Atakumosa</option>
                                                      <option data-value="Osun-State" value="Ayeda-ade Osun">Ayeda-ade</option>
                                                      <option data-value="Osun-State" value="Ayedire Osun">Ayedire</option>
                                                      <option data-value="Osun-State" value="Boluwaduro Osun">Boluwaduro</option>
                                                      <option data-value="Osun-State" value="Boripe Osun">Boripe</option>
                                                      <option data-value="Osun-State" value="Ede Osun">Ede</option>
                                                      <option data-value="Osun-State" value="Egbedore Osun">Egbedore</option>
                                                      <option data-value="Osun-State" value="Ejigbo Osun">Ejigbo</option>
                                                      <option data-value="Osun-State" value=" Ife Osun"> Ile Ife</option>
                                                      <option data-value="Osun-State" value="Ifedayo Osun">Ifedayo</option>
                                                      <option data-value="Osun-State" value="Ifelodun Osun">Ifelodun Osun-State State</option>
                                                      <option data-value="Osun-State" value="Ilesha Osun">Ilesha</option>
                                                      <option data-value="Osun-State" value="Ila-orangun Osun">Ila-orangun</option>
                                                      <option data-value="Osun-State" value="Irepodun Osun">Irepodun Osun-State State</option>
                                                      <option data-value="Osun-State" value="Irewole Osun">Irewole</option>
                                                      <option data-value="Osun-State" value="Isokan Osun">Isokan</option>
                                                      <option data-value="Osun-State" value="Iwo Osun">Iwo</option>
                                                      <option data-value="Osun-State" value="Obokun Osun">Obokun</option>
                                                      <option data-value="Osun-State" value="Odo-otin Osun">Odo-otin</option>
                                                      <option data-value="Osun-State" value="Ola-oluwa Osun">ola oluwa</option>
                                                      <option data-value="Osun-State" value="Olorunda Osun">olorunda</option>
                                                      <option data-value="Osun-State" value="Oriade Osun">Oriade</option>
                                                      <option data-value="Osun-State" value="Orolu Osun">Orolu</option>
                                                      <option data-value="Osun-State" value="Osogbo Osun">Osogbo</option>
                                                      <!--END OF Osun-State STATE LOCAL GOVERNMENT-->



                                                      <!--BEGININ OF Oyo-State STATE LOCAL GOVERNMENT-->
                                                      <option data-value="Oyo-State" value="Afijio Oyo">Afijio</option>
                                                      <option data-value="Oyo-State" value="Akinyele Oyo">Akinyele</option>
                                                      <option data-value="Oyo-State" value="Atiba Oyo">Atiba</option>
                                                      <option data-value="Oyo-State" value="Atigbo Oyo">Atigbo</option>
                                                      <option data-value="Oyo-State" value="Egbeda Oyo">Egbeda Oyo-State</option>
                                                      <option data-value="Oyo-State" value="Ibadan Oyo">Ibadan</option>
                                                      <option data-value="Oyo-State" value="Ibarapa Oyo"> Ibarapa</option>
                                                      <option data-value="Oyo-State" value="Ido Oyo">Ido</option>
                                                      <option data-value="Oyo-State" value="Ifedapo Oyo">Ifedapo</option>
                                                      <option data-value="Oyo-State" value="Ifeloju Oyo">Ifeloju</option>
                                                      <option data-value="Oyo-State" value="Irepo Oyo">Irepo</option>
                                                      <option data-value="Oyo-State" value="Iseyin Oyo">Iseyin</option>
                                                      <option data-value="Oyo-State" value="Itesiwaju Oyo">Itesiwaju</option>
                                                      <option data-value="Oyo-State" value="Iwajowa Oyo">Iwajowa</option>
                                                      <option data-value="Oyo-State" value="Iwajowa-olorunshogo Oyo">Iwajowa olorunshogo</option>
                                                      <option data-value="Oyo-State" value="Kajola Oyo">Kajola</option>
                                                      <option data-value="Oyo-State" value="Lagelu Oyo">Lagelu</option>
                                                      <option data-value="Oyo-State" value="Ogbomosho Oyo">Ogbomosho</option>
                                                      <option data-value="Oyo-State" value="Ogo-oluwa Oyo">Ogo oluwa</option>
                                                      <option data-value="Oyo-State" value="Oluyole Oyo">Oluyole</option>
                                                      <option data-value="Oyo-State" value="Ona-ara Oyo">Ona ara</option>
                                                      <option data-value="Oyo-State" value="Ore-lope Oyo">Ore lope</option>
                                                      <option data-value="Oyo-State" value="Orire Oyo">Orire</option>
                                                      <option data-value="Oyo-State" value="Oyo Oyo">Oyo-State</option>
                                                      <option data-value="Oyo-State" value="Saki Oyo">Saki</option>
                                                      <option data-value="Oyo-State" value="Surulere Oyo">Surulere Oyo-State</option>
                                                       <!--END OF Oyo-State STATE LOCAL GOVERNMENT-->




                                                      <!--BEGINING OF ONDO LOCAL GOVERNMENT-->
                                                      <option data-value="Ondo-State" value="Akure Ondo">Akure</option>
                                                      <option data-value="Ondo-State" value="Idanre Ondo">Idanre</option>
                                                      <option data-value="Ondo-State" value="Ifedore Ondo">Ifedore</option>
                                                      <option data-value="Ondo-State" value="Ilaje Ondo">Ilaje</option>
                                                      <option data-value="Ondo-State" value="Ilaje-oke-igbo Ondo"> Ilaje oke-igbo</option>
                                                      <option data-value="Ondo-State" value="Irele Ondo">Irele</option>
                                                      <option data-value="Ondo-State" value="Ese-odo Ondo">Ese odo</option>
                                                      <option data-value="Ondo-State" value="Odigbo Ondo">Odigbo</option>
                                                      <option data-value="Ondo-State" value="Okitipupa Ondo">Okitipupa</option>
                                                      <option data-value="Ondo-State" value="Ondo Ondo">Ondo</option>
                                                      <option data-value="Ondo-State" value="Ose Ondo">Ose</option>
                                                      <option data-value="Ondo-State" value="Owo Ondo">Owo</option>
                                                      <!--END OF ONDO LOCAL GOVERNMENT-->



                                                       <!--BEGINING OF EKITI LOCAL GOVERNMENT-->
                                                      <option data-value="Ekiti-State" value="Ado Ekiti">Ado Ekiti</option>
                                                      <option data-value="Ekiti-State" value="Effon-alaye Ekiti">Effon Alaye</option>
                                                      <option data-value="Ekiti-State" value="Emure-ise Ekiti">Emure/ise</option>
                                                      <option data-value="Ekiti-State" value="Ido Ekiti">Ido Ekiti</option>
                                                      <option data-value="Ekiti-State" value="Ijero Ekiti"> Ijero Ekiti</option>
                                                      <option data-value="Ekiti-State" value="Ikere Ekiti">Ikere Ekiti</option>
                                                      <option data-value="Ekiti-State" value="Ikole Ekiti">Ikole Ekiti</option>
                                                      <option data-value="Ekiti-State" value="Ilejemeje Ekiti">Ilejemeje Ekiti</option>                                                      <option data-value="Ekiti-State" value="Ise-orun Ekiti">Ise/Orun</option>
                                                      <option data-value="Ekiti-State" value="Moba Ekiti">Moba Ekiti</option>
                                                      <option data-value="Ekiti-State" value="Osi Ekiti">Osi Ekiti</option>
                                                      <option data-value="Ekiti-State" value="Oye Ekiti">Oye Ekiti</option>
                                                      <!--END OF EKITI LOCAL GOVERNMENT-->



                                                            <!--BEGINING OF EBONYI STATE LOCAL GOVERNMENT-->
                                                      <option data-value="Ebonyi-State" value="Abakaliki Ebonyi">Abakaliki</option>
                                                      <option data-value="Ebonyi-State" value="Afikpo Ebonyi">Afikpo</option>
                                                      <option data-value="Ebonyi-State" value="Ebonyi Ebonyi">Ebonyi</option>
                                                      <option data-value="Ebonyi-State" value="Ezza Ebonyi">Ezza</option>
                                                      <option data-value="Ebonyi-State" value="Ikwo Ebonyi">Ikwo</option>
                                                      <option data-value="Ebonyi-State" value="Ishielu Ebonyi">Ishielu</option>
                                                      <option data-value="Ebonyi-State" value="Ivo Ebonyi">Ivo</option>
                                                      <option data-value="Ebonyi-State" value="Ohaozara Ebonyi">Ohaozara</option>
                                                      <option data-value="Ebonyi-State" value="Ohaukwu Ebonyi">Ohaukwu</option>
                                                      <option data-value="Ebonyi-State" value="Onicha Ebonyi">Onicha</option>
                                                      <option data-value="Ebonyi-State" value="Izzi Ebonyi">Izzi</option>
                                                      <!--END OF EBONYI STATE LOCAL GOVERNMENT-->



                                                       <!--BEGINING OF ENUGU STATE LOCAL GOVERNMENT-->
                                                       <option data-value="Enugu-State" value="Awgu Enugu">Awgu</option>
                                                      <option data-value="Enugu-State" value="Aninri Enugu">Aninri</option>
                                                      <option data-value="Enugu-State" value="Enugu Enugu">Enugu</option>
                                                      <option data-value="Enugu-State" value="Ezeagu Enugu">Ezeagu</option>
                                                      <option data-value="Enugu-State" value="Igbo-eze Enugu">Igbo Eze</option>
                                                      <option data-value="Enugu-State" value="Igbi-etiti Enugu">Igbi etiti</option>
                                                      <option data-value="Enugu-State" value="Nsukka Enugu">Nsukka</option>
                                                      <option data-value="Enugu-State" value="Oji-river Enugu">Oji river</option>
                                                      <option data-value="Enugu-State" value="Undenu Enugu"> Undenu</option>
                                                      <option data-value="Enugu-State" value="Uzo-uwani Enugu">Uzo Uwani</option>
                                                      <option data-value="Enugu-State" value="Udi Enugu">Udi</option>
                                                       <!--END OF ENUGU STATE LOCAL GOVERNMENT-->



                                                        <!--BEGINING OF GOMBE STATE LOCAL GOVERNMENT-->
                                                      <option  data-value="Gombe-State" value="Akko Gombe">Akko</option>
                                                      <option  data-value="Gombe-State" value="Balanga Gombe">Balanga</option>
                                                      
                                                      <option  data-value="Gombe-State" value="Billiri Gombe">Billiri</option>
                                                      <option  data-value="Gombe-State" value="Dukku Gombe">Dukku</option>
                                                      <option  data-value="Gombe-State" value="Dunakaye Gombe">Dunakaye</option>
                                                      <option  data-value="Gombe-State" value="Gombe Gombe">Gombe</option>
                                                      <option  data-value="Gombe-State" value="Kaltungo Gombe">Kaltungo</option>
                                                      <option  data-value="Gombe-State" value="Kwami Gombe">Kwami</option>
                                                      <option  data-value="Gombe-State" value="Nafada-bajoga Gombe">Nafada/Bajoga</option>
                                                      <option  data-value="Gombe-State" value="Shomgom Gombe">Shomgom</option>
                                                      <option  data-value="Gombe-State" value="Yamaltu-deba Gombe">Yamaltu/Deba</option>
                                                       <!--END OF GOMBE STATE LO  data-value="Benue"CAL GOVERNMENT-->



                                                       <!--BEGINING OF ANAMBRA LOCAL GOVERNMENT-->
                                                      <option data-value="Anambra-State" value="Aguata Anambra">Aguata</option>
                                                      <option data-value="Anambra-State" value="Anambra Anambra">Anambra</option>
                                                      <option data-value="Anambra-State" value="Anaocha Anambra">Anaocha</option>
                                                      <option data-value="Anambra-State" value="Awka Anambra">Awka</option>
                                                      <option data-value="Anambra-State" value="Ogbaru Anambra">Ogbaru</option>
                                                      <option data-value="Anambra-State" value="Onitsha Anambra">Onitsha</option>
                                                      <option data-value="Anambra-State" value="Orumba Anambra">Orumba</option>
                                                      <option data-value="Anambra-State" value="Oyi Anambra">Oyi</option>
                                                       <!--ENDLOCAL GOVERNMENT-->


                                                       <!--BEGINING OF BAYELSA LOCAL GOVERNMENT-->
                                                      <option data-value="Bayelsa-State" value="Brass Bayelsa">Brass</option>
                                                      <option data-value="Bayelsa-State" value="Ekeremor Bayelsa">Ekeremor</option>
                                                      <option data-value="Bayelsa-State" value="Kolok-opokuma Bayelsa">Kolok/Opokuma</option>
                                                      <option data-value="Bayelsa-State" value="Nembe Bayelsa">Nembe</option>
                                                      <option data-value="Bayelsa-State" value="Ogbia Bayelsa">Ogbia</option>
                                                      <option data-value="Bayelsa-State" value="Sagbama Bayelsa">Sagbama</option>
                                                      <option data-value="Bayelsa-State" value="Southern-ijaw Bayelsa">Southern Ijaw</option>
                                                      <option data-value="Bayelsa-State" value="Yenagoa Bayelsa">Yenagoa</option>
                                                      <option data-value="Bayelsa-State" value="Membe Bayelsa">Membe</option>
                                                       <!--END OF BAYELSA LOCAL GOVERNMENT-->


                                                       <!--BEGINING OF EDO STATE LOCAL GOVERNMENT-->
                                                     <option data-value="Edo-State" value="Akoko Edo">Akoko-Edo</option>
                                                  <option data-value="Edo-State" value="Egor Edo">Egor</option>
                                                  <option data-value="Edo-State" value="Esan Edo">Esan</option>
                                                  <option data-value="Edo-State" value="Etsako Edo">Etsako</option>
                                                  <option data-value="Edo-State" value="Orhionwon Edo">Orhionwon</option>
                                                  <option data-value="Edo-State" value="Ivia Edo">Ivia</option>
                                                  <option data-value="Edo-State" value="Ovia Edo">Ovia</option>
                                                  <option data-value="Edo-State" value="Owan Edo">Owan</option>
                                                  <option data-value="Edo-State" value="Uhunwonde Edo">Uhunwonde</option>
                                                  <!--END OF EDO STATE LOCAL GOVERNMENT-->



                                                  <!--BEGINING OF OGUN STATE LOCAL GOVERNMENT-->
                                                  <option data-value="Ogun-State" value="Abeokuta Ogun">Abeokuta</option>
                                                  <option data-value="Ogun-State" value="Ado-odo-otta Ogun">Ado-odo/otta</option>
                                                  <option data-value="Ogun-State" value="Agbado-ogun Ogun">Agbado</option>
                                                  <option data-value="Ogun-State" value="Ewekoro Ogun">Ewekoro</option>
                                                  <option data-value="Ogun-State" value="Idarapo Ogun">Idarapo</option>
                                                  <option data-value="Ogun-State" value="Ijebu Ogun">Ijebu</option>
                                                  <option data-value="Ogun-State" value="Ikenne Ogun"> Ikenne</option>
                                                  <option data-value="Ogun-State" value="Ilugun-alaro Ogun">Ilugun Alaro</option>
                                                  <option data-value="Ogun-State" value="Imeko-afon Ogun">Imeko afon</option>
                                                  <option data-value="Ogun-State" value="Ipokia Ogun">Ipokia</option>
                                                  <option data-value="Ogun-State" value="Obafemi-owode Ogun">Obafemi/owode</option>
                                                  <option data-value="Ogun-State" value="Odeda Ogun">Odeda</option>
                                                  <option data-value="Ogun-State" value="Odogbolu Ogun">Odogbolu</option>
                                                  <option data-value="Ogun-State" value="Ogun-waterside Ogun">Ogun waterside</option>
                                                  <option data-value="Ogun-State" value="Sagamu Ogun">Sagamu</option>
                                                  <!--END OF OGUN STATE LOCAL GOVERNMENT-->


                                                      <!--BEGINING OF KWARA LOCAL GOVERNMENT-->
                                                  <option data-value="Kwara-State" value="Asa Kwara">Asa</option>
                                                  <option data-value="Kwara-State" value="Baruten Kwara">Baruten</option>
                                                  <option data-value="Kwara-State" value="Ede Kwara">Ede</option>
                                                  <option data-value="Kwara-State" value="Ekiti Kwara">Ekiti Kwara state</option>
                                                  <option data-value="Kwara-State" value="Ifelodun Kwara">Ifelodun Kwara State</option>
                                                  <option data-value="Kwara-State" value="Ilorin Kwara">Ilorin south</option>
                                                  <option data-value="Kwara-State" value="Irepodun Kwara">Irepodun Kwara State</option>
                                                  <option data-value="Kwara-State" value="Isin Kwara">Isin</option>
                                                  <option data-value="Kwara-State" value="Kaiama Kwara"> Kaiama</option>
                                                  <option data-value="Kwara-State" value="Moro Kwara">Moro</option>
                                                  <option data-value="Kwara-State" value="Offa Kwara">Offa</option>
                                                  <option data-value="Kwara-State" value="Oke-ero Kwara">Oke ero</option>
                                                  <option data-value="Kwara-State" value="Oyun Kwara">Oyun</option>
                                                  <option data-value="Kwara-State" value="Pategi Kwara">Pategi</option>
                                                  <!--END OF  KWARA STATE LOCAL GOVERNMENT-->



                                                            <!--BEGINING OF NASSARAWA STATE LOCAL GOVERNMENT-->
                                                   <option data-value="Nassarawa-State" value="Akwanga Nassarawa">Akwanga</option>
                                                  <option data-value="Nassarawa-State" value="Awe Nassarawa">Awe</option>
                                                  <option data-value="Nassarawa-State" value="Doma Nassarawa">Doma</option>
                                                  <option data-value="Nassarawa-State" value="Karu Nassarawa">Karu</option>
                                                  <option data-value="Nassarawa-State" value="Keana Nassarawa">Keana</option>
                                                  <option data-value="Nassarawa-State" value="Keffi Nassarawa">Keffi</option>
                                                  <option data-value="Nassarawa-State" value="Kokona Nassarawa">Kokona</option>
                                                  <option data-value="Nassarawa-State" value="Lafia Nassarawa">Lafia</option>
                                                  <option data-value="Nassarawa-State" value="Nassarawa Nassarawa">Nassarawa</option>
                                                  <option data-value="Nassarawa-State" value="Obi Nassarawa"> Obi</option>
                                                  <option data-value="Nassarawa-State" value="Toto Nassarawa">Toto</option>
                                                  <option data-value="Nassarawa-State" value="Wamba Nassarawa">Wamba</option>
                                                   <!--END OF NASSARAWA STATE LOCAL GOVERNMENT-->

                                                           <!--END OF  PLATEAU STATE LOCAL GOVERNMENT-->
                                                  <option data-value="Plateau-State" value="Barkin-ladi Plateau">Barkin/ladi</option>
                                                  <option data-value="Plateau-State" value="Bassa Plateau">Bassa</option>
                                                  <option data-value="Plateau-State" value="Bokkos Plateau">Bokkos</option>
                                                  <option data-value="Plateau-State" value="Jos Plateau">Jos</option>
                                                  <option data-value="Plateau-State" value="Kanam Plateau">Kanam</option>
                                                  <option data-value="Plateau-State" value="Kiyom Plateau">kiyom</option>
                                                  <option data-value="Plateau-State" value="Langtang Plateau">Langtang</option>
                                                  <option data-value="Plateau-State" value="Mangu Plateau">Mangu</option>
                                                  <option data-value="Plateau-State" value="Mikang Plateau">Mikang</option>
                                                  <option data-value="Plateau-State" value="Pankshin Plateau">Pankshin</option>
                                                  <option data-value="Plateau-State" value="Shendam Plateau">Shendam</option>
                                                  <option data-value="Plateau-State" value="Wase Plateau">Wase</option>
                                                  <!--END OF  PLATEAU STATE LOCAL GOVERNMENT-->



                                                  <!--END OF  FEDERAL CAPITAL TERRITORY (F.C.T) LOCAL GOVERNMENT-->
                                                  <option data-value="Abuja" value="Abaji Abuja">Abaji</option>
                                                  <option data-value="Abuja" value="Abuja-municipal Abuja">Abuja Municipal. Bwari</option>
                                                  <option data-value="Abuja" value="Gwagwalada Abuja">Gwagwalada</option>
                                                  <option data-value="Abuja" value="Kuje Abuja">Kuje</option>
                                                  <option data-value="Abuja" value="Kwali Abuja">Kwali</option>
                                                  <!--END OF  FEDERAL CAPITAL TERRITORY (F.C.T) LOCAL GOVERNMENT-->



                                                    <!--BEGINING OF ABIA LOCAL GOVERNMENT-->
                                                  <option data-value="Abia-State" value="Aba Abia">Aba</option>
                                                  <option data-value="Abia-State" value="Arochukwu Abia">Arochukwu</option>
                                                  <option data-value="Abia-State" value="Aiyekire Abia">Aiyekire</option>
                                                <option data-value="Abia-State" value="Anka Abia">Anka</option>
                                                  <option data-value="Abia-State" value="Bende Abia">Bende</option>
                                                  <option data-value="Abia-State" value="Ngwa Abia">Ngwa</option>
                                                  <option data-value="Abia-State" value="Ikwuano Abia">Ikwuano</option>
                                                  <option data-value="Abia-State" value="Isiala Abia">Isiala</option>
                                                  <option data-value="Abia-State" value="Isukwuato Abia">Isukwuato</option>
                                                  <option data-value="Abia-State" value="Ukwa Abia">Ukwa</option>
                                                  <option data-value="Abia-State" value="Umuahia Abia">Umuahia</option>
                                                   <!--END OF ABIA LOCAL GOVERNMENT-->


                                                   <!--BEGINING OF  TARABA STATE LOCAL GOVERNMENT-->
                          <option data-value="Taraba-State" value="Akdo-kola Taraba">Akdo-kola</option>
                          <option data-value="Taraba-State" value="Bali Taraba">Bali</option>
                          <option data-value="Taraba-State" value="Donga Taraba">Donga</option>
                          <option data-value="Taraba-State" value="Gashaka Taraba"> Gashaka</option>
                          <option data-value="Taraba-State" value="Gassol Taraba">Gassol</option>
                          <option data-value="Taraba-State" value="Ibi Taraba">Ibi</option>
                          <option data-value="Taraba-State" value="Lamido Taraba">K/Lamido</option>
                          <option data-value="Taraba-State" value="Kurmi Taraba">Kurmi</option>
                          <option data-value="Taraba-State" value="Lan Taraba">Lan</option>
                          <option data-value="Taraba-State" value="Sardauna Taraba">Sardauna</option>
                          <option data-value="Taraba-State" value="Tarum Taraba">Tarum</option>
                          <option data-value="Taraba-State" value="Ussa Taraba">Ussa</option>
                          <option data-value="Taraba-State" value="Wukari Taraba">Wukari</option>
                          <option data-value="Taraba-State" value="Yorro Taraba">Yorro</option>
                          <option data-value="Taraba-State" value="Zing Taraba">Zing</option>
                           <!--END OF  TARABA STATE LOCAL GOVERNMENT-->



                          <!--BEGINING OF CROSS RIVER LOCAL GOVERNMENT-->
                          <option data-value="CrossRiver-State" value="Abi CrossRiver">Abi</option>
                          <option data-value="CrossRiver-State" value="Akampa CrossRiver">Akampa</option>
                          <option data-value="CrossRiver-State" value="Akpabuyo CrossRiver">Akpabuyo</option>
                          <option data-value="CrossRiver-State" value="Bakassi CrossRiver">Bakassi</option>
                          <option data-value="CrossRiver-State" value="Bekwara CrossRiver">Bekwara</option>
                          <option data-value="CrossRiver-State" value="Biase CrossRiver">Biase</option>
                          <option data-value="CrossRiver-State" value="Boki CrossRiver">Boki</option>
                          <option data-value="CrossRiver-State" value="Calabar CrossRiver">Calabar</option>
                          <option data-value="CrossRiver-State" value="Etung CrossRiver">Etung</option>
                          <option data-value="CrossRiver-State" value="Ikom CrossRiver">Ikom</option>
                          <option data-value="CrossRiver-State" value="Obanliku CrossRiver">Obanliku</option>
                          <option data-value="CrossRiver-State" value="Obubra CrossRiver">Obubra</option>
                          <option data-value="CrossRiver-State" value="Odukpani CrossRiver">Odukpani</option>
                          <option data-value="CrossRiver-State" value="Ogoja CrossRiver">Ogoja</option>
                          <option data-value="CrossRiver-State" value="Ugep CrossRiver">Ugep</option>
                          <option data-value="CrossRiver-State" value="Yala CrossRiver">Yala</option>
                          <option data-value="CrossRiver-State" value="Yarkur CrossRiver">Yarkur</option>
                          <!--END OF CROSS RIVER LOCAL GOVERNMENT-->


                           <!--BEGINING OF BENUE LOCAL GOVERNMENT-->
                          <option data-value="Benue-State" value="Ador Benue">Ador</option>
                          <option data-value="Benue-State" value="Agatu Benue">Agatu</option>
                          <option data-value="Benue-State" value="Apa Benue">Apa</option>
                          <option data-value="Benue-State" value="Guruku Benue">Buruku</option>
                          <option data-value="Benue-State" value="Gboko Benue">Gboko</option>
                          <option data-value="Benue-State" value="Guma Benue">Guma</option>
                          <option data-value="Benue-State" value="Gwer-benue">Gwer</option>
                          <option data-value="Benue-State" value="Kastina-ala Benue">Kastina-ala</option>
                          <option data-value="Benue-State" value="Kwande Benue">Kwande</option>
                          <option data-value="Benue-State" value="Logo Benue">Logo</option>
                          <option data-value="Benue-State" value="Makurdii Benue">Makurdii</option>
                          <option data-value="Benue-State" value="Obi Benue">Obi</option>
                          <option data-value="Benue-State" value="Ogbadibo Benue">Ogbadibo</option>
                          <option data-value="Benue-State" value="Ohimini Benue">Ohimini</option>
                          <option data-value="Benue-State" value="Oju Benue">Oju</option>
                          <option data-value="Benue-State" value="Okpokwu Benue">Okpokwu</option>
                          <option data-value="Benue-State" value="Oturkpo Benue">Oturkpo</option>
                          <option data-value="Benue-State" value="Tarka Benue">Tarka</option>
                          <option data-value="Benue-State" value="Ukum Benue">Ukum</option>
                          <option data-value="Benue-State" value="Vandekya Benue">Vandekya</option>
                           <!--END OF BENUE LOCAL GOVERNMENT-->



                             <!--BEGINING OF ADAMAWA LOCAL GOVERNMENT-->
                          <option data-value="Adamawa-State" value="Demsa Adamawa">Demsa</option>
                          <option data-value="Adamawa-State" value="Fufore Adamawa">Fufore</option>
                          <option data-value="Adamawa-State" value="Ganye Adamawa">Ganye</option>
                          <option data-value="Adamawa-State" value="Gombi Adamawa">Gombi</option>
                          <option data-value="Adamawa-State" value="Yola Adamawa">Yola North</option>
                          <option data-value="Adamawa-State" value="Lamurde Adamawa">Lamurde</option>
                          <option data-value="Adamawa-State" value="Madagali Adamawa">Madagali</option>
                          <option data-value="Adamawa-State" value="Maiha Adamawa">Maiha</option>
                          <option data-value="Adamawa-State" value="Mayo-belwa Adamawa">Mayo-Belwa</option>
                          <option data-value="Adamawa-State" value="Michika Adamawa">Michika</option>
                          <option data-value="Adamawa-State" value="Mubi Adamawa">Mubi South</option>
                          <option data-value="Adamawa-State" value="Numna Adamawa">Numna</option>
                          <option data-value="Adamawa-State" value="Shelleng Adamawa">Shelleng</option>
                          <option data-value="Adamawa-State" value="Song Adamawa">Song</option>
                          <option data-value="Adamawa-State" value="Toungo Adamawa">Toungo</option>
                          <option data-value="Adamawa-State" value="Jimeta Adamawa">Jimeta</option>
                          <option data-value="Adamawa-State" value="Jada Adamawa">Jada</option>
                          <option data-value="Adamawa-State" value="Yola Adamawa">Yola South</option>
                          <option data-value="Adamawa-State" value="Hung Adamawa">Hung</option>
                           <!--END OF ADAMAWA LOCAL GOVERNMENT-->




                          <!--BEGINING OF BAUCHI LOCAL GOVERNMENT-->
                          <option data-value="Bauchi-State" value="Alkaleri Bauchi">Alkaleri</option>
                          <option data-value="Bauchi-State" value="Bauchi Bauchi">Bauchi</option>
                          <option data-value="Bauchi-State" value="Bogoro Bauchi">Bogoro</option>
                          <option data-value="Bauchi-State" value="Darazo Bauchi"> Darazo</option>
                          <option data-value="Bauchi-State" value="Dass Bauchi">Dass</option>
                          <option data-value="Bauchi-State" value="Dambam Bauchi">Dambam</option>
                          <option data-value="Bauchi-State" value="Gamawa Bauchi">Gamawa</option>
                          <option data-value="Bauchi-State" value="Ganjuwa Bauchi">Ganjuwa</option>
                          <option data-value="Bauchi-State" value="Giade">Giade</option>
                          <option data-value="Bauchi-State" value="Jamaare Bauchi">Jama`are</option>
                          <option data-value="Bauchi-State" value="Katagum Bauchi">Katagum</option>
                          <option data-value="Bauchi-State" value="Kirfi Bauchi">Kirfi</option>
                          <option data-value="Bauchi-State" value="Misau Bauchi"> Misau</option>
                          <option data-value="Bauchi-State" value="Ningi Bauchi">Ningi</option>
                          <option data-value="Bauchi-State" value="Hira Bauchi">Hira</option>
                          <option data-value="Bauchi-State" value="Tafawa-balewa Bauchi">Tafawa Balewa</option>
                          <option data-value="Bauchi-State" value="Itas-gadau Bauchi">Itas gadau</option>
                          <option data-value="Bauchi-State" value="Toro Bauchi">Toro</option>
                          <option data-value="Bauchi-State" value="Warji Bauchi">Warji</option>
                          <option data-value="Bauchi-State" value="Zaki Bauchi">Zaki</option>
                          <!--END Of BAUCHI LOCAL GOVERNMENT-->



                           <!--END OF BORNO LOCAL GOVERNMENT-->
                          <option data-value="Borno-State" value="Abadan Borno">Abadan</option>
                          <option data-value="Borno-State" value="Askira-uba Borno">Askira/Uba</option>
                          <option data-value="Borno-State" value="Bama Borno">Bama</option>
                          <option data-value="Borno-State" value="Biu Borno">Biu</option>
                          <option data-value="Borno-State" value="Chibok Borno">Chibok</option>
                          <option data-value="Borno-State" value="Damboa Borno">Damboa</option>
                          <option data-value="Borno-State" value="Dikwagubio Borno">Dikwagubio</option>
                          <option data-value="Borno-State" value="Guzamala Borno">Guzamala</option>
                          <option data-value="Borno-State" value="Gwoza Borno">Gwoza</option>
                          <option data-value="Borno-State" value="Hawul Borno">Hawul</option>
                          <option data-value="Borno-State" value="Jere Borno">Jere</option>
                          <option data-value="Borno-State" value="Kaga Borno">Kaga</option>
                          <option data-value="Borno-State" value="Kalka-balge Borno">Kalka/Balge</option>
                          <option data-value="Borno-State" value="Konduga Borno">Konduga</option>
                          <option data-value="Borno-State" value="Kukawa Borno">Kukawa</option>
                          <option data-value="Borno-State" value="Kwaya-ku Borno">Kwaya-ku</option>
                          <option data-value="Borno-State" value="Mafa Borno">Mafa</option>
                          <option data-value="Borno-State" value="Magumeri Borno">Magumeri</option>
                          <option data-value="Borno-State" value="Maiduguri Borno">Maiduguri</option>
                          <option data-value="Borno-State" value="Marte Borno">Marte</option>
                          <option data-value="Borno-State" value="Mobbar Borno">Mobbar</option>
                          <option data-value="Borno-State" value="Monguno Borno">Monguno</option>
                          <option data-value="Borno-State" value="Ngala Borno">Ngala</option>
                          <option data-value="Borno-State" value="Nganzai Borno">Nganzai</option>
                          <option data-value="Borno-State" value="Shani Borno">Shani</option>
                          <!--END OF BORNO LOCAL GOVERNMENT-->



                          <!--BEGINING OF DELTA LOCAL GOVERNMENT-->
                          <option data-value="Delta-State" value="Aniocha State">Aniocha</option>
                          <option data-value="Delta-State" value="Anioha State">Anioha</option>
                          <option data-value="Delta-State" value="Bomadi State">Bomadi</option>
                          <option data-value="Delta-State" value="Burutu State">Burutu</option>
                          <option data-value="Delta-State" value="Ethiope State">Ethiope</option>
                          <option data-value="Delta-State" value="Ika State">Ika</option>
                          <option data-value="Delta-State" value="Isoko State">Isoko</option>
                          <option data-value="Delta-State" value="Ndokwa State">Ndokwa</option>
                          <option data-value="Delta-State" value="Okpe State">Okpe</option>
                          <option data-value="Delta-State" value="Oshimili State">Oshimili</option>
                          <option data-value="Delta-State" value="Patani State">Patani</option>
                          <option data-value="Delta-State" value="Sapele State">Sapele</option>
                          <option data-value="Delta-State" value="Udu State">Udu</option>
                          <option data-value="Delta-State" value="Ughelli State">Ughelli</option>
                          <option data-value="Delta-State" value="Ukwuani State">Ukwuani</option>
                          <option data-value="Delta-State" value="Uviwie State">Uviwie</option>
                          <option data-value="Delta-State" value="Warri State">Warri</option>
                          <!--END OF DELTA LOCAL GOVERNMENT-->



                            <!--END OF  ZAMFARA STATE LOCAL GOVERNMENT-->
                          <option data-value="Zamfara-State" value="Bukkuyum Zamfara">bukkuyum</option>
                          <option data-value="Zamfara-State" value="Dungudu Zamfara">Dungudu</option>
                          <option data-value="Zamfara-State" value="Chafe Zamfara">Chafe</option>
                          <option data-value="Zamfara-State" value="Gummi Zamfara">Gummi</option>
                          <option data-value="Zamfara-State" value="Gusau Zamfara">Gusau</option>
                          <option data-value="Zamfara-State" value="Isa Zamfara">Isa</option>
                          <option data-value="Zamfara-State" value="Kaura-namoda Zamfara">Kaura/Namoda</option>
                          <option data-value="Zamfara-State" value="Mradun Zamfara">Mradun</option>
                          <option data-value="Zamfara-State" value="Maru Zamfara">Maru</option>
                          <option data-value="Zamfara-State" value="Shinkafi Zamfara">Shinkafi</option>
                          <option data-value="Zamfara-State" value="Talata-mafara Zamfara">Talata/Mafara</option>
                          <option data-value="Zamfara-State" value="Zumi Zamfara">Zumi</option>
                           <!--END OF  ZAMFARA STATE LOCAL GOVERNMENT-->


                            <!--END OF  Yobe STATE LOCAL GOVERNMENT-->
                            <option  data-value="Yobe-State" value="Borsari Yobe">Borsari</option>
                          <option  data-value="Yobe-State" value="Damaturu Yobe">Damaturu</option>
                          <option  data-value="Yobe-State" value="Fune Yobe">Fune</option>
                          <option  data-value="Yobe-State" value="Geidam Yobe">Geidam</option>
                          <option  data-value="Yobe-State" value="Gujba Yobe">Gujba</option>
                          <option  data-value="Yobe-State" value="Gulani Yobe">Gulani</option>
                        <option  data-value="Yobe-State" value="Gogaram Yobe">Gogaram</option>
                          <option  data-value="Yobe-State" value="Jakusko Yobe">Jakusko</option>
                          <option  data-value="Yobe-State" value="Karasuwa Yobe">Karasuwa</option>
                          <option  data-value="Yobe-State" value="Machina Yobe">Machina</option>
                          <option  data-value="Yobe-State" value="Nagere Yobe">Nagere</option>
                          <option  data-value="Yobe-State" value="Nguru Yobe">Nguru</option>
                          <option  data-value="Yobe-State" value="Potiskum Yobe">Potiskum</option>
                          <option  data-value="Yobe-State" value="Tarmua Yobe">Tarmua</option>
                          <option  data-value="Yobe-State" value="Yunusari Yobe">Yunusari</option>
                          <option  data-value="Yobe-State" value="Yusufari Yobe">Yusufari</option>
                          <option  data-value="Yobe-State" value="Gashua Yobe">G ashua</option>
                           <!--END OF  Yobe STATE LOCAL GOVERNMENT-->



                             <!--BEGINING OF  KOGI STATE LOCAL GOVERNMENT-->
                          <option data-value="Kogi-State" value="Adavi Kogi">Adavi</option>
                          <option data-value="Kogi-State" value="Ajaokuta Kogi">Ajaokuta</option>
                          <option data-value="Kogi-State" value="Ankpa Kogi">Ankpa</option>
                          <option data-value="Kogi-State" value="Bassa Kogi">Bassa</option>
                          <option data-value="Kogi-State" value="Dekina Kogi">Dekina</option>
                          <option data-value="Kogi-State" value="Yagba Kogi">Yagba</option>
                          <option data-value="Kogi-State" value="Ibaji Kogi">Ibaji</option>
                          <option data-value="Kogi-State" value="Idah Kogi">Idah</option>
                          <option data-value="Kogi-State" value="Igalamela Kogi">Igalamela</option>
                          <option data-value="Kogi-State" value="Ijumu Kogi">Ijumu</option>
                          <option data-value="Kogi-State" value="Lokoja Kogi">Lokoja</option>
                          <option data-value="Kogi-State" value="Kabba-bunu Kogi"> Kabba bunu</option>
                          <option data-value="Kogi-State" value="Kogi Kogi">Kogi</option>
                          <option data-value="Kogi-State" value="Mopa-muro Kogi">Mopa muro</option>
                          <option data-value="Kogi-State" value="Ofu Kogi">Ofu</option>
                          <option data-value="Kogi-State" value="Ogori-magongo Kogi">Ogori magongo</option>
                          <option data-value="Kogi-State" value="Okehi Kogi">Okehi</option>
                          <option data-value="Kogi-State" value="Okene Kogi">Okene</option>
                          <option data-value="Kogi-State" value="Olamaboro Kogi">Olamaboro</option>
                          <option data-value="Kogi-State" value="Omala Kogi">Omala</option>
                          <!--END OF  KOGI STATE LOCAL GOVERNMENT-->




                            <!--BEGINING OF  KEBBI STATE LOCAL GOVERNMENT-->
                           <option data-value="Kebbi-State" value="Aliero Kebbi">Aliero</option>
                          <option data-value="Kebbi-State" value="Arewa-dandi Kebbi">Arewa Dandi</option>
                          <option data-value="Kebbi-State" value="Argungu Kebbi">Argungu</option>
                          <option data-value="Kebbi-State" value="Augie Kebbi">Augie</option>
                          <option data-value="Kebbi-State" value="Bagudo Kebbi">Bagudo</option>
                          <option data-value="Kebbi-State" value="Birnin Kebbi">Birnin Kebbi</option>
                          <option data-value="Kebbi-State" value="Bunza Kebbi">Bunza</option>
                          <option data-value="Kebbi-State" value="Dandi Kebbi">Dandi</option>
                          <option data-value="Kebbi-State" value="Danko Kebbi">Danko</option>
                          <option data-value="Kebbi-State" value="Fakai Kebbi">Fakai</option>
                          <option data-value="Kebbi-State" value="Gwandu Kebbi"> Gwandu</option>
                          <option data-value="Kebbi-State" value="Jeda Kebbi">Jeda</option>
                          <option data-value="Kebbi-State" value="Kalgo Kebbi">Kalgo</option>
                          <option data-value="Kebbi-State" value="Koko-besse Kebbi">Koko-besse</option>
                          <option data-value="Kebbi-State" value="Maiyaama Kebbi">Maiyaama</option>
                          <option data-value="Kebbi-State" value="Ngaski Kebbi">Ngaski</option>
                          <option data-value="Kebbi-State" value="Sakaba Kebbi">Sakaba</option>
                          <option data-value="Kebbi-State" value="Shanga Kebbi">Shanga</option>
                          <option data-value="Kebbi-State" value="Suru Kebbi">Suru</option>
                          <option data-value="Kebbi-State" value="Wasugu Kebbi">Wasugu</option>
                          <option data-value="Kebbi-State" value="Yauri Kebbi">Yauri</option>
                          <option data-value="Kebbi-State" value="Zuru Kebbi">Zuru</option>
                          <!--END OF  KEBBI STATE LOCAL GOVERNMENT-->



                          <!--BEGINING OF  SOKOTO STATE LOCAL GOVERNMENT-->
                          <option data-value="Sokoto-State" value="Binji Sokoto">Binji</option>
                          <option data-value="Sokoto-State" value="Bodinga Sokoto">Bodinga</option>
                          <option data-value="Sokoto-State" value="Dange-shuni Sokoto">Dange/shuni</option>
                          <option data-value="Sokoto-State" value="Gada Sokoto">Gada</option>
                          <option data-value="Sokoto-State" value="Goronyo Sokoto">Goronyo</option>
                          <option data-value="Sokoto-State" value="Gudu Sokoto">Gudu</option>
                          <option data-value="Sokoto-State" value="Gwadabawa Sokoto">Gwadabawa</option>
                          <option data-value="Sokoto-State" value="Illella Sokoto">Illella</option>
                          <option data-value="Sokoto-State" value="Kebbe Sokoto">Kebbe</option>
                          <option data-value="Sokoto-State" value="Kware Sokoto">Kware</option>
                          <option data-value="Sokoto-State" value="Rabah Sokoto">Rabah</option>
                          <option data-value="Sokoto-State" value="Sabon-birni Sokoto">Sabon -Birni</option>
                          <option data-value="Sokoto-State" value="Shagari Sokoto">Shagari</option>
                          <option data-value="Sokoto-State" value="Silame Sokoto">Silame</option>
                          <option data-value="Sokoto-State" value="Sokoto Sokoto">Sokoto</option>
                          <option data-value="Sokoto-State" value="Tambuwal Sokoto">Tambuwal</option>
                          <option data-value="Sokoto-State" value="Tangaza Sokoto">Tangaza</option>
                          <option data-value="Sokoto-State" value="Tureta Sokoto">Tureta</option>
                          <option data-value="Sokoto-State" value="Wamakko Sokoto">Wamakko</option>
                          <option data-value="Sokoto-State" value="Wurno Sokoto">Wurno</option>
                          <option data-value="Sokoto-State" value="Yabo Sokoto">Yabo</option>
                          <!--END OF  SOKOTO STATE LOCAL GOVERNMENT-->


                          <!--BEGINING OF  RIVERS STATE LOCAL GOVERNMENT-->
                          <option data-value="Rivers-State" value="Abua-odial Rivers">Abua/Odial</option>
                          <option data-value="Rivers-State" value="Ahoada-west Rivers">Ahoada west</option>
                          <option data-value="Rivers-State" value="Akuku-toru Rivers">Akuku toru</option>
                          <option data-value="Rivers-State" value="Andoni Rivers">Andoni</option>
                          <option data-value="Rivers-State" value="Asari-toru Rivers">Asari toru</option>
                          <option data-value="Rivers-State" value="Bonny Rivers">Bonny</option>
                          <option data-value="Rivers-State" value="Degema Rivers">Degema</option>
                          <option data-value="Rivers-State" value="Eleme Rivers">Eleme</option>
                          <option data-value="Rivers-State" value="Emohua Rivers">Emohua</option>
                          <option data-value="Rivers-State" value="Etche Rivers">Etche</option>
                          <option data-value="Rivers-State" value="Gokana Rivers">Gokana</option>
                          <option data-value="Rivers-State" value="Ikwerre Rivers">Ikwerre</option>
                          <option data-value="Rivers-State" value="Oyigbo Rivers">Oyigbo</option>
                          <option data-value="Rivers-State" value="Khana Rivers">Khana</option>
                          <option data-value="Rivers-State" value="Obio-akpor Rivers">Obio/Akpor</option>
                          <option data-value="Rivers-State" value="Ogba-east-edoni Rivers">Ogba east/Edoni</option>
                          <option data-value="Rivers-State" value="Ogu-bolo Rivers">Ogu/bolo</option>
                          <option data-value="Rivers-State" value="Okrika Rivers">Okrika</option>
                          <option data-value="Rivers-State" value="Omumma Rivers">Omumma</option>
                          <option data-value="Rivers-State" value="Portharcourt Rivers">Portharcourt</option>
                          <option data-value="Rivers-State" value="Tai Rivers">Tai</option>
                          <!--END OF  RIVERS STATE LOCAL GOVERNMENT-->


                          <!--BEGINING OF KADUNA STATE LOCAL GOVERNMENT-->
                          <option data-value="Kaduna-State" value="Brnin-gwari Kaduna">Brnin Gwari</option>
                          <option data-value="Kaduna-State" value="Chukun Kaduna">Chukun</option>
                          <option data-value="Kaduna-State" value="Giwa Kaduna">Giwa</option>
                          <option data-value="Kaduna-State" value="Kajuru Kaduna">Kajuru</option>
                          <option data-value="Kaduna-State" value="Igabi Kaduna">Igabi</option>
                          <option data-value="Kaduna-State" value="Ikara Kaduna">Ikara</option>
                          <option data-value="Kaduna-State" value="Jaba Kaduna">Jaba</option>
                          <option data-value="Kaduna-State" value="Jemaa Kaduna">Jema`a</option>
                          <option data-value="Kaduna-State" value="Kachia Kaduna">Kachia</option>
                          <option data-value="Kaduna-State" value="Kaduna Kaduna">Kaduna</option>
                          <option data-value="Kaduna-State" value="Kagarok Kaduna">Kagarok</option>
                          <option data-value="Kaduna-State" value="Kauru Kaduna">Kauru</option>
                          <option data-value="Kaduna-State" value="Kabau Kaduna">Kabau</option>
                          <option data-value="Kaduna-State" value="Kudan Kaduna">Kudan</option>
                          <option data-value="Kaduna-State" value="Kere Kaduna">Kere</option>
                          <option data-value="Kaduna-State" value="Makarfi Kaduna">Makarfi</option>
                          <option data-value="Kaduna-State" value="Sabongari Kaduna">Sabongari</option>
                          <option data-value="Kaduna-State" value="Sanga Kaduna">Sanga</option>
                          <option data-value="Kaduna-State" value="Soba Kaduna">Soba</option>
                          <option data-value="Kaduna-State" value="Zangon-kataf Kaduna">Zangon-Kataf</option>
                          <option data-value="Kaduna-State" value="Zaria Kaduna">Zaria</option>
                          <!--END OF KADUNA STATE LOCAL GOVERNMENT-->



                          <!--BEGINING OF NIGER STATE LOCAL GOVERNMENT-->

                          <option data-value="Niger-State" value="Agaie Niger">Agaie</option>
                          <option data-value="Niger-State" value="Agwara Niger">Agwara</option>
                          <option data-value="Niger-State" value="Bida Niger">Bida</option>
                          <option data-value="Niger-State" value="Borgu Niger">Borgu</option>
                          <option data-value="Niger-State" value="Bosso Niger">Bosso</option>
                          <option data-value="Niger-State" value="Chanchanga Niger">Chanchanga</option>
                          <option data-value="Niger-State" value="Edati Niger">Edati</option>
                          <option data-value="Niger-State" value="Gbako Niger">Gbako</option>
                          <option data-value="Niger-State" value="Gurara Niger">Gurara</option>
                          <option data-value="Niger-State" value="Kitcha Niger">Kitcha</option>
                          <option data-value="Niger-State" value="Kontagora Niger"> Kontagora</option>
                          <option data-value="Niger-State" value="Lapai Niger">Lapai</option>
                          <option data-value="Niger-State" value="Lavun Niger">Lavun</option>
                          <option data-value="Niger-State" value="Magama Niger">Magama</option>
                          <option data-value="Niger-State" value="Mariga Niger">Mariga</option>
                          <option data-value="Niger-State" value="Mokwa Niger">Mokwa</option>
                          <option data-value="Niger-State" value="Moshegu Niger">Moshegu</option>
                          <option data-value="Niger-State" value="Muya Niger">Muya</option>
                          <option data-value="Niger-State" value="Paiko Niger">Paiko</option>
                          <option data-value="Niger-State" value="Rafi Niger">Rafi</option>
                          <option data-value="Niger-State" value="Shiroro Niger">Shiroro</option>
                          <option data-value="Niger-State" value="Suleija Niger">Suleija</option>
                          <option data-value="Niger-State" value="Tawa-wushishi Niger">Tawa-Wushishi</option>
                          <!--END OF NIGER STATE LOCAL GOVERNMENT-->



                           <!--BEGINING OF JIGAWA STATE LOCAL GOVERNMENT-->
                            <option data-value="Jigawa-State"  value="Auyo Jigawa">Auyo</option>
                          <option  data-value="Jigawa-State" value="Babura Jigawa">Babura</option>
                          <option  data-value="Jigawa-State" value="Birnin-kudu Jigawa">Birnin-Kudu</option>
                          <option  data-value="Jigawa-State" value="Birniwa Jigawa">Birniwa</option>
                          <option  data-value="Jigawa-State" value="Buji Jigawa">Buji</option>
                          <option  data-value="Jigawa-State" value="Dute Jigawa">Dute</option>
                          <option  data-value="Jigawa-State" value="Garki Jigawa">Garki</option>
                          <option  data-value="Jigawa-State" value="Gagarawa Jigawa">Gagarawa</option>
                          <option  data-value="Jigawa-State" value="Gumel Jigawa">Gumel</option>
                          <option  data-value="Jigawa-State" value="Guri Jigawa">Guri</option>
                          <option  data-value="Jigawa-State" value="Gwaram Jigawa"> Gwaram</option>
                          <option  data-value="Jigawa-State" value="Gwiwa Jigawa">Gwiwa</option>
                          <option  data-value="Jigawa-State" value="Hadeji Jigawa">Hadeji</option>
                          <option  data-value="Jigawa-State" value="Jahun Jigawa">Jahun</option>
                          <option  data-value="Jigawa-State" value="Kafin-hausa Jigawa">Kafin-Hausa</option>
                          <option  data-value="Jigawa-State" value="kaugama Jigawa">kaugama</option>
                          <option  data-value="Jigawa-State" value="Kazaure Jigawa">Kazaure</option>
                          <option  data-value="Jigawa-State" value="Kirikisamma Jigawa">Kirikisamma</option>
                          <option  data-value="Jigawa-State" value="Birnin-magaji Jigawa">Birnin-magaji</option>
                          <option  data-value="Jigawa-State" value="Maigatari Jigawa">Maigatari</option>
                          <option  data-value="Jigawa-State" value="Malamaduri Jigawa">Malamaduri</option>
                          <option  data-value="Jigawa-State" value="Miga Jigawa">Miga</option>
                          <option  data-value="Jigawa-State" value="Ringim Jigawa">Ringim</option>
                          <option  data-value="Jigawa-State" value="Roni Jigawa">Roni</option>
                          <option  data-value="Jigawa-State" value="Sule-tankarka Jigawa">Sule Tankarka</option>
                          <option  data-value="Jigawa-State" value="Taura Jigawa">Taura</option>
                          <option  data-value="Jigawa-State" value="Yankwasi Jigawa">Yankwasi</option>
                            <!--END OF JIGAWA STATE LOCAL GOVERNMENT-->



                                <!--BEGINING OF IMO STATE LOCAL GOVERNMENT-->
                          <option data-value="Imo-State" value="Aboh-mbaise Imo">Aboh-mbaise</option>
                          <option data-value="Imo-State" value="Ahiazu-mbaise Imo">Ahiazu-Mbaise</option>
                          <option data-value="Imo-State" value="Ehime-mbaino Imo">Ehime-Mbaino</option>
                          <option data-value="Imo-State" value="Ezinhite Imo">Ezinhite</option>
                          <option data-value="Imo-State" value="Ideato Imo">Ideato</option>
                          <option data-value="Imo-State" value="Ihitte-uboma Imo">Ihitte/Uboma</option>
                          <option data-value="Imo-State" value="Ikeduru Imo">Ikeduru</option>
                          <option data-value="Imo-State" value="Isiala Imo">Isiala</option>
                          <option data-value="Imo-State" value="Isu Imo">Isu</option>
                          <option data-value="Imo-State" value="Mbaitoli Imo"> Mbaitoli</option>
                          <option data-value="Imo-State" value="Ngor-okpala Imo">Ngor Okpala</option>
                          <option data-value="Imo-State" value="Njaba Imo">Njaba</option>
                          <option data-value="Imo-State" value="Nwangele Imo">Nwangele</option>
                          <option data-value="Imo-State" value="Nkwere Imo"> Nkwere</option>
                          <option data-value="Imo-State" value="Obowo Imo">Obowo</option>
                          <option data-value="Imo-State" value="Aguta Imo">Aguta</option>
                          <option data-value="Imo-State" value="Ohaji-egbema Imo">Ohaji Egbema</option>
                          <option data-value="Imo-State" value="Ogkiwe Imo">Ogkiwe</option>
                          <option data-value="Imo-State" value="Onuimo Imo">Onuimo</option>
                          <option data-value="Imo-State" value="Orlu Imo">Orlu</option>
                          <option data-value="Imo-State" value="Orsu Imo">Orsu</option>
                          <option data-value="Imo-State" value="Oru Imo">Oru</option>
                          <option data-value="Imo-State" value="Owerri Imo">Owerri</option>
                          <!--END OF IMO STATE LOCAL GOVERNMENT-->



                                            </select>             
                                        </div>
                                        <br/>

                                           <div class="form-group">
                                             
                                             <select class="form-control" name="country_name">
                                                 <option value="select">Please select your country</option>
                                                 <option value="Nigeria">Nigeria</option>
                                                 

                                             </select>
                                             
                                        </div>
                                         
<br/>
                                             <div class="form-group">
                                             <label for="inputfile"><p style="font-size: 18px; font-weight:bold">Upload Your Service Cover Image Of The Size: 768 x 512 pixel</p></label>
                                           
                                      
                                             <input type="file"  name="cover_image" required/>
                                         </div>

<br/>
                                         

                                    <div class="form-group">
                                         <div class="col-md-12">
                                            
                                                <p"><b style="font-size: 18px;">Are you Registered with the Corporate Affairs Commission (CAC)</b></p><br/>
                                                
                                                
                                                <p></p><textarea name="service_description" rows="1" cols="40" placeholder="Service Description in less than 70 words" maxlength="70" required/></textarea></p>

                                                <center>
                                                    <input type="button" value="YES" style="width: 12%"  onclick="openModal()"> <input type="button" value="NO" style="margin-left: 10%;width: 12%">
                                                   
                                                </center>  
                                                
                                                
                                                 


                                        </div>
                                    </div>
                                       
                                        <div class="col-md-12">
                                            <div class="md-form form-sm">
                                                <i class="fa fa-lock prefix"></i>
                                                 <input type="password" name="password" id="password" class="form-control validate"  required/>
                                                <label for="password" > Password</label>
                                            </div>
                                        </div>        
                                         
                                        <div class="col-md-12">
                                            <div class="md-form form-sm">
                                                <i class="fa fa-lock prefix"></i>
                                                <input type="password" name="confirm_password" id="password" class="form-control validate" required/>
                                                <label for="confirm_password" > Confirm_Password</label>
                                            </div>
                                        </div>  
                                            <hr/>
                                        <div class="text-center">
                                                <h4><strong>BANK ACCOUNT DETAILS</strong></h4>                
                                        </div>  

                                        <div class="md-form form-sm">
                                                <i class="fa fa-users prefix"></i>
                                                <input type="text" name="account_name" id="account_name" class="form-control validate" required/>
                                                <label for="account_name" >Account Name</label>
                                            </div>

                                            <div class="md-form form-sm">
                                                <i class="fa fa-lock prefix"></i>
                                                <input type="text" name="account_number" id="account_number" class="form-control validate" required/>
                                                <label for="account_no" >Account Number</label>
                                            </div>

                                            <div class="md-form form-sm">
                                                <i class="fa fa-book prefix"></i>
                                                <input type="text" name="bank_name" id="bank_name" class="form-control validate" required/>
                                                <label for="bank_name" >Bank Name</label>
                                            </div>  


                                                    <br/>

                                                             <center>
                                                       <fieldset class="form-group">
                                                  <input type="checkbox" id="checkbox1" name="checkbox" required/>
                                                  <label for="checkbox1"><a href="terms_conditions.php"><h5>I Agree To Terms and Conditions</h5></a></label>
                                                  </fieldset>
                                                  </center> 
  
                                           
                                           <div class="text-center">
                                                <button class="btn btn-primary btn-small" type="submit" name="register_vendor" style="width:150px;">Register</button>
                                          
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                          <div class="col-md-2 col-xs-12 col-sm-12">
                                    </div>

                

                </div>
            </div>
                           

   

    <!--/BEGINING OF VENDORS PHP SCRIPT-->

                    <?php
                    //To check wether the form has been submitted when clicking the register button
                        if(isset($_POST['register_vendor'])){
                            $name=$_POST['name'];
                            $email=$_POST['email'];
                            $phone_no=$_POST['phone_no'];
                            $state=$_POST['state_name'];
                            $location=$_POST['location_name'];
                            $country=$_POST['country_name'];
                            $checkbox=$_POST['checkbox'];
                            $service_price=$_POST['service_price'];
                           $service_name=$_POST['service_name'];                           
                           $com_code = md5(uniqid(rand()));
                            $cac_reg_no=$_POST['cac_reg_no'];
                            $cac_year_of_reg=$_POST['cac_year_of_reg'];
                            $service_description=$_POST['service_description'];
                             $account_name=$_POST['account_name'];
                            $account_number=$_POST['account_number'];
                            $bank_name=$_POST['bank_name'];
                            $password=md5($_POST['password']);
                            $confirm_password=md5($_POST['confirm_password']);
                            $datetime = date("Y-m-d H:i:s");  

                             $cover_imagename=$_FILES['cover_image']['name'];
                            $tempimage_one=$_FILES['cover_image']['tmp_name'];
                            move_uploaded_file($tempimage_one, "img/$cover_imagename");



                             //To check wehteher the all the FORM field is is NOT EMPTY
                                if(!empty($name) && !empty($email) && !empty($phone_no) &&  !empty($state) && !empty($location) && !empty($country) && !empty($service_description) && !empty($password) &&  !empty($account_name) && !empty($account_number) && !empty($bank_name) && !empty($checkbox) && !empty($confirm_password)){

                                    //To check if the type in email format is correct ornoot
                                    if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $_POST['email'])){
                                        //To check if the two password matches
                                            if($password==$confirm_password){
                                                if(isset($_POST['email'])){
                                                    $query="SELECT * FROM vendor WHERE email='$email'";
                                                    $query_run=mysqli_query($mysqli,$query);
                                                    if(mysqli_num_rows($query_run)>0){
                                                        echo "<script>alert('Email Already Exist')</script>";
                                                    }else{

                                                        $query="SELECT * FROM vendor WHERE phone_no='$phone_no'";
                                                        $query_run=mysqli_query($mysqli,$query);
                                                        if(mysqli_num_rows($query_run)){
                                                            echo "<script>alert('Phone Number Already Exist')</script>";
                                                        }else{
                                                            $query="INSERT INTO vendor(name,email,phone_no,state,location,country,password,datetime) VALUES('$name','$email','$phone_no','$state','$location','$country','$password','$datetime')";

                                                            $query_2="INSERT INTO service(vendor_id,service_name,service_price,cover_image,location,state,service_description,cac_reg_no,cac_year_of_reg,account_name,account_number,bank_name,datetime) VALUES((SELECT vendor_id FROM vendor WHERE email='$email'),'$service_name','$service_price','$cover_imagename','$location','$state','$service_description','$cac_reg_no','$cac_year_of_reg','$account_name','$account_number','$bank_name','$datetime')";
                                                                 $query_run=mysqli_query($mysqli,$query);
                                                                    $query_run_2=mysqli_query($mysqli,$query_2);

                                                                if($query_run && $query_run_2){
                                                                    $to = $email;
                                                                $subject = "Confirmation from partyvendors.com.ng to $email";
                                                                
                                                                
                                                                 $message="Thank you for signing up with partyvendors.com.ng. 
                                                                 To provide you the best service possible, 
                                                                 we require you to verify your email address. If you are receiving this email and have never signed up with us, 
                                                                 please feel free to ignore this email. To finish your verification, please follow the directions below.
                                                                 Please click on the link below or copy and paste it into your browser to proceed with your registration.
                                                                 http://www.partyvendors.com.ng/test/confirm.php?email=$email
                                                                 
                                                                 Best regards,
                                                                 Partyvendors Team
                                                                    
                                                                 ";             

                                                                    //$sentmail = mail($to, $subject, $message);

                                                                                     if($sentmail == true){
                                                                                            echo "<script>alert('Your Confirmation link Has Been Sent To Your Email Address')</script>";

                                                                                           // header("Location:login.php");
                                                                                        }else{
                                                                                            echo "<script>alert('Cannot send Confirmation link to your e-mail address')</script>";
                                                                                        }
                                                            }else{
                                                                echo "<script>alert('Insert Not succesfual')</script>";
                                                            }

                                                        }

                                                    }

                                                }else{
                                                  // else of email $_POST  
                                                }

                                            }else{
                                                echo "<script>alert('Password Not Match')</script>";
                                            }

                                    }else{
                                        echo "<script>alert('Invalid Email Format')</script>";
                                    }

                                }else{
                                    echo "<script>alert('All Field Are Required to be filled')</script>";
                                }                       
                        }else{
                            
                        }
                    ?>
    <!--/END OF VENDORS PHP SCRIPT-->

                    </div>
                </div> 


                                                    <div id="modal">
                                                        <div class="modal_view">
                                                                
                                                            <div class="md-form form-sm">
                                                                <button class="closesign" onclick="closeModal()"> x </button>
                                                                    <i class="fa fa-lock prefix"></i>
                                                                     <input type="text" name="cac_reg_no" id="cac_reg_no" class="form-control validate">
                                                                    <label for="cac_reg_no" >CAC Registration No </label>
                                                                </div>

                                                                 <div class="md-form form-sm">
                                                                    <i class="fa fa-lock prefix"></i>
                                                                     <input type="text" name="cac_year_of_reg" id="cac_year_of_reg" class="form-control validate">
                                                                    <label for="year_of_reg" >CAC Year Registration </label>
                                                                </div>
                                                        </div>
                                                    </div>

    <!--/.Mask-->
    
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

    <script type="text/javascript" src="modal.js"></script> 
      <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.2.min.js"></script>
      <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
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
    </body>
</html>
