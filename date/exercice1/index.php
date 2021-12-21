<?php
setlocale (LC_TIME, 'fr_FR','fra'); 
date_default_timezone_set('Europe/Paris');
$date = date_create();
$datetime1 = new DateTime("2016-05-16");
$datetime2 = new DateTime("2021-12-21");
$difference = $datetime1->diff($datetime2);
$datetime3 = new DateTime("2016-02-01");
$datetime4 = new DateTime("2016-03-01");
$difference1 = $datetime3->diff($datetime4);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./assets/css/style.css" rel="stylesheet" />
  <title>Date - exercice 1 à 8</title>
</head>
<body>
  <p>Date - exercice 1 à 8</p>
  <p>exercice 1 :<?= date('d/m/Y'); ?></p>   
  <p>exercice 2 :<?= date('d-m-y'); ?></p>  
  <p>exercice 3 :<?= utf8_encode(strftime('%A %d %B %Y')); ?></p> 
  <p>exercice 4 :le timestamp du jour est : <?= date_timestamp_get($date);?></p> 
  <p>exercice 4 :<?=utf8_encode(strftime('%A %d %B %Y, %H:%M'));?></p> 
  <p>exercice 4 : le timestamp du mardi 2 aout 2016 à 15h00 est : <?= mktime(15,0,0,8,2,2016)." ".strtotime("2016/08/02 15:00");?></p> 
  <p>exercice 5 :<?= 'différence : '.$difference->y.' years, ' 
                   .$difference->m.' months, ' 
                   .$difference->d.' days'; ?></p>  
       <p>exercice 5 : <?= floor((mktime(0,0,0,12,21,2021)-mktime(0,0,0,5,16,2016))/86400)?> jours</p>              
  <p>exercice 6 :<?= ' Nombre de jour du 02/2016 : '.$difference1->d.' jours'; ?> </p>  
  <p>exercice 6 :Nombre de jour du 02/2016 : <?= cal_days_in_month(CAL_GREGORIAN, 2, 2016);?> jours</p>  
  <p>exercice 7 : date du jour + 20 jours : <?= date('d-m-Y', strtotime('+20 days'));?></p>  
  <p>exercice 8 : date du jour - 22 jours : <?= date('d-m-Y', strtotime('-22 days'));?></p>  

 </body>

</html>