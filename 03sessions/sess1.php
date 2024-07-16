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
            $_SESSION['usr'] = 'AdminTro';
            $_SESSION['result_mes'] = 'Вы успешно авторизовались!';
        } else {
            $_SESSION['result_mes'] = 'Неверный логин!';
        }
        header("Location: ./sess1.php");
        die;
    }

    $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>

    <div>
        <ul>
            <li><a href="./sess1.php">сессия1</a></li>
            <li><a href="./secret.php">Скрытое (пароль 123)</a></li>
            <br>
            <li><a href="
            <?php 
            echo $url; 
            // clearstatcache();
            ?>
            "> текущаяя (перезапрос) </a></li>
            <li>сейчас мы на стр: <br> <?php echo $url; ?> </li>
            <li> <?php 
            if (isset($_SESSION['result_mes'])){
                echo '<hr> <br>';
                echo $_SESSION['result_mes'];
                unset($_SESSION['result_mes']);
            }
            ?> </li>
        </ul>
    </div>

    <hr>
    
    <form action="" method="post">
        <input class="inp" type="text" name="pass_form" placeholder="pass">
        <button class="btn">Отправить пароль адм.</button>
    </form>

</body>

</html>