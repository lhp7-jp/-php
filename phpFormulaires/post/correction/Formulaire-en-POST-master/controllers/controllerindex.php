<?php
var_dump($_POST);
$regexNom = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,30}$/u";
$regexPseudo = "/^[0123456789a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð,.'-]{2,30}$/u";
$arrayError = [];
var_dump($myMonth);
var_dump($myYear);
if (!empty($_POST)) {
    if (isset($_POST["myMonth"])) {
        if (empty($_POST["myMonth"])) {
            $arrayError["myMonth"] = "Veuillez saisir un mois";
        }
    }
    if (isset($_POST["myYear"])) {
        if (empty($_POST["myYear"])) {
            $arrayError["myYear"] = "Veuillez saisir une année";
        }
    }
};
?>
