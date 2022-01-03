<?php
// exercice 1 / 2 / 3 / 4 / 5 / 6 / 7

// 1
echo date('d/m/Y') . "<br>";

// 2
echo date('d-m-y') . "<br>";

// 3
setlocale(LC_TIME, 'fr_FR', "fra") . "<br>";
echo utf8_encode(strftime('%A %d %B %Y, %H:%M')) . "<br>";


// 4 
echo 'Timestamp actuel : ' . time() . '<br>';

$t1 = mktime(15, 00, 0, 8, 2, 2016) . "<br>";
echo 'Timestamp 08 Aout 2016 15h00 (GMT+1) : ' . $t1 . '<br>';

// 5
$date = strtotime('2016-05-16');
$today = time();

echo round(($today - $date) / (60 * 60 * 24)) . " jours entre 21/12/21 et 16/05/2016 <br>";


// 6
$number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
echo "Il y a  {$number} jours en Février 2016" . "<br>";

// 7
echo date('d-m-Y', strtotime('+20 days')) . "<br>";

// 8
echo date('d-m-Y', strtotime('-22 days'));
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Les dates</title>
</head>

<body>





</body>

</html>