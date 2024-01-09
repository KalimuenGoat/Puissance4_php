<?php
session_start();

//echo "Le joueur {$_POST['joueur']} a joué dans la colonne {$_POST['colonne']}";
function turn(int $joueur, int $colonne)
{
  $i = 0;
  while (!is_null($_SESSION['board'][$colonne][$i])) {
    $i++;
  }
  $_SESSION['board'][$colonne][$i] = $joueur;
}

turn((int) $_POST['joueur'], (int) $_POST['colonne']);

function draw(){
  $i = 0;
  while ($i++ , i< 7){
    $j = ($_SESSION['board'][$i][$i]); 
    if ($j != null) {
      echo "Egalité"
    }
  }
}

//affichage de la grille
require_once("grid.php");
?>