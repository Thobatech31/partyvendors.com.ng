
<?php
session_start();
// Destroying All Sessions
if(session_destroy())
{
// Redirecting To primary Page
header("Location: login.php");
}
?>