<?php
// gallery.php
if (session_status() == PHP_SESSION_NONE) session_start();
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
<?php
// on déclare un tableau qui contiendra le nom des fichiers de nos miniatures
$tableau = array();
// on ouvre notre dossier contenant les miniatures
$dossier = opendir ('./assets/img');
while ($fichier = readdir ($dossier)) {
	if ($fichier != '.' && $fichier != '..' && $fichier != 'index.php') {
	// on stocke le nom des fichiers des miniatures dans un tableau
	$tableau[] = $fichier;
	}
}
closedir ($dossier);

// on défini le nombre de colonne sur lesquelles vont s'afficher nos miniatures
$nbcol=2;
// on compte le nombre de miniatures
$nbpics = count($tableau);

// si on a au moins une miniature, on les affiche toutes
if ($nbpics != 0) {
	echo '<table>';
	for ($i=0; $i<$nbpics; $i++){
	if($i%$nbcol==0) echo '<tr>';
	// pour chaque miniature, on affiche la miniature munie d'un lien vers la photo en taille réelle
	echo '<td><a href="pics/' , $tableau[$i] , '"><img src="mini/' , $tableau[$i] , '" alt="Image" /></a></td>';
	if($i%$nbcol==($nbcol-1)) echo '</tr>';
	}
	echo '</table>';
}
// si on a aucune miniature, on affiche un petit message :)
else echo 'Aucune image à afficher';
?>
</body>
</html>
