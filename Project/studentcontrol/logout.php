<?php
session_start();

if(session_destroy()) // Destroying All Sessions
{
header("Location: ../view/HomePage.php"); // Redirecting To Home Page
}
?>