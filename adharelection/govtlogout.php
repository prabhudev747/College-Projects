<?php


session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: govtlogin.php"); // Redirecting To Home Page
}
?>