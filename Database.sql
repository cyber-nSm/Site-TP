-- Create Database
CREATE DATABASE IF NOT EXISTS `filtre_projet`;
USE `filtre_projet`;

-- Create Table for Projects
CREATE TABLE IF NOT EXISTS `projects` (
    `project_id` INT AUTO_INCREMENT,
    `title` VARCHAR(100) NOT NULL,
    `description` TEXT NOT NULL,
    `category` VARCHAR(50),
    `image_url` VARCHAR(255),
    `link` VARCHAR(255),

    PRIMARY KEY (`project_id`)
);

-- Remove Old Data
TRUNCATE TABLE `projects`;

-- Insert Projects Data
INSERT INTO `projects` (`title`, `description`, `category`, `image_url`, `link`) 
VALUES 
('Application de gestion de tâches', 'Application avec authentification, priorités, notifications et mode hors ligne.', 'web', 'https://chef-de-projet.fr/wp-content/uploads/2023/09/monday-to-do-1024x703.png', 'Projet1.php' )
('Blog minimaliste', 'CMS avec création d’articles, éditeur riche, commentaires, et SEO optimisé.', 'web', 'https://img.freepik.com/vecteurs-libre/modele-blog-entreprise_23-2148899518.jpg', 'Projet2.php'),
('E-commerce simplifié', 'Boutique avec gestion des produits, panier, paiements Stripe et dashboard admin.', 'app', 'https://www.leptidigital.fr/wp-content/uploads/2023/01/actu-marketplace.jpg', 'Projet3.php'),
('Réseau social basique', 'Profils, posts, likes, commentaires, et fil d’actualité en temps réel.', 'app', 'https://tool-advisor.fr/wp-content/uploads/2023/05/reseaux-sociaux-les-plus-populaires.png', 'Projet4.php'),
('Suivi des finances', 'Suivi des revenus/dépenses avec graphiques interactifs et export des données.', 'web', 'https://fiverr-res.cloudinary.com/videos/t_main1,q_auto,f_auto/fsvt55l8bqwxlu4wdpao/create-a-personal-finance-tracking-dashboard.png', 'Projet5.php'),
('Application de réservation de billets', 'Réservation de billets pour événements, voyages, avec paiement et gestion des réservations.', 'app', 'https://img.freepik.com/vecteurs-premium/reservez-concept-billet-bus-ligne-idee-voyage-tourisme-planification-du-voyage-ligne-achetez-ticket-bus-dans-application-illustration_277904-4913.jpg', 'Projet6.php');
