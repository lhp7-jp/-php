

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exo4</title>

</head>


<body>
<pre>
<?php 
$months = array("1" => "janvier","février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre" , "novembre", "décembre");
$months=array_replace($months, array(8 => "aout"), array(8 => "août"));
print_r($months);
?>
</pre>
</body>
</html>

