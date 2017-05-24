
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 7</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="../exercice6/index.php">Exercice 6</a></li>
            <li><a href="../exercice8/index.php">Exercice 8</a></li>
            <li><a href="../index.php">Index</a></li>
        </ul>
        <p>
            <?php
            $date = date_create();  // declaration de la var avec la date d'aujourd'hui
            date_modify($date, '+20 days');      // + 20 jrs
            echo date_format($date, 'd-m-Y');   // affiche la date + 20 jrs
            ?>
        </p>
        <p>
            <?php
            echo date('d-m-Y', strtotime('+20 days'));
            ?>
        </p>
    </body>
</html>