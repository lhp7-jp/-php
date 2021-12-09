<?php 
function compareNbs ($Nba, $Nbb){
  If ($Nba > $Nbb) {
    $result = " Le premier nombre est plus grand";
  } elseif ($Nba < $Nbb) {
    $result = " Le premier nombre est plus petit";
  } elseif ($Nba == $Nbb) {
    $result = " Les deux nombres sont identiques";
  }
  return ($result);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exo4</title>

</head>
<body>
<p><?= compareNbs(35, 35)?></p>
</body>
</html>

