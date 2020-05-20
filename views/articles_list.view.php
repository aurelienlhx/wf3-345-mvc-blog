<html>
<head>
	<meta charset="UTF-8">
	<title>Mon blog</title>
</head>
<body>
	<header>
		<h1>Mon super blog</h1>
		<hr>
	</header>
	<main>
		<?php foreach($articles as $article): ?>
			<article>
				<h2><?php echo $article['titre']; ?></h2>
				<p>
					<?php echo nl2br($article['texte']); ?>
				</p>
				<time>
					<?php echo $article['date']; ?>
				</time>
				<p>
					<?php echo $article['auteur']; ?>
				</p>
			</article>

		<?php endforeach; ?>
	</main>
	<footer>
		<hr>
		Aurélien Lheureux
	</footer>
</body>
</html>