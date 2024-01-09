<?php
session_start();

// echo "Le joueur {$_POST['joueur']} a joué dans la colonne {$_POST['colonne']}";
function turn(int $joueur, int $colonne){
  $i = 0;
  while (!is_null($_SESSION['board'][$colonne][$i])){
    $i++;
  }
  $_SESSION['board'][$colonne][$i] = $joueur;
}

turn($_POST['joueur'], $_POST['colonne']);

//affichage de la grille
require_once("grid.php");
?>