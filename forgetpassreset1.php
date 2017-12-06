<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
ob_start();
session_start();
require('configdb.php');

    $newpass=$_POST['newpass'];
    $newpass1=$_POST['newpass1'];
    $post_email=$_POST['email'];
    $code=$_GET['code'];

        if ($newpass == $newpass1) {
            $enc_password=md5($newpass);

            mysqli_query($mysqli,"UPDATE customer SET password='$newpass' WHERE email='$post_email'");
            

            mysqli_query($mysqli,"UPDATE customer SET passrest='0' WHERE email='$post_email'");
            

            echo "Your Password Has Been Updated<> <a href='http://www.partyvendors.com.ng/test/forgetpassword.php?code=$code&email=$post_email'>Click here to go back</a>";
        }else{
            echo "Password must match <a href='resetpassword.php?code=$code&email=$post_email'>Click here to go back</a>";
        }

?>
</body>
</html><!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
ob_start();
session_start();
require('configdb.php');

    $newpass=$_POST['newpass'];
    $newpass1=$_POST['newpass1'];
    $post_email=$_POST['email'];
    $code=$_GET['code'];

        if ($newpass == $newpass1) {
            $enc_password=md5($newpass);

            mysqli_query($mysqli,"UPDATE customer SET password='$newpass' WHERE email='$post_email'");
            

            mysqli_query($mysqli,"UPDATE customer SET passrest='0' WHERE email='$post_email'");
            

            echo "Your Password Has Been Updated<> <a href='http://www.partyvendors.com.ng/test/forgetpassword.php?code=$code&email=$post_email'>Click here to go back</a>";
        }else{
            echo "Password must match <a href='resetpassword.php?code=$code&email=$post_email'>Click here to go back</a>";
        }

?>
</body>
</html>