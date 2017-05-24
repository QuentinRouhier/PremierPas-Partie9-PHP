
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 8</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="../exercice7/index.php">Exercice 7</a></li>
            <li><a href="../TP/index.php">TP</a></li>
            <li><a href="../index.php">Index</a></li>
        </ul>
        <p>
            <?php
            echo date('d-m-Y', strtotime('-22 days'));
            ?>
        </p>
    </body>
</html>