<?php
$today = time();
$horaire = mktime(15, 0, 0, 8, 2, 2016);
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
    <?= $today ?>
</p>

<p>
    TimeStamp du mardi 2 août 2016 à 15h00 :   <?= $horaire ?>
</p>
    
</body>
</html>