<?php 
function addChar ($Textb, $Textc){
  $Textd = $Textb .' '. $Textc;
  return ($Textd);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exo3</title>

</head>
<body>
<p><?= addChar("Il fait bon", "vivre au Havre en 2021")?></p>
</body>
</html>

