<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 4</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="../exercice3/index.php">Exercice 3</a></li>
            <li><a href="../exercice5/index.php">Exercice 5</a></li>
            <li><a href="../index.php">Index</a></li>
        </ul>
        <p>
            <?php
            echo 'Aujourd\'hui : ' . date('Y-m-d');
            ?>
        </p>
        <p>
            <?php
            echo date('l', mktime(0, 0, 0, 3, 0, 0)) . ' ' . date('d', mktime(0, 0, 0, 0, 2, 0)) . ' ' . date('F', mktime(0, 0, 0, 9, 0, 0)) . ' ' . date('Y', mktime(0, 0, 0, 0, 0, 2017)) . ' ' . date('G', mktime(15, 0, 0, 0, 0, 0)) . 'h' . date('i', mktime(0, 00, 0, 0, 0, 0));
            ?>
        </p>
        <!-- Exercice 4 Afficher le timestamp du jour.
Afficher le timestamp du mardi 2 août 2016 à 15h00. -->
        <p>timestamp du mardi 2 août 2016 à 15h00.
            <?php
            $date = date_create('08/02/2016 15:00');
            echo date_timestamp_get($date);
            ?>
        </p>
        <p>timestamp du jour.
            <?php
            echo time();
            ?>
        </p>
    </body>
</html>