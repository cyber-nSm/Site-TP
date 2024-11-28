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
    <title>Application de gestion de tâches</title>
    <link rel="stylesheet" href="Projet1style.css">
</head>
<body>
    <header>
        <h1><?php echo $projects[0]['title'];?></h1>
    </header>
    <div class="container">
        <img src=<?php echo $projects[0]['image_url']; ?> alt="Gestion de tâches">
        <p><?php echo $projects[0]['description']; ?></p>
 
        <ul>
            
            <li>Authentification utilisateur</li>
            <li>Gestion des priorités</li>
            <li>Notifications</li>
            <li>Mode hors ligne</li>
        </ul>
    
        <a href="index.php#filters01">Retour au portfolio</a>
    </div>

         
</body>
</html>
