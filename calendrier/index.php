<?php
require "controller/controlIndex.php";
$myMonth = [
  1 => 'Janvier', 2 => 'Février', 3 => 'Mars', 4 => 'Avril', 5 => 'Mai', 6 => 'Juin', 7 => 'Juillet', 8 => 'Août',
  9 => 'Septembre', 10 => 'Octobre', 11 => 'Novembre', 12 => 'Décembre'
];
$myDayWeek = [
  1 => 'Lundi', 2 => 'Mardi', 3 => 'Mercredi', 4 => 'Jeudi', 5 => 'Vendredi', 6 => 'Samedi', 7 => 'Dimanche'
];
setlocale(LC_TIME, 'fr_FR', 'fra');
date_default_timezone_set('Europe/Paris');

$yearMin = 1960;
$yearMax = 2025;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./assets/css/style.css" rel="stylesheet" />
  <title>Calendrier LHP7</title>
</head>
<style>
table,
th, td {
        border: 2px solid black;
        text-align: center;
}
</style>

<body>
  <div class="container-fluid">
    <h1></h1>
    <!-- // Création de la liste avec les mois du tableau myMonth et présélection de l'année choisie avec myYear -->
    <form action="index.php" method="post">
      <select name="myMonth">
        <?php
        foreach ($myMonth as $numMonth => $month) {
          printf('<option value="%u">%s</option>', $numMonth, $month);
        }
        ?>
      </select>
      <!-- <select name="myYear" title="Liste des années consultables"> -->
      <select name="myYear">
        <?php
        for ($myYear = $yearMin; $myYear <= $yearMax; $myYear++) {
          printf('<option value="%u">%s</option>', $myYear, $myYear);
        } ?>
        <div>
        <span><input name="submitButton" type="submit" value="Envoyer" /> </span>
        </div>
    </form>
  </div>  
  <?php
  if (!empty($_POST['submitButton'])) {
  ?>
    <h1></h1>
    <div>
      <?php echo $varMonth . " " . $varYear ?>
      <h1></h1>
      <table align="center">
        <tr>
          <th scope="col">Lundi</td>
          <th scope="col">Mardi</td>
          <th scope="col">Mercredi</td>
          <th scope="col">Jeudi</td>
          <th scope="col">Vendredi</td>
          <th scope="col">Samedi</td>
          <th scope="col">Dimanche</td>
        </tr>
        <?php
        $count = 0;

        for ($i = 1; $i < $choiceDate; $i++) { ?>
          <td class="border "></td>
        <?php $count++;
        }
        for ($i = 1; $i <= $numberDay; $i++) { ?>
          <td class="border"><?= $i ?></td>
          <?php
          $count++;
          if ($count == 7 && $i != $numberDay) {
            $count = 0; ?>
            </tr>
            <tr>
            <?php }
        }
        for ($count; $count < 7; $count++) { ?>
            <td class="border "></td>
          <?php } ?>
      </table>
    </div>
  <?php }; ?>
</body>

</html>