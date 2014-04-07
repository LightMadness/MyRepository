<html>
<head>
<title>Аукцион плюшевых Панд</title>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script type="text/javascript" src="js/jquery.snippet.min.js"></script>                         <!-- SNIPPET -->
<script type="text/javascript" src="js/kickstart.js"></script>                                  <!-- KICKSTART -->
<script type="text/javascript" src="js.js"></script>
<link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />                  <!-- KICKSTART -->
<link rel="stylesheet" type="text/css" href="style.css" media="all" />                          <!-- CUSTOM STYLES -->

</head>
<body text="black" link="black" alink="DeepSkyBlue" vlink="black" background="Panda4.jpg">
<center>
    <font face="scripts">
    <h2>

    Добро пожаловать на Основную страницу

<br><br>

<a href="../lots/all_lots.php" title="Просмотреть все лоты">Перечень лотов</a><br>

<a href="../lots/reg_lot.php" title="Зарегистрировать Лот">Регистрация Лота</a><br>

<a href="#" class="medium blue show" box="Basket" title="Последние купленные лоты Аукциона">Недавние лоты Аукциона</a><br>

<div class="BasketBlock" id="Basket">
    <form action="main.php" method="post">
        <br><br>Недавние лоты<br>

<?php

    $lot_name = 'Имя лота';

    $db = mysql_connect ("localhost","root","");
    mysql_select_db ("auctionnew", $db);

    $result3 = mysql_query("SELECT * FROM bought",$db);
    $myrow = mysql_fetch_array($result3);

    echo '
        <div class="TableOfLots"><table border="2" bgcolor="White">';
	echo '<thead>';
	echo '<tr>';
	echo '<th>Имя лота</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
 
	while($data = mysql_fetch_array($result3)){ 
		echo '<tr>';
		echo '<td align="center">' . $data['lot_name'] . '</td>';
                echo '</tr>';
	}
	
    echo '</tbody>';
	echo '</table></div>';

?>
<br>
        <button class="close">Закрыть</button>
    </form>
</div>

<a href="index.php" title="На главную">Вернуться к авторизации</a><br>

<div class="ClockBlock">
<embed align="right" width="150" height="150" type="application/x-shockwave-flash" src="http://dezzi.ru/images/180_180_05.swf" pluginspage="http://www.macromedia.com/go/getflashplayer" wmode="window" loop="true" autoplay="true" quality="high">
</div>


<div id="footer">Сделал P4NDA<br>2014 год</div>

    </h2>
    </font>
</center>
</body>
</html>

