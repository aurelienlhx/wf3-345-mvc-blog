<?php	

/**
 * Je récupètre mon model
 */
require('models/articles.model.php');

$articles = getAllArticles();

/**
 * J'affiche ma vue
 */
require('views/articles_list.view.php');