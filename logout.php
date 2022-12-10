<?php
session_start();
if(session_destroy()){ // Destroying All Sessions
header("Location: login.php"); // Redirecting To Home Page
}
if (isset($_COOKIE['email'], $_COOKIE['password'])) {
   setcookie("email", "", time() - 3600);
   setcookie("password", "", time() - 3600);
   setcookie("uid", "", time() - 3600);
}
?>