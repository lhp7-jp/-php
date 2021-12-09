<?php 
function nbaddtext ($Nba, $Texta){
  $result= $Nba . $Texta;
  return ($result);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exo5</title>

</head>
<body>
<p><?= nbaddtext(10, " est mon jour d'anniversaire")?></p>
</body>
</html>

