<?php


$date1 = "21-12-2021";
$date2 = "16-05-2016";

$date3 = strtotime($date1);
$date4 = strtotime($date2);

$nbJourstimestamp = $date3-$date4;

// ** Pour convertir le timestamp (exprimé en secondes) en jours **
// On sait que 1 heure = 60 secondes * 60 minutes et que 1 jour = 24 heures donc :
// 86 400 = 60*60*24

$nbJours = $nbJourstimestamp/86400;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>
le nombre de jour qui sépare la date du jour avec le 16 mai 2016 est :  <?= $nbJours ?>
</p>
    
</body>
</html>