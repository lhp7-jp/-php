<?php
$regexName = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,30}$/u";
$regmdPwd = '#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{10,}$#';

// tableau des erreurs (vide au départ) que l'on remplit avec les erreurs 
// et que l'on vérifie à la fin pour voir s'il est vide pour aller la page infos.php
$msgErrors = [];

// nous vérifions si l'input submitButton est présent dans $_POST
if (!empty($_POST['submitButton'])) {

//  nous vérifions si l'input Name est présent dans $_POST ou n'est pas vide
  if (!isset($_POST['name']) or empty($_POST['name'])) {
    // on remplit le tableau des erreurs avec l'index name et la valeur "Veuillez entrez votre nom, svp"
    $msgErrors["name"]="Veuillez entrez votre nom, svp";
    echo $msgErrors["name"];
  } else {
// nous vérifions si l'input Name qui est présent dans $_POST respecte le format des noms avec une regex
    if (!preg_match($regexName, $_POST['name'])) {
      $msgErrors["name"]="Le format invalide. ex: Durand";
      echo $msgErrors["name"];
    } else {
      $name = htmlspecialchars($_POST['name']);
      var_dump($name);
    }
  }
 // Même chose pour firstName 
  if (!isset($_POST['firstName'])  or empty($_POST['firstName'])) {
    $msgErrors["firstName"]="Veuillez entrez votre prénom, svp";
    echo $msgErrors["firstName"];
  } else {
    if (!preg_match($regexName, $_POST['firstName'])) {
      $msgErrors["firstName"]="Le format n'est pas valide ex: Pierre";
      echo $msgErrors["firstName"];
  } else {
      $firstname = htmlspecialchars($_POST['firstName']);
      var_dump($firstName);
    }
  }
   // Même chose pour pseudo
  if (!isset($_POST['pseudo'])  or empty($_POST['pseudo'])) {
    $msgErrors["pseudo"]="Veuillez entrez votre pseudo, svp";
    echo $msgErrors["pseudo"];
  } else {
    if (!preg_match($regexName, $_POST['pseudo'])) {
      $msgErrors["pseudo"]="Le format de votre pseudo n'est pas valide ex: JP";
      echo $msgErrors["pseudo"];
  } else {
      $pseudo = htmlspecialchars($_POST['pseudo']);
      var_dump($pseudo);
    }
  }
  // Même chose pour mdPwd
  if (!isset($_POST['mdPwd']) or empty($_POST['mdPwd'])) {
    $msgErrors["mdPwd"]="Veuillez entrez votre mot de passe, svp";
    echo $msgErrors["mdPwd"];
  } else {
  if (!preg_match($regmdPwd, $_POST['mdPwd'])) {
    $msgErrors["mdPwd"]="le format de votre mot de passe n'est pas valide, il doit mot de passe de compte doit contenir au moins une majuscule, une minuscule,
     un chiffre et un caractère spécial. 
    De plus le mot de passe doit faire au moins 10 caractères. ";
    echo $msgErrors["mdPwd"];
  } else {
    $mdPwd = htmlspecialchars($_POST['mdPwd']);
    var_dump($mdPwd);
    }
  }
  // Même chose pour confirmPwd
  if (!isset($_POST['confirmdPwd']) or empty($_POST['confirmdPwd'])) {
    $msgErrors["confirmdPwd"]="Veuillez confirmer votre mot de passe, svp";
    echo $msgErrors["confirmdPwd"];
  } else {
  if (!preg_match($regmdPwd, $_POST['confirmdPwd'])) {
  $msgErrors["confirmdPwd"]="le format de votre mot de passe n'est pas valide, il doit mot de passe de compte doit contenir au moins une majuscule, une minuscule,
   un chiffre et un caractère spécial. 
   De plus le mot de passe doit faire au moins 10 caractères. ";
  echo $msgErrors["confirmdPwd"];
  } else {
  if ($_POST['mdPwd'] == $_POST['confirmdPwd']) {
    $mdPwd = htmlspecialchars($_POST['mdPwd']);
    var_dump($mdPwd);
  } else {
    $msgErrors["confirmdPwd"]="les deux mots de passe ne sont pas identiques. ";
    echo $msgErrors["confirmdPwd"];
  }
  }
  }
   // Même chose pour urlGitup
  if (!isset($_POST['urlGitup']) or empty($_POST['urlGitup'])) {
    $msgErrors["urlGitup"]="Veuillez entrez votre URL, svp";
    echo $msgErrors["urlGitup"];
  } else {
    if (filter_var($_POST['urlGitup'], FILTER_VALIDATE_URL)) {
    $urlGitup = htmlspecialchars($_POST['urlGitup']);
    var_dump($urlGitup);
  } else {
  $msgErrors["urlGitup"]="Le format de votre URL n'est pas valide.";
  echo $msgErrors["urlGitup"];
  }
  }
  // Même chose pour checkBox
  if (!isset($_POST['checkBox']) or empty($_POST['checkBox'])) {
  $msgErrors["checkBox"]="Veuillez cocher les CGU, svp";
  echo $msgErrors["checkBox"];
  } else {
  $urlGitup = htmlspecialchars($_POST['urlGitup']);
  var_dump($urlGitup);
  };
};
?>
