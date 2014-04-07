    
    <html>
    <head>
    <title>Перечень всех лотов</title>
    <link rel="stylesheet" type="text/css" href="lots_style.css">
    </head>
    <body text="white" link="white" alink="DeepSkyBlue" vlink="white" background="Panda3.jpg">
    <center>
    <font face="scripts">
    <h2>
    Перечень всех лотов
    <br><br><br>

<?php 
    $lot_id = 'Номер лота';
    $lot_name = 'Имя лота';
    $lot_price = 'Текущая ставка Лота';
    $time_left = 'Осталось времени до окончания';

    $db = mysql_connect ("localhost","root","");
    mysql_select_db ("auctionnew", $db);

    $result3 = mysql_query("SELECT * FROM lots",$db);
    $myrow = mysql_fetch_array($result3);

    echo '
        <div class="TableOfLots"><table border="2" bgcolor="MidnightBlue">';
	echo '<thead>';
	echo '<tr>';
	echo '<th>Номер лота</th>';
	echo '<th>Имя лота</th>';
        echo '<th>Текущая ставка Лота</th>';
        echo '<th>Дата окончания лота</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
 
	while($data = mysql_fetch_array($result3)){ 
		echo '<tr>';
		echo '<td align="center">' . $data['lot_id'] . '</td>';
		echo '<td align="center">' . $data['lot_name'] . '</td>';
                echo '<td align="center">' . $data['lot_price'] . '</td>';
                echo '<td align="center">' . $data['time_left'] . '</td>';
                echo '</tr>';
	}
	
    echo '</tbody>';
	echo '</table></div>';

/* $now = strtotime("now");
$newyear = strtotime("1 January 2015");

$timeU = $newyear - $now;

$min = 60;
$hour = 60 * 60;
$day = 60 * 60 * 24;


    $r_days = floor ($timeU / $day);
    $r_hours = floor (($timeU - ($r_days * $day))/$hour);
    $r_min = floor (($timeU - ($r_days * $day) - ($r_hours * $hour))/$min);
    $r_sec = (($timeU - ($r_days * $day) - ($r_hours * $hour) - ($r_min * $min)));


echo $r_days." Дней ";

echo $r_hours." Часов ";

echo $r_min." Минут ";

echo $r_sec." Секунд"; */

?>

<form action="bet.php" method="post">
<p>
    <label>Имя лота, на который хотите сделать ставку<br></label>
    <input name="lot_name" type="text" size="15" maxlength="15">
    </p>
    <p>
    <input type="submit" name="submit" value="Сделать ставку">
    </p></form>
<form action="buy.php" method="post">
<p>
    <label>Имя лота, который хотите купить по макс.цене<br></label>
    <input name="lot_name" type="text" size="15" maxlength="15">
    </p>
    <p>
    <input type="submit" name="submit" value="Купить товар по макс.цене">
    </p></form>
    
    Каждая ставка продлевает Время лота на 1 день и увеличивает Цену на 25 USD
    <br>
    <a href="../reg/main.php">Назад</a>
    </h2>
    </font>
    </center>
    </body>
    </html>