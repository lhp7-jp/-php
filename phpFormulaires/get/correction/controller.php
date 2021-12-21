<?php

$regexName = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,100}$/u";
$regexDemande = "/^.{1,200}$/u";

// tableau des erreurs (vide au départ) que l'on remplit avec les erreurs 
// et que l'on vérifie à la fin pour voir s'il est vide pour aller la page infos.php
$msgErrors = [];
// tableau liste des sujets
$choiceSubject = [
  1 => "Information",
  7 => "Prix",
  3 => "Autre"
];

var_dump($_GET);

// nous vérifions si l'input submitButton est présent dans $_GET
if (isset($_GET['submitButton'])) {
//  nous vérifions si l'input sendName est présent dans $_GET ou n'est pas vide
  if (!isset($_GET['sendName']) or empty($_GET['sendName'])) {
    // on remplit le tableau des erreurs avec l'index name et la valeur "Veuillez entrez votre nom, svp"
    $msgErrors["name"]="Veuillez entrez votre nom, svp";
    echo $msgErrors["name"];
  } else {
// nous vérifions si l'input sendName qui est présent dans $_GET respecte le format des noms avec une regex
    if (!preg_match($regexName, $_GET['sendName'])) {
      $msgErrors["name"]="Le format invalide. ex: Durand";
      echo $msgErrors["name"];
    } else {
      $name = htmlspecialchars($_GET['sendName']);
      var_dump($name);
    }
  };
  if (!isset($_GET['sendFirstname'])  or empty($_GET['sendFirstname'])) {
    $msgErrors["firstname"]="Veuillez entrez votre prénom, svp";
    echo $msgErrors["firstname"];
  } else {
    if (!preg_match($regexName, $_GET['sendFirstname'])) {
      $msgErrors["firstname"]="Le format n'est pas valide ex: Pierre";
      echo $msgErrors["firstname"];
  } else {
      $firstname = htmlspecialchars($_GET['sendFirstname']);
      var_dump($firstname);
    }
  };
  if (!isset($_GET['sendEmail']) or empty($_GET['sendEmail'])) {
      $msgErrors["sendEmail"]="Veuillez entrez votre email, svp";
      echo $msgErrors["sendEmail"];
  } else {
  if (filter_var($_GET['sendEmail'], FILTER_VALIDATE_EMAIL)) {
      $email = htmlspecialchars($_GET['sendEmail']);
      var_dump($email);
  } else {
    $msgErrors["sendEmail"]="Le format de votre Email n'est pas valide. ex : pierre.durand@gmail.com";
    echo $msgErrors["sendEmail"];
   }
  };



  if (!isset($_GET['sendSubject']) or empty($_GET['sendSubject'])) {
    // nous controlons que la clé existe $_GET, si elle n'existe pas nous envoyons un message d'erreur
    if (!array_key_exists($_GET["sujet"],$choiceSubject)) {
    $msgErrors["sendSubject"]="Veuillez entrez un sujet valide";
    echo $msgErrors["sendSubject"];
  } else {
    $msgErrors["sendSubject"]="Veuillez entrez votre sujet, svp";
    echo $msgErrors["sendSubject"];
    }
  };

  
if (!isset($_GET['sendRequest']) or empty($_GET['sendRequest'])) {
    $msgErrors["sendRequest"]="Veuillez entrez votre demande, svp";
    echo $msgErrors["sendRequest"];
  } else {
  if (!preg_match($regexName, $_GET['sendRequest'])) {
    $msgErrors["sendRequest"]="le format de votre demande n'est pas valide. ex: ecriture site web";
    echo $msgErrors["sendRequest"];
  } else {
    $request = htmlspecialchars($_GET['sendRequest']);
    var_dump($request);
  }
}
};
// Je contrôle si le tableau est vide pour aller ensuite sur la page infos.php avec les variables $name+....
if (empty($msgErrors)) {
 //je protège et je stocke dans $name 
   $name = htmlspecialchars($_GET['sendName']);
   $firstname = htmlspecialchars($_GET['sendFirstname']);
   $email = htmlspecialchars($_GET['sendEmail']);
   $subject = htmlspecialchars($_GET['sendSubject']);
   $request = htmlspecialchars($_GET['sendRequest']);
 };
header("Location: ./infos.php?sendName=$name.&sendFirstname=$firstName&sendEmail=$email&sendSubject=$subject&sendResquest=$request");
?>
