<?php
    session_start();
?>
    <html>
    <head>
    <title>������� ��������</title>
    </head>
    <body text="white" link="white" alink="DeepSkyBlue" vlink="white" background="Panda1.jpg">
    <font face="scripts">
    <h2>
    ������� ��������
    <form action="testreg.php" method="post">

 <p>
    <label>��� �����:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>
 
    <p>

    <label>��� ������:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p> 

    <p>
    <input type="submit" name="submit" value="�����">

 
<br>
<br>
 
<a href="reg.php">������������������</a> 
    </p></form>
<?php
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    echo "�� ����� �� ����, ��� �����<br><a href='warning.html'>�������� �������� �������� �����</a>";
    }
    else
    {
    echo "�� ����� �� ����, ��� ".$_SESSION['login']."<br><a  href='main.php'>�������� �������� �������� �����</a>";
    }
?>
    <br>
    <a href="exit.php">�����</a>
    </h2>
    </font>
    </body>
    </html>