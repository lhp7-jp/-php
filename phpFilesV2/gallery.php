<?php
if (session_status() == PHP_SESSION_NONE) session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="./assets/css/style.css" rel="stylesheet" />
	<link href="./assets/css/lightbox.css" rel="stylesheet" />
	<title>Gallery</title>
</head>

<body>
	<h3>allPIX</h3>
	<h1< /h1>
		<h1>le nombre de fichiers de <?= $_COOKIE['myLogin'] ?> est : <?= $_SESSION['nbpics'] ?></h1>
		<h1< /h1>
			<?php // si on a au moins une miniature, on les affiche toutes
			if ($_SESSION['nbpics'] != 0) {
				for ($tempCounter = 0; $tempCounter < $_SESSION['nbpics']; $tempCounter++) {
					$fullNameKeySession = 'nameFile' . $tempCounter;
			?>
					<div class="row">
						<div class="column">
							<a data-lightbox="roadtrip" <img src="./assets/img/<?= $_COOKIE['myLogin'] ?>/<?= $_SESSION[$fullNameKeySession] ?>" alt="Images"> </a>s
						</div>
					</div>
			<?php }
			}
			?>

			<h1></h1>
			<button onclick="window.location.href='./deconnexion.php';">Deconnexion</button>
			<h1></h1>
			<script>
				lightbox.option({
					'resizeDuration': 200,
					'wrapAround': true
				})
			</script>
			<script src="./assets/js/lightbox.js"></script>
</body>

</html>