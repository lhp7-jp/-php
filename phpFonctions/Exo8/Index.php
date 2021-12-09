<?php 
function sum3nbs ($Nba=0, $Nbb=1, $Nbc=2){
  $result= $Nba + $Nbb + $Nbc;
  $phrase = "La somme de ".$Nba." + ".$Nbb." + ".$Nbc. " est égale à : ".$result." .";
  return ($phrase);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exo8</title>

</head>
<body>
<p><?= sum3nbs(4,4)?></p>
</body>
</html>

