
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 6</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="../exercice5/index.php">Exercice 5</a></li>
            <li><a href="../exercice7/index.php">Exercice 7</a></li>
            <li><a href="../index.php">Index</a></li>
        </ul>
        <p>
            <?php
            //utilisation de la fonction native cal_days_in_month
            $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
            echo 'il y a ' . $number . ' jours en février 2016';
            ?>
        </p>
        <p>
            <?php
            echo date('d', mktime(0, 0, 0, 3, 0, 2016));
            ?>
        </p>
    </body>
</html>