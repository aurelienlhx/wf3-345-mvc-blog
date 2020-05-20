<?php

/**
 * Connexion à la base de données
 */
require('inc/cnx.php');

/**
 * Récupérer tous les articles
 */
function getAllArticles() {
	global $pdo;
	$statement = $pdo->prepare('SELECT * FROM articles');
	$success = $statement->execute();
	
	if($success) {
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $results;
	}else{
		return false;
	}
}

/**
 * Récupérer un seul article
 */
function getArticleBySlug($slug) {
	global $pdo;
	$statement = $pdo->prepare('SELECT * FROM articles WHERE slug=:slug');
	
	$statement->bindParam(':slug',$slug);
	$success = $statement->execute();

	if($success) {
		$results = $statement->fetch(PDO::FETCH_ASSOC);
		return $results;
	}else{
		return false;
	}
}