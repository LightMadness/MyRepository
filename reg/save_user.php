    <html>
    <head>
    <title>��������������</title>
    </head>
    <body text="white" link="white" alink="DeepSkyBlue" vlink="white" background="Panda1.jpg">
    <font face="scripts">
    <h2>

<?php

    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
 if (empty($login) or empty($password))
    {
    exit ("�� ����� �� ��� ����������, ��������� ����� � ��������� ��� ����!");
    }
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);

    $login = trim($login);
    $password = trim($password);

    include ("bd.php"); 
    
    $result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);

    if (!empty($myrow['id'])) {
    exit ("��������, �������� ���� ����� ��� ���������������. ������� ������ �����.");
    }
    $result2 = mysql_query ("INSERT INTO users (login, password) VALUES('$login','$password')");
    if ($result2=='TRUE')
    {
    echo "�� ������� ����������������! ������ �� ������ ����� �� ����.<a href='index.php'>������� ��������</a>";
    }
 else {
    echo "������! �� �� ����������������.";
    }
?>

</h2>
</font>
</body>
</html>