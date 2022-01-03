<?php


$nbJours = cal_days_in_month(CAL_GREGORIAN, 2, 2016);

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
le nombre de jour dans le mois de février de l'année 2016 est :  <?= $nbJours ?>
</p>
    
</body>
</html>