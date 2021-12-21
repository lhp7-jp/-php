<?php
require "controller/controlIndex.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./assets/css/style.css" rel="stylesheet" />
  <title>Les super bons plans de Guigui</title>
</head>

<body>

  <p>Les super bons plans de Guigui</p>

  <?php foreach ($bddGuillaume as $event => $infos) { ?>
    <div>
      <div class="card-img">
        <img src="./assets/img/<?= $infos['picture'] ?>" title="<?= $infos['name'] ?>" alt="bloc note" />
      </div>
      <div>
        <h3><?= $infos['name'] ?></h3>
        <h3><?= 'Du' . $infos['dateDeb'] . ' au ' . $infos['dateFin'] ?></h3>
        <h3><?= $infos['price'] ?></h3>
        <h3><?= $infos['summary'] ?></h3>
        <p><a href="./details.php?id=<?=$infos['id'] ?>">plus d'infos</a></p>
      </div>
    </div>
  <?php } ?>
</body>

</html>