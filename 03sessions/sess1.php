<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03_sesions_pr</title>
    <link rel="stylesheet" href="./styleSess.css">
</head>

<body>

    <?php
    session_start();
    define('ADMIN_PASS','123');
    if(!empty($_POST['pass_form'])){
        if(($_POST['pass_form']) === ADMIN_PASS){
            // $_SESSION['admin_pass']=
            // header
            echo 'Вы успешно авторизовались!';
        } else {
            echo 'Неверный логин!';
        }
    }

    $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>

    <div>
        <ul>
            <li><a href="./sess1.php">сессия1</a></li>
            <li><a href="./sess2.php">сессия2</a></li>
            <li><a href="./secret.php">Скрытое</a></li>
            <br>
            <li><a href="
            <?php 
            echo $url; 
            // clearstatcache();
            ?>
            "> текущаяя (перезапрос) </a></li>
            <li>сейчас мы на стр: <br> <?php echo $url; ?> </li>
        </ul>
    </div>

    <hr>
    
    <form action="" method="post">
        <input class="inp" type="text" name="pass_form" placeholder="pass">
        <button class="btn">Отправить пароль адм.</button>
    </form>

</body>

</html>