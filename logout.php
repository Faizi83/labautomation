<?php 
session_start();

session_destroy();

unset($_SESSION['user_id']);
unset($_SESSION['first_name']);
unset($_SESSION['last_name']);
unset($_SESSION['email']);
header('location:login.php');

?>