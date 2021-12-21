<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    <head>
        <title>Exercice 1</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
    <!-- <h3><?= "var_dump ($_SERVER) : ".var_dump($_SERVER)?></h3> -->
    <h3><?= "Votre navigateur a pour \"User Agent\":<br />".htmlEntities($_SERVER["HTTP_USER_AGENT"])?></h3>
    <h3><?= "Votre serveur a pour \"adresse IP\":<br />".htmlEntities($_SERVER["REMOTE_ADDR"])?></h3>
    <h3><?= "Votre serveur a pour \"nom\":<br />".htmlEntities($_SERVER["SERVER_NAME"])?></h3>
    
    </body>
</html>