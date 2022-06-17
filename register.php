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
    <title>Регистрация</title>
</head>
<body class="img-back2">
    <?php require_once 'vendor/header.php' ?>
    <section class="regNeon">
        <div class="loginBlock">
            <p>Регистрация</p>
            <form action="vendor/register.php" method="post" class="loginForm">
                <input type="text" name="login" class="login" placeholder="логин">
                <input type="email" name="email" class="email" placeholder="e-mail">
                <input type="text" name="phone" class="phone" placeholder="номер телефона">
                <input type="password" name="password" class="password" placeholder="пароль">
                <input type="password" name="repeatpassword" class="repeatpassword" placeholder="повторите пароль">
                <button type="submit">Зарегистрироваться</button>
                <div>
                    <a href="login.php"><p class="regi1">Есть аккаунт?</p></a>
                </div>
            </form>
            <?php
            if ($_SESSION['message']) {
                ?> <p><?= $_SESSION['message'] ?></p>
                <?
                 unset($_SESSION['message']);
            }
            ?>
        </div>
    </section>
    <?php require_once 'vendor/footer.php' ?>
    
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>