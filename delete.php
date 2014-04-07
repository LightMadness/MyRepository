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
    
    $result = mysql_query ("DELETE FROM test WHERE name_test='$name_test'",$db);
    if ($result4=='TRUE')
    {
    echo "Result";
    }
    $result1 = mysql_query ("INSERT INTO test2 (name_test) VALUES('$name_test')");
    if ($result2=='TRUE')
    {
    echo "Вы успешно сделали ставку!<center><a href='test.php'><br>Перечень лотов</a></center>";
    }

?>

</h2>
</font>
</body>
</html>