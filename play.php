<?php
    session_start();

    echo "Le joueur {$_POST['joueur']} a joué dans la colonne {$_POST['colonne']}";
?>