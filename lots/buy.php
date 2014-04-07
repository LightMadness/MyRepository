    <html>
    <head>
    <title>Предупреждение</title>
    </head>
    <body text="white" link="white" alink="DeepSkyBlue" vlink="white" background="Panda3.jpg">
    <font face="scripts">
    <h2>

<?php

    if (isset($_POST['lot_name'])) { $lot_name = $_POST['lot_name']; if ($lot_name == '') { unset($lot_name);} }
    if (empty($lot_name))
    {
    exit ("Вы ввели не всю информацию о лоте, вернитесь назад и заполните все поля!");
    }
    $lot_name = stripslashes($lot_name);
    $lot_name = htmlspecialchars($lot_name);

    $lot_name = trim($lot_name);

    include ("bd.php"); 
    
    $result = mysql_query ("DELETE FROM lots WHERE lot_name='$lot_name'",$db);

    $result1 = mysql_query ("INSERT INTO bought (lot_name) VALUES('$lot_name')");
    if ($result1=='TRUE')
    {
    echo "Товар помещен к списку недавних лотов Аукциона!<center><a href='../reg/main.php'><br>На Основную</a></center>";
    }

?>

</h2>
</font>
</body>
</html>