<html>
    <head>
    <title>Регистрация Лота</title>
    </head>
    <body text="white" link="white" alink="DeepSkyBlue" vlink="white" background="Panda3.jpg">
    <font face="scripts">
    <h2>
    Регистрация Лота
    <form action="save_lot.php" method="post">
<p>
    <label>Имя лота:<br></label>
    <input name="lot_name" type="text" size="15" maxlength="15">
    </p>
<p>
    <label>Начальная цена лота:<br></label>
    <input name="lot_price" type="text" size="15" maxlength="15"> В формате USD
    </p>
<p>
    <label>Дата окончания лота:<br></label>
    <input name="time_left" type="text" size="15" maxlength="15"> В формате 2014:12:30
    </p> 
<p>
    <input type="submit" name="submit" value="Зарегестрировать лот">
</p></form>

    <a href="../reg/main.php">Назад</a>
    </h2>
    </font>
    </body>
    </html>