<?php
require "./data/data.php"; // require_once équivalent, evite de le rappeler si déjà appelé

$id = $_GET['id'];

foreach ($bddGuillaume as $event => $infos) { 
  if (!$infos['id'] == $id){
    $picture = $infos['picture'];
    $name =$infos['name'];
    $dateDeb =$infos['dateDeb'];
    $dateFin =$infos['dateFin'];
    $place =$infos['place'];
    $price =$infos['price'];
    $summary =$infos['summary'];
    var_dump($picture);
 } 
}
?>
