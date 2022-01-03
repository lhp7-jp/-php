<?php
$regexNom = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,30}$/u";
$regexPseudo = "/^[0123456789a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð,.'-]{2,30}$/u";
$arrayError = [];
$choiceMonth = [
  1 => 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août',
  'Septembre', 'Octobre', 'Novembre', 'Décembre'];

    if (!empty($_POST['submitButton']) && isset($_POST['myMonth']) && isset($_POST['myYear'])) {
    if (isset($_POST['myMonth'])) {
        if (empty($_POST['myMonth'])) {
            $arrayError['myMonth'] = "Veuillez saisir un mois";
        } else {
        $varMonth = $choiceMonth[$_POST['myMonth']];
      }
    };
    if (isset($_POST["myYear"])) {
        if (empty($_POST["myYear"])) {
            $arrayError["myYear"] = "Veuillez saisir une année";
        } else {
          $varYear = ($_POST["myYear"]);
      }
    };
    $varDay = 1;
    $tempDate = $varDay . "-" . $_POST['myMonth']. "-" . $varYear ;
    $choiceDate = date('N', strtotime($tempDate));
    $numberDay = cal_days_in_month(CAL_GREGORIAN, $_POST['myMonth'], $varYear); 
  };
