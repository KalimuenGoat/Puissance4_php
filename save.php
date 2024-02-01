<?php

session_start();

$host = '127.0.0.1';
$db = 'puissance4';
$user = 'root'; // ou votre nom d'utilisateur pour MySQL
$pass = 'root'; // remplacez par votre mot de passe pour MySQL
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
];

try {
    $dbh = new PDO($dsn, $user, $pass, $options);
    $sth = $dbh->prepare("INSERT INTO history (`joueur_1`, `joueur_2`, `game`) VALUES (?, ?, ?);");
    
    // Cette ligne semble être une tentative d'exécuter une requête SQL directement, ce qui n'est pas valide dans ce contexte PHP.
    // INSERT INTO history (joueur_1, joueur_2, game) VALUES ('Test1', 'Test2', '[]');
    // Supprimez la ligne ci-dessus et utilisez la suivante pour exécuter la requête préparée :
    $sth->execute(['Test1', 'Test2', '[]']); // Exécutez cette requête pour tester l'insertion.

    echo "Insertion réussie.";
} catch (PDOException $e) {
    echo "Erreur d'insertion : " . $e->getMessage();
}

?>
