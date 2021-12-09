<?php 
$paramUrl = '';
// si formulaire soumis
if(isset($_POST['retourfirstpage'])){ 
  echo "Retour Index";
};
// test si formulaire soumis
if (!empty($_GET["lastname"]) && !empty($_GET["firstname"])){
  $paramUrl = $_GET["lastname"].' '.$_GET["firstname"];
  var_dump($paramUrl);
} else {
  echo $paramUrl;
};

//  if (isset($_POST['sendParam'])){ 
//   echo "sendParam";
// };

?>
 
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exo1</title>

</head>


<body>
<a href="http://phpparamurl/Exo1/index.php?lastname=Tutor&firstname=Janine">
   <input type="submit" name="sendParam" value="Envoi des paramètres" />
</a>

<a href="http://phpparamurl/Exo1/index.php" >
  <input type="submit" value="Retour Index" name="retourfirstpage"/>
</a>

</body>
</html>

