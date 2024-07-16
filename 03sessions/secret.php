<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03_sesions_secret</title>
    <link rel="stylesheet" href="./styleSess.css">
</head>

<body>

    <?php
    session_start();

    if( isset($_GET['do']) && $_GET['do']=='log_out'){
        unset ($_SESSION['usr']); }


    if (!isset($_SESSION['usr'])){
        // echo '<a href="./sess1.php">сессия1</a> <br><br>';
        echo '<a href="./sess1.php"> НАЗАД! <br> <hr> </a>';
        die('Вы не авторизованы!');
    } else {
        $welcome_mess = "welcome, {$_SESSION['usr']} !!!";
    }



    $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>

    <ul>
        <li><a href="./sess1.php">сессия1</a></li>
        <li><a href="./secret.php">Скрытое</a></li>
        <br>
        <li><a href="<?php echo $url; ?>"> текущаяя (перезапрос) </a></li>
        <li>сейчас мы на стр: <br> <?php echo $url; ?> </li>
        <li><br> <hr> <?php echo $welcome_mess; ?> </li>
        <li> <img src="./arbuz.jpg" width="200" height="200" alt="arbuz! "> </li>
        <a href="./secret.php?do=log_out"> Выйти из аккаунта</a>
    </ul>



</body>

</html>