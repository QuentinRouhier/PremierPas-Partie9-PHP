<?php
if (isset($_POST['OK'])) {
    $month = $_POST['month'];
    $year = $_POST['year'];
} else {
    $month = date('m');
    $year = date('Y');
}
$arrayMonth = array(
    '01' => 'Janvier',
    '02' => 'Fevrier',
    '03' => 'Mars',
    '04' => 'Avril',
    '05' => 'Mai',
    '06' => 'Juin',
    '07' => 'Juillet',
    '08' => 'Août',
    '09' => 'Septembre',
    '10' => 'Octobre',
    '11' => 'Novembre',
    '12' => 'Decembre');
$monthNow = date('m');
$yearNow = date('Y');
if (isset($_POST['month'])) {
    $monthNow = intval($_POST['month']);
}
if (isset($_POST['year'])) {
    $yearNow = intval($_POST['year']);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TP</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="../index.php">Index</a></li>
        </ul>
        <form method="POST" action="index.php">
            <select name="month">   
                <?php
                foreach ($arrayMonth as $numberMonth => $months) {
                    ?>
                    <option  value="<?php echo $numberMonth; ?> " <?php echo $monthNow == $numberMonth ? 'selected' : '' ?>><?php echo $months; ?></option>
                    <?php
                }
                ?>
            </select>
            <select name="year">
                <?php
                for ($years = 1900; $years < 2100; $years++) {
                    ?>
                    <option value="<?php echo $years; ?>"<?php echo $yearNow == $years ? 'selected' : '' ?>><?php echo $years; ?> </option>
                    <?php
                }
                ?>
            </select>
            <input type='submit' name='OK' value='OK'> 
        </form>
        <table>
            <thead>
                <tr>
                    <td>Lundi</td>
                    <td>Mardi</td>
                    <td>Mercredi</td>
                    <td>Jeudi</td>
                    <td>Vendredi</td>
                    <td>Samedi</td>
                    <td>Dimanche</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $daysInMonth = 1;
                    $days = 1;
                    while ($daysInMonth <= date('t', mktime(0, 0, 0, (int) $month, 1, (int) $year))) {
                        echo '<td>';
                        if ($days == date('w', mktime(0, 0, 0, (int) $month, $daysInMonth, (int) $year))) {
                            echo $daysInMonth;
                            $daysInMonth++;
                        }
                        echo '</td>';
                        if ($days == 0) {
                            echo '</tr><tr>';
                        }
                        $days++;
                        if ($days == 7) {
                            $days = 0;
                        }
                    }
                    ?>
            </tbody>
        </table>
    </body>
</html>