<?php 
session_start();
if(!isset($_SESSION["contrasena"]) AND !isset($_SESSION['email'])){
    header("Location:index.php");
}
?>