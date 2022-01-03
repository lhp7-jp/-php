<?php
// page1.php

session_start();



$_SESSION['Lastname'] = 'LePirate';
$_SESSION['firstname']   = 'Samuel';
$_SESSION['age']     = 5;


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <title>exercice2</title>
</head>

<body class="text-center mt-5">

<a href="exercice2bis.php" type="submit" class="btn btn-outline-success">Click Click BOOM!</a>



</body>

</html>