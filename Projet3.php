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
    <title>E-commerce simplifié</title>
    <link rel="stylesheet" href="Projet1style.css">
</head>
<body>
    <header>
        <h1><?php echo $projects[2]['title'];?></h1>
    </header>
    <div class="container">
        <img src=<?php echo $projects[2]['image_url']; ?> alt="E-commerce simplifié">
        <p><?php echo $projects[2]['description']; ?></p>
        <ul>
            <li>Gestion des produits</li>
            <li>Panier et paiements intégrés (Stripe)</li>
            <li>Dashboard pour les administrateurs</li>
        </ul>
        <a href="index.php#filters01">Retour au portfolio</a>
    </div>
</body>
</html>