    <html>
    <head>
    <title>Предупреждение</title>
    </head>
    <body text="white" link="white" alink="DeepSkyBlue" vlink="white" background="Panda2.jpg">
    <font face="scripts">
    <h2>

<?php

    if (isset($_POST['lot_name'])) { $lot_name = $_POST['lot_name']; if ($lot_name == '') { unset($lot_name);} }
    /*if (isset($_POST['lot_price'])) { $lot_price = $_POST['lot_price']; if ($lot_price == '') { unset($lot_price);} }*/
    if (empty($lot_name))/* or empty($lot_price))*/
    {
    exit ("Вы ввели не всю информацию о лоте, вернитесь назад и заполните все поля!");
    }
    $lot_name = stripslashes($lot_name);
    $lot_name = htmlspecialchars($lot_name);
    /*$lot_price = stripslashes($lot_price);
    $lot_price = htmlspecialchars($lot_price);*/

    $lot_name = trim($lot_name);
    /*$lot_price = trim($lot_price);*/

    include ("bd.php"); 
    
    $result = mysql_query("SELECT * FROM lots WHERE lot_name='$lot_name'",$db);
    $myrow = mysql_fetch_array($result);
    if (empty($myrow['lot_name']))
    {
    exit ("Извините, Лота с таким именем не существует.");
    }
    else {
    if ($myrow['lot_name']==$lot_name) {
    }
    }

    $result2 = mysql_query ("INSERT INTO lots (lot_name, lot_price) VALUES('$lot_name','$lot_price')");

    $result3 = mysql_query ("UPDATE lots SET lot_price=(lot_price+25) WHERE lot_name='$lot_name'",$db);
    if ($result3=='TRUE')
    {
    echo "Вы успешно обновили ставку!";
    }
    $result4 = mysql_query ("DELETE FROM lots ORDER BY lot_id DESC LIMIT 1 ",$db);
    
    $result5 = mysql_query ("UPDATE lots SET time_left = DATE_ADD(time_left, INTERVAL 1 DAY) WHERE lot_name = '$lot_name'",$db);

?>

<br>
<a href="all_lots.php">Вернуться к перечню Лотов</a>
</h2>
</font>
</body>
</html>