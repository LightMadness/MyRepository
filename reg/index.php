<?php
    session_start();
?>
    <html>
    <head>
    <title>Главная страница</title>
    </head>
    <body text="white" link="white" alink="DeepSkyBlue" vlink="white" background="Panda1.jpg">
    <font face="scripts">
    <h2>
    Главная страница
    <form action="testreg.php" method="post">

 <p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>
 
    <p>

    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p> 

    <p>
    <input type="submit" name="submit" value="Войти">

 
<br>
<br>
 
<a href="reg.php">Зарегистрироваться</a> 
    </p></form>
<?php
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    echo "Вы вошли на сайт, как Гость<br><a href='warning.html'>Посетить основную страницу сайта</a>";
    }
    else
    {
    echo "Вы вошли на сайт, как ".$_SESSION['login']."<br><a  href='main.php'>Посетить основную страницу сайта</a>";
    }
?>
    <br>
    <a href="exit.php">Выйти</a>
    </h2>
    </font>
    </body>
    </html>