<?php	

/**
 * Je récupètre mon model
 */
require('models/articles.model.php');

if(isset($_GET['slug'])) {
	$article = getArticleBySlug($_GET['slug']);
}else{
	die('Cette page n\'éxiste pas');
}

if($article === false) {
	die('Aucun article n\'a été trouvé');
}


/**
 * J'affiche ma vue
 */
require('views/article_single.view.php');