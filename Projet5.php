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
    <title>Suivi des finances</title>
    <link rel="stylesheet" href="Projet1style.css">
</head>
<body>
    <header>
        <h1><?php echo $projects[4]['title'];?></h1>
    </header>
    <div class="container">
        <img src=<?php echo $projects[4]['image_url']; ?> alt="Suivi des finances">
        <p><?php echo $projects[4]['description']; ?></p>
        <ul>
            <li>Suivi des revenus et dépenses</li>
            <li>Graphiques interactifs</li>
            <li>Exportation des données</li>
        </ul>
        <a href="index.php#filters01">Retour au portfolio</a>
    </div>
</body>
</html>