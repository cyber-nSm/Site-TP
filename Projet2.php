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
    <title>Blog minimaliste</title>
    <link rel="stylesheet" href="Projet1style.css">
</head>
<body>
    <header>
        <h1><?php echo $projects[1]['title'];?></h1>
    </header>
    <div class="container">
        <img src=<?php echo $projects[1]['image_url']; ?> alt="Blog minimaliste">
        <p><?php echo $projects[1]['description']; ?></p>
        <ul>
            <li>Création et gestion d’articles</li>
            <li>Éditeur riche pour vos contenus</li>
            <li>Section commentaires</li>
            <li>SEO optimisé pour le référencement</li>
        </ul>
        <a href="index.php#filters01">Retour au portfolio</a>
    </div>
</body>
</html>