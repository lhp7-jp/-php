<?php 
$sum = 0;
$difference = 0;
$product = 0;
$quotient = 0;
$modulo = 0;

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
  <p><?php $sum=3+4;$difference=100-20;$product=45*15;$quotient=45/15;$modulo=fmod(75,15);?></p>
  <p><?= "$sum, $difference, $product, $quotient, $modulo" ?></p>
  
</body>
</html>

