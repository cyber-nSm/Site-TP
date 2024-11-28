<?php
require_once(__DIR__ . '/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variable.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application de réservation de billets</title>
    <link rel="stylesheet" href="Projet1style.css">
</head>
<body>
    <header>
        <h1><?php echo $projects[5]['title'];?></h1>
    </header>
    <div class="container">
        <img src=<?php echo $projects[5]['image_url']; ?> alt="Projet 6">
        <p><?php echo $projects[5]['description']; ?></p>
        <ul>
            <li>Réservation de billets pour événements, voyages, avec paiement et gestion des réservations.</li>    
        </ul>
        <a href="index.php#filters01">Retour au portfolio</a>
    </div>
</body>
</html>