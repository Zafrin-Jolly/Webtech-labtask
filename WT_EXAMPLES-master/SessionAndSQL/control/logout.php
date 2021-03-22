<?php
session_start();

if(session_destroy()) // Destroying All Sessions
{
header("Location: ../logincheck.php"); // Redirecting To Home Page
}
?>