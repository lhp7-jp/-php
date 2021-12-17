<?php
$regexName = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,25}$/u";

$regexDemande = "/^.{1,200}$/u";

// Tableau vide qui va nous permettre de stocker les erreurs 
$arrayErrors = [];
$arraySubjects = [
    1 => "Information",
    7 => "Prix",
    3 => "Autre"
];

var_dump($_GET);

// nous verifions si input submit est présent dans $_GET
if (isset($_GET["submit"])) {

    // nous verifions si input nom est présent dans $_GET
    if (isset($_GET["nom"])) {

        // a l'aide de la fonction empty je verifie que l'input nom n'est pas vide 
        if (empty($_GET["nom"])) {

            // je crée une clef nom dans tableau d'erreur avec un message 
            $arrayErrors["nom"] = "Veuillez indiquer votre nom";

            // je verifie a l'aide de la fonction !preg_match() si l'input ne correspond pas
        } elseif (!preg_match($regexName, $_GET["nom"])) {

            // je crée une clef nom dans tableau d'erreur avec un message
            $arrayErrors["nom"] = "Format invalide";
        }
    }

    if (isset($_GET["prenom"])) {
        if (empty($_GET["prenom"])) {
            $arrayErrors["prenom"] = "Veuillez indiquer votre prenom";
        } elseif (!preg_match($regexName, $_GET["prenom"])) {
            $arrayErrors["prenom"] = "Format invalide";
        }
    }

    if (isset($_GET["sujet"])) {

        // nous controlons que la clef existe dans $_GET, si elle n'existe pas nous affichons un message d'erreur
        if (!array_key_exists($_GET["sujet"], $arraySubjects)) {
            $arrayErrors["sujet"] = "Veuillez choisir un sujet valide";
        }
    } else {
        $arrayErrors["sujet"] = "Veuillez indiquer votre sujet";
    }


    if (isset($_GET["mail"])) {
        if (empty($_GET["mail"])) {
            $arrayErrors["mail"] = "Veuillez indiquer votre mail";

            // Nous controlons que le mail respecte le filtre, s'il ne le respecte pas nous affichons un message d'erreur
        } elseif (!filter_var($_GET['mail'], FILTER_VALIDATE_EMAIL)) {
            $arrayErrors["mail"] = "Format invalide";
        }
    }


    if (isset($_GET["demande"])) {
        if (empty($_GET["demande"])) {
            $arrayErrors["demande"] = "Veuillez indiquer votre demande";
        } elseif (!preg_match($regexDemande, $_GET["demande"])) {
            $arrayErrors["demande"] = "Format invalide";
        }
    }





    // je controle que le tableau d'erreur est vide 
    if (empty($arrayErrors)) {

        // je protege et je stock dans $name la valeur de l'input nom
        $name = htmlspecialchars($_GET['nom']);
        $firstname = htmlspecialchars($_GET['prenom']);
        $mail = htmlspecialchars($_GET['mail']);
        $sujet = htmlspecialchars($arraySubjects[$_GET["sujet"]]);
        $demande = htmlspecialchars($_GET['demande']);

        // j'effectue une redirection avec comme parametre url nom=$name
        header("Location: info.php?nom=$name&prenom=$firstname&mail=$mail&sujet=$sujet&demande=$demande");
    }
}
