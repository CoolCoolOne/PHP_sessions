<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03_sesions_sess2</title>
    <link rel="stylesheet" href="./styleSess.css">
</head>

<body>

    <?php
    session_start();
    if (!isset($_SESSION['admin'])){
        // echo '<a href="./sess1.php">сессия1</a> <br><br>';
        die('Вы не авторизованы!');
    } else {
        echo "welcome, {$_SESSION['admin']}";
    }



    $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>

    <ul>
        <li><a href="./sess1.php">сессия1</a></li>
        <li><a href="./sess2.php">сессия2</a></li>
        <li><a href="./secret.php">Скрытое</a></li>
        <br>
        <li><a href="<?php echo $url; ?>"> текущаяя (перезапрос) </a></li>
        <li>сейчас мы на стр: <br> <?php echo $url; ?> </li>
    </ul>



</body>

</html>