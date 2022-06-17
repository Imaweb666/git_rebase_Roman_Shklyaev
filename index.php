<?php
session_start();
if (!$_SESSION['user']) {
    header('location: /login.php');
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
    <title>Shopsy</title>
</head>
<body class="img-back">
    <?php require_once 'vendor/header.php' ?>
        <form class="searchForm" onsubmit="event.preventDefault();" role="search">
            <label for="search">Search for stuff</label>
            <input id="search" type="search" placeholder="Поиск" autofocus required/>
            <button type="submit">Go</button>    
        </form>
        <section class="items">
        <?php
        require_once 'vendor/connect.php';
        $goods = mysqli_query($conn, "SELECT * FROM `goods`");
        $goods = mysqli_fetch_all($goods);
        foreach ($goods as $good) {
            ?>
            <div>
                <img src="<?= $good[5] ?>" alt="">
                <p><?= $good[2] ?></p>
                <p><?= $good[4] ?>₽</p>
            </div>
            <?
        }
        ?>
        </section>
        <p class="additemtext">Добавьте товар</p>
        <form action="vendor/add_item.php" method="post" enctype="multipart/form-data" class="addgoods">
            <input name="name" type="text" placeholder="Название" class="in1">
            <textarea name="description" placeholder="Описание" class="in2"></textarea>
            <input name="price" type="number" step="any" placeholder="Цена" class="in3">
            <input name="picture" type="file">
            <button type="submit">Добавить</button>
        </form>
        
        <?php
        if($_SESSION['message']) {
            ?>
            <p><?= $_SESSION['message'] ?></p>
            <?
            unset($_SESSION['message']);
        }
        ?>
    <?php require_once 'vendor/footer.php' ?>    
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>