1. Description du Projet
Ce projet consiste à conteneuriser et déployer une application e-commerce développée en PHP avec une base de données MySQL, le tout initialement hébergé sur un environnement local WAMP. L'objectif est d'automatiser le processus de déploiement via Docker et GitLab CI/CD pour assurer un déploiement reproductible et performant.

2. Fonctionnalités
Gestion des utilisateurs (inscription, connexion, déconnexion).
Gestion des produits (ajout, modification, suppression).
Interface utilisateur intuitive et réactive.
Stockage des données dans MySQL.

3. Déploiement avec Docker
Structure des fichiers
Dockerfile : Décrit l'environnement pour l'application PHP.
docker-compose.yml : Configure les services nécessaires (application, base de données).
Code source : Hébergé dans le répertoire /var/www/html du conteneur.
Fichiers de configuration :
php.ini personnalisé pour PHP.
Scripts SQL pour l'initialisation de la base de données.
Conteneurs
App PHP : Basé sur une image PHP avec Apache (ex : php:8.3-apache).
Base de données : MySQL version 9.1.0.
Variables d'environnement
MYSQL_ROOT_PASSWORD : Mot de passe root pour MySQL.
MYSQL_DATABASE : Nom de la base de données.
MYSQL_USER : Utilisateur non-root.
MYSQL_PASSWORD : Mot de passe de l'utilisateur.

4. Pipeline CI/CD
Phases principales:
Build
Validation du Dockerfile.
Construction des conteneurs Docker.
Test
Tests unitaires PHP.
Vérification de la connexion à la base de données MySQL.
Deploy
Déploiement des conteneurs sur un environnement de staging ou de production.
Artifacts générés
Images Docker des conteneurs.
Rapports des tests.