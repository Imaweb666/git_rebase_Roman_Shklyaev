<?php
session_start();
require_once "connect.php";
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$path = '/uploads/' . time() .$_FILES['picture']['name'];
if (!move_uploaded_file($_FILES['picture']['tmp_name'], '../'. $path)) {
$_SESSION['message'] = 'Ошибка загрузки файла';
header('location: ../index.php');
}
mysqli_query($conn, "INSERT INTO `goods` (`id`, `rating`, `name`, `description`, `price`, `picture`) VALUES (NULL, NULL, '$name', '$description', '$price', '$path') ");
header('location: ../index.php');
