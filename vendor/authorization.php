<?php
session_start();
require_once "connect.php";
$login = $_POST['login'];
$password = md5($_POST['password']);
$check_user = mysqli_query($conn, "SELECT * FROM `users` WHERE (`login` = '$login' AND `password` = '$password')");
if (mysqli_num_rows($check_user) > 0) {
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] = [
        "id" => $user['id'],
        "login" => $user['login'],
        "email" => $user['email'],
        "phone" => $user['phone'],
        "password" => $user['password']
    ];
    header('location: ../index.php');
} else {
    $_SESSION['message'] = 'Неверные логин или пароль!';
    header('location: ../login.php');
}