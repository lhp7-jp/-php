<?php
$login='$2a$12$VgeS0yJa/9r8X3rkq0nFg.FiuZxI1EgJZoJzDI0MjiiSl9LAFuBcW';
$password='$2a$12$m7Bs9KDFzyIXat1Iv2uOJuF0FOFTDvN2zWrckVqqaSTRWkxY9Sl.i';
var_dump($_POST);

if (!empty($_POST)) {
    if (empty($_POST["login]"]) || empty ($_POST["password"])) {
        $msgErrors["error"] = "Veuillez saisir votre mot de passe et/ou login";
   } elseif (password_verify($_POST["login"],$login){

   }
}
