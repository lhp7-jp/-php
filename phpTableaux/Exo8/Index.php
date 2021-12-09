

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exo8</title>

</head>


<body>
<?php 
$months = array("1" => "janvier","février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre" , "novembre", "décembre");

foreach ($months as $key => $value) {
  echo " le mois $key est : $value, ";
}
?>
</body>
</html>

