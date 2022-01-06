<?php
if (empty($_COOKIE['myLogin'])) { 
  setcookie('myLogin','',time()-3600);
  setcookie('myPassword','',time()-3600);
  header("Location: no-allowed.php");
} elseif (session_status() == PHP_SESSION_NONE) {
  session_start();
} 
?>
