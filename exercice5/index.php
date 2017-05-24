
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 5</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="../exercice4/index.php">Exercice 4</a></li>
            <li><a href="../exercice6/index.php">Exercice 6</a></li>
            <li><a href="../index.php">Index</a></li>
        </ul>
        <p>
            <?php
            // instancie la class date time en creant un objet datetime1
            $datetime1 = new DateTime('2016-05-16');
            $datetime2 = new DateTime();
            $interval = date_diff($datetime1, $datetime2);
            echo $interval->format('%a jours de difference');
            ?>
        </p>
        <!--        <?php
            // On initialise la variable $todayDate avec la date et l'heure d'aujourd'hui
            $todayDate = new DateTime();
            // On formate la date au format U (timestamp Unix) et on la stocke dans la variable $todayTimestamp
            $todayTimestamp = $todayDate->format('U');
            // On initialise la variable $oldDate avec la date et l'heure du 16 mai 2016
            $oldDate = new DateTime('2016-05-16');
            // On formate la date au format U (timestamp Unix) et on la stocke dans la variable $oldTimestamp
            $oldTimestamp = $oldDate->format('U');
            // On calcule la différence entre les 2 dates (timestamps) et on la stocke dans la variable $newTimestamp
            $newTimestamp = $todayTimestamp - $oldTimestamp;
            // On sait que 1 heure = 60 secondes * 60 minutes et que 1 jour = 24 heures donc :
            // On divise cette valeur par 86400  car 60*60*24 = 86 400
            $daysCount = $newTimestamp / 86400;
            // On affiche le nombres de jours
            echo 'Nombre de jours depuis le 16 mai 2016: ' . round($daysCount) . ' jours';
        ?>
        <?php
            /* -- Autre façon --
            //date fr le 16 mai 2016
            $date1 = "16-05-2016"; 
            // date courante
            $date2 = date("j-m-Y"); 
            // On transforme les 2 dates en timestamp
            $date3 = strtotime($date1);
            $date4 = strtotime($date2);

            // On récupère la différence de timestamp entre les 2 précédents
            $nbJoursTimestamp = $date4 - $date3;

            // ** Pour convertir le timestamp (exprimé en secondes) en jours **
            // On sait que 1 heure = 60 secondes * 60 minutes et que 1 jour = 24 heures donc :
            $nbJours = $nbJoursTimestamp / 86400; // 86 400 = 60*60*24
            // On affiche le nombre de jours
            echo "Nombre de jours : " . $nbJours;
             */
        ?>
        -->
    </body>
</html>