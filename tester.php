 
<?php
ob_start();
session_start();
require('configdb.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form action="tester.php" method="post" enctype="multipart/form-data">
    <p> <input name="service_image[]" type="file" multiple='multiple' /> </p>

    <button class="btn btn-primary btn-small" type="submit" name="register_vendor" style="width:150px;">Register</button>
</form>



<?php

 $query = "SELECT * FROM `service`";

$result=mysqli_query($mysqli,$query);
$a = [];
echo "<pre>";
while($row=mysqli_fetch_assoc($result)){
    if (array_key_exists($row['vendor_id'], $a)) {
        $a[$row['vendor_id']][] = $row;
    }else{
        $a[$row['vendor_id']] = [];
        $a[$row['vendor_id']][] = $row;
    }
     


}

//echo "<pre>";
//var_dump($a);exit;

foreach ($a as $valu) {

    //overall wrapper div here
echo '<div style="width:24%; height:120px;">';
    foreach ($valu as $key => $value) {       
    //echo '<img src="img/' .$value['service_image']. '"><br>' ;
    echo '<div style="width:30%; height:400px; float:left;">
                         <img src="img/' . $value['service_image'] .'" style="width: 350px; height:230px; border:1px solid red;">


                       </div>';



}
}



?>
 
                       
                
</body>
</html>


 
