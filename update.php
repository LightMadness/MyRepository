    <html>
    <head>
    <title>Предупреждение</title>
    </head>
    <body text="white" link="white" alink="DeepSkyBlue" vlink="white" background="Panda3.jpg">
    <font face="scripts">
    <h2>

<?php

    if (isset($_POST['name_test'])) { $name_test = $_POST['name_test']; if ($name_test == '') { unset($name_test);} }
    if (empty($name_test))
    {
    exit ("Вы ввели не всю информацию о лоте, вернитесь назад и заполните все поля!");
    }
    $name_test = stripslashes($name_test);
    $name_test = htmlspecialchars($name_test);

    $name_test = trim($name_test);

    include ("bd.php"); 
    
    $result = mysql_query("SELECT id_test FROM test WHERE name_test='$name_test'",$db);
    $myrow = mysql_fetch_array($result);

    $result2 = mysql_query ("INSERT INTO test (name_test, price_test) VALUES('$name_test','$price_test')");
    if ($result2=='TRUE')
    {
    echo "Вы успешно сделали ставку!<center><a href='test.php'><br>Перечень лотов</a></center>";
    }

    $result3 = mysql_query ("UPDATE test SET price_test=(price_test+50) WHERE name_test='$name_test'",$db);
    if ($result3=='TRUE')
    {
    echo "Вы успешно обновили ставку!<center><a href='test.php'><br>Перечень лотов</a></center>";
    }
    $result4 = mysql_query ("DELETE FROM test ORDER BY id_test DESC LIMIT 1 ",$db);
    if ($result4=='TRUE')
    {
    echo "Result";
    }

?>

</h2>
</font>
</body>
</html>