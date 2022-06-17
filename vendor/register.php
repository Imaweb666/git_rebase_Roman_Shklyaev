<?php
session_start();
require_once "connect.php";
$login = $_POST['login'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$passrep = $_POST['repeatpassword'];
if ($password === $passrep) {
    $password = md5($password);
    mysqli_query($conn, "INSERT INTO `users` (`id`, `login`, `email`, `password`, `phone`) VALUES (NULL, '$login', '$email', '$password', '$phone') ");
    $_SESSION['message'] = '';
    header('location: ../login.php');
} else {
    $_SESSION['message'] = 'Пароли не совпадают!';
    header('location: ../register.php');
}