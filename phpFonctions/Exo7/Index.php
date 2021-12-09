<?php 
$quelgenre = '';
function compareAgeGenre ($age,$genre){
  If ($age >= 18) {
    $majeur = 'majeur';
  } else {
    $majeur = 'mineur';
  };
  if ($genre == 'femme') {
    $quelgenre = 'une femme';
  } else {
    $quelgenre = 'un homme';
  };
  return "Vous êtes ".$quelgenre." et vous êtes ".$majeur;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exo7</title>

</head>
<body>
<p><?= compareAgeGenre(25,'femme')?></p>
</body>
</html>

