<?php
// gallery.php
require "./controller/controlGallery.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="./assets/css/style.css" rel="stylesheet" />
	<title>Gallery</title>
</head>

<body>
	<h3>allPIX</h3>
	<h1< /h1>
		<?php
		// on déclare un tableau qui contiendra le nom des fichiers de nos miniatures
		$tableau = array();
		// on ouvre notre dossier contenant les miniatures
		$dossier = opendir('./assets/img/'.$_COOKIE['myLogin'].'/');
		while ($fichier = readdir($dossier)) {
			if ($fichier != '.' && $fichier != '..' && $fichier != 'index.php') {
				// on stocke le nom des fichiers des miniatures dans un tableau
				$tableau[] = $fichier;
			}
		}
		closedir($dossier);

		// autre facon pour avoir la liste des fichiers d'un répertoire = login
		// $listByLogin = scandir('./assets/img/'.$_COOKIE['myLogin'].'/');
		// var_dump($listByLogin);

		// on défini le nombre de colonne sur lesquelles vont s'afficher nos miniatures
		$nbcol = 4;
		// on compte le nombre de miniatures
		$nbpics = count($tableau); ?>
		<h1>le nombre de fichiers de <?= $_COOKIE['myLogin'] ?>  est : <?= $nbpics ?></h1>
		<h1< /h1>
			<?php // si on a au moins une miniature, on les affiche toutes
			if ($nbpics != 0) {
				for ($i = 0; $i < $nbpics; $i++) {
			?>
					<div class="row">
						<div class="column">
							<img src="./assets/img/<?= $_COOKIE['myLogin'] ?>/<?= $tableau[$i] ?>" alt="Images">
						</div>
					</div>
			<?php }
			}
			?>
</body>

</html>