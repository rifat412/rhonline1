<?php
session_start(); //Starting Session 
if(!isset($_SESSION['email'], $_SESSION['password'], $_SESSION['uid'], $_SESSION['ulabel'])){
    //header("Location: https://{$_SERVER['HTTP_HOST']}/admin/login");
    header('Location: login.php');
    exit;
}
?>