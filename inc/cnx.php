<?php

// Connexion à la BDD
$pdo = new PDO(
	'mysql:host=localhost;dbname=blog-mvc', // driver mysql, nom du serveur, suivi du nom de la BDD
    'root', // login BDD
    'root', // mot de passe de la BDD (root pour mac, '' pour window)
   	array(
    	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // pour afficher les erreurs sql dans le navigateur
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' // définit le jeu de caractère des échanges avec la BDD
   	));