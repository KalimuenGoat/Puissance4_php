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
$winner = checkWinner($_SESSION['board']);

if ($winner !== false) {
    // Gestion du gagnant, par exemple en affichant qui a gagné
    echo "Le joueur $winner a gagné la partie!";
}


function checkWinner($board) {
  // Vérification horizontale
  for ($row = 0; $row < 6; $row++) {
      for ($col = 0; $col < 4; $col++) {
          if ($board[$col][$row] && $board[$col][$row] == $board[$col + 1][$row] && $board[$col][$row] == $board[$col + 2][$row] && $board[$col][$row] == $board[$col + 3][$row]) {
              return $board[$col][$row];
          }
      }
  }

  // Vérification verticale
  for ($col = 0; $col < 7; $col++) {
      for ($row = 0; $row < 3; $row++) {
          if ($board[$col][$row] && $board[$col][$row] == $board[$col][$row + 1] && $board[$col][$row] == $board[$col][$row + 2] && $board[$col][$row] == $board[$col][$row + 3]) {
              return $board[$col][$row];
          }
      }
  }

  // Vérification diagonale (montante et descendante)
  for ($col = 0; $col < 7; $col++) {
      for ($row = 0; $row < 6; $row++) {
          if ($col <= 3 && $row >= 3 && $board[$col][$row] && $board[$col][$row] == $board[$col + 1][$row - 1] && $board[$col][$row] == $board[$col + 2][$row - 2] && $board[$col][$row] == $board[$col + 3][$row - 3]) {
              return $board[$col][$row];
          }
          if ($col <= 3 && $row <= 2 && $board[$col][$row] && $board[$col][$row] == $board[$col + 1][$row + 1] && $board[$col][$row] == $board[$col + 2][$row + 2] && $board[$col][$row] == $board[$col + 3][$row + 3]) {
              return $board[$col][$row];
          }
      }
  }

  // Pas de gagnant trouvé
  return false;
}


//affichage de la grille
require_once("grid.php");
?>