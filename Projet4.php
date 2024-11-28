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
    <title>Réseau social basique</title>
    <link rel="stylesheet" href="Projet1style.css">
</head>
<body>
    <header>
        <h1><?php echo $projects[3]['title'];?></h1>
    </header>
    <div class="container">
        <img src=<?php echo $projects[3]['image_url']; ?> alt="Réseau social">
        <p><?php echo $projects[3]['description']; ?></p>
        <ul>
            <li>Profils personnalisés</li>
            <li>Posts, likes et commentaires</li>
            <li>Fil d’actualité en temps réel</li>
        </ul>
        <a href="index.php#filters01">Retour au portfolio</a>
    </div>
</body>
</html>