<?php
session_start()
?>
<header class="head">
        <div class="main">
        <a href="index.php" class="main">
        <div class="logo">
            <div class="heart">
                <img src="../img/like.png">
            </div>
            <h1>Shopsy</h1>
        </div>
    </a>
</div>
        <div class="head-info">
            <ul class="head-info-line">
                <?php
                if ($_SESSION['user']) {
                    ?>
                    <li><?= $_SESSION['user']['login'] ?> <a href="/vendor/logout.php">Выйти</a></li>
                    <?
                } else {
                    ?> 
                    <li><a href="../login.php">Войти</a></li>
                    <?
                }
                ?>
                <li><a href="/">Избранное</a></li>
                <li><a href="/">Корзина</a></li>
            </ul>
        </div>
</header>