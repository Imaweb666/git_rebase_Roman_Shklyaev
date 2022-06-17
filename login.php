<?php
session_start();
if ($_SESSION['user']) {
    header('location: /index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/like.png">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Войти</title>
</head>
<body class="loginBody">
    <?php require_once 'vendor/header.php' ?>
    <section class="loginNeon">
        <div class="loginBlock">
            <p>Авторизация</p>
            <form action="vendor/authorization.php" method="post" class="loginForm">
                <input type="text" name="login" class="login" placeholder="Логин, e-mail или номер телефона">
                <input type="password" name="password" class="password" placeholder="Пароль">
                <button type="submit">Войти</button>
            </form>
            <?php
            if ($_SESSION['message']) {
                ?> <p><?= $_SESSION['message'] ?></p>
                <?
                unset($_SESSION['message']);
            }
            ?>
            <div>
                <a href="register.php"><p class="regi">Нет аккаунта?</p></a>
            </div>
        </div>
    </section>
    <?php require_once 'vendor/footer.php' ?>
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>