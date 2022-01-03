<?php

$months = [1 => "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"];

$days = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];

$yearMin = 2015;

$yearMax = 2025;

var_dump($_POST);


if (!empty($_POST['selectedMonth']) && !empty($_POST['selectedYear'])) {
    $month = $_POST['selectedMonth'];
    $year = $_POST['selectedYear'];

    $firstDay = date("N", strtotime("01-" . $month . "-" . $year)); //le premier de tel mois telle année etait un :

    $nbDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $date = date("N", mktime(0, 0, 0, $month, 1, $year)); //le premier de tel mois telle année etait un :

    var_dump($nbDays, $date, $firstDay);
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier</title>
</head>

<body>

    <div class="row justify-content-center">
        <form method="POST" action="#" class="text-center border border-dark col-lg-4 p-5 text-white" name="test" id="test">

            <fieldset class="row pb-3">
                <div class="dropdown col-lg-6">
                    <select class="form-select" aria-label="Default select example" name="selectedMonth">
                        <option selected disabled>Mois</option>
                        <?php foreach ($months as $key => $value) { ?>
                            <option value="<?= $key ?>"> <?= $value ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="dropdown col-lg-6">
                    <select class="form-select" aria-label="Default select example" name="selectedYear">
                        <option selected disabled>Année</option>
                        <?php for ($i = $yearMin; $i < $yearMax; $i++) { ?>
                            <option> <?= $i ?></option>
                        <?php } ?>
                    </select>
                </div>
            </fieldset>

            <input class="fw-bold" type="submit" value="Go" name="submitButton" />
        </form>

        <?php if (!empty($_POST['selectedMonth']) && !empty($_POST['selectedYear'])) { ?>

            <div><?= $date ?> </div>
            <div><?= $nbDays ?> </div>

            <div class="h3"><?= $_POST['selectedMonth'] ?> <?= $_POST['selectedYear'] ?> </div>

            <div class="row">

                <table>
                    <tr>
                        <?php foreach ($days as $value) { ?>
                            <th class="border border-dark col text-center" style="width: 8rem;"><?= $value ?></th>
                        <?php } ?>
                    </tr>
                    <?php
                    $j = 1;
                    $case = 1;
                    $day = 1;
                    while ($day <= $nbDays) { ?>
                        <tr>
                            <?php
                            for ($i = 1; $i <= 7; $i++) { ?>

                                <td class="border"><?= $case >= $firstDay && $day <= $nbDays ? $day++ : "" ?></td>
                            <?php
                                $case++;
                            } ?>
                        </tr>
                    <?php
                    } ?>
                </table>
            </div>

        <?php } ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>