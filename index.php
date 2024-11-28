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
    <meta name="description" content="Mon Portfolio">
    <title>Mon Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Section Header -->
    <header>
        <nav>
            <ul>
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#about">À propos</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Section Accueil -->
    <section id="accueil" class="hero">
        <div class="hero-content">
            <h1 id="h1titre">
                <img src="https://www.gentsu.fr/wp-content/uploads/2022/05/1200x680_capture-d-e-cran-2022-03-03-a-12-49-07.jpeg" id="image444" alt="photo de profil">
                <span class="text-overlay">Bonjour, je suis Fresh Ladouille,
                    Je suis un développeur web full stack passionné
                </span>
            </h1>          
            <a href="#portfolio" class="cta-button">Voir mon travail</a>
        </div>
    </section>

    <!-- Section À propos -->
<section id="about">
    <h2 id="Tom">À propos de moi</h2>
    <p class="intro">Je suis un <strong>développeur web full stack</strong>, ayant mené plusieurs projets. Voici mes compétences :</p>
    
    <div class="skills">
        <h3 class="section-title">Compétences techniques</h3>
        <ul>
            <li><strong>Langages :</strong> JavaScript, TypeScript, Node.js, Python, Java, PHP</li>
            <li><strong>Frameworks :</strong> React, Vue.js, Angular, Express.js, Django, Ruby on Rails</li>
            <li><strong>Bases de données :</strong> MySQL, PostgreSQL, MongoDB</li>
            <li><strong>Outils DevOps :</strong> Git, Docker, Kubernetes, CI/CD, AWS</li>
            <li><strong>Méthodologies :</strong> Agile, Scrum, Kanban</li>
        </ul>
    </div>

    <div class="soft-skills">
        <h3 class="section-title">Soft Skills</h3>
        <ul>
            <li><strong>Résolution de problèmes :</strong> Analyse rapide et efficace des défis techniques</li>
            <li><strong>Collaboration :</strong> Travail d’équipe et communication claire avec les parties prenantes</li>
            <li><strong>Adaptabilité :</strong> Apprentissage rapide et gestion du changement dans un environnement dynamique</li>
            <li><strong>Gestion du temps :</strong> Priorisation des tâches et respect des délais</li>
        </ul>
    </div>

    <div class="soft-skills"></div>
        <h3 class="section-title">Education</h3>
        <ul>
            <li><strong>Diplôme :</strong> Master informatique (Bac +6)</li>
        </ul>
    </div>
</section>


<!-- Section Portfolio -->
<!-- Section Portfolio -->
<!-- Section Portfolio -->
<section id="portfolio">
    <h2>Mon Portfolio</h2>

    <!-- Filtres -->
    <div id="filters01" class="filters">
        <button class="filter-button" data-filter="all">Tous</button>
        <button class="filter-button" data-filter="web">Web</button>
        <button class="filter-button" data-filter="app">Applications</button>
    </div>

    <!-- Galerie de projets -->
    <div class="portfolio-gallery">
        <!-- Projet 1 -->
        <div class="portfolio-item web">
            <a href="Projet1.php" target="_blank">
                <img src="https://chef-de-projet.fr/wp-content/uploads/2023/09/monday-to-do-1024x703.png" alt="Projet 1">
                <h3>Application de gestion de tâches</h3>
                <p>Application avec authentification, priorités, notifications et mode hors ligne.</p>
            </a>
        </div>
        
        <!-- Projet 2 -->
        <div class="portfolio-item web">
            <a href="Projet2.php" target="_blank">
                <img src="https://img.freepik.com/vecteurs-libre/modele-blog-entreprise_23-2148899518.jpg" alt="Projet 2">
                <h3>Blog minimaliste</h3>
                <p>CMS avec création d’articles, éditeur riche, commentaires, et SEO optimisé.</p>
            </a>
        </div>
        
        <!-- Projet 3 -->
        <div class="portfolio-item app">
            <a href="Projet3.php" target="_blank">
                <img src="https://www.leptidigital.fr/wp-content/uploads/2023/01/actu-marketplace.jpg" alt="Projet 3">
                <h3>E-commerce simplifié</h3>
                <p>Boutique avec gestion des produits, panier, paiements Stripe et dashboard admin.</p>
            </a>
        </div>
        
        <!-- Projet 4 -->
        <div class="portfolio-item app">
            <a href="Projet4.php" target="_blank">
                <img src="https://tool-advisor.fr/wp-content/uploads/2023/05/reseaux-sociaux-les-plus-populaires.png" alt="Projet 4">
                <h3>Réseau social basique</h3>
                <p>Profils, posts, likes, commentaires, et fil d’actualité en temps réel.</p>
            </a>
        </div>

        <!-- Projet 5 -->
        <div class="portfolio-item web">
            <a href="Projet5.php" target="_blank">
                <img src="https://fiverr-res.cloudinary.com/videos/t_main1,q_auto,f_auto/fsvt55l8bqwxlu4wdpao/create-a-personal-finance-tracking-dashboard.png" alt="Projet 5">
                <h3>Suivi des finances</h3>
                <p>Suivi des revenus/dépenses avec graphiques interactifs et export des données.</p>
            </a>
        </div>

        <!-- Nouveau Projet 6 -->
        <div class="portfolio-item app">
            <a href="Projet6.php" target="_blank">
                <img src="https://img.freepik.com/vecteurs-premium/reservez-concept-billet-bus-ligne-idee-voyage-tourisme-planification-du-voyage-ligne-achetez-ticket-bus-dans-application-illustration_277904-4913.jpg" alt="Projet 6">
                <h3>Application de réservation de billets</h3>
                <p>Réservation de billets pour événements, voyages, avec paiement et gestion des réservations.</p>
            </a>
        </div>
    </div>
</section>

    <!-- Section Contact -->
    <section id="contact">
        <h2>Contactez-moi</h2>
<p>Numéro de Téléphone : +12 33 32 89 12</p>
<p>Adresse e-mail : freshlad@gmail.com</p>
<p>Ville : Paris, France</p>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Fresh Ladouille. Tous droits réservés.</p>
        <script>
            // Sélectionner tous les boutons de filtres et les éléments du portfolio
            const filterButtons = document.querySelectorAll('.filter-button');
            const portfolioItems = document.querySelectorAll('.portfolio-item');
        
            // Ajouter un événement de clic à chaque bouton
            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const filter = button.getAttribute('data-filter');
        
                    // Montrer ou cacher les projets selon le filtre
                    portfolioItems.forEach(item => {
                        if (filter === 'all' || item.classList.contains(filter)) {
                            item.classList.add('visible');
                        } else {
                            item.classList.remove('visible');
                        }
                    });
                });
            });
        
            // Activer tous les projets au chargement
            document.querySelector('[data-filter="all"]').click();
        </script>
        
    </footer>
