<?php
if (session_status() == PHP_SESSION_NONE) session_start();
$profiles = [
  'fifi' => ['password' => '$2a$12$lxOhpc6rYiBR4aO.N8Q2s.BxfS55R7zUBCeOLaIe.RpwhXJGphjli', 'quota' => 10, 'formule' => 'homard'],
  'loulou' => ['password' => '$2a$12$MySbpejQ4z5Afo0Xk2qL8OoFCUxbqGeiTaSp3Rc2kjib.EQhd4HOq', 'quota' => 5, 'formule' => 'crevette'],
  'riri' => ['password' => '$2a$12$Gc3OXgsegIo1zoh17q6x8OJ/TmAXodpS81ZKUTDMXemO/QjBDSezi', 'quota' => 20, 'formule' => 'dauphin']
];
if (empty($_COOKIE['myLogin'])) {
  echo "Le login ou/et le mot de passe est incorrect.";
} elseif (!(array_key_exists($_COOKIE['myLogin'], $profiles))) {
  echo "Le login ou/et le mot de passe est incorrect.";
} elseif (!password_verify($_COOKIE['myPassword'],$profiles[$_COOKIE['myLogin']]['password'])) {
  echo "Le login ou/et le mot de passe est incorrect.";
} else {
  setcookie('myQuota', $profiles[$_COOKIE['myLogin']]['quota']);
  setcookie('myFormule', $profiles[$_COOKIE['myLogin']]['formule']);
  header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./assets/css/style.css" rel="stylesheet" />
  <title>allPIX</title>
</head>

<body>
  <div class="container-fluid">
    <h1></h1>
    <h1>allPIX</h1>
    <form action="" method="post">
      <!-- je teste si input sendName est présent dans $_GET si oui je l'affiche en utilisant htmlspecialchars -->
      <label for="loginName">Login : </label>
      <input value="<?= isset($_POST['loginName']) ? htmlspecialchars($_POST["loginName"]) : "" ?>" name="loginName" type="text" placeholder="" />
      <h1></h1>
      <label for="passWord">Password : </label>
      <input value="<?= isset($_POST['passWord']) ? htmlspecialchars($_POST["passWord"]) : "" ?>" name="passWord" type="text" placeholder="" /><br />
      <h1></h1>
      <button onclick="window.location.href='dashboard.php';">Connexion</button>
    </form>
  </div>
</body>
</html>