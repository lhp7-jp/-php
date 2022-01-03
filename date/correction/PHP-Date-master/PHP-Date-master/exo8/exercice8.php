<?php


$today = date('d-m-Y', strtotime('-22 days'));

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
la date du jour - 22 jours. est :  <?= $today ?>
</p>
    
</body>
</html>