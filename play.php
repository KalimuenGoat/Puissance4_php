<?php 
  session_start();

  // Initialisation du jeu 

  $_SESSION['board'] = [
    [null,null,null,null,null,null],
    [null,null,null,null,null,null],
    [null,null,null,null,null,null],
    [null,null,null,null,null,null],
    [null,null,null,null,null,null],
    [null,null,null,null,null,null]
  ];



  require_once("grid.php");
?>