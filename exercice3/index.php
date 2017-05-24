<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="utf-8">
        <title>exo 3</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="../exercice2/index.php">Exercice 2</a></li>
            <li><a href="../exercice4/index.php">Exercice 4</a></li>
            <li><a href="../index.php">Index</a></li>
        </ul>
        <p>
            <?php
            echo date('l d F o')
            ?>
        </p>
        <p>
            <?php
            // --- La setlocale() fonctionnne pour strftime mais pas pour DateTime->format()
            setlocale(LC_TIME, 'fr_FR.utf8'); // OK
            // strftime("jourEnLettres jour moisEnLettres annee") de la date courante
            echo strftime("%A %d %B %Y");
            ?>
        </p>
    </body>
</html>