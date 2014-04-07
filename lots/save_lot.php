    <html>
    <head>
    <title>Предупреждение</title>
    </head>
    <body text="white" link="white" alink="DeepSkyBlue" vlink="white" background="Panda3.jpg">
    <font face="scripts">
    <h2>

<?php

    if (isset($_POST['lot_name'])) { $lot_name = $_POST['lot_name']; if ($lot_name == '') { unset($lot_name);} }
    if (isset($_POST['lot_price'])) { $lot_price = $_POST['lot_price']; if ($lot_price == '') { unset($lot_price);} }
    if (isset($_POST['time_left'])) { $time_left = $_POST['time_left']; if ($time_left == '') { unset($time_left);} }
    if (empty($lot_name) or empty($lot_price) or empty($time_left))
    {
    exit ("Вы ввели не всю информацию о лоте, вернитесь назад и заполните все поля!");
    }
    $lot_name = stripslashes($lot_name);
    $lot_name = htmlspecialchars($lot_name);
    $lot_price = stripslashes($lot_price);
    $lot_price = htmlspecialchars($lot_price);
    $time_left = stripslashes($time_left);
    $time_left = htmlspecialchars($time_left);

    $lot_name = trim($lot_name);
    $lot_price = trim($lot_price);
    $time_left = trim($time_left);

    include ("bd.php"); 
    
    $result = mysql_query("SELECT lot_id FROM lots WHERE lot_name='$lot_name'",$db);
    $myrow = mysql_fetch_array($result);

    if (!empty($myrow['id'])) {
    exit ("Извините, введённое вами Имя Лота уже зарегистрировано. Введите другое Имя Лота.");
    }
    $result2 = mysql_query ("INSERT INTO lots (lot_name, lot_price, time_left) VALUES('$lot_name','$lot_price','$time_left')");
    if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрировали ваш Лот! Он добавлен к списку Лотов.<center><a href='all_lots.php'><br>Перечень лотов</a></center>";
    }
?>

</h2>
</font>
</body>
</html>