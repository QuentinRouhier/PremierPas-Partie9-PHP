<?php
$monthsList = array('01' => 'janvier', '02' => 'février', '03' => 'mars', '04' => 'avril', '05' => 'mai', '06' => 'juin', '07' => 'juillet', '08' => 'août', '09' => 'septembre', '10' => 'octobre', '11' => 'novembre', '12' => 'décembre');
$year = 1900; // on initialise la var année par défaut on met la 1ere année
$month = 1;    // on initialise la va mois par défaut on met le 1er mois 
// récuperation des données en POST 
if (isset($_POST['years'])) {
    $year = $_POST['years'];
}
if (isset($_POST['months'])) {
    $month = $_POST['months'];
}
// on récupère le nbre de jrs ds le mois.
$NumberDaysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
// on récup le jr de la semaine du 1er jours du mois
$firstDayOfMonthInWeek = date('w', mktime(0, 0, 0, $month, 1, $year));
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="styles.css" rel="stylesheet" type="text/css"/>
        <title>Calendrier</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <!-- création de la liste déroulante pour les mois-->
            <select name="months">
                <?php
                // boucle pour parcourir le tabl des mois
                foreach ($monthsList as $monthNumber => $monthName) {
                    // création de la va $selectMonth 
                    $selectedMonth = '';
                    // je vérifie que l'année sélectionnée est = à l'année, pr que le mois seletionné reste affiché 
                    if ($month == $monthNumber) {
                        $selectedMonth = 'selected';
                    }
                    ?>
                    <option  <?= $selectedMonth ?> value="<?= $monthNumber ?>"><?= $monthName ?></option>
                    <?php
                }
                ?>
            </select>
            <!--création de la liste déroulante pour les années-->
            <select name="years">
                <?php
                // boucle pour parcourir les années. 
                for ($years = 1900; $years <= 2050; $years++) {
                    // création de la variable $selected
                    $selectedYear = '';
                    // je vérifie que l'année sélectionnée est = à l'année. 
                    if ($year == $years) {
                        $selectedYear = 'selected';
                    }
                    ?>
                    <option  <?= $selectedYear ?> value="<?= $years ?>"><?= $years ?></option>
                    <?php
                }
                ?>
            </select>
            <input type="submit" value="Valider" />
        </form>
        <table>
            <thead>
                <tr>
                    <th>Dimanche</th>
                    <th>Lundi</th>
                    <th>Mardi</th>
                    <th>Mercredi</th>
                    <th>Jeudi</th>
                    <th>Vendredi</th>
                    <th>Samedi</th>    
                </tr>
            </thead>
            <tbody>
                <tr>   
               <?php
               // on crée la boucle qui sert à créer une cellule par jrs. 
                    for ($day = 0; $day <= $NumberDaysInMonth+$firstDayOfMonthInWeek -1 ; $day++) {
                       // pour revenir a la ligne si multiple de 7. 
                        if($day%7 == 0){
                           ?></tr><tr><?php
                       }
                       // si  on a le 1er jrs on remplis les cases 
                        if ($firstDayOfMonthInWeek == $day) {
                            ?><td>1</td><?php
                        } elseif ($firstDayOfMonthInWeek>$day){
                            ?><td></td><?php
                        }else{
                            // ajoute le nbre de jrs + 1
                            ?><td><?php echo $day+1 -$firstDayOfMonthInWeek?></td>
                       <?php
                        }
                    }
                        ?>
                </tr>
                
            </tbody>
        </table>
    </body>
</html>