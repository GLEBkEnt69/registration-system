<?php
session_start(); 
require_once "connect.php";
$login = $_POST ["login"];
$email = $_POST ["email"];
$password = $_POST ["password"];
$password1 = $_POST ["password2"];
if( $password === $password1){
    $password = md5($password);
    mysqli_query($connect, "INSERT INTO `reg` (`ID`, `Login`, `email`, `password`) VALUES (NULL, '$login', '$email', '$password')
    ");
    $_SESSION["message"] = 'nise';
    header("Location: ../auto.php");
}
else{$_SESSION["message"] = 'потрачено';
    header("Location: ../reg.php");
}
?>