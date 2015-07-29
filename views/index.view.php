
	<h1>The Movie Details</h1>
	<?php foreach ($details as $movie) : ?>
		<article>
			<h2>
				<a href="single.php?id=<?= $movie['movie_id'] ?>">
					<?= $movie['title']; ?>
				</a> 
			</h2>
			<div class="details"><?= $movie['description_intro'] ?></div>
		</article>
	<?php endforeach; ?>
