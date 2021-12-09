

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exo7</title>

</head>


<body>
<pre>
<?php 
$assiociatif = ['02' => 'Aisne', '59' => 'Nord', '60' => 'Oise', '62' => 'Pas de Calais', '80' => 'Somme'];
$assiociatif[51] = 'Marne';
asort($assiociatif);
print_r($assiociatif);
?>
</pre>
</body>
</html>

