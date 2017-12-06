<?php
$imagename = "samplename.png";
$imgarr = explode('.', $imagename);
$ext = end($imgarr);
$nm = time().'.'.$ext;
var_dump($nm);

?>

for($i=0;$i<count($_FILES["service_image"]["name"]);$i++)
                    {


                                            $imagename=$_FILES['service_image']['name'][$i];
$imgarr = explode('.', $imagename);
$ext = end($imgarr);
$newimg = time().'.'.$ext;
                                                $tempimage_two=$_FILES['service_image']['tmp_name'][$i];
                                                $filetype=$_FILES['service_image']['type'][$i];
                                                move_uploaded_file($tempimage_two, "img/$newimg");
                    }