<?php
// page1.php

session_start();



echo $_SESSION['Lastname'] ."<br>";
echo $_SESSION['firstname'] ."<br>";
echo $_SESSION['age'] ."<br>";


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

<a href="exercice2.php" type="submit" class="btn btn-outline-success">Back to the futur</a>




</body>

</html>